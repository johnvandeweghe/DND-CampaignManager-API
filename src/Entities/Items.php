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
     * @var \DNDCampaignManagerAPI\Entities\Entries
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Entries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entry_id", referencedColumnName="id", unique=true)
     * })
     */
    private $entry;


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

    /**
     * Set entry
     *
     * @param \DNDCampaignManagerAPI\Entities\Entries $entry
     *
     * @return Items
     */
    public function setEntry(\DNDCampaignManagerAPI\Entities\Entries $entry = null)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return \DNDCampaignManagerAPI\Entities\Entries
     */
    public function getEntry()
    {
        return $this->entry;
    }
}

