<?php

namespace App\Entity;

use App\Repository\TripSearchRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Trip;
/// Entité permettant de rechercher un voyage 
/**
 * @ORM\Entity(repositoryClass=TripSearchRepository::class)
 */
class TripSearch
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $departure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $travelCompanionNumber;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(?string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getTravelCompanionNumber(): ?string
    {
        return $this->travelCompanionNumber;
    }

    public function setTravelCompanionNumber(?string $travelCompanionNumber): self
    {
        $this->travelCompanionNumber = $travelCompanionNumber;

        return $this;
    }
}
