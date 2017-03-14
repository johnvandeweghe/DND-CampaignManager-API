<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entries
 *
 * @ORM\Entity
 * @ORM\Table(name="entries")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="entry_type", type="string")
 * @ORM\DiscriminatorMap({"creature" = "Creatures", "item" = "Items", "faction" = "Factions", "location" = "Locations"})
 */
class Entries
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="appearance", type="text", length=65535, nullable=true)
     */
    private $appearance;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_type", type="string", length=32, nullable=false)
     */
    private $entry_type;

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
     * Set name
     *
     * @param string $name
     *
     * @return Entries
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set appearance
     *
     * @param string $appearance
     *
     * @return Entries
     */
    public function setAppearance($appearance)
    {
        $this->appearance = $appearance;

        return $this;
    }

    /**
     * Get appearance
     *
     * @return string
     */
    public function getAppearance()
    {
        return $this->appearance;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Entries
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $entry_type
     *
     * @return Entries
     */
    public function setEntryType($entry_type)
    {
        $this->entry_type = $entry_type;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryType()
    {
        return $this->entry_type;
    }
}

