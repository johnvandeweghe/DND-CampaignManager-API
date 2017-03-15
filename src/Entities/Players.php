<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Players
 *
 * @ORM\Table(name="players")
 * @ORM\Entity
 */
class Players
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
     * @ORM\Column(name="player_name", type="string", length=64, nullable=true)
     */
    private $playerName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="DNDCampaignManagerAPI\Entities\Creatures", inversedBy="player")
     * @ORM\JoinTable(name="players_creatures",
     *   joinColumns={
     *     @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="creature_id", referencedColumnName="id")
     *   }
     * )
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set playerName
     *
     * @param string $playerName
     *
     * @return Players
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;

        return $this;
    }

    /**
     * Get playerName
     *
     * @return string
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * Add creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creature
     *
     * @return Players
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

