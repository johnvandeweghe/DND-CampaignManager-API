<?php
namespace DNDCampaignManagerAPI\EntityFactories;

use DNDCampaignManagerAPI\Entities\Creature;
use DNDCampaignManagerAPI\Server\ResourceParameters\CreatureParameters;

class CreatureFactory
{
    public function create(CreatureParameters $creatureParameters): Creature
    {
        $this->validateRequiredFields($creatureParameters);

        $creature = new Creature();
        $creature->setName($creatureParameters->getName());
        $creature->setAppearance($creatureParameters->getAppearance() ?? "");
        $creature->setNotes($creatureParameters->getNotes() ?? "");
        $creature->setRace($creatureParameters->getRace() ?? "");
        $creature->setGender($creatureParameters->getGender() ?? "");
        $creature->setMaxHitPoints($creatureParameters->getMaxHitPoints() ?? 1);
        $creature->setAverageMaxHitPoints($creatureParameters->getAverageMaxHitPoints() ?? "1");
        $creature->setConstitution($creatureParameters->getConstitution() ?? 10);
        $creature->setStrength($creatureParameters->getStrength() ?? 10);
        $creature->setDexterity($creatureParameters->getDexterity() ?? 10);
        $creature->setIntelligence($creatureParameters->getIntelligence() ?? 10);
        $creature->setWisdom($creatureParameters->getWisdom() ?? 10);
        $creature->setCharisma($creatureParameters->getCharisma() ?? 10);
        $creature->setProficiencyBonus($creatureParameters->getProficiencyBonus() ?? 2);
        $creature->setSize($creatureParameters->getsize() ?? "medium");
        $creature->setBaseSpeed($creatureParameters->getBaseSpeed() ?? 30);
        $creature->setBurrowSpeed($creatureParameters->getBurrowSpeed() ?? 0);
        $creature->setClimbSpeed($creatureParameters->getClimbSpeed() ?? 15);
        $creature->setFlySpeed($creatureParameters->getFlySpeed() ?? 0);
        $creature->setSwimSpeed($creatureParameters->getSwimSpeed() ?? 15);
        $creature->setLanguages($creatureParameters->getLanguages() ?? "Common");
        $creature->setSenses($creatureParameters->getSenses() ?? "");
        $creature->setConstitutionSavingThrowModifier($creatureParameters->getConstitutionSavingThrowModifier() ?? 0);
        $creature->setStrengthSavingThrowModifier($creatureParameters->getStrengthSavingThrowModifier() ?? 0);
        $creature->setDexteritySavingThrowModifier($creatureParameters->getDexteritySavingThrowModifier() ?? 0);
        $creature->setIntelligenceSavingThrowModifier($creatureParameters->getIntelligenceSavingThrowModifier() ?? 0);
        $creature->setWisdomSavingThrowModifier($creatureParameters->getWisdomSavingThrowModifier() ?? 0);
        $creature->setCharismaSavingThrowModifier($creatureParameters->getCharismaSavingThrowModifier() ?? 0);
        $creature->setAcrobaticsProficiencyModifier($creatureParameters->getAcrobaticsProficiencyModifier() ?? 0);
        $creature->setArcanaProficiencyModifier($creatureParameters->getArcanaProficiencyModifier() ?? 0);
        $creature->setAthleticsProficiencyModifier($creatureParameters->getAthleticsProficiencyModifier() ?? 0);
        $creature->setDeceptionProficiencyModifier($creatureParameters->getDeceptionProficiencyModifier() ?? 0);
        $creature->setHistoryProficiencyModifier($creatureParameters->getHistoryProficiencyModifier() ?? 0);
        $creature->setInsightProficiencyModifier($creatureParameters->getInsightProficiencyModifier() ?? 0);
        $creature->setIntimidationProficiencyModifier($creatureParameters->getIntimidationProficiencyModifier() ?? 0);
        $creature->setInvestigationProficiencyModifier($creatureParameters->getInvestigationProficiencyModifier() ?? 0);
        $creature->setMedicineProficiencyModifier($creatureParameters->getMedicineProficiencyModifier() ?? 0);
        $creature->setNatureProficiencyModifier($creatureParameters->getNatureProficiencyModifier() ?? 0);
        $creature->setPerceptionProficiencyModifier($creatureParameters->getPerceptionProficiencyModifier() ?? 0);
        $creature->setPerformanceProficiencyModifier($creatureParameters->getPerformanceProficiencyModifier() ?? 0);
        $creature->setPersuasionProficiencyModifier($creatureParameters->getPersuasionProficiencyModifier() ?? 0);
        $creature->setReligionProficiencyModifier($creatureParameters->getReligionProficiencyModifier() ?? 0);
        $creature->setSlightOfHandProficiencyModifier($creatureParameters->getSlightOfHandProficiencyModifier() ?? 0);
        $creature->setStealthProficiencyModifier($creatureParameters->getStealthProficiencyModifier() ?? 0);
        $creature->setSurvivalProficiencyModifier($creatureParameters->getSurvivalProficiencyModifier() ?? 0);
        $creature->setSpecialTraits($creatureParameters->getSpecialTraits() ?? "");
        $creature->setClassLevels($creatureParameters->getClassLevels() ?? "");

        return $creature;
    }

    protected function validateRequiredFields(CreatureParameters $creatureParameters): void
    {
        if($creatureParameters->getName() === null) {
            throw new \InvalidArgumentException("The field name is required on a Creature");
        }
    }
}
