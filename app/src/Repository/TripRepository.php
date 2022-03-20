<?php

namespace App\Repository;

use App\Entity\Trip;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\TripSearch;

/**
 * @method Trip|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trip|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trip[]    findAll()
 * @method Trip[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TripRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trip::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Trip $entity, bool $flush = true): void
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
    public function remove(Trip $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
     * @return Trip[] Returns an array of Trip objects
      */
    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            #->andWhere('t.userTripOwner = :val')
            #->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    /// Méthode permettant de trouver les derniers 
    // voyages créés par l'utilisateur 
    public function findLatest(): array
    {
        return $this->createQueryBuilder('t')
        ->orderBy('t.id', 'ASC')
        ->setMaxResults(4)
        ->getQuery()
        ->getResult() 
    ;
    }

     /**
     * Méthode qui va renvoyer les voyages 
     * correspondant à la liste des critères
     * return Trip[]
     */
    public function findSearch(TripSearch $search):array{
      //  return $this->findAll();
      $query = $this
      ->createQueryBuilder('t')

   ///   ->join('trip.departure','d')
     /// ->join('trip.destination','des')
      /// tcp = travel comapion number 
     /// ->join('trip.travelCompanionNumber','tcp')
      ;
  
      return $query->getQuery()->getResult();
    }

    

    /*
    public function findOneBySomeField($value): ?Trip
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
       /* return $this
        ->createQueryBuilder('t')
        ->leftJoin('t.id','id')
        ->where('t.departure =:departure')
        ->setParameter('departure',$criteria['departure'])
        ->andWhere('t.destination:=destination')
        ->setParameter('destination',$criteria['destination'])
        ->andWhere('t.travelCompanionNumber:=travelCompanionNumber')
        ->setParameter('travelCompanionNumber',$criteria['travelCompanionNumber'])
        ->getQuery()
        ->getResult()
        ;*/
        $query = $this
        ->createQueryBuilder('t')
        ->where('t.departure =:departure')
        ->setParameter('departure',$criteria['departure'])
        
        ;
        
        return $query->getQuery()->getResult();
    }
}
