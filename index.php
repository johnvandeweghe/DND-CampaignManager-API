<?php
require "vendor/autoload.php";

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

$httpServer = new \DNDCampaignManagerAPI\HTTPServer($configuration, $logger);

$serverRequest = GuzzleHttp\Psr7\ServerRequest::fromGlobals();

$response = $httpServer->handleRequest($serverRequest, new GuzzleHttp\Psr7\Response());

\LunixREST\HTTPServer::dumpResponse($response);
