<?php
namespace DNDCampaignManagerAPI\Endpoints;

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
        // TODO: Implement get() method.
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function getAll(APIRequest $request): APIResponseData
    {
        $allCreatures = $this->getEntityManager()->getRepository("Creatures")->findAll();
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function post(APIRequest $request): APIResponseData
    {
        // TODO: Implement post() method.
    }

    /**
     * @param APIRequest $request
     * @return APIResponseData
     * @throws UnsupportedMethodException
     */
    public function postAll(APIRequest $request): APIResponseData
    {
        // TODO: Implement postAll() method.
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
