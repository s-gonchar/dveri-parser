<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="products")
 */
class Product
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
     * @var string
     * @ORM\Column(type="string")
     */
    private $url;

    /**
     * @var Category
     * @ORM\ManyToOne (targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;
    /**
     * @var AccessoryGroup
     * @ORM\ManyToOne (targetEntity="AccessoryGroup", inversedBy="products")
     * @ORM\JoinColumn(name="accessory_group_id", referencedColumnName="id")
     */
    private $accessoryGroup;

    /**
     * @var Color
     * @ORM\ManyToOne (targetEntity="Color")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

    /**
     * @var Glass
     * @ORM\ManyToOne (targetEntity="Glass")
     * @ORM\JoinColumn(name="glass_id", referencedColumnName="id")
     */
    private $glass;
    /**
     * @var Trademark
     * @ORM\ManyToOne (targetEntity="Trademark")
     * @ORM\JoinColumn(name="trademark_id", referencedColumnName="id")
     */
    private $trademark;

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
     * @ORM\Column(type="integer", nullable=true)
     */
    private $position;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $pictureLarge;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $pictureNormal;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $pictureSmall;


    /**
     * @var Collection|Option[]
     * @ORM\OneToMany (targetEntity="Option")
     */
    private $options;

    /**
     * @var Collection|Property[]
     * @ORM\OneToMany (targetEntity="Property")
     */
    private $properties;

    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $propertyId;
    /**
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $propertyValueId;

    /**
     * @var Collection|Product[]
     * @ORM\OneToMany (targetEntity="Product")
     */
    private $analogs;

    /**
     * @var Product
     * @ORM\OneToOne (targetEntity="Product")
     * @ORM\JoinColumn (name="analog_id", referencedColumnName="id")
     */
    private $analog;

    /**
     * @var Collection|Product[]
     * @ORM\OneToMany (targetEntity="Product")
     */
    private $relatedProducts;

    /**
     * @var Product
     * @ORM\OneToOne (targetEntity="Product")
     * @ORM\JoinColumn (name="related_product_id", referencedColumnName="id")
     */
    private $relatedProduct;


    public function __construct()
    {
        $this->options = new ArrayCollection();
        $this->properties = new ArrayCollection();
        $this->analogs = new ArrayCollection();
        $this->relatedProducts = new ArrayCollection();
    }
}