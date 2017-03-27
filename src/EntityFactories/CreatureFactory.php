<?php
namespace DNDCampaignManagerAPI\EntityFactories;

use DNDCampaignManagerAPI\Entities\Creature;

class CreatureFactory
{
    public function create($requestData): Creature
    {
        $this->validateRequiredFields($requestData);

        $creature = new Creature();
        $creature->setName($requestData["name"]);
        $creature->setAppearance($requestData["appearance"] ?? "");
        $creature->setNotes($requestData["notes"] ?? "");
        $creature->setRace($requestData["race"] ?? "");
        $creature->setGender($requestData["gender"] ?? "");
        $creature->setMaxHitPoints($requestData["max_hit_points"] ?? 1);
        $creature->setAverageMaxHitPoints($requestData["average_max_hit_points"] ?? "1");
        $creature->setConstitution($requestData["constitution"] ?? 10);
        $creature->setStrength($requestData["strength"] ?? 10);
        $creature->setDexterity($requestData["dexterity"] ?? 10);
        $creature->setIntelligence($requestData["intelligence"] ?? 10);
        $creature->setWisdom($requestData["wisdom"] ?? 10);
        $creature->setCharisma($requestData["charisma"] ?? 10);
        $creature->setProficiencyBonus($requestData["proficiency_bonus"] ?? 2);
        $creature->setSize($requestData["size"] ?? "medium");
        $creature->setBaseSpeed($requestData["base_speed"] ?? 30);
        $creature->setBurrowSpeed($requestData["burrow_speed"] ?? 0);
        $creature->setClimbSpeed($requestData["climb_speed"] ?? 15);
        $creature->setFlySpeed($requestData["fly_speed"] ?? 0);
        $creature->setSwimSpeed($requestData["swim_speed"] ?? 15);
        $creature->setLanguages($requestData["languages"] ?? "Common");
        $creature->setSenses($requestData["senses"] ?? "");
        $creature->setConstitutionSavingThrowModifier($requestData["constitution_saving_throw_modifier"] ?? 0);
        $creature->setStrengthSavingThrowModifier($requestData["strength_saving_throw_modifier"] ?? 0);
        $creature->setDexteritySavingThrowModifier($requestData["dexterity_saving_throw_modifier"] ?? 0);
        $creature->setIntelligenceSavingThrowModifier($requestData["intelligence_saving_throw_modifier"] ?? 0);
        $creature->setWisdomSavingThrowModifier($requestData["wisdom_saving_throw_modifier"] ?? 0);
        $creature->setCharismaSavingThrowModifier($requestData["charisma_saving_throw_modifier"] ?? 0);
        $creature->setAcrobaticsProficiencyModifier($requestData["acrobatics_proficiency_modifier"] ?? 0);
        $creature->setArcanaProficiencyModifier($requestData["arcana_proficiency_modifier"] ?? 0);
        $creature->setAthleticsProficiencyModifier($requestData["athletics_proficiency_modifier"] ?? 0);
        $creature->setDeceptionProficiencyModifier($requestData["deception_proficiency_modifier"] ?? 0);
        $creature->setHistoryProficiencyModifier($requestData["history_proficiency_modifier"] ?? 0);
        $creature->setInsightProficiencyModifier($requestData["insight_proficiency_modifier"] ?? 0);
        $creature->setIntimidationProficiencyModifier($requestData["intimidation_proficiency_modifier"] ?? 0);
        $creature->setInvestigationProficiencyModifier($requestData["investigation_proficiency_modifier"] ?? 0);
        $creature->setMedicineProficiencyModifier($requestData["medicine_proficiency_modifier"] ?? 0);
        $creature->setNatureProficiencyModifier($requestData["nature_proficiency_modifier"] ?? 0);
        $creature->setPerceptionProficiencyModifier($requestData["perception_proficiency_modifier"] ?? 0);
        $creature->setPerformanceProficiencyModifier($requestData["performance_proficiency_modifier"] ?? 0);
        $creature->setPersuasionProficiencyModifier($requestData["persuasion_proficiency_modifier"] ?? 0);
        $creature->setReligionProficiencyModifier($requestData["religion_proficiency_modifier"] ?? 0);
        $creature->setSlightOfHandProficiencyModifier($requestData["slight_of_hand_proficiency_modifier"] ?? 0);
        $creature->setStealthProficiencyModifier($requestData["stealth_proficiency_modifier"] ?? 0);
        $creature->setSurvivalProficiencyModifier($requestData["survival_proficiency_modifier"] ?? 0);
        $creature->setSpecialTraits($requestData["special_traits"] ?? "");
        $creature->setClassLevels($requestData["class_levels"] ?? "");
        //$creature->setType($requestData["type"] ?? null);
        //$creature->setAlignment($requestData["alignment"] ?? null);
//        $creature->setCondition($requestData["conditions"] ?? []);
//        $creature->setDamageType($requestData["damage_modifiers"] ?? []);
//        $creature->setPl($requestData["players"] ?? []);

        return $creature;
    }

    protected function validateRequiredFields($requestData): void
    {
        if(!is_array($requestData)) {
            throw new \InvalidArgumentException("Request data should represent a creature");
        }

        $requiredFields = [
            'name'
        ];

        foreach($requiredFields as $requiredField) {
            if(!isset($requestData[$requiredField])) {
                throw new \InvalidArgumentException("The field $requiredField is required on a Creature");
            }
        }
    }
}
