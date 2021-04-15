<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
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
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2, nullable=true)
     */
    private $promotionPrice;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $limitDateStart;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $limitDateEnd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPromotionPrice(): ?string
    {
        return $this->promotionPrice;
    }

    public function setPromotionPrice(?string $promotionPrice): self
    {
        $this->promotionPrice = $promotionPrice;

        return $this;
    }

    public function getLimitDateStart(): ?\DateTimeInterface
    {
        return $this->limitDateStart;
    }

    public function setLimitDateStart(?\DateTimeInterface $limitDateStart): self
    {
        $this->limitDateStart = $limitDateStart;

        return $this;
    }

    public function getLimitDateEnd(): ?\DateTimeInterface
    {
        return $this->limitDateEnd;
    }

    public function setLimitDateEnd(?\DateTimeInterface $limitDateEnd): self
    {
        $this->limitDateEnd = $limitDateEnd;

        return $this;
    }
}
