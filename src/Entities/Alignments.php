<?php

namespace DNDCampaignManagerAPI\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alignments
 *
 * @ORM\Table(name="alignments")
 * @ORM\Entity
 */
class Alignments
{
    /**
     * @var string
     *
     * @ORM\Column(name="alignment", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $alignment;


    /**
     * Get alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->alignment;
    }
}

