<?php

namespace App\Repository;

use App\Entity\Mallette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mallette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mallette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mallette[]    findAll()
 * @method Mallette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MalletteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mallette::class);
    }

    // /**
    //  * @return Mallette[] Returns an array of Mallette objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mallette
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
