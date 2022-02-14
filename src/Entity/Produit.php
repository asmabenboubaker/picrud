<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $nom_prod;

    /**
     * @ORM\Column(type="date")
     */
    private $date_prod;

    /**
     * @ORM\Column(type="float")
     */
    private $prix_prod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descri_prod;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock_prod;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_prod;

    /**
     * @ORM\OneToMany(targetEntity=Commande::class, mappedBy="produit")
     */
    private $cmd;

    public function __construct()
    {
        $this->cmd = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProd(): ?string
    {
        return $this->nom_prod;
    }

    public function setNomProd(string $nom_prod): self
    {
        $this->nom_prod = $nom_prod;

        return $this;
    }

    public function getDateProd(): ?\DateTimeInterface
    {
        return $this->date_prod;
    }

    public function setDateProd(\DateTimeInterface $date_prod): self
    {
        $this->date_prod = $date_prod;

        return $this;
    }

    public function getPrixProd(): ?float
    {
        return $this->prix_prod;
    }

    public function setPrixProd(float $prix_prod): self
    {
        $this->prix_prod = $prix_prod;

        return $this;
    }

    public function getDescriProd(): ?string
    {
        return $this->descri_prod;
    }

    public function setDescriProd(string $descri_prod): self
    {
        $this->descri_prod = $descri_prod;

        return $this;
    }

    public function getStockProd(): ?int
    {
        return $this->stock_prod;
    }

    public function setStockProd(int $stock_prod): self
    {
        $this->stock_prod = $stock_prod;

        return $this;
    }

    public function getImageProd(): ?string
    {
        return $this->image_prod;
    }

    public function setImageProd(string $image_prod): self
    {
        $this->image_prod = $image_prod;

        return $this;
    }

    /**
     * @return Collection|Commande[]
     */
    public function getCmd(): Collection
    {
        return $this->cmd;
    }

    public function addCmd(Commande $cmd): self
    {
        if (!$this->cmd->contains($cmd)) {
            $this->cmd[] = $cmd;
            $cmd->setProduit($this);
        }

        return $this;
    }

    public function removeCmd(Commande $cmd): self
    {
        if ($this->cmd->removeElement($cmd)) {
            // set the owning side to null (unless already changed)
            if ($cmd->getProduit() === $this) {
                $cmd->setProduit(null);
            }
        }

        return $this;
    }
}
