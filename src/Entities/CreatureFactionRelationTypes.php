<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureFactionRelationTypes
 *
 * @ORM\Table(name="creature_faction_relation_types", uniqueConstraints={@ORM\UniqueConstraint(name="creature_to_faction_type", columns={"creature_to_faction_type"}), @ORM\UniqueConstraint(name="faction_to_creature_type", columns={"faction_to_creature_type"})})
 * @ORM\Entity
 */
class CreatureFactionRelationTypes
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
     * @ORM\Column(name="creature_to_faction_type", type="string", length=32, nullable=true)
     */
    private $creatureToFactionType;

    /**
     * @var string
     *
     * @ORM\Column(name="faction_to_creature_type", type="string", length=32, nullable=true)
     */
    private $factionToCreatureType;


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
     * Set creatureToFactionType
     *
     * @param string $creatureToFactionType
     *
     * @return CreatureFactionRelationTypes
     */
    public function setCreatureToFactionType($creatureToFactionType)
    {
        $this->creatureToFactionType = $creatureToFactionType;

        return $this;
    }

    /**
     * Get creatureToFactionType
     *
     * @return string
     */
    public function getCreatureToFactionType()
    {
        return $this->creatureToFactionType;
    }

    /**
     * Set factionToCreatureType
     *
     * @param string $factionToCreatureType
     *
     * @return CreatureFactionRelationTypes
     */
    public function setFactionToCreatureType($factionToCreatureType)
    {
        $this->factionToCreatureType = $factionToCreatureType;

        return $this;
    }

    /**
     * Get factionToCreatureType
     *
     * @return string
     */
    public function getFactionToCreatureType()
    {
        return $this->factionToCreatureType;
    }
}

