<?php

namespace Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Entities\Color;
use Entities\Category;

class ColorRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Color::class);
    }
}