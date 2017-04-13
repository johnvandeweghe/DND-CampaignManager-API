<?php
namespace DNDCampaignManagerAPI\Server;

use LunixREST\Server\JSONHTTPServer;
use LunixREST\Server\Server;
use LunixRESTBasics\APIRequest\RequestFactory\BasicRequestFactory;
use Psr\Log\LoggerInterface;

/**
 * An HTTPServer that uses a BasicRequestFactory
 * Class HTTPServer
 * @package DNDCampaignManagerAPI\Server
 */
class HTTPServer extends JSONHTTPServer
{
    public function __construct(Server $server, LoggerInterface $logger)
    {
        $requestFactory = new BasicRequestFactory();

        parent::__construct($server, $requestFactory, $logger);
    }
}
