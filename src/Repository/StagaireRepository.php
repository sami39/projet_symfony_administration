<?php

namespace App\Repository;

use App\Entity\Stagaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Stagaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stagaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stagaire[]    findAll()
 * @method Stagaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StagaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stagaire::class);
    }

    // /**
    //  * @return Stagaire[] Returns an array of Stagaire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Stagaire
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
