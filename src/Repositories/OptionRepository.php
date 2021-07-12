<?php


namespace Repositories;


use Doctrine\ORM\EntityManagerInterface;
use Entities\Option;

class OptionRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Option::class);
    }
}