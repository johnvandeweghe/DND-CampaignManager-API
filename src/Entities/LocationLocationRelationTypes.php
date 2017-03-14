<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationLocationRelationTypes
 *
 * @ORM\Table(name="location_location_relation_types", uniqueConstraints={@ORM\UniqueConstraint(name="a_to_b_type", columns={"a_to_b_type"}), @ORM\UniqueConstraint(name="b_to_a_type", columns={"b_to_a_type"})})
 * @ORM\Entity
 */
class LocationLocationRelationTypes
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
     * @ORM\Column(name="a_to_b_type", type="string", length=32, nullable=true)
     */
    private $aToBType;

    /**
     * @var string
     *
     * @ORM\Column(name="b_to_a_type", type="string", length=32, nullable=true)
     */
    private $bToAType;


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
     * Set aToBType
     *
     * @param string $aToBType
     *
     * @return LocationLocationRelationTypes
     */
    public function setAToBType($aToBType)
    {
        $this->aToBType = $aToBType;

        return $this;
    }

    /**
     * Get aToBType
     *
     * @return string
     */
    public function getAToBType()
    {
        return $this->aToBType;
    }

    /**
     * Set bToAType
     *
     * @param string $bToAType
     *
     * @return LocationLocationRelationTypes
     */
    public function setBToAType($bToAType)
    {
        $this->bToAType = $bToAType;

        return $this;
    }

    /**
     * Get bToAType
     *
     * @return string
     */
    public function getBToAType()
    {
        return $this->bToAType;
    }
}

