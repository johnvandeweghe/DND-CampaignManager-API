<?php
namespace DNDCampaignManagerAPI\ResponseData;

use DNDCampaignManagerAPI\Entities\Conditions;
use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\Entities\DamageTypes;
use DNDCampaignManagerAPI\Entities\Players;
use LunixREST\APIResponse\APIResponseData;

class CreatureResponseData extends APIResponseData
{
    public function __construct(Creature $creature)
    {
        parent::__construct(self::creatureToArrayData($creature));
    }

    protected static function creatureToArrayData(Creature $creature)
    {
        return [
            'id' => $creature->getId(),
            'name' => $creature->getName(),
            'appearance' => $creature->getAppearance(),
            'notes' => $creature->getNotes(),
            'race' => $creature->getRace(),
            'gender' => $creature->getGender(),
            'max_hit_points' => $creature->getMaxHitPoints(),
            'average_max_hit_points' => $creature->getAverageMaxHitPoints(),
            'constitution' => $creature->getConstitution(),
            'strength' => $creature->getStrength(),
            'dexterity' => $creature->getDexterity(),
            'intelligence' => $creature->getIntelligence(),
            'wisdom' => $creature->getWisdom(),
            'charisma' => $creature->getCharisma(),
            'proficiency_bonus' => $creature->getProficiencyBonus(),
            'size' => $creature->getSize(),
            'base_speed' => $creature->getBaseSpeed(),
            'burrow_speed' => $creature->getBurrowSpeed(),
            'climb_speed' => $creature->getClimbSpeed(),
            'fly_speed' => $creature->getFlySpeed(),
            'swim_speed' => $creature->getSwimSpeed(),
            'languages' => $creature->getLanguages(),
            'senses' => $creature->getSenses(),
            'constitution_saving_throw_modifier' => $creature->getConstitutionSavingThrowModifier(),
            'strength_saving_throw_modifier' => $creature->getStrengthSavingThrowModifier(),
            'dexterity_saving_throw_modifier' => $creature->getDexteritySavingThrowModifier(),
            'intelligence_saving_throw_modifier' => $creature->getIntelligenceSavingThrowModifier(),
            'wisdom_saving_throw_modifier' => $creature->getWisdomSavingThrowModifier(),
            'charisma_saving_throw_modifier' => $creature->getCharismaSavingThrowModifier(),
            'acrobatics_proficiency_modifier' => $creature->getAcrobaticsProficiencyModifier(),
            'arcana_proficiency_modifier' => $creature->getArcanaProficiencyModifier(),
            'athletics_proficiency_modifier' => $creature->getAthleticsProficiencyModifier(),
            'deception_proficiency_modifier' => $creature->getDeceptionProficiencyModifier(),
            'history_proficiency_modifier' => $creature->getHistoryProficiencyModifier(),
            'insight_proficiency_modifier' => $creature->getInsightProficiencyModifier(),
            'intimidation_proficiency_modifier' => $creature->getIntimidationProficiencyModifier(),
            'investigation_proficiency_modifier' => $creature->getInvestigationProficiencyModifier(),
            'medicine_proficiency_modifier' => $creature->getMedicineProficiencyModifier(),
            'nature_proficiency_modifier' => $creature->getNatureProficiencyModifier(),
            'perception_proficiency_modifier' => $creature->getPerceptionProficiencyModifier(),
            'performance_proficiency_modifier' => $creature->getPerformanceProficiencyModifier(),
            'persuasion_proficiency_modifier' => $creature->getPersuasionProficiencyModifier(),
            'religion_proficiency_modifier' => $creature->getReligionProficiencyModifier(),
            'slight_of_hand_proficiency_modifier' => $creature->getSlightOfHandProficiencyModifier(),
            'stealth_proficiency_modifier' => $creature->getStealthProficiencyModifier(),
            'survival_proficiency_modifier' => $creature->getSurvivalProficiencyModifier(),
            'special_traits' => $creature->getSpecialTraits(),
            'class_levels' => $creature->getClassLevels(),
            'type' => $creature->getType() ? $creature->getType()->getCreatureType() : null,
            'alignment' => $creature->getAlignment() ? $creature->getAlignment()->getAlignment() : null,
            'conditions' => array_map(function(Conditions $condition){
                return $condition->getCondition();
            }, $creature->getCondition()->toArray()),
            'damage_modifiers' => array_map(function(DamageTypes $damageType){
                return $damageType->getDamageType();
            }, $creature->getDamageType()->toArray()),
            'players' => array_map(function(Players $player){
                return $player->getId();
            }, $creature->getPlayer()->toArray()),
        ];
    }
}
