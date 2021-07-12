<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="colors")
 */
class Color
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var ColorGroup
     * @ORM\ManyToOne (targetEntity=ColorGroup::class)
     * @ORM\JoinColumn(name="color_group_id", referencedColumnName="id", nullable=true)
     */
    private $colorGroup;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $picture;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;
}