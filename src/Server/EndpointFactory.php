<?php
namespace DNDCampaignManagerAPI\Server;

use DNDCampaignManagerAPI\Configuration\Configuration;
use DNDCampaignManagerAPI\ManagerRegistry\ConfigurationManagerRegistry;
use DNDCampaignManagerAPI\Server\Endpoints\CreaturesEndpoint;
use DNDCampaignManagerAPI\Server\ResourceAPIResponseDataFactories\CreatureAPIResponseDataFactory;
use DNDCampaignManagerAPI\Server\ResourceParameterFactories\CreaturesParametersFactory;
use LunixREST\Server\Router\EndpointFactory\RegisteredEndpointFactory;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;

class EndpointFactory extends RegisteredEndpointFactory
{
    use LoggerAwareTrait;
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
        $this->logger = $logger;

        $this->register('creatures', 1, $this->getCreaturesEndpoint());
    }

    private function getCreaturesEndpoint(): CreaturesEndpoint {
        return new CreaturesEndpoint(
            new CreaturesParametersFactory(),
            new CreatureAPIResponseDataFactory(),
            $this->logger,
            $this->managerRepository
        );
    }
}
