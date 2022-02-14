<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur
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
    private $mot_passe_utili;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_utili;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tel_utili;

    /**
     * @ORM\Column(type="integer")
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     */
    private $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbre_place;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = ".")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity=CarteFidelite::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $carteFid;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotPasseUtili(): ?string
    {
        return $this->mot_passe_utili;
    }

    public function setMotPasseUtili(?string $mot_passe_utili): self
    {
        $this->mot_passe_utili = $mot_passe_utili;

        return $this;
    }

    public function getNomUtili(): ?string
    {
        return $this->nom_utili;
    }

    public function setNomUtili(?string $nom_utili): self
    {
        $this->nom_utili = $nom_utili;

        return $this;
    }

    public function getTelUtili(): ?int
    {
        return $this->tel_utili;
    }

    public function setTelUtili(?int $tel_utili): self
    {
        $this->tel_utili = $tel_utili;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNbrePlace(): ?int
    {
        return $this->nbre_place;
    }

    public function setNbrePlace(?int $nbre_place): self
    {
        $this->nbre_place = $nbre_place;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCarteFid(): ?CarteFidelite
    {
        return $this->carteFid;
    }

    public function setCarteFid(CarteFidelite $carteFid): self
    {
        $this->carteFid = $carteFid;

        return $this;
    }



}
