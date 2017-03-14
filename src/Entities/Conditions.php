<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditions
 *
 * @ORM\Table(name="conditions")
 * @ORM\Entity
 */
class Conditions
{
    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $condition;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\Creatures", mappedBy="condition")
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
     * Get condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Add creatureEntry
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creatureEntry
     *
     * @return Conditions
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

