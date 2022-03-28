<?php

namespace App\Repository;

use App\Entity\TripSearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Query;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TripSearch|null find($id, $lockMode = null, $lockVersion = null)
 * @method TripSearch|null findOneBy(array $criteria, array $orderBy = null)
 * @method TripSearch[]    findAll()
 * @method TripSearch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripSearchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TripSearch::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(TripSearch $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(TripSearch $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return TripSearch[] Returns an array of TripSearch objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TripSearch
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
   */

  
  /**
   * Méthode permettant de faire une recherche 
   * de voyages en fonction des critères de l'utilisateur 
   * 
   */
  public function searchTrip($criteria){
   
      $query = $this
      ->createQueryBuilder('t')
      ->where('t.departure =:departure')
      ->setParameter('departure',$criteria['departure'])
      
      ;
      
      return $query->getQuery()->getResult();
  }

}
