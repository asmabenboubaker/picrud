<?php

namespace App\Repository;

use App\Entity\Reservationcamp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservationcamp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservationcamp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservationcamp[]    findAll()
 * @method Reservationcamp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationcampRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservationcamp::class);
    }

    // /**
    //  * @return Reservationcamp[] Returns an array of Reservationcamp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservationcamp
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
