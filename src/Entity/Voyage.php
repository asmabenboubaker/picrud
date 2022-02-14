<?php

namespace App\Entity;

use App\Repository\VoyageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoyageRepository::class)
 */
class Voyage
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
    private $date_debut_voy;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_voy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descri_voy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination_voy;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_place_voy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_voy;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_voy;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebutVoy(): ?\DateTimeInterface
    {
        return $this->date_debut_voy;
    }

    public function setDateDebutVoy(\DateTimeInterface $date_debut_voy): self
    {
        $this->date_debut_voy = $date_debut_voy;

        return $this;
    }

    public function getDateFinVoy(): ?\DateTimeInterface
    {
        return $this->date_fin_voy;
    }

    public function setDateFinVoy(\DateTimeInterface $date_fin_voy): self
    {
        $this->date_fin_voy = $date_fin_voy;

        return $this;
    }

    public function getDescriVoy(): ?string
    {
        return $this->descri_voy;
    }

    public function setDescriVoy(string $descri_voy): self
    {
        $this->descri_voy = $descri_voy;

        return $this;
    }

    public function getDestinationVoy(): ?string
    {
        return $this->destination_voy;
    }

    public function setDestinationVoy(string $destination_voy): self
    {
        $this->destination_voy = $destination_voy;

        return $this;
    }

    public function getNbrePlaceVoy(): ?int
    {
        return $this->nbre_place_voy;
    }

    public function setNbrePlaceVoy(int $nbre_place_voy): self
    {
        $this->nbre_place_voy = $nbre_place_voy;

        return $this;
    }

    public function getImageVoy(): ?string
    {
        return $this->image_voy;
    }

    public function setImageVoy(string $image_voy): self
    {
        $this->image_voy = $image_voy;

        return $this;
    }

    public function getPrixVoy(): ?float
    {
        return $this->prix_voy;
    }

    public function setPrixVoy(float $prix_voy): self
    {
        $this->prix_voy = $prix_voy;

        return $this;
    }
}
