<?php
namespace DNDCampaignManagerAPI\Server;

use DNDCampaignManagerAPI\Configuration\Configuration;
use LunixREST\Server\AccessControl\AllAccessKeyRepositoryAccessControl;
use LunixREST\Server\AccessControl\KeyRepository\ArrayKeyRepository;
use LunixREST\Server\GenericRouterGenericServer;
use LunixREST\Server\ResponseFactory\RegisteredResponseFactory;
use LunixREST\Server\Router\GenericRouter;
use LunixREST\Server\Throttle\NoThrottle;
use LunixRESTBasics\APIResponse\JSONResponseDataSerializer;
use Psr\Log\LoggerInterface;

/**
 * A Server that uses OneKeyAccessControl, NoThrottle, and a JSON registered response factory, along with a passed in
 * EndpointFactory to handle requests
 * Class Server
 * @package DNDCampaignManagerAPI\Server
 */
class Server extends GenericRouterGenericServer
{
    public function __construct(Configuration $configuration, LoggerInterface $logger)
    {
        $accessControl = new AllAccessKeyRepositoryAccessControl(new ArrayKeyRepository([$configuration->getApiKey()]));
        $throttle = new NoThrottle();
        $responseFactory = new RegisteredResponseFactory([
            'application/json' => new JSONResponseDataSerializer()
        ]);
        $endpointFactory = new \DNDCampaignManagerAPI\Endpoints\EndpointFactory($configuration, $logger);
        $router = new GenericRouter($endpointFactory);

        parent::__construct($accessControl, $throttle, $responseFactory, $router);
    }
}
