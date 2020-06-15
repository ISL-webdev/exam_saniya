<?php

namespace App\Repository;

use App\Entity\Affiches;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Affiches|null find($id, $lockMode = null, $lockVersion = null)
 * @method Affiches|null findOneBy(array $criteria, array $orderBy = null)
 * @method Affiches[]    findAll()
 * @method Affiches[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AffichesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Affiches::class);
    }

    // /**
    //  * @return Affiches[] Returns an array of Affiches objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Affiches
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
