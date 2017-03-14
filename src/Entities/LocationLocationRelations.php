<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocationLocationRelations
 *
 * @ORM\Table(name="location_location_relations", indexes={@ORM\Index(name="location_b", columns={"location_b"}), @ORM\Index(name="relation_type_id", columns={"relation_type_id"}), @ORM\Index(name="IDX_D5DBEB34FA256935", columns={"location_a"})})
 * @ORM\Entity
 */
class LocationLocationRelations
{
    /**
     * @var \DNDCampaignManagerAPI\Entities\Locations
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Locations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_a", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $locationA;

    /**
     * @var \DNDCampaignManagerAPI\Entities\Locations
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Locations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="location_b", referencedColumnName="entry_id", unique=true)
     * })
     */
    private $locationB;

    /**
     * @var \DNDCampaignManagerAPI\Entities\LocationLocationRelationTypes
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\LocationLocationRelationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="relation_type_id", referencedColumnName="id", unique=true)
     * })
     */
    private $relationType;


    /**
     * Set locationA
     *
     * @param \DNDCampaignManagerAPI\Entities\Locations $locationA
     *
     * @return LocationLocationRelations
     */
    public function setLocationA(\DNDCampaignManagerAPI\Entities\Locations $locationA = null)
    {
        $this->locationA = $locationA;

        return $this;
    }

    /**
     * Get locationA
     *
     * @return \DNDCampaignManagerAPI\Entities\Locations
     */
    public function getLocationA()
    {
        return $this->locationA;
    }

    /**
     * Set locationB
     *
     * @param \DNDCampaignManagerAPI\Entities\Locations $locationB
     *
     * @return LocationLocationRelations
     */
    public function setLocationB(\DNDCampaignManagerAPI\Entities\Locations $locationB = null)
    {
        $this->locationB = $locationB;

        return $this;
    }

    /**
     * Get locationB
     *
     * @return \DNDCampaignManagerAPI\Entities\Locations
     */
    public function getLocationB()
    {
        return $this->locationB;
    }

    /**
     * Set relationType
     *
     * @param \DNDCampaignManagerAPI\Entities\LocationLocationRelationTypes $relationType
     *
     * @return LocationLocationRelations
     */
    public function setRelationType(\DNDCampaignManagerAPI\Entities\LocationLocationRelationTypes $relationType = null)
    {
        $this->relationType = $relationType;

        return $this;
    }

    /**
     * Get relationType
     *
     * @return \DNDCampaignManagerAPI\Entities\LocationLocationRelationTypes
     */
    public function getRelationType()
    {
        return $this->relationType;
    }
}

