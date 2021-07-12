<?php


namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="options")
 */
class Option
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
     * @var Collection|AttributeValue[]
     * @ORM\OneToMany(targetEntity="AttributeValue")
     */
    private $attributeValues;

    public function __construct()
    {
        $this->attributeValues = new ArrayCollection();
    }
}