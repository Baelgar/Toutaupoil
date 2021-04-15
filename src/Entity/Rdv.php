<?php

namespace App\Entity;

use App\Repository\RdvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RdvRepository::class)
 */
class Rdv
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
    private $clientName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clientFirstName;

    /**
     * @ORM\Column(type="integer")
     */
    private $serviceId;

    /**
     * @ORM\Column(type="integer")
     */
    private $speciesId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $petName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $petRace;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClientName(): ?string
    {
        return $this->clientName;
    }

    public function setClientName(string $clientName): self
    {
        $this->clientName = $clientName;

        return $this;
    }

    public function getClientFirstName(): ?string
    {
        return $this->clientFirstName;
    }

    public function setClientFirstName(string $clientFirstName): self
    {
        $this->clientFirstName = $clientFirstName;

        return $this;
    }

    public function getServiceId(): ?int
    {
        return $this->serviceId;
    }

    public function setServiceId(int $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    public function getSpeciesId(): ?int
    {
        return $this->speciesId;
    }

    public function setSpeciesId(int $speciesId): self
    {
        $this->speciesId = $speciesId;

        return $this;
    }

    public function getPetName(): ?string
    {
        return $this->petName;
    }

    public function setPetName(string $petName): self
    {
        $this->petName = $petName;

        return $this;
    }

    public function getPetRace(): ?string
    {
        return $this->petRace;
    }

    public function setPetRace(?string $petRace): self
    {
        $this->petRace = $petRace;

        return $this;
    }
}
