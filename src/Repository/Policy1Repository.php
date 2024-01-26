<?php

namespace App\Repository;

use App\Entity\Policy1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Policy1>
 *
 * @method Policy1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Policy1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Policy1[]    findAll()
 * @method Policy1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Policy1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Policy1::class);
    }

//    /**
//     * @return Policy1[] Returns an array of Policy1 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Policy1
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
