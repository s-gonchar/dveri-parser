<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\Property;

class PropertyRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Property::class);
    }
}