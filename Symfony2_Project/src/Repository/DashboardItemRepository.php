<?php

namespace App\Repository;

use App\Entity\DashboardItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DashboardItem>
 *
 * @method DashboardItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method DashboardItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method DashboardItem[]    findAll()
 * @method DashboardItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashboardItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DashboardItem::class);
    }

//    /**
//     * @return DashboardItem[] Returns an array of DashboardItem objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DashboardItem
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
