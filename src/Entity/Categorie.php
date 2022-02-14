<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $nom_categorie;

    /**
     * @ORM\OneToMany(targetEntity=Event::class, mappedBy="categorie")
     */
    private $event;

    public function __construct()
    {
        $this->event = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nom_categorie;
    }

    public function setNomCategorie(string $nom_categorie): self
    {
        $this->nom_categorie = $nom_categorie;

        return $this;
    }

    /**
     * @return Collection|event[]
     */
    public function getEvent(): Collection
    {
        return $this->event;
    }

    public function addEvent(event $event): self
    {
        if (!$this->event->contains($event)) {
            $this->event[] = $event;
            $event->setCategorie($this);
        }

        return $this;
    }

    public function removeEvent(event $event): self
    {
        if ($this->event->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getCategorie() === $this) {
                $event->setCategorie(null);
            }
        }

        return $this;
    }
    public function __toString() {
        return $this->nom_categorie;
    }
}
