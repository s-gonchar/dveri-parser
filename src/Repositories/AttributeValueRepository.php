<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\AttributeValue;

class AttributeValueRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(AttributeValue::class);
    }
}