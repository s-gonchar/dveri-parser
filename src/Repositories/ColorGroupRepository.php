<?php

namespace Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Entities\ColorGroup;

class ColorGroupRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(ColorGroup::class);
    }
}