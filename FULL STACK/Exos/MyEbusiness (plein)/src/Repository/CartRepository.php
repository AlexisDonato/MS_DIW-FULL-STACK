<?php

namespace App\Repository;

use App\Entity\Cart;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Common\Collections\Collection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Cart>
 *
 * @method Cart|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cart|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cart[]    findAll()
 * @method Cart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cart::class);
    }

    public function add(Cart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Cart $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Cart[] Returns an array of Cart objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    public function findOneByUser($client_id): ?Cart
    {
        return $this->createQueryBuilder('c')
        ->where('c.user = :val')
        ->andWhere('c.Validated = 0')
        ->setParameter('val', $client_id)
        ->getQuery()
        ->getOneOrNullResult();
    }

    public function findAllByUser($client_id): ?array
    {
        return $this->createQueryBuilder('c')
        ->where('c.user = :val')
        ->andWhere('c.Validated = 1')
        ->setParameter('val', $client_id)
        ->getQuery()
        ->getResult();
    }

    public function findAllUsers()
    {
        return $this->createQueryBuilder('c')
        ->join(User::class, 'u', 'WITH', 'c.user = u.id')
        ->where('c.Validated = 1')
        ->getQuery()
        ->getResult();
    }
}