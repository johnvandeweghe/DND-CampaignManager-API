<?php
require "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use LunixREST\AccessControl\OneKeyAccessControl;
use LunixREST\APIResponse\RegisteredResponseFactory;
use LunixREST\Server\GenericRouter;
use LunixREST\Server\HTTPServer;
use LunixREST\Throttle\NoThrottle;
use LunixRESTBasics\APIRequest\RequestFactory\BasicRequestFactory;
use LunixREST\Server\GenericServer;
use LunixRESTBasics\APIResponse\JSONResponseDataSerializer;
use Psr\Log\NullLogger;

try {
    $configuration = new \DNDCampaignManagerAPI\Configuration("config.ini");
} catch(\LunixREST\Configuration\Exceptions\INIParseException $exception) {
    echo "Unable to load/parse config.ini";
    exit(-1);
} catch(\DNDCampaignManagerAPI\InvalidConfigurationException $exception) {
    echo $exception->getMessage();
    exit(-1);
}

$accessControl = new OneKeyAccessControl($configuration->getApiKey());

$throttle = new NoThrottle();

$responseFactory = new RegisteredResponseFactory([
    'application/json' => new JSONResponseDataSerializer()
]);

$paths = ["src/Entities"];

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => $configuration->getDbUser(),
    'password' => $configuration->getDbPassword(),
    'dbname'   => $configuration->getDbDatabase(),
);

$config = Setup::createAnnotationMetadataConfiguration($paths);
$entityManager = EntityManager::create($dbParams, $config);

$managerRepository = new \DNDCampaignManagerAPI\ArrayManagerRepository("default", [
        "default" => $entityManager->getConnection()
    ], [
        "default" => $entityManager
    ], "default", "default");

$endpointFactory = new \DNDCampaignManagerAPI\EndpointFactory($managerRepository, new NullLogger());

$router = new GenericRouter($endpointFactory);
$server = new GenericServer($accessControl, $throttle, $responseFactory, $router);

$requestFactory = new BasicRequestFactory();

$httpServer = new HTTPServer($server, $requestFactory, new NullLogger());

$serverRequest = \LunixRESTBasics\parseBodyAsJSON(GuzzleHttp\Psr7\ServerRequest::fromGlobals());

$response = $httpServer->handleRequest($serverRequest, new GuzzleHttp\Psr7\Response());

HTTPServer::dumpResponse($response);
