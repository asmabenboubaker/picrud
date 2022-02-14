<?php

namespace App\Entity;

use App\Repository\CampingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CampingRepository::class)
 */
class Camping
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_camp;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_camp;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_camp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_camp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descri_camp;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbre_place_camp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_camp;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_camp;

    /**
     * @ORM\OneToMany(targetEntity=Reservationcamp::class, mappedBy="camping")
     */
    private $reservation;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCamp(): ?string
    {
        return $this->nom_camp;
    }

    public function setNomCamp(string $nom_camp): self
    {
        $this->nom_camp = $nom_camp;

        return $this;
    }

    public function getDateDebutCamp(): ?\DateTimeInterface
    {
        return $this->date_debut_camp;
    }

    public function setDateDebutCamp(\DateTimeInterface $date_debut_camp): self
    {
        $this->date_debut_camp = $date_debut_camp;

        return $this;
    }

    public function getDateFinCamp(): ?\DateTimeInterface
    {
        return $this->date_fin_camp;
    }

    public function setDateFinCamp(\DateTimeInterface $date_fin_camp): self
    {
        $this->date_fin_camp = $date_fin_camp;

        return $this;
    }

    public function getLieuCamp(): ?string
    {
        return $this->lieu_camp;
    }

    public function setLieuCamp(string $lieu_camp): self
    {
        $this->lieu_camp = $lieu_camp;

        return $this;
    }

    public function getDescriCamp(): ?string
    {
        return $this->descri_camp;
    }

    public function setDescriCamp(string $descri_camp): self
    {
        $this->descri_camp = $descri_camp;

        return $this;
    }

    public function getNbrePlaceCamp(): ?int
    {
        return $this->nbre_place_camp;
    }

    public function setNbrePlaceCamp(int $nbre_place_camp): self
    {
        $this->nbre_place_camp = $nbre_place_camp;

        return $this;
    }

    public function getImageCamp(): ?string
    {
        return $this->image_camp;
    }

    public function setImageCamp(string $image_camp): self
    {
        $this->image_camp = $image_camp;

        return $this;
    }

    public function getPrixCamp(): ?float
    {
        return $this->prix_camp;
    }

    public function setPrixCamp(float $prix_camp): self
    {
        $this->prix_camp = $prix_camp;

        return $this;
    }

    /**
     * @return Collection|Reservationcamp[]
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Reservationcamp $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation[] = $reservation;
            $reservation->setCamping($this);
        }

        return $this;
    }

    public function removeReservation(Reservationcamp $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getCamping() === $this) {
                $reservation->setCamping(null);
            }
        }

        return $this;
    }
}
