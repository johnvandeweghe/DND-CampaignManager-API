<?php
namespace DNDCampaignManagerAPI;

use DNDCampaignManagerAPI\Configuration\Configuration;
use LunixREST\GenericRouterGenericServerHTTPServer;
use LunixREST\JSONHTTPServer;
use LunixRESTBasics\APIRequest\RequestFactory\BasicRequestFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;

/**
 * An HTTPServer that uses a BasicRequestFactory
 * Class HTTPServer
 * @package DNDCampaignManagerAPI\Server
 */
class HTTPServer extends GenericRouterGenericServerHTTPServer
{
    public function __construct(Configuration $configuration, LoggerInterface $logger)
    {
        $requestFactory = new BasicRequestFactory();
        $server = new \DNDCampaignManagerAPI\Server\Server($configuration, $logger);

        parent::__construct($server, $requestFactory, $logger);
    }

    /**
     * @param ServerRequestInterface $serverRequest
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    public function handleRequest(ServerRequestInterface $serverRequest, ResponseInterface $response): ResponseInterface
    {
        $serverRequest = JSONHTTPServer::parseBodyAsJSON($serverRequest);
        return parent::handleRequest($serverRequest, $response);
    }
}
