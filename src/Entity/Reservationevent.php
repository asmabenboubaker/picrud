<?php

namespace App\Entity;

use App\Repository\ReservationeventRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationeventRepository::class)
 */
class Reservationevent
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
    private $date_reser_event;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReserEvent(): ?\DateTimeInterface
    {
        return $this->date_reser_event;
    }

    public function setDateReserEvent(\DateTimeInterface $date_reser_event): self
    {
        $this->date_reser_event = $date_reser_event;

        return $this;
    }
}
