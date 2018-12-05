<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function getall_paginat($page)
    {
        $qbd = $this->createQueryBuilder('task')
        ->setFirstResult(($page-1)*5)
        ->setMaxResults(5);
        
        $data = $qbd->getQuery()->getResult();
        
        
        
        return $data;
        
    }
    
}
