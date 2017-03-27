<?php
namespace DNDCampaignManagerAPI\Endpoints;

use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\EntityFactories\CreatureFactory;
use DNDCampaignManagerAPI\ResponseData\CreatureResponseData;
use DNDCampaignManagerAPI\ResponseData\CreaturesResponseData;
use Doctrine\Common\Persistence\ObjectManager;
use LunixREST\APIRequest\APIRequest;
use LunixREST\APIResponse\APIResponseData;
use LunixREST\Endpoint\Exceptions\ElementNotFoundException;
use LunixREST\Endpoint\Exceptions\InvalidRequestException;
use LunixREST\Endpoint\Exceptions\UnsupportedMethodException;
use LunixRESTBasics\Endpoint\ManagerRegistryEndpoint;

class CreaturesEndpoint extends ManagerRegistryEndpoint
{
    protected function getEntityManager(): ObjectManager
    {
        return $this->managerRegistry->getManager();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     * @throws ElementNotFoundException
     * @throws InvalidRequestException
     */
    public function get(APIRequest $request): APIResponseData
    {
        /**
         * @var $allCreatures Creature
         */
        $creature = $this->getEntityManager()->getRepository('\DNDCampaignManagerAPI\Entities\Creature')->find($request->getElement());

        return new CreatureResponseData($creature);
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
}
