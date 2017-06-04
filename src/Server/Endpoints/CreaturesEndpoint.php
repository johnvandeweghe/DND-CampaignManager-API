<?php
namespace DNDCampaignManagerAPI\Endpoints;

use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\EntityFactories\CreatureFactory;
use DNDCampaignManagerAPI\ResponseData\CreatureResponseData;
use DNDCampaignManagerAPI\ResponseData\CreaturesResponseData;
use DNDCampaignManagerAPI\Server\ResourceParameterFactories\CreaturesParametersFactory;
use DNDCampaignManagerAPI\Server\ResourceParameters\CreatureParameters;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Common\Persistence\ObjectManager;
use LunixREST\Server\Router\Endpoint\Exceptions\ElementConflictException;
use LunixREST\Server\Router\Endpoint\Exceptions\ElementNotFoundException;
use LunixREST\Server\Router\Endpoint\Exceptions\EndpointExecutionException;
use LunixREST\Server\Router\Endpoint\Exceptions\InvalidRequestException;
use LunixREST\Server\Router\Endpoint\Exceptions\UnsupportedMethodException;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceAPIResponseDataFactory;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceParameters;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceParametersFactory;
use LunixRESTBasics\Endpoint\ManagerRegistryAwareTrait;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;

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
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function getAll(APIRequest $request): APIResponseData
    {
        /**
         * @var $allCreatures Creature[]
         */
        $allCreatures = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->findAll();

        return new CreaturesResponseData(array_map(function(Creature $creature){
            return new CreatureResponseData($creature);
        }, $allCreatures));
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function post(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function postAll(APIRequest $request): APIResponseData
    {
        $creatureFactory = new CreatureFactory();
        $creature = $creatureFactory->create($request->getData());

        $this->getEntityManager()->persist($creature);

        $this->getEntityManager()->flush();

        return new CreatureResponseData($creature);
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function put(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function putAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function patch(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function patchAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }


    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function options(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function optionsAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function delete(APIRequest $request): APIResponseData
    {
        /**
         * @var $allCreatures Creature
         */
        $creature = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->find($request->getElement());

        if(!$creature) {
            throw new ElementNotFoundException("Couldn't find a creature with ID=" . $request->getElement());
        }

        $this->getEntityManager()->remove($creature);

        $this->getEntityManager()->flush();

        return new CreatureResponseData($creature);
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws InvalidRequestException
     */
    public function deleteAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
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
        return $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->find($parameters->getId());
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
        // TODO: Implement getResources() method.
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
        // TODO: Implement postResource() method.
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
        // TODO: Implement postResources() method.
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
        // TODO: Implement putResource() method.
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
        // TODO: Implement putResources() method.
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
        // TODO: Implement patchResource() method.
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
        // TODO: Implement patchResources() method.
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
        // TODO: Implement optionsResource() method.
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
        // TODO: Implement optionsResources() method.
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
        // TODO: Implement deleteResource() method.
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
        // TODO: Implement deleteResources() method.
    }
}
