<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="nom d'event champ obligatoire")
     */
    private $nom_event;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut_event;

    /**
     * @ORM\Column(type="date")
     */
    private $date_fin_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_event;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descri_event;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_event;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="event")
     */
    private $categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nom_event;
    }

    public function setNomEvent(string $nom_event): self
    {
        $this->nom_event = $nom_event;

        return $this;
    }

    public function getDateDebutEvent(): ?\DateTimeInterface
    {
        return $this->date_debut_event;
    }

    public function setDateDebutEvent(\DateTimeInterface $date_debut_event): self
    {
        $this->date_debut_event = $date_debut_event;

        return $this;
    }

    public function getDateFinEvent(): ?\DateTimeInterface
    {
        return $this->date_fin_event;
    }

    public function setDateFinEvent(\DateTimeInterface $date_fin_event): self
    {
        $this->date_fin_event = $date_fin_event;

        return $this;
    }

    public function getLieuEvent(): ?string
    {
        return $this->lieu_event;
    }

    public function setLieuEvent(string $lieu_event): self
    {
        $this->lieu_event = $lieu_event;

        return $this;
    }

    public function getDescriEvent(): ?string
    {
        return $this->descri_event;
    }

    public function setDescriEvent(?string $descri_event): self
    {
        $this->descri_event = $descri_event;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrixEvent(): ?float
    {
        return $this->prix_event;
    }

    public function setPrixEvent(float $prix_event): self
    {
        $this->prix_event = $prix_event;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
