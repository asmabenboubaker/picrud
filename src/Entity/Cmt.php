<?php

namespace App\Entity;

use App\Repository\CmtRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CmtRepository::class)
 */
class Cmt
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
    private $descri_cmt;

    /**
     * @ORM\ManyToOne(targetEntity=Forum::class, inversedBy="cmt")
     */
    private $forum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriCmt(): ?string
    {
        return $this->descri_cmt;
    }

    public function setDescriCmt(?string $descri_cmt): self
    {
        $this->descri_cmt = $descri_cmt;

        return $this;
    }

    public function getForum(): ?Forum
    {
        return $this->forum;
    }

    public function setForum(?Forum $forum): self
    {
        $this->forum = $forum;

        return $this;
    }
}
