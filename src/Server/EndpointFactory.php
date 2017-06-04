<?php
namespace DNDCampaignManagerAPI\Endpoints;

use DNDCampaignManagerAPI\Configuration\Configuration;
use DNDCampaignManagerAPI\ManagerRegistry\ConfigurationManagerRegistry;
use LunixREST\Server\Router\Endpoint\Endpoint;
use LunixREST\Server\Router\EndpointFactory\Exceptions\UnableToCreateEndpointException;
use LunixREST\Server\Router\EndpointFactory\RegisteredEndpointFactory;
use LunixRESTBasics\Endpoint\ManagerRegistryEndpoint;
use Psr\Log\LoggerInterface;

class EndpointFactory implements \LunixREST\Server\Router\EndpointFactory\EndpointFactory
{
    protected $registeredEndpointFactory;
    protected $managerRepository;

    /**
     * EndpointFactory constructor.
     * @param Configuration $configuration
     * @param LoggerInterface $logger
     */
    public function __construct(Configuration $configuration, LoggerInterface $logger)
    {
        $this->managerRepository = new ConfigurationManagerRegistry($configuration);

        $this->registeredEndpointFactory = new RegisteredEndpointFactory();
        $this->registeredEndpointFactory->register('creatures', 1, $this->getCreaturesEndpoint());
    }

    private function getCreaturesEndpoint(): CreaturesEndpoint {
        return new CreaturesEndpoint(..., )
    }

    /**
     * @param string $version
     * @return string[]
     */
    public function getSupportedEndpoints(string $version): array
    {
        return $this->registeredEndpointFactory->getSupportedEndpoints($version);
    }

    /**
     * @param string $name
     * @param string $version
     * @return Endpoint
     * @throws UnableToCreateEndpointException
     */
    public function getEndpoint(string $name, string $version): Endpoint
    {
        return $this->registeredEndpointFactory->getEndpoint($name, $version);
    }
}
