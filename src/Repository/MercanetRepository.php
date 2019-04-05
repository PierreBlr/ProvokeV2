<?php

namespace App\Repository;

use App\Entity\Mercanet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Mercanet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mercanet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mercanet[]    findAll()
 * @method Mercanet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MercanetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Mercanet::class);
    }

    // /**
    //  * @return Mercanet[] Returns an array of Mercanet objects
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
    public function findOneBySomeField($value): ?Mercanet
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
