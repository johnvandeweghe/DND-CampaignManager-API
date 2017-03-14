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
     * @var \DNDCampaignManagerAPI\Entities\Creatures
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creatures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_a", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $creatureA;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Creatures
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creatures")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_b", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $creatureB;

    /**
     * @var \DNDCampaignManagerAPI\Entities\CreatureCreatureRelationTypes
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
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creatureA
     *
     * @return CreatureCreatureRelations
     */
    public function setCreatureA(\DNDCampaignManagerAPI\Entities\Creatures $creatureA = null)
    {
        $this->creatureA = $creatureA;

        return $this;
    }

    /**
     * Get creatureA
     *
     * @return \DNDCampaignManagerAPI\Entities\Creatures
     */
    public function getCreatureA()
    {
        return $this->creatureA;
    }

    /**
     * Set creatureB
     *
     * @param \DNDCampaignManagerAPI\Entities\Creatures $creatureB
     *
     * @return CreatureCreatureRelations
     */
    public function setCreatureB(\DNDCampaignManagerAPI\Entities\Creatures $creatureB = null)
    {
        $this->creatureB = $creatureB;

        return $this;
    }

    /**
     * Get creatureB
     *
     * @return \DNDCampaignManagerAPI\Entities\Creatures
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

