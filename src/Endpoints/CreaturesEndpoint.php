<?php
namespace DNDCampaignManagerAPI\Endpoints;

use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\ResponseData\CreatureResponseData;
use DNDCampaignManagerAPI\ResponseData\CreaturesResponseData;
use Doctrine\Common\Persistence\ObjectManager;
use LunixREST\APIRequest\APIRequest;
use LunixREST\APIResponse\APIResponseData;
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
     */
    public function post(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function postAll(APIRequest $request): APIResponseData
    {
        $requestData = $request->getData();
        //TODO: Build creature Factory to build from $requestData
        $creature = new Creature();
        $this->getEntityManager()->persist($creature);
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function put(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function putAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function patch(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function patchAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }


    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function options(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function optionsAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function delete(APIRequest $request): APIResponseData
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function deleteAll(APIRequest $request): APIResponseData
    {
        throw new UnsupportedMethodException();
    }
}
