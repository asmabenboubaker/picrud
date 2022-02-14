<?php

namespace App\Repository;

use App\Entity\NomCamp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NomCamp|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomCamp|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomCamp[]    findAll()
 * @method NomCamp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomCampRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NomCamp::class);
    }

    // /**
    //  * @return NomCamp[] Returns an array of NomCamp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NomCamp
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
