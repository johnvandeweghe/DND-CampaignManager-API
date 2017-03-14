<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factions
 *
 * @ORM\Table(name="factions")
 * @ORM\Entity
 */
class Factions
{
    /**
     * @var string
     *
     * @ORM\Column(name="purpose", type="text", length=65535, nullable=true)
     */
    private $purpose;

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
     * Set purpose
     *
     * @param string $purpose
     *
     * @return Factions
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set entry
     *
     * @param \DNDCampaignManagerAPI\Entities\Entries $entry
     *
     * @return Factions
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

