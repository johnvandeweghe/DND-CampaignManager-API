<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureItemRelationTypes
 *
 * @ORM\Table(name="creature_item_relation_types", uniqueConstraints={@ORM\UniqueConstraint(name="creature_to_item_type", columns={"creature_to_item_type"}), @ORM\UniqueConstraint(name="item_to_creature_type", columns={"item_to_creature_type"})})
 * @ORM\Entity
 */
class CreatureItemRelationTypes
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
     * @ORM\Column(name="creature_to_item_type", type="string", length=32, nullable=true)
     */
    private $creatureToItemType;

    /**
     * @var string
     *
     * @ORM\Column(name="item_to_creature_type", type="string", length=32, nullable=true)
     */
    private $itemToCreatureType;


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
     * Set creatureToItemType
     *
     * @param string $creatureToItemType
     *
     * @return CreatureItemRelationTypes
     */
    public function setCreatureToItemType($creatureToItemType)
    {
        $this->creatureToItemType = $creatureToItemType;

        return $this;
    }

    /**
     * Get creatureToItemType
     *
     * @return string
     */
    public function getCreatureToItemType()
    {
        return $this->creatureToItemType;
    }

    /**
     * Set itemToCreatureType
     *
     * @param string $itemToCreatureType
     *
     * @return CreatureItemRelationTypes
     */
    public function setItemToCreatureType($itemToCreatureType)
    {
        $this->itemToCreatureType = $itemToCreatureType;

        return $this;
    }

    /**
     * Get itemToCreatureType
     *
     * @return string
     */
    public function getItemToCreatureType()
    {
        return $this->itemToCreatureType;
    }
}

