<?php


namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="properties")
 */
class Property
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $isAccessory;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;
}