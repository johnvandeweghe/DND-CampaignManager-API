<?php
namespace DNDCampaignManagerAPI\Endpoints;

use DNDCampaignManagerAPI\Endpoints\CreaturesEndpoint;
use Doctrine\Common\Persistence\ManagerRegistry;
use LunixREST\Endpoint\RegisteredEndpointFactory;
use LunixRESTBasics\Endpoint\ManagerRegistryEndpoint;
use LunixRESTBasics\Endpoint\ManagerRegistryEndpointFactory;
use Psr\Log\LoggerInterface;

class EndpointFactory extends ManagerRegistryEndpointFactory
{
    protected $registeredEndpointFactory;

    /**
     * EndpointFactory constructor.
     * @param ManagerRegistry $managerRegistry
     * @param LoggerInterface $logger
     */
    public function __construct(ManagerRegistry $managerRegistry, LoggerInterface $logger)
    {
        parent::__construct($managerRegistry, $logger);

        $this->registeredEndpointFactory = new RegisteredEndpointFactory();
        $this->registeredEndpointFactory->register('creatures', 1, new CreaturesEndpoint());
    }

    /**
     * @param string $version
     * @return string[]
     */
    public function getSupportedEndpoints(string $version): array
    {
        $this->registeredEndpointFactory->getSupportedEndpoints($version);
    }

    /**
     * @param string $name
     * @param string $version
     * @return ManagerRegistryEndpoint
     */
    protected function getManagerRegistryEndpoint(string $name, string $version): ManagerRegistryEndpoint
    {
        /**
         * This is allowed to be set because within this class we guarantee the only type of
         * endpoint to be entered into the registry to be correct.
         * @var $endpoint ManagerRegistryEndpoint
         */
        $endpoint = $this->registeredEndpointFactory->getEndpoint($name, $version);
        return $endpoint;
    }
}
