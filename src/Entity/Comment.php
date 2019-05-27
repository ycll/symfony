<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $autorName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $context;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAutorName(): ?string
    {
        return $this->autorName;
    }

    public function setAutorName(string $autorName): self
    {
        $this->autorName = $autorName;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(?string $context): self
    {
        $this->context = $context;

        return $this;
    }
}
