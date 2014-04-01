<?php

namespace Dwr\FrontendBundle\Entity;

use Doctrine\ORM\EntityRepository;

class CustomRepository extends EntityRepository
{

    /**
     * 
     * @param Entity $entity
     * @return type
     */
    public function findAllPartsForEntity($entity)
    {
        //SELECT p FROM DwrFrontendBundle:Part p INNER JOIN DwrFrontendBundle:Word e WITH p.id = e.part GROUP BY p.id
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('p')
                ->from('DwrFrontendBundle:Part', 'p')
                ->innerJoin($entity, 'e', 'WITH', 'p.id = e.part')
                ->groupBy('p.id')
                ->orderBy('p.name');

        return $qb->getQuery()->getResult();
    }

}
