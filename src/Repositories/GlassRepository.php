<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\Glass;

class GlassRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Glass::class);
    }

}