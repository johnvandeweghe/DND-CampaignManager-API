<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * DamageTypes
 *
 * @ORM\Table(name="damage_types")
 * @ORM\Entity
 */
class DamageTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="damage_type", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $damageType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\Creatures", mappedBy="damageType")
     */
    private $creatureEntry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->creatureEntry = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get damageType
     *
     * @return string
     */
    public function getDamageType()
    {
        return $this->damageType;
    }

    /**
     * Add creatureEntry
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creatureEntry
     *
     * @return DamageTypes
     */
    public function addCreatureEntry(\DNDCampaignManagerAPI\Entities\Creatures $creatureEntry)
    {
        $this->creatureEntry[] = $creatureEntry;

        return $this;
    }

    /**
     * Remove creatureEntry
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creatureEntry
     */
    public function removeCreatureEntry(\DNDCampaignManagerAPI\Entities\Creatures $creatureEntry)
    {
        $this->creatureEntry->removeElement($creatureEntry);
    }

    /**
     * Get creatureEntry
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreatureEntry()
    {
        return $this->creatureEntry;
    }
}

