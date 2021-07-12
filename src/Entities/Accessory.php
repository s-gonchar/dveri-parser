<?php


namespace Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="accessories")
 */
class Accessory
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var AccessoryGroup
     * @ORM\ManyToOne (targetEntity=AccessoryGroup::class)
     * @ORM\JoinColumn(name="accessory_group_id", referencedColumnName="id", nullable=true)
     */
    private $accessoryGroup;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $quantity;
    /**
     * @var float
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;
    /**
     * @var float
     * @ORM\Column(type="decimal", scale=2)
     */
    private $priceDealer;
    /**
     * @var float
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $discount;
    /**
     * @var float
     * @ORM\Column(type="decimal", scale=2, nullable=true)
     */
    private $discountDealer;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $label;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $vendorCode;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;

}