<?php

namespace App\Repository;

use App\Entity\MainCategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MainCategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method MainCategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method MainCategorie[]    findAll()
 * @method MainCategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MainCategorieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MainCategorie::class);
    }

    // /**
    //  * @return MainCategorie[] Returns an array of MainCategorie objects
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
    public function findOneBySomeField($value): ?MainCategorie
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
