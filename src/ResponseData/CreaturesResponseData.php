<?php
namespace DNDCampaignManagerAPI\ResponseData;

use LunixREST\APIResponse\APIResponseData;

class CreaturesResponseData extends APIResponseData
{
    /**
     * CreaturesResponseData constructor.
     * @param CreatureResponseData[] $creatureData
     */
    public function __construct(array $creatureData)
    {
        parent::__construct(array_map(function(CreatureResponseData $creatureResponseData){
            return $creatureResponseData->getData();
        }, $creatureData));
    }
}
