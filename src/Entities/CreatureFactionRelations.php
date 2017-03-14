<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureFactionRelations
 *
 * @ORM\Table(name="creature_faction_relations", indexes={@ORM\Index(name="faction_id", columns={"faction_id"}), @ORM\Index(name="relation_type_id", columns={"relation_type_id"}), @ORM\Index(name="IDX_D1817034F9AB048", columns={"creature_id"})})
 * @ORM\Entity
 */
class CreatureFactionRelations
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=32, nullable=true)
     */
    private $title;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Creatures
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creatures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_id", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $creature;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Factions
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Factions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faction_id", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $faction;

    /**
     * @var \DNDCampaignManagerAPI\Entities\CreatureFactionRelationTypes
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\CreatureFactionRelationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_type_id", referencedColumnName="id", unique=true)
     * })
     */
    private $relationType;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return CreatureFactionRelations
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creature
     *
     * @return CreatureFactionRelations
     */
    public function setCreature(\DNDCampaignManagerAPI\Entities\Creatures $creature = null)
    {
        $this->creature = $creature;

        return $this;
    }

    /**
     * Get creature
     *
     * @return \DNDCampaignManagerAPI\Entities\Creatures
     */
    public function getCreature()
    {
        return $this->creature;
    }

    /**
     * Set faction
     *
     * @param \DNDCampaignManagerAPI\Entities\Factions $faction
     *
     * @return CreatureFactionRelations
     */
    public function setFaction(\DNDCampaignManagerAPI\Entities\Factions $faction = null)
    {
        $this->faction = $faction;

        return $this;
    }

    /**
     * Get faction
     *
     * @return \DNDCampaignManagerAPI\Entities\Factions
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * Set relationType
     *
     * @param \DNDCampaignManagerAPI\Entities\CreatureFactionRelationTypes $relationType
     *
     * @return CreatureFactionRelations
     */
    public function setRelationType(\DNDCampaignManagerAPI\Entities\CreatureFactionRelationTypes $relationType = null)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return \DNDCampaignManagerAPI\Entities\CreatureFactionRelationTypes
     */
    public function getRelationType()
    {
        return $this->relationType;
    }
}

