<?php
namespace DNDCampaignManagerAPI\Server;

use DNDCampaignManagerAPI\EndpointFactory;
use LunixREST\AccessControl\OneKeyAccessControl;
use LunixREST\APIResponse\RegisteredResponseFactory;
use LunixREST\Server\GenericRouter;
use LunixREST\Server\GenericServer;
use LunixREST\Throttle\NoThrottle;
use LunixRESTBasics\APIResponse\JSONResponseDataSerializer;

/**
 * A Server that uses OneKeyAccessControl, NoThrottle, and a JSON registered response factory, along with a passed in
 * EndpointFactory to handle requests
 * Class Server
 * @package DNDCampaignManagerAPI\Server
 */
class Server extends GenericServer
{
    public function __construct(string $apiKey, EndpointFactory $endpointFactory)
    {
        $accessControl = new OneKeyAccessControl($apiKey);
        $throttle = new NoThrottle();
        $responseFactory = new RegisteredResponseFactory([
            'application/json' => new JSONResponseDataSerializer()
        ]);
        $router = new GenericRouter($endpointFactory);

        parent::__construct($accessControl, $throttle, $responseFactory, $router);
    }
}
