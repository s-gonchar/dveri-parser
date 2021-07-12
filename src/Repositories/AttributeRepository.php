<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\Attribute;

class AttributeRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Attribute::class);
    }
}