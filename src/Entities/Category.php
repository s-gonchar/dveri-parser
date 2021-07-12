<?php

namespace Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Repositories\CategoryNestedTreeRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(
 *     name="ategories",
 * )
 * @ORM\Entity(repositoryClass=CategoryNestedTreeRepository::class)
 */
class Category
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(length=64)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(length=64)
     */
    private $slug;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="ResourceCategory", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $parent;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(type="integer", nullable=true)
     */
    private $root;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $level;

    /**
     * @ORM\OneToMany(targetEntity="ResourceCategory", mappedBy="parent")
     */
    private $children;

    /**
     * @var Collection|Product[]
     * @ORM\OneToMany (targetEntity="Product", mappedBy="category")
     */
    private $products;


    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->products = new ArrayCollection();
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getChildren()
    {
        return $this->children;
    }

    public function getLeft()
    {
        return $this->lft;
    }

    public function getRight()
    {
        return $this->rgt;
    }

    public function __toString()
    {
        return (string) $this->getTitle();
    }

    /**
     * @return int
     */
    public function getShowcaseId()
    {
        return $this->showcaseId;
    }

    /**
     * @param int $showcaseId
     */
    public function setShowcaseId($showcaseId): void
    {
        $this->showcaseId = $showcaseId;
    }

    public static function create($title, $description, int $showcaseId, ?ResourceCategory $parent = null): self
    {
        $resourceCategory = new self();
        $resourceCategory->setTitle($title);
        $resourceCategory->setDescription($description);
        $resourceCategory->setParent($parent);
        $resourceCategory->setShowcaseId($showcaseId);

        return $resourceCategory;
    }
}