<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureCreatureRelations
 *
 * @ORM\Table(name="creature_creature_relations", indexes={@ORM\Index(name="creature_b", columns={"creature_b"}), @ORM\Index(name="relation_type_id", columns={"relation_type_id"}), @ORM\Index(name="IDX_3EDD2A019BF88439", columns={"creature_a"})})
 * @ORM\Entity
 */
class CreatureCreatureRelations
{
    /**
     * @var \DNDCampaignManagerAPI\Entities\Creature
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creature")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_a", referencedColumnName="id", unique=true)
     * })
     */
    private $creatureA;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Creature
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creature")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_b", referencedColumnName="id", unique=true)
     * })
     */
    private $creatureB;

    /**
     * @var \DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_type_id", referencedColumnName="id", unique=true)
     * })
     */
    private $relationType;


    /**
     * Set creatureA
     *
     * @param \DNDCampaignManagerAPI\Entities\Creature $creatureA
     *
     * @return CreatureCreatureRelations
     */
    public function setCreatureA(\DNDCampaignManagerAPI\Entities\Creature $creatureA = null)
    {
        $this->creatureA = $creatureA;

        return $this;
    }

    /**
     * Get creatureA
     *
     * @return \DNDCampaignManagerAPI\Entities\Creature
     */
    public function getCreatureA()
    {
        return $this->creatureA;
    }

    /**
     * Set creatureB
     *
     * @param \DNDCampaignManagerAPI\Entities\Creature $creatureB
     *
     * @return CreatureCreatureRelations
     */
    public function setCreatureB(\DNDCampaignManagerAPI\Entities\Creature $creatureB = null)
    {
        $this->creatureB = $creatureB;

        return $this;
    }

    /**
     * Get creatureB
     *
     * @return \DNDCampaignManagerAPI\Entities\Creature
     */
    public function getCreatureB()
    {
        return $this->creatureB;
    }

    /**
     * Set relationType
     *
     * @param \DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes $relationType
     *
     * @return CreatureCreatureRelations
     */
    public function setRelationType(\DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes $relationType = null)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return \DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes
     */
    public function getRelationType()
    {
        return $this->relationType;
    }
}

