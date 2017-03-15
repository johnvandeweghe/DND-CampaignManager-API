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
    private $creature;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->creature = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creature
     *
     * @return DamageTypes
     */
    public function addCreature(\DNDCampaignManagerAPI\Entities\Creatures $creature)
    {
        $this->creature[] = $creature;

        return $this;
    }

    /**
     * Remove creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creature
     */
    public function removeCreature(\DNDCampaignManagerAPI\Entities\Creatures $creature)
    {
        $this->creature->removeElement($creature);
    }

    /**
     * Get creature
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCreature()
    {
        return $this->creature;
    }
}

