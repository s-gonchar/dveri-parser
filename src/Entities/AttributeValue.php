<?php


namespace Entities;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="attribute_values")
 */
class AttributeValue
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var ProductAttribute
     * @ORM\ManyToOne (targetEntity=ColorGroup::class)
     * @ORM\JoinColumn(name="product_attribute_id", referencedColumnName="id", nullable=true)
     */
    private $productAttribute;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $title;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $generationTitle;
    /**
     * @var bool
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isGenerationHidden;
    /**
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $position;
}