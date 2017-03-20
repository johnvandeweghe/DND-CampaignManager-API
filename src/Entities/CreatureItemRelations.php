<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureItemRelations
 *
 * @ORM\Table(name="creature_item_relations", indexes={@ORM\Index(name="item_id", columns={"item_id"}), @ORM\Index(name="relation_type_id", columns={"relation_type_id"}), @ORM\Index(name="IDX_3ECDBEFDF9AB048", columns={"creature_id"})})
 * @ORM\Entity
 */
class CreatureItemRelations
{
    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Creature
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Creature")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creature_id", referencedColumnName="id", unique=true)
     * })
     */
    private $creature;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Items
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Items")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="id", unique=true)
     * })
     */
    private $item;

    /**
     * @var \DNDCampaignManagerAPI\Entities\CreatureItemRelationTypes
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\CreatureItemRelationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_type_id", referencedColumnName="id", unique=true)
     * })
     */
    private $relationType;


    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return CreatureItemRelations
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set creature
     *
     * @param \DNDCampaignManagerAPI\Entities\Creature $creature
     *
     * @return CreatureItemRelations
     */
    public function setCreature(\DNDCampaignManagerAPI\Entities\Creature $creature = null)
    {
        $this->creature = $creature;

        return $this;
    }

    /**
     * Get creature
     *
     * @return \DNDCampaignManagerAPI\Entities\Creature
     */
    public function getCreature()
    {
        return $this->creature;
    }

    /**
     * Set item
     *
     * @param \DNDCampaignManagerAPI\Entities\Items $item
     *
     * @return CreatureItemRelations
     */
    public function setItem(\DNDCampaignManagerAPI\Entities\Items $item = null)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return \DNDCampaignManagerAPI\Entities\Items
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set relationType
     *
     * @param \DNDCampaignManagerAPI\Entities\CreatureItemRelationTypes $relationType
     *
     * @return CreatureItemRelations
     */
    public function setRelationType(\DNDCampaignManagerAPI\Entities\CreatureItemRelationTypes $relationType = null)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return \DNDCampaignManagerAPI\Entities\CreatureItemRelationTypes
     */
    public function getRelationType()
    {
        return $this->relationType;
    }
}

