<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\ProductAttribute;

class ProductAttributeRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(ProductAttribute::class);
    }
}