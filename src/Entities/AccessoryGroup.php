<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="accessory_groups")
 */
class AccessoryGroup
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
     * @var Collection|Product[]
     * @ORM\OneToMany (targetEntity="Product", mappedBy="accessoryGroup")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
}