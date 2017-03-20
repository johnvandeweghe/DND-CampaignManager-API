<?php
require "vendor/autoload.php";

use DNDCampaignManagerAPI\ManagerRepository\ConfigurationManagerRepository;

try {
    $configuration = new \DNDCampaignManagerAPI\Configuration\Configuration("config.ini");
} catch(\LunixREST\Configuration\Exceptions\INIParseException $exception) {
    echo "Unable to load/parse config.ini";
    exit(-1);
} catch(\DNDCampaignManagerAPI\Exceptions\InvalidConfigurationException $exception) {
    echo $exception->getMessage();
    exit(-1);
}

$logger = new \Monolog\Logger("index", [
    new \Monolog\Handler\StreamHandler(fopen("php://stderr", 'w'))
]);

$managerRepository = new ConfigurationManagerRepository($configuration);
$endpointFactory = new \DNDCampaignManagerAPI\Endpoints\EndpointFactory($managerRepository, $logger);
$server = new \DNDCampaignManagerAPI\Server\Server($configuration->getApiKey(), $endpointFactory);
$httpServer = new \DNDCampaignManagerAPI\Server\HTTPServer($server, $logger);

$serverRequest = \LunixRESTBasics\parseBodyAsJSON(GuzzleHttp\Psr7\ServerRequest::fromGlobals());

$response = $httpServer->handleRequest($serverRequest, new GuzzleHttp\Psr7\Response());

\LunixREST\Server\HTTPServer::dumpResponse($response);
