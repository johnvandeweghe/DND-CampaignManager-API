<?php
namespace DNDCampaignManagerAPI\Server\Endpoints;

use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\EntityFactories\CreatureFactory;
use DNDCampaignManagerAPI\Server\ResourceParameterFactories\CreaturesParametersFactory;
use DNDCampaignManagerAPI\Server\ResourceParameters\CreatureParameters;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\ORMException;
use LunixREST\Server\Router\Endpoint\Exceptions\ElementConflictException;
use LunixREST\Server\Router\Endpoint\Exceptions\ElementNotFoundException;
use LunixREST\Server\Router\Endpoint\Exceptions\EndpointExecutionException;
use LunixREST\Server\Router\Endpoint\Exceptions\InvalidRequestException;
use LunixREST\Server\Router\Endpoint\Exceptions\UnsupportedMethodException;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceAPIResponseDataFactory;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceParameters;
use LunixRESTBasics\Endpoint\ManagerRegistryAwareTrait;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\Resource;

class CreaturesEndpoint extends ResourceEndpoint
{
    use LoggerAwareTrait;
    use ManagerRegistryAwareTrait;

    public function __construct(
        CreaturesParametersFactory $parametersFactory,
        ResourceAPIResponseDataFactory $APIResponseDataFactory,
        LoggerInterface $logger,
        ManagerRegistry $managerRegistry
    ) {
        parent::__construct($parametersFactory, $APIResponseDataFactory);

        $this->logger = $logger;
        $this->managerRegistry = $managerRegistry;
    }

    protected function getEntityManager(): ObjectManager
    {
        return $this->managerRegistry->getManager();
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    protected function getResource(ResourceParameters $parameters): Resource
    {
        /** @var CreatureParameters $parameters */
        $creatureId = $parameters->getId();
        if(!$creatureId) {
            //This should be unreachable, as this is only routed when an element is provided.
            throw new InvalidRequestException("Unable to lookup creature without ID");
        }

        $creature = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->find($creatureId);
        if(!$creature) {
            throw new ElementNotFoundException("Unable to find specified creature");
        }

        return $creature;
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource[]
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    protected function getResources(ResourceParameters $parameters): array
    {
        /**
         * @var $allCreatures Creature[]
         */
        $allCreatures = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->findAll();

        return $allCreatures;
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function postResource(ResourceParameters $parameters): Resource
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function postResources(ResourceParameters $parameters): Resource
    {
        /** @var CreatureParameters $parameters */
        $creatureFactory = new CreatureFactory();
        $creature = $creatureFactory->create($parameters);

        $this->getEntityManager()->persist($creature);

        try {
            $this->getEntityManager()->flush();
        } catch (ORMException $exception) {
            throw new EndpointExecutionException($exception->getMessage());
        }

        return $creature;
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function putResource(ResourceParameters $parameters): Resource
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters[] $parameters
     * @return Resource[]
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function putResources(array $parameters): array
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function patchResource(ResourceParameters $parameters): Resource
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters[] $parameters
     * @return Resource[]
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws ElementConflictException
     * @throws InvalidRequestException
     */
    protected function patchResources(array $parameters): array
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    protected function optionsResource(ResourceParameters $parameters): Resource
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters[] $parameters
     * @return Resource[]
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    protected function optionsResources(array $parameters): array
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource|null
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    protected function deleteResource(ResourceParameters $parameters): ?Resource
    {
        /** @var CreatureParameters $parameters */
        $creatureId = $parameters->getId();
        if(!$creatureId) {
            //This should be unreachable, as this is only routed when an element is provided.
            throw new InvalidRequestException("Unable to delete creature without ID");
        }

        $creature = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->find($creatureId);

        if(!$creature) {
            throw new ElementNotFoundException("Couldn't find a creature with ID=" . $creatureId);
        }

        $this->getEntityManager()->remove($creature);

        try {
            $this->getEntityManager()->flush();
        } catch(ORMException $exception) {
            throw new EndpointExecutionException($exception->getMessage());
        }

        return $creature;
    }

    /**
     * @param ResourceParameters $parameters
     * @return Resource[]|null
     * @throws EndpointExecutionException
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    protected function deleteResources(ResourceParameters $parameters): ?array
    {
        throw new UnsupportedMethodException();
    }
}
