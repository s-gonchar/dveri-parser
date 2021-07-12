<?php


namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="property_values")
 */
class PropertyValue
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var Property
     * @ORM\ManyToOne (targetEntity=Property::class)
     * @ORM\JoinColumn(name="property_id", referencedColumnName="id", nullable=true)
     */
    private $property;


    /**
     * @var Product
     * @ORM\ManyToOne (targetEntity=Product::class)
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", nullable=true)
     */
    private $product;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;
}