<?php

namespace Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Entities\Category;
use Gedmo\Tree\Entity\Repository\NestedTreeRepository;

class CategoryNestedTreeRepository extends NestedTreeRepository
{
    public function __construct(EntityManagerInterface $manager)
    {
        parent::__construct($manager, $manager->getClassMetadata(Category::class));
    }
}