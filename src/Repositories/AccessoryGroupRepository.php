<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\AccessoryGroup;


class AccessoryGroupRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(AccessoryGroup::class);
    }
}