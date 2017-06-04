<?php
namespace DNDCampaignManagerAPI\Server\ResourceAPIResponseDataFactories;

use DNDCampaignManagerAPI\Entities\Conditions;
use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\Entities\DamageTypes;
use DNDCampaignManagerAPI\Entities\Players;
use LunixREST\Server\APIResponse\APIResponseData;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\Exceptions\UnableToCreateAPIResponseDataException;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceAPIResponseDataFactory;
use LunixREST\Server\Router\Endpoint\ResourceEndpoint\Resource;

class CreatureAPIResponseDataFactory extends ResourceAPIResponseDataFactory
{

    /**
     * @param null|Resource $resource
     * @return APIResponseData
     * @throws UnableToCreateAPIResponseDataException
     */
    public function toAPIResponseData(?Resource $resource): APIResponseData
    {
        if($resource === null) {
            return new APIResponseData([]);
        }

        if(!($resource instanceof Creature)) {
            throw new UnableToCreateAPIResponseDataException("Only able to understand Creatures");
        }

        /** @var Creature $resource */
        $data = [
            'id' => $resource->getId(),
            'name' => $resource->getName(),
            'appearance' => $resource->getAppearance(),
            'notes' => $resource->getNotes(),
            'race' => $resource->getRace(),
            'gender' => $resource->getGender(),
            'max_hit_points' => $resource->getMaxHitPoints(),
            'average_max_hit_points' => $resource->getAverageMaxHitPoints(),
            'constitution' => $resource->getConstitution(),
            'strength' => $resource->getStrength(),
            'dexterity' => $resource->getDexterity(),
            'intelligence' => $resource->getIntelligence(),
            'wisdom' => $resource->getWisdom(),
            'charisma' => $resource->getCharisma(),
            'proficiency_bonus' => $resource->getProficiencyBonus(),
            'size' => $resource->getSize(),
            'base_speed' => $resource->getBaseSpeed(),
            'burrow_speed' => $resource->getBurrowSpeed(),
            'climb_speed' => $resource->getClimbSpeed(),
            'fly_speed' => $resource->getFlySpeed(),
            'swim_speed' => $resource->getSwimSpeed(),
            'languages' => $resource->getLanguages(),
            'senses' => $resource->getSenses(),
            'constitution_saving_throw_modifier' => $resource->getConstitutionSavingThrowModifier(),
            'strength_saving_throw_modifier' => $resource->getStrengthSavingThrowModifier(),
            'dexterity_saving_throw_modifier' => $resource->getDexteritySavingThrowModifier(),
            'intelligence_saving_throw_modifier' => $resource->getIntelligenceSavingThrowModifier(),
            'wisdom_saving_throw_modifier' => $resource->getWisdomSavingThrowModifier(),
            'charisma_saving_throw_modifier' => $resource->getCharismaSavingThrowModifier(),
            'acrobatics_proficiency_modifier' => $resource->getAcrobaticsProficiencyModifier(),
            'arcana_proficiency_modifier' => $resource->getArcanaProficiencyModifier(),
            'athletics_proficiency_modifier' => $resource->getAthleticsProficiencyModifier(),
            'deception_proficiency_modifier' => $resource->getDeceptionProficiencyModifier(),
            'history_proficiency_modifier' => $resource->getHistoryProficiencyModifier(),
            'insight_proficiency_modifier' => $resource->getInsightProficiencyModifier(),
            'intimidation_proficiency_modifier' => $resource->getIntimidationProficiencyModifier(),
            'investigation_proficiency_modifier' => $resource->getInvestigationProficiencyModifier(),
            'medicine_proficiency_modifier' => $resource->getMedicineProficiencyModifier(),
            'nature_proficiency_modifier' => $resource->getNatureProficiencyModifier(),
            'perception_proficiency_modifier' => $resource->getPerceptionProficiencyModifier(),
            'performance_proficiency_modifier' => $resource->getPerformanceProficiencyModifier(),
            'persuasion_proficiency_modifier' => $resource->getPersuasionProficiencyModifier(),
            'religion_proficiency_modifier' => $resource->getReligionProficiencyModifier(),
            'slight_of_hand_proficiency_modifier' => $resource->getSlightOfHandProficiencyModifier(),
            'stealth_proficiency_modifier' => $resource->getStealthProficiencyModifier(),
            'survival_proficiency_modifier' => $resource->getSurvivalProficiencyModifier(),
            'special_traits' => $resource->getSpecialTraits(),
            'class_levels' => $resource->getClassLevels(),
            'type' => $resource->getType() ? $resource->getType()->getCreatureType() : null,
            'alignment' => $resource->getAlignment() ? $resource->getAlignment()->getAlignment() : null,
            'conditions' => array_map(function(Conditions $condition){
                return $condition->getCondition();
            }, $resource->getCondition()->toArray()),
            'damage_modifiers' => array_map(function(DamageTypes $damageType){
                return $damageType->getDamageType();
            }, $resource->getDamageType()->toArray()),
            'players' => array_map(function(Players $player){
                return $player->getId();
            }, $resource->getPlayer()->toArray()),
        ];

        return new APIResponseData($data);
    }
}
