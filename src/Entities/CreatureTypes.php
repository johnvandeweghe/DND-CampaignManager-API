<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * CreatureTypes
 *
 * @ORM\Table(name="creature_types")
 * @ORM\Entity
 */
class CreatureTypes
{
    /**
     * @var string
     *
     * @ORM\Column(name="creature_type", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $creatureType;


    /**
     * Get creatureType
     *
     * @return string
     */
    public function getCreatureType()
    {
        return $this->creatureType;
    }
}

