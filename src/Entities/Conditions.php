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
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\Creature", mappedBy="condition")
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
     * Get condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Add creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creature $creature
     *
     * @return Conditions
     */
    public function addCreature(\DNDCampaignManagerAPI\Entities\Creature $creature)
    {
        $this->creature[] = $creature;

        return $this;
    }

    /**
     * Remove creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creature $creature
     */
    public function removeCreature(\DNDCampaignManagerAPI\Entities\Creature $creature)
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

