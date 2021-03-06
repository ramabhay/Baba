<?php

namespace Abhay\ApiBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Abhay\ApiBundle\Entity\Darshan;

/**
 * Baba Repository
 */
class DarshanRepository extends EntityRepository
{
    
    public function retrieve($campaignId)
    {
        if (is_null($campaignId)) {
            return null;
        }
        $entity = $this->find($campaignId);
        if ($entity) {
            return $entity;
        }

        return null;
    }

    public function retrieveAll()
    {
        $qb = $this->createQueryBuilder('e');
        $query = $qb->getQuery();

       return $query->getResult();
    }

}
