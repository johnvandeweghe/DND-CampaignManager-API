<?php
namespace DNDCampaignManagerAPI\Server;

use LunixREST\Server\Server;
use LunixRESTBasics\APIRequest\RequestFactory\BasicRequestFactory;
use Psr\Log\LoggerInterface;

/**
 * An HTTPServer that uses a BasicRequestFactory
 * Class HTTPServer
 * @package DNDCampaignManagerAPI\Server
 */
class HTTPServer extends \LunixREST\Server\HTTPServer
{
    public function __construct(Server $server, LoggerInterface $logger)
    {
        $requestFactory = new BasicRequestFactory();

        parent::__construct($server, $requestFactory, $logger);
    }
}
