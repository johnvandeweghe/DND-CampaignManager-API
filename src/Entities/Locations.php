<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations")
 * @ORM\Entity
 */
class Locations
{
    /**
     * @var \DNDCampaignManagerAPI\Entities\Entries
     *
     * @ORM\OneToOne(targetEntity="DNDCampaignManagerAPI\Entities\Entries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entry_id", referencedColumnName="id", unique=true)
     * })
     */
    private $entry;


    /**
     * Set entry
     *
     * @param \DNDCampaignManagerAPI\Entities\Entries $entry
     *
     * @return Locations
     */
    public function setEntry(\DNDCampaignManagerAPI\Entities\Entries $entry = null)
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Get entry
     *
     * @return \DNDCampaignManagerAPI\Entities\Entries
     */
    public function getEntry()
    {
        return $this->entry;
    }
}

