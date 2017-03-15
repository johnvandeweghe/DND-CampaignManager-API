<?php
require "vendor/autoload.php";

use DNDCampaignManagerAPI\ManagerRepository\ConfigurationManagerRepository;
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
} catch(\DNDCampaignManagerAPI\Exceptions\InvalidConfigurationException $exception) {
    echo $exception->getMessage();
    exit(-1);
}

$accessControl = new OneKeyAccessControl($configuration->getApiKey());

$throttle = new NoThrottle();

$logger = new \Monolog\Logger("index", [
    new \Monolog\Handler\StreamHandler(fopen("php://stderr", 'w'))
]);

$responseFactory = new RegisteredResponseFactory([
    'application/json' => new JSONResponseDataSerializer()
]);

$managerRepository = new ConfigurationManagerRepository($configuration);

$endpointFactory = new \DNDCampaignManagerAPI\EndpointFactory($managerRepository, $logger);

$router = new GenericRouter($endpointFactory);
$server = new GenericServer($accessControl, $throttle, $responseFactory, $router);

$requestFactory = new BasicRequestFactory();

$httpServer = new HTTPServer($server, $requestFactory, $logger);

$serverRequest = \LunixRESTBasics\parseBodyAsJSON(GuzzleHttp\Psr7\ServerRequest::fromGlobals());

$response = $httpServer->handleRequest($serverRequest, new GuzzleHttp\Psr7\Response());

HTTPServer::dumpResponse($response);