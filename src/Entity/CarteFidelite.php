<?php

namespace App\Entity;

use App\Repository\CarteFideliteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarteFideliteRepository::class)
 */
class CarteFidelite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_fid;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_fid;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_fid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumFid(): ?int
    {
        return $this->num_fid;
    }

    public function setNumFid(int $num_fid): self
    {
        $this->num_fid = $num_fid;

        return $this;
    }

    public function getDateDebutFid(): ?\DateTimeInterface
    {
        return $this->date_debut_fid;
    }

    public function setDateDebutFid(\DateTimeInterface $date_debut_fid): self
    {
        $this->date_debut_fid = $date_debut_fid;

        return $this;
    }

    public function getDateFinFid(): ?\DateTimeInterface
    {
        return $this->date_fin_fid;
    }

    public function setDateFinFid(\DateTimeInterface $date_fin_fid): self
    {
        $this->date_fin_fid = $date_fin_fid;

        return $this;
    }
    public function __toString() {
        return $this->num_fid;
    }
}
