<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\Accessory;

class AccessoryRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Accessory::class);
    }
}