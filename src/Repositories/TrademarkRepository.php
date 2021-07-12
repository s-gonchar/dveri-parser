<?php

namespace Repositories;

use Doctrine\ORM\EntityManagerInterface;
use Entities\Trademark;

class TrademarkRepository extends AbstractRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager);
        $this->repo = $entityManager->getRepository(Trademark::class);
    }
}