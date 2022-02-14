<?php

namespace App\Repository;

use App\Entity\Campingg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Campingg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Campingg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Campingg[]    findAll()
 * @method Campingg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CampinggRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Campingg::class);
    }

    // /**
    //  * @return Campingg[] Returns an array of Campingg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Campingg
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
