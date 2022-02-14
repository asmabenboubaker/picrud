<?php

namespace App\Entity;

use App\Repository\ReservationvoyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationvoyRepository::class)
 */
class Reservationvoy
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_reser_voy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReserVoy(): ?\DateTimeInterface
    {
        return $this->date_reser_voy;
    }

    public function setDateReserVoy(\DateTimeInterface $date_reser_voy): self
    {
        $this->date_reser_voy = $date_reser_voy;

        return $this;
    }
}
