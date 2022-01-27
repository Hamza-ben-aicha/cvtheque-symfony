<?php

namespace App\Repository;

use App\Entity\GeneratedCv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GeneratedCv|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeneratedCv|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeneratedCv[]    findAll()
 * @method GeneratedCv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneratedCvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GeneratedCv::class);
    }

    // /**
    //  * @return GeneratedCv[] Returns an array of GeneratedCv objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GeneratedCv
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
