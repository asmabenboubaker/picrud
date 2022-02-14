<?php

namespace App\Entity;

use App\Repository\ForumRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ForumRepository::class)
 */
class Forum
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
    private $sujet_forum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descri_forum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_forum;

    /**
     * @ORM\OneToMany(targetEntity=Cmt::class, mappedBy="forum")
     */
    private $cmt;

    public function __construct()
    {
        $this->cmt = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujetForum(): ?string
    {
        return $this->sujet_forum;
    }

    public function setSujetForum(string $sujet_forum): self
    {
        $this->sujet_forum = $sujet_forum;

        return $this;
    }

    public function getDescriForum(): ?string
    {
        return $this->descri_forum;
    }

    public function setDescriForum(string $descri_forum): self
    {
        $this->descri_forum = $descri_forum;

        return $this;
    }

    public function getImageForum(): ?string
    {
        return $this->image_forum;
    }

    public function setImageForum(string $image_forum): self
    {
        $this->image_forum = $image_forum;

        return $this;
    }

    /**
     * @return Collection|Cmt[]
     */
    public function getCmt(): Collection
    {
        return $this->cmt;
    }

    public function addCmt(Cmt $cmt): self
    {
        if (!$this->cmt->contains($cmt)) {
            $this->cmt[] = $cmt;
            $cmt->setForum($this);
        }

        return $this;
    }

    public function removeCmt(Cmt $cmt): self
    {
        if ($this->cmt->removeElement($cmt)) {
            // set the owning side to null (unless already changed)
            if ($cmt->getForum() === $this) {
                $cmt->setForum(null);
            }
        }

        return $this;
    }
}
