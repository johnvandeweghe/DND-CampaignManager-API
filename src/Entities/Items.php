<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Items
 *
 * @ORM\Table(name="items")
 * @ORM\Entity
 */
class Items
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="appearance", type="text", length=65535, nullable=true)
     */
    private $appearance;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="low_value", type="string", length=32, nullable=true)
     */
    private $lowValue;

    /**
     * @var string
     *
     * @ORM\Column(name="fair_value", type="string", length=32, nullable=true)
     */
    private $fairValue;

    /**
     * @var string
     *
     * @ORM\Column(name="high_value", type="string", length=32, nullable=true)
     */
    private $highValue;

    /**
     * @var string
     *
     * @ORM\Column(name="effects", type="text", length=65535, nullable=true)
     */
    private $effects;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Items
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set appearance
     *
     * @param string $appearance
     *
     * @return Items
     */
    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;

        return $this;
    }

    /**
     * Get appearance
     *
     * @return string
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Items
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set lowValue
     *
     * @param string $lowValue
     *
     * @return Items
     */
    public function setLowValue($lowValue)
    {
        $this->lowValue = $lowValue;

        return $this;
    }

    /**
     * Get lowValue
     *
     * @return string
     */
    public function getLowValue()
    {
        return $this->lowValue;
    }

    /**
     * Set fairValue
     *
     * @param string $fairValue
     *
     * @return Items
     */
    public function setFairValue($fairValue)
    {
        $this->fairValue = $fairValue;

        return $this;
    }

    /**
     * Get fairValue
     *
     * @return string
     */
    public function getFairValue()
    {
        return $this->fairValue;
    }

    /**
     * Set highValue
     *
     * @param string $highValue
     *
     * @return Items
     */
    public function setHighValue($highValue)
    {
        $this->highValue = $highValue;

        return $this;
    }

    /**
     * Get highValue
     *
     * @return string
     */
    public function getHighValue()
    {
        return $this->highValue;
    }

    /**
     * Set effects
     *
     * @param string $effects
     *
     * @return Items
     */
    public function setEffects($effects)
    {
        $this->effects = $effects;

        return $this;
    }

    /**
     * Get effects
     *
     * @return string
     */
    public function getEffects()
    {
        return $this->effects;
    }
}

