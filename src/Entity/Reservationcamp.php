<?php

namespace App\Entity;

use App\Repository\ReservationcampRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationcampRepository::class)
 */
class Reservationcamp
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
    private $date_reserc_camp;

    /**
     * @ORM\ManyToOne(targetEntity=Camping::class, inversedBy="reservation")
     */
    private $camping;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateResercCamp(): ?\DateTimeInterface
    {
        return $this->date_reserc_camp;
    }

    public function setDateResercCamp(\DateTimeInterface $date_reserc_camp): self
    {
        $this->date_reserc_camp = $date_reserc_camp;

        return $this;
    }

    public function getCamping(): ?Camping
    {
        return $this->camping;
    }

    public function setCamping(?Camping $camping): self
    {
        $this->camping = $camping;

        return $this;
    }
}
