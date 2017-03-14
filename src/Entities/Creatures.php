<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Creatures
 *
 * @ORM\Entity
 * @ORM\Table(name="creatures", indexes={@ORM\Index(name="type", columns={"type"}), @ORM\Index(name="alignment", columns={"alignment"})})
 */
class Creatures extends Entries
{
    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=32, nullable=true)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=16, nullable=true)
     */
    private $gender;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_hit_points", type="integer", nullable=true)
     */
    private $maxHitPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="average_max_hit_points", type="string", length=32, nullable=true)
     */
    private $averageMaxHitPoints;

    /**
     * @var integer
     *
     * @ORM\Column(name="constitution", type="integer", nullable=true)
     */
    private $constitution;

    /**
     * @var integer
     *
     * @ORM\Column(name="strength", type="integer", nullable=true)
     */
    private $strength;

    /**
     * @var integer
     *
     * @ORM\Column(name="dexterity", type="integer", nullable=true)
     */
    private $dexterity;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="wisdom", type="integer", nullable=true)
     */
    private $wisdom;

    /**
     * @var integer
     *
     * @ORM\Column(name="charisma", type="integer", nullable=true)
     */
    private $charisma;

    /**
     * @var integer
     *
     * @ORM\Column(name="proficiency_bonus", type="integer", nullable=true)
     */
    private $proficiencyBonus = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=16, nullable=true)
     */
    private $size = 'medium';

    /**
     * @var integer
     *
     * @ORM\Column(name="base_speed", type="integer", nullable=true)
     */
    private $baseSpeed = '30';

    /**
     * @var integer
     *
     * @ORM\Column(name="burrow_speed", type="integer", nullable=true)
     */
    private $burrowSpeed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="climb_speed", type="integer", nullable=true)
     */
    private $climbSpeed = '15';

    /**
     * @var integer
     *
     * @ORM\Column(name="fly_speed", type="integer", nullable=true)
     */
    private $flySpeed = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="swim_speed", type="integer", nullable=true)
     */
    private $swimSpeed = '15';

    /**
     * @var string
     *
     * @ORM\Column(name="languages", type="string", length=128, nullable=true)
     */
    private $languages = '';

    /**
     * @var string
     *
     * @ORM\Column(name="senses", type="string", length=128, nullable=true)
     */
    private $senses = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="constitution_saving_throw_modifier", type="integer", nullable=true)
     */
    private $constitutionSavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="strength_saving_throw_modifier", type="integer", nullable=true)
     */
    private $strengthSavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dexterity_saving_throw_modifier", type="integer", nullable=true)
     */
    private $dexteritySavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence_saving_throw_modifier", type="integer", nullable=true)
     */
    private $intelligenceSavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="wisdom_saving_throw_modifier", type="integer", nullable=true)
     */
    private $wisdomSavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="charisma_saving_throw_modifier", type="integer", nullable=true)
     */
    private $charismaSavingThrowModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="acrobatics_proficiency_modifier", type="integer", nullable=true)
     */
    private $acrobaticsProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="arcana_proficiency_modifier", type="integer", nullable=true)
     */
    private $arcanaProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="athletics_proficiency_modifier", type="integer", nullable=true)
     */
    private $athleticsProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="deception_proficiency_modifier", type="integer", nullable=true)
     */
    private $deceptionProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="history_proficiency_modifier", type="integer", nullable=true)
     */
    private $historyProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="insight_proficiency_modifier", type="integer", nullable=true)
     */
    private $insightProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="intimidation_proficiency_modifier", type="integer", nullable=true)
     */
    private $intimidationProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="investigation_proficiency_modifier", type="integer", nullable=true)
     */
    private $investigationProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="medicine_proficiency_modifier", type="integer", nullable=true)
     */
    private $medicineProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="nature_proficiency_modifier", type="integer", nullable=true)
     */
    private $natureProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="perception_proficiency_modifier", type="integer", nullable=true)
     */
    private $perceptionProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="performance_proficiency_modifier", type="integer", nullable=true)
     */
    private $performanceProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="persuasion_proficiency_modifier", type="integer", nullable=true)
     */
    private $persuasionProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="religion_proficiency_modifier", type="integer", nullable=true)
     */
    private $religionProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="slight_of_hand_proficiency_modifier", type="integer", nullable=true)
     */
    private $slightOfHandProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="stealth_proficiency_modifier", type="integer", nullable=true)
     */
    private $stealthProficiencyModifier = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="survival_proficiency_modifier", type="integer", nullable=true)
     */
    private $survivalProficiencyModifier = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="special_traits", type="text", length=65535, nullable=true)
     */
    private $specialTraits;

    /**
     * @var string
     *
     * @ORM\Column(name="class_levels", type="string", length=128, nullable=true)
     */
    private $classLevels = '';

    /**
     * @var \DNDCampaignManagerAPI\Entities\CreatureTypes
     *
     * @ORM\ManyToOne(targetEntity="DNDCampaignManagerAPI\Entities\CreatureTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type", referencedColumnName="creature_type")
     * })
     */
    private $type;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Alignments
     *
     * @ORM\ManyToOne(targetEntity="DNDCampaignManagerAPI\Entities\Alignments")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alignment", referencedColumnName="alignment")
     * })
     */
    private $alignment;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\Conditions", inversedBy="creatureEntry")
     * @ORM\JoinTable(name="creature_condition_immunities",
     *   joinColumns={
     *     @ORM\JoinColumn(name="creature_entry_id", referencedColumnName="entry_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="condition", referencedColumnName="condition")
     *   }
     * )
     */
    private $condition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\DamageTypes", inversedBy="creatureEntry")
     * @ORM\JoinTable(name="creature_damage_type_modifiers",
     *   joinColumns={
     *     @ORM\JoinColumn(name="creature_entry_id", referencedColumnName="entry_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="damage_type", referencedColumnName="damage_type")
     *   }
     * )
     */
    private $damageType;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->condition = new \Doctrine\Common\Collections\ArrayCollection();
        $this->damageType = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return Creatures
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Creatures
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set maxHitPoints
     *
     * @param integer $maxHitPoints
     *
     * @return Creatures
     */
    public function setMaxHitPoints($maxHitPoints)
    {
        $this->maxHitPoints = $maxHitPoints;

        return $this;
    }

    /**
     * Get maxHitPoints
     *
     * @return integer
     */
    public function getMaxHitPoints()
    {
        return $this->maxHitPoints;
    }

    /**
     * Set averageMaxHitPoints
     *
     * @param string $averageMaxHitPoints
     *
     * @return Creatures
     */
    public function setAverageMaxHitPoints($averageMaxHitPoints)
    {
        $this->averageMaxHitPoints = $averageMaxHitPoints;

        return $this;
    }

    /**
     * Get averageMaxHitPoints
     *
     * @return string
     */
    public function getAverageMaxHitPoints()
    {
        return $this->averageMaxHitPoints;
    }

    /**
     * Set constitution
     *
     * @param integer $constitution
     *
     * @return Creatures
     */
    public function setConstitution($constitution)
    {
        $this->constitution = $constitution;

        return $this;
    }

    /**
     * Get constitution
     *
     * @return integer
     */
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     *
     * @return Creatures
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set dexterity
     *
     * @param integer $dexterity
     *
     * @return Creatures
     */
    public function setDexterity($dexterity)
    {
        $this->dexterity = $dexterity;

        return $this;
    }

    /**
     * Get dexterity
     *
     * @return integer
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Creatures
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set wisdom
     *
     * @param integer $wisdom
     *
     * @return Creatures
     */
    public function setWisdom($wisdom)
    {
        $this->wisdom = $wisdom;

        return $this;
    }

    /**
     * Get wisdom
     *
     * @return integer
     */
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * Set charisma
     *
     * @param integer $charisma
     *
     * @return Creatures
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;

        return $this;
    }

    /**
     * Get charisma
     *
     * @return integer
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * Set proficiencyBonus
     *
     * @param integer $proficiencyBonus
     *
     * @return Creatures
     */
    public function setProficiencyBonus($proficiencyBonus)
    {
        $this->proficiencyBonus = $proficiencyBonus;

        return $this;
    }

    /**
     * Get proficiencyBonus
     *
     * @return integer
     */
    public function getProficiencyBonus()
    {
        return $this->proficiencyBonus;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Creatures
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set baseSpeed
     *
     * @param integer $baseSpeed
     *
     * @return Creatures
     */
    public function setBaseSpeed($baseSpeed)
    {
        $this->baseSpeed = $baseSpeed;

        return $this;
    }

    /**
     * Get baseSpeed
     *
     * @return integer
     */
    public function getBaseSpeed()
    {
        return $this->baseSpeed;
    }

    /**
     * Set burrowSpeed
     *
     * @param integer $burrowSpeed
     *
     * @return Creatures
     */
    public function setBurrowSpeed($burrowSpeed)
    {
        $this->burrowSpeed = $burrowSpeed;

        return $this;
    }

    /**
     * Get burrowSpeed
     *
     * @return integer
     */
    public function getBurrowSpeed()
    {
        return $this->burrowSpeed;
    }

    /**
     * Set climbSpeed
     *
     * @param integer $climbSpeed
     *
     * @return Creatures
     */
    public function setClimbSpeed($climbSpeed)
    {
        $this->climbSpeed = $climbSpeed;

        return $this;
    }

    /**
     * Get climbSpeed
     *
     * @return integer
     */
    public function getClimbSpeed()
    {
        return $this->climbSpeed;
    }

    /**
     * Set flySpeed
     *
     * @param integer $flySpeed
     *
     * @return Creatures
     */
    public function setFlySpeed($flySpeed)
    {
        $this->flySpeed = $flySpeed;

        return $this;
    }

    /**
     * Get flySpeed
     *
     * @return integer
     */
    public function getFlySpeed()
    {
        return $this->flySpeed;
    }

    /**
     * Set swimSpeed
     *
     * @param integer $swimSpeed
     *
     * @return Creatures
     */
    public function setSwimSpeed($swimSpeed)
    {
        $this->swimSpeed = $swimSpeed;

        return $this;
    }

    /**
     * Get swimSpeed
     *
     * @return integer
     */
    public function getSwimSpeed()
    {
        return $this->swimSpeed;
    }

    /**
     * Set languages
     *
     * @param string $languages
     *
     * @return Creatures
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set senses
     *
     * @param string $senses
     *
     * @return Creatures
     */
    public function setSenses($senses)
    {
        $this->senses = $senses;

        return $this;
    }

    /**
     * Get senses
     *
     * @return string
     */
    public function getSenses()
    {
        return $this->senses;
    }

    /**
     * Set constitutionSavingThrowModifier
     *
     * @param integer $constitutionSavingThrowModifier
     *
     * @return Creatures
     */
    public function setConstitutionSavingThrowModifier($constitutionSavingThrowModifier)
    {
        $this->constitutionSavingThrowModifier = $constitutionSavingThrowModifier;

        return $this;
    }

    /**
     * Get constitutionSavingThrowModifier
     *
     * @return integer
     */
    public function getConstitutionSavingThrowModifier()
    {
        return $this->constitutionSavingThrowModifier;
    }

    /**
     * Set strengthSavingThrowModifier
     *
     * @param integer $strengthSavingThrowModifier
     *
     * @return Creatures
     */
    public function setStrengthSavingThrowModifier($strengthSavingThrowModifier)
    {
        $this->strengthSavingThrowModifier = $strengthSavingThrowModifier;

        return $this;
    }

    /**
     * Get strengthSavingThrowModifier
     *
     * @return integer
     */
    public function getStrengthSavingThrowModifier()
    {
        return $this->strengthSavingThrowModifier;
    }

    /**
     * Set dexteritySavingThrowModifier
     *
     * @param integer $dexteritySavingThrowModifier
     *
     * @return Creatures
     */
    public function setDexteritySavingThrowModifier($dexteritySavingThrowModifier)
    {
        $this->dexteritySavingThrowModifier = $dexteritySavingThrowModifier;

        return $this;
    }

    /**
     * Get dexteritySavingThrowModifier
     *
     * @return integer
     */
    public function getDexteritySavingThrowModifier()
    {
        return $this->dexteritySavingThrowModifier;
    }

    /**
     * Set intelligenceSavingThrowModifier
     *
     * @param integer $intelligenceSavingThrowModifier
     *
     * @return Creatures
     */
    public function setIntelligenceSavingThrowModifier($intelligenceSavingThrowModifier)
    {
        $this->intelligenceSavingThrowModifier = $intelligenceSavingThrowModifier;

        return $this;
    }

    /**
     * Get intelligenceSavingThrowModifier
     *
     * @return integer
     */
    public function getIntelligenceSavingThrowModifier()
    {
        return $this->intelligenceSavingThrowModifier;
    }

    /**
     * Set wisdomSavingThrowModifier
     *
     * @param integer $wisdomSavingThrowModifier
     *
     * @return Creatures
     */
    public function setWisdomSavingThrowModifier($wisdomSavingThrowModifier)
    {
        $this->wisdomSavingThrowModifier = $wisdomSavingThrowModifier;

        return $this;
    }

    /**
     * Get wisdomSavingThrowModifier
     *
     * @return integer
     */
    public function getWisdomSavingThrowModifier()
    {
        return $this->wisdomSavingThrowModifier;
    }

    /**
     * Set charismaSavingThrowModifier
     *
     * @param integer $charismaSavingThrowModifier
     *
     * @return Creatures
     */
    public function setCharismaSavingThrowModifier($charismaSavingThrowModifier)
    {
        $this->charismaSavingThrowModifier = $charismaSavingThrowModifier;

        return $this;
    }

    /**
     * Get charismaSavingThrowModifier
     *
     * @return integer
     */
    public function getCharismaSavingThrowModifier()
    {
        return $this->charismaSavingThrowModifier;
    }

    /**
     * Set acrobaticsProficiencyModifier
     *
     * @param integer $acrobaticsProficiencyModifier
     *
     * @return Creatures
     */
    public function setAcrobaticsProficiencyModifier($acrobaticsProficiencyModifier)
    {
        $this->acrobaticsProficiencyModifier = $acrobaticsProficiencyModifier;

        return $this;
    }

    /**
     * Get acrobaticsProficiencyModifier
     *
     * @return integer
     */
    public function getAcrobaticsProficiencyModifier()
    {
        return $this->acrobaticsProficiencyModifier;
    }

    /**
     * Set arcanaProficiencyModifier
     *
     * @param integer $arcanaProficiencyModifier
     *
     * @return Creatures
     */
    public function setArcanaProficiencyModifier($arcanaProficiencyModifier)
    {
        $this->arcanaProficiencyModifier = $arcanaProficiencyModifier;

        return $this;
    }

    /**
     * Get arcanaProficiencyModifier
     *
     * @return integer
     */
    public function getArcanaProficiencyModifier()
    {
        return $this->arcanaProficiencyModifier;
    }

    /**
     * Set athleticsProficiencyModifier
     *
     * @param integer $athleticsProficiencyModifier
     *
     * @return Creatures
     */
    public function setAthleticsProficiencyModifier($athleticsProficiencyModifier)
    {
        $this->athleticsProficiencyModifier = $athleticsProficiencyModifier;

        return $this;
    }

    /**
     * Get athleticsProficiencyModifier
     *
     * @return integer
     */
    public function getAthleticsProficiencyModifier()
    {
        return $this->athleticsProficiencyModifier;
    }

    /**
     * Set deceptionProficiencyModifier
     *
     * @param integer $deceptionProficiencyModifier
     *
     * @return Creatures
     */
    public function setDeceptionProficiencyModifier($deceptionProficiencyModifier)
    {
        $this->deceptionProficiencyModifier = $deceptionProficiencyModifier;

        return $this;
    }

    /**
     * Get deceptionProficiencyModifier
     *
     * @return integer
     */
    public function getDeceptionProficiencyModifier()
    {
        return $this->deceptionProficiencyModifier;
    }

    /**
     * Set historyProficiencyModifier
     *
     * @param integer $historyProficiencyModifier
     *
     * @return Creatures
     */
    public function setHistoryProficiencyModifier($historyProficiencyModifier)
    {
        $this->historyProficiencyModifier = $historyProficiencyModifier;

        return $this;
    }

    /**
     * Get historyProficiencyModifier
     *
     * @return integer
     */
    public function getHistoryProficiencyModifier()
    {
        return $this->historyProficiencyModifier;
    }

    /**
     * Set insightProficiencyModifier
     *
     * @param integer $insightProficiencyModifier
     *
     * @return Creatures
     */
    public function setInsightProficiencyModifier($insightProficiencyModifier)
    {
        $this->insightProficiencyModifier = $insightProficiencyModifier;

        return $this;
    }

    /**
     * Get insightProficiencyModifier
     *
     * @return integer
     */
    public function getInsightProficiencyModifier()
    {
        return $this->insightProficiencyModifier;
    }

    /**
     * Set intimidationProficiencyModifier
     *
     * @param integer $intimidationProficiencyModifier
     *
     * @return Creatures
     */
    public function setIntimidationProficiencyModifier($intimidationProficiencyModifier)
    {
        $this->intimidationProficiencyModifier = $intimidationProficiencyModifier;

        return $this;
    }

    /**
     * Get intimidationProficiencyModifier
     *
     * @return integer
     */
    public function getIntimidationProficiencyModifier()
    {
        return $this->intimidationProficiencyModifier;
    }

    /**
     * Set investigationProficiencyModifier
     *
     * @param integer $investigationProficiencyModifier
     *
     * @return Creatures
     */
    public function setInvestigationProficiencyModifier($investigationProficiencyModifier)
    {
        $this->investigationProficiencyModifier = $investigationProficiencyModifier;

        return $this;
    }

    /**
     * Get investigationProficiencyModifier
     *
     * @return integer
     */
    public function getInvestigationProficiencyModifier()
    {
        return $this->investigationProficiencyModifier;
    }

    /**
     * Set medicineProficiencyModifier
     *
     * @param integer $medicineProficiencyModifier
     *
     * @return Creatures
     */
    public function setMedicineProficiencyModifier($medicineProficiencyModifier)
    {
        $this->medicineProficiencyModifier = $medicineProficiencyModifier;

        return $this;
    }

    /**
     * Get medicineProficiencyModifier
     *
     * @return integer
     */
    public function getMedicineProficiencyModifier()
    {
        return $this->medicineProficiencyModifier;
    }

    /**
     * Set natureProficiencyModifier
     *
     * @param integer $natureProficiencyModifier
     *
     * @return Creatures
     */
    public function setNatureProficiencyModifier($natureProficiencyModifier)
    {
        $this->natureProficiencyModifier = $natureProficiencyModifier;

        return $this;
    }

    /**
     * Get natureProficiencyModifier
     *
     * @return integer
     */
    public function getNatureProficiencyModifier()
    {
        return $this->natureProficiencyModifier;
    }

    /**
     * Set perceptionProficiencyModifier
     *
     * @param integer $perceptionProficiencyModifier
     *
     * @return Creatures
     */
    public function setPerceptionProficiencyModifier($perceptionProficiencyModifier)
    {
        $this->perceptionProficiencyModifier = $perceptionProficiencyModifier;

        return $this;
    }

    /**
     * Get perceptionProficiencyModifier
     *
     * @return integer
     */
    public function getPerceptionProficiencyModifier()
    {
        return $this->perceptionProficiencyModifier;
    }

    /**
     * Set performanceProficiencyModifier
     *
     * @param integer $performanceProficiencyModifier
     *
     * @return Creatures
     */
    public function setPerformanceProficiencyModifier($performanceProficiencyModifier)
    {
        $this->performanceProficiencyModifier = $performanceProficiencyModifier;

        return $this;
    }

    /**
     * Get performanceProficiencyModifier
     *
     * @return integer
     */
    public function getPerformanceProficiencyModifier()
    {
        return $this->performanceProficiencyModifier;
    }

    /**
     * Set persuasionProficiencyModifier
     *
     * @param integer $persuasionProficiencyModifier
     *
     * @return Creatures
     */
    public function setPersuasionProficiencyModifier($persuasionProficiencyModifier)
    {
        $this->persuasionProficiencyModifier = $persuasionProficiencyModifier;

        return $this;
    }

    /**
     * Get persuasionProficiencyModifier
     *
     * @return integer
     */
    public function getPersuasionProficiencyModifier()
    {
        return $this->persuasionProficiencyModifier;
    }

    /**
     * Set religionProficiencyModifier
     *
     * @param integer $religionProficiencyModifier
     *
     * @return Creatures
     */
    public function setReligionProficiencyModifier($religionProficiencyModifier)
    {
        $this->religionProficiencyModifier = $religionProficiencyModifier;

        return $this;
    }

    /**
     * Get religionProficiencyModifier
     *
     * @return integer
     */
    public function getReligionProficiencyModifier()
    {
        return $this->religionProficiencyModifier;
    }

    /**
     * Set slightOfHandProficiencyModifier
     *
     * @param integer $slightOfHandProficiencyModifier
     *
     * @return Creatures
     */
    public function setSlightOfHandProficiencyModifier($slightOfHandProficiencyModifier)
    {
        $this->slightOfHandProficiencyModifier = $slightOfHandProficiencyModifier;

        return $this;
    }

    /**
     * Get slightOfHandProficiencyModifier
     *
     * @return integer
     */
    public function getSlightOfHandProficiencyModifier()
    {
        return $this->slightOfHandProficiencyModifier;
    }

    /**
     * Set stealthProficiencyModifier
     *
     * @param integer $stealthProficiencyModifier
     *
     * @return Creatures
     */
    public function setStealthProficiencyModifier($stealthProficiencyModifier)
    {
        $this->stealthProficiencyModifier = $stealthProficiencyModifier;

        return $this;
    }

    /**
     * Get stealthProficiencyModifier
     *
     * @return integer
     */
    public function getStealthProficiencyModifier()
    {
        return $this->stealthProficiencyModifier;
    }

    /**
     * Set survivalProficiencyModifier
     *
     * @param integer $survivalProficiencyModifier
     *
     * @return Creatures
     */
    public function setSurvivalProficiencyModifier($survivalProficiencyModifier)
    {
        $this->survivalProficiencyModifier = $survivalProficiencyModifier;

        return $this;
    }

    /**
     * Get survivalProficiencyModifier
     *
     * @return integer
     */
    public function getSurvivalProficiencyModifier()
    {
        return $this->survivalProficiencyModifier;
    }

    /**
     * Set specialTraits
     *
     * @param string $specialTraits
     *
     * @return Creatures
     */
    public function setSpecialTraits($specialTraits)
    {
        $this->specialTraits = $specialTraits;

        return $this;
    }

    /**
     * Get specialTraits
     *
     * @return string
     */
    public function getSpecialTraits()
    {
        return $this->specialTraits;
    }

    /**
     * Set classLevels
     *
     * @param string $classLevels
     *
     * @return Creatures
     */
    public function setClassLevels($classLevels)
    {
        $this->classLevels = $classLevels;

        return $this;
    }

    /**
     * Get classLevels
     *
     * @return string
     */
    public function getClassLevels()
    {
        return $this->classLevels;
    }

    /**
     * Set type
     *
     * @param \DNDCampaignManagerAPI\Entities\CreatureTypes $type
     *
     * @return Creatures
     */
    public function setType(\DNDCampaignManagerAPI\Entities\CreatureTypes $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \DNDCampaignManagerAPI\Entities\CreatureTypes
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set alignment
     *
     * @param \DNDCampaignManagerAPI\Entities\Alignments $alignment
     *
     * @return Creatures
     */
    public function setAlignment(\DNDCampaignManagerAPI\Entities\Alignments $alignment = null)
    {
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * Get alignment
     *
     * @return \DNDCampaignManagerAPI\Entities\Alignments
     */
    public function getAlignment()
    {
        return $this->alignment;
    }

    /**
     * Add condition
     *
     * @param \DNDCampaignManagerAPI\Entities\Conditions $condition
     *
     * @return Creatures
     */
    public function addCondition(\DNDCampaignManagerAPI\Entities\Conditions $condition)
    {
        $this->condition[] = $condition;

        return $this;
    }

    /**
     * Remove condition
     *
     * @param \DNDCampaignManagerAPI\Entities\Conditions $condition
     */
    public function removeCondition(\DNDCampaignManagerAPI\Entities\Conditions $condition)
    {
        $this->condition->removeElement($condition);
    }

    /**
     * Get condition
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Add damageType
     *
     * @param \DNDCampaignManagerAPI\Entities\DamageTypes $damageType
     *
     * @return Creatures
     */
    public function addDamageType(\DNDCampaignManagerAPI\Entities\DamageTypes $damageType)
    {
        $this->damageType[] = $damageType;

        return $this;
    }

    /**
     * Remove damageType
     *
     * @param \DNDCampaignManagerAPI\Entities\DamageTypes $damageType
     */
    public function removeDamageType(\DNDCampaignManagerAPI\Entities\DamageTypes $damageType)
    {
        $this->damageType->removeElement($damageType);
    }

    /**
     * Get damageType
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDamageType()
    {
        return $this->damageType;
    }
}

