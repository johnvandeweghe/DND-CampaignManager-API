<?php
namespace DNDCampaignManagerAPI\Server\ResourceParameters;

use LunixREST\Server\Router\Endpoint\ResourceEndpoint\ResourceParameters;

class CreatureParameters implements ResourceParameters
{
    /**
     * @var int|null
     */
    private $id;
    /**
     * @var null|string
     */
    private $name;
    /**
     * @var null|string
     */
    private $appearance;
    /**
     * @var null|string
     */
    private $notes;
    /**
     * @var null|string
     */
    private $race;
    /**
     * @var null|string
     */
    private $gender;
    /**
     * @var int|null
     */
    private $maxHitPoints;
    /**
     * @var null|string
     */
    private $averageMaxHitPoints;
    /**
     * @var int|null
     */
    private $constitution;
    /**
     * @var int|null
     */
    private $strength;
    /**
     * @var int|null
     */
    private $dexterity;
    /**
     * @var int|null
     */
    private $intelligence;
    /**
     * @var int|null
     */
    private $wisdom;
    /**
     * @var int|null
     */
    private $charisma;
    /**
     * @var int|null
     */
    private $proficiencyBonus;
    /**
     * @var null|string
     */
    private $size;
    /**
     * @var int|null
     */
    private $baseSpeed;
    /**
     * @var int|null
     */
    private $burrowSpeed;
    /**
     * @var int|null
     */
    private $climbSpeed;
    /**
     * @var int|null
     */
    private $flySpeed;
    /**
     * @var int|null
     */
    private $swimSpeed;
    /**
     * @var null|string
     */
    private $languages;
    /**
     * @var null|string
     */
    private $senses;
    /**
     * @var int|null
     */
    private $constitutionSavingThrowModifier;
    /**
     * @var int|null
     */
    private $strengthSavingThrowModifier;
    /**
     * @var int|null
     */
    private $dexteritySavingThrowModifier;
    /**
     * @var int|null
     */
    private $intelligenceSavingThrowModifier;
    /**
     * @var int|null
     */
    private $wisdomSavingThrowModifier;
    /**
     * @var int|null
     */
    private $charismaSavingThrowModifier;
    /**
     * @var int|null
     */
    private $acrobaticsProficiencyModifier;
    /**
     * @var int|null
     */
    private $arcanaProficiencyModifier;
    /**
     * @var int|null
     */
    private $athleticsProficiencyModifier;
    /**
     * @var int|null
     */
    private $deceptionProficiencyModifier;
    /**
     * @var int|null
     */
    private $historyProficiencyModifier;
    /**
     * @var int|null
     */
    private $insightProficiencyModifier;
    /**
     * @var int|null
     */
    private $intimidationProficiencyModifier;
    /**
     * @var int|null
     */
    private $investigationProficiencyModifier;
    /**
     * @var int|null
     */
    private $medicineProficiencyModifier;
    /**
     * @var int|null
     */
    private $natureProficiencyModifier;
    /**
     * @var int|null
     */
    private $perceptionProficiencyModifier;
    /**
     * @var int|null
     */
    private $performanceProficiencyModifier;
    /**
     * @var int|null
     */
    private $persuasionProficiencyModifier;
    /**
     * @var int|null
     */
    private $religionProficiencyModifier;
    /**
     * @var int|null
     */
    private $slightOfHandProficiencyModifier;
    /**
     * @var int|null
     */
    private $stealthProficiencyModifier;
    /**
     * @var null|string
     */
    private $survivalProficiencyModifier;
    /**
     * @var null|string
     */
    private $specialTraits;
    /**
     * @var null|string
     */
    private $classLevels;

    /**
     * CreatureParameters constructor.
     * @param int|null $id
     * @param null|string $name
     * @param null|string $appearance
     * @param null|string $notes
     * @param null|string $race
     * @param null|string $gender
     * @param int|null $maxHitPoints
     * @param null|string $averageMaxHitPoints
     * @param int|null $constitution
     * @param int|null $strength
     * @param int|null $dexterity
     * @param int|null $intelligence
     * @param int|null $wisdom
     * @param int|null $charisma
     * @param int|null $proficiencyBonus
     * @param null|string $size
     * @param int|null $baseSpeed
     * @param int|null $burrowSpeed
     * @param int|null $climbSpeed
     * @param int|null $flySpeed
     * @param int|null $swimSpeed
     * @param null|string $languages
     * @param null|string $senses
     * @param int|null $constitutionSavingThrowModifier
     * @param int|null $strengthSavingThrowModifier
     * @param int|null $dexteritySavingThrowModifier
     * @param int|null $intelligenceSavingThrowModifier
     * @param int|null $wisdomSavingThrowModifier
     * @param int|null $charismaSavingThrowModifier
     * @param int|null $acrobaticsProficiencyModifier
     * @param int|null $arcanaProficiencyModifier
     * @param int|null $athleticsProficiencyModifier
     * @param int|null $deceptionProficiencyModifier
     * @param int|null $historyProficiencyModifier
     * @param int|null $insightProficiencyModifier
     * @param int|null $intimidationProficiencyModifier
     * @param int|null $investigationProficiencyModifier
     * @param int|null $medicineProficiencyModifier
     * @param int|null $natureProficiencyModifier
     * @param int|null $perceptionProficiencyModifier
     * @param int|null $performanceProficiencyModifier
     * @param int|null $persuasionProficiencyModifier
     * @param int|null $religionProficiencyModifier
     * @param int|null $slightOfHandProficiencyModifier
     * @param int|null $stealthProficiencyModifier
     * @param null|string $survivalProficiencyModifier
     * @param null|string $specialTraits
     * @param null|string $classLevels
     */
    public function __construct(
        ?int $id,
        ?string $name,
        ?string $appearance,
        ?string $notes,
        ?string $race,
        ?string $gender,
        ?int $maxHitPoints,
        ?string $averageMaxHitPoints,
        ?int $constitution,
        ?int $strength,
        ?int $dexterity,
        ?int $intelligence,
        ?int $wisdom,
        ?int $charisma,
        ?int $proficiencyBonus,
        ?string $size,
        ?int $baseSpeed,
        ?int $burrowSpeed,
        ?int $climbSpeed,
        ?int $flySpeed,
        ?int $swimSpeed,
        ?string $languages,
        ?string $senses,
        ?int $constitutionSavingThrowModifier,
        ?int $strengthSavingThrowModifier,
        ?int $dexteritySavingThrowModifier,
        ?int $intelligenceSavingThrowModifier,
        ?int $wisdomSavingThrowModifier,
        ?int $charismaSavingThrowModifier,
        ?int $acrobaticsProficiencyModifier,
        ?int $arcanaProficiencyModifier,
        ?int $athleticsProficiencyModifier,
        ?int $deceptionProficiencyModifier,
        ?int $historyProficiencyModifier,
        ?int $insightProficiencyModifier,
        ?int $intimidationProficiencyModifier,
        ?int $investigationProficiencyModifier,
        ?int $medicineProficiencyModifier,
        ?int $natureProficiencyModifier,
        ?int $perceptionProficiencyModifier,
        ?int $performanceProficiencyModifier,
        ?int $persuasionProficiencyModifier,
        ?int $religionProficiencyModifier,
        ?int $slightOfHandProficiencyModifier,
        ?int $stealthProficiencyModifier,
        ?string $survivalProficiencyModifier,
        ?string $specialTraits,
        ?string $classLevels
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->appearance = $appearance;
        $this->notes = $notes;
        $this->race = $race;
        $this->gender = $gender;
        $this->maxHitPoints = $maxHitPoints;
        $this->averageMaxHitPoints = $averageMaxHitPoints;
        $this->constitution = $constitution;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
        $this->intelligence = $intelligence;
        $this->wisdom = $wisdom;
        $this->charisma = $charisma;
        $this->proficiencyBonus = $proficiencyBonus;
        $this->size = $size;
        $this->baseSpeed = $baseSpeed;
        $this->burrowSpeed = $burrowSpeed;
        $this->climbSpeed = $climbSpeed;
        $this->flySpeed = $flySpeed;
        $this->swimSpeed = $swimSpeed;
        $this->languages = $languages;
        $this->senses = $senses;
        $this->constitutionSavingThrowModifier = $constitutionSavingThrowModifier;
        $this->strengthSavingThrowModifier = $strengthSavingThrowModifier;
        $this->dexteritySavingThrowModifier = $dexteritySavingThrowModifier;
        $this->intelligenceSavingThrowModifier = $intelligenceSavingThrowModifier;
        $this->wisdomSavingThrowModifier = $wisdomSavingThrowModifier;
        $this->charismaSavingThrowModifier = $charismaSavingThrowModifier;
        $this->acrobaticsProficiencyModifier = $acrobaticsProficiencyModifier;
        $this->arcanaProficiencyModifier = $arcanaProficiencyModifier;
        $this->athleticsProficiencyModifier = $athleticsProficiencyModifier;
        $this->deceptionProficiencyModifier = $deceptionProficiencyModifier;
        $this->historyProficiencyModifier = $historyProficiencyModifier;
        $this->insightProficiencyModifier = $insightProficiencyModifier;
        $this->intimidationProficiencyModifier = $intimidationProficiencyModifier;
        $this->investigationProficiencyModifier = $investigationProficiencyModifier;
        $this->medicineProficiencyModifier = $medicineProficiencyModifier;
        $this->natureProficiencyModifier = $natureProficiencyModifier;
        $this->perceptionProficiencyModifier = $perceptionProficiencyModifier;
        $this->performanceProficiencyModifier = $performanceProficiencyModifier;
        $this->persuasionProficiencyModifier = $persuasionProficiencyModifier;
        $this->religionProficiencyModifier = $religionProficiencyModifier;
        $this->slightOfHandProficiencyModifier = $slightOfHandProficiencyModifier;
        $this->stealthProficiencyModifier = $stealthProficiencyModifier;
        $this->survivalProficiencyModifier = $survivalProficiencyModifier;
        $this->specialTraits = $specialTraits;
        $this->classLevels = $classLevels;
    }

    /**
     * @return int|null
     */
    public function getAcrobaticsProficiencyModifier()
    {
        return $this->acrobaticsProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * @return int|null
     */
    public function getArcanaProficiencyModifier()
    {
        return $this->arcanaProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getAthleticsProficiencyModifier()
    {
        return $this->athleticsProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getAverageMaxHitPoints()
    {
        return $this->averageMaxHitPoints;
    }

    /**
     * @return int|null
     */
    public function getBaseSpeed()
    {
        return $this->baseSpeed;
    }

    /**
     * @return int|null
     */
    public function getBurrowSpeed()
    {
        return $this->burrowSpeed;
    }

    /**
     * @return int|null
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * @return int|null
     */
    public function getCharismaSavingThrowModifier()
    {
        return $this->charismaSavingThrowModifier;
    }

    /**
     * @return null|string
     */
    public function getClassLevels()
    {
        return $this->classLevels;
    }

    /**
     * @return int|null
     */
    public function getClimbSpeed()
    {
        return $this->climbSpeed;
    }

    /**
     * @return int|null
     */
    public function getConstitution()
    {
        return $this->constitution;
    }

    /**
     * @return int|null
     */
    public function getConstitutionSavingThrowModifier()
    {
        return $this->constitutionSavingThrowModifier;
    }

    /**
     * @return int|null
     */
    public function getDeceptionProficiencyModifier()
    {
        return $this->deceptionProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * @return int|null
     */
    public function getDexteritySavingThrowModifier()
    {
        return $this->dexteritySavingThrowModifier;
    }

    /**
     * @return int|null
     */
    public function getFlySpeed()
    {
        return $this->flySpeed;
    }

    /**
     * @return null|string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return int|null
     */
    public function getHistoryProficiencyModifier()
    {
        return $this->historyProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getInsightProficiencyModifier()
    {
        return $this->insightProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * @return int|null
     */
    public function getIntelligenceSavingThrowModifier()
    {
        return $this->intelligenceSavingThrowModifier;
    }

    /**
     * @return int|null
     */
    public function getIntimidationProficiencyModifier()
    {
        return $this->intimidationProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getInvestigationProficiencyModifier()
    {
        return $this->investigationProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * @return int|null
     */
    public function getMaxHitPoints()
    {
        return $this->maxHitPoints;
    }

    /**
     * @return int|null
     */
    public function getMedicineProficiencyModifier()
    {
        return $this->medicineProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getNatureProficiencyModifier()
    {
        return $this->natureProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return int|null
     */
    public function getPerceptionProficiencyModifier()
    {
        return $this->perceptionProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getPerformanceProficiencyModifier()
    {
        return $this->performanceProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getPersuasionProficiencyModifier()
    {
        return $this->persuasionProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getProficiencyBonus()
    {
        return $this->proficiencyBonus;
    }

    /**
     * @return null|string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @return int|null
     */
    public function getReligionProficiencyModifier()
    {
        return $this->religionProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getSenses()
    {
        return $this->senses;
    }

    /**
     * @return null|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return int|null
     */
    public function getSlightOfHandProficiencyModifier()
    {
        return $this->slightOfHandProficiencyModifier;
    }

    /**
     * @return null|string
     */
    public function getSpecialTraits()
    {
        return $this->specialTraits;
    }

    /**
     * @return int|null
     */
    public function getStealthProficiencyModifier()
    {
        return $this->stealthProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @return int|null
     */
    public function getStrengthSavingThrowModifier()
    {
        return $this->strengthSavingThrowModifier;
    }

    /**
     * @return null|string
     */
    public function getSurvivalProficiencyModifier()
    {
        return $this->survivalProficiencyModifier;
    }

    /**
     * @return int|null
     */
    public function getSwimSpeed()
    {
        return $this->swimSpeed;
    }

    /**
     * @return int|null
     */
    public function getWisdom()
    {
        return $this->wisdom;
    }

    /**
     * @return int|null
     */
    public function getWisdomSavingThrowModifier()
    {
        return $this->wisdomSavingThrowModifier;
    }

}
