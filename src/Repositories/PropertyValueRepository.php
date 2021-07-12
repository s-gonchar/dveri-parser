<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\PropertyValue;

class PropertyValueRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(PropertyValue::class);
    }
}