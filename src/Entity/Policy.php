<?php

namespace App\Entity;

use App\Repository\PolicyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PolicyRepository::class)]
class Policy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $policyStatus = null;

    #[ORM\Column(length: 255)]
    private ?string $policyNo = null;

    #[ORM\Column(length: 255)]
    private ?string $policyType = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $policyEffectiveDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $policyExpirationDate = null;

    #[ORM\Column(nullable: true)]
    private ?array $policyHolder = null;

    #[ORM\Column(nullable: true)]
    private ?array $drivers = null;

    #[ORM\Column(nullable: true)]
    private ?array $vehicles = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPolicyStatus(): ?string
    {
        return $this->policyStatus;
    }

    public function setPolicyStatus(string $policyStatus): static
    {
        $this->policyStatus = $policyStatus;

        return $this;
    }

    public function getPolicyNo(): ?string
    {
        return $this->policyNo;
    }

    public function setPolicyNo(string $policyNo): static
    {
        $this->policyNo = $policyNo;

        return $this;
    }

    public function getPolicyType(): ?string
    {
        return $this->policyType;
    }

    public function setPolicyType(string $policyType): static
    {
        $this->policyType = $policyType;

        return $this;
    }

    public function getPolicyEffectiveDate(): ?\DateTimeInterface
    {
        return $this->policyEffectiveDate;
    }

    public function setPolicyEffectiveDate(\DateTimeInterface $policyEffectiveDate): static
    {
        $this->policyEffectiveDate = $policyEffectiveDate;

        return $this;
    }

    public function getPolicyExpirationDate(): ?\DateTimeInterface
    {
        return $this->policyExpirationDate;
    }

    public function setPolicyExpirationDate(\DateTimeInterface $policyExpirationDate): static
    {
        $this->policyExpirationDate = $policyExpirationDate;

        return $this;
    }

    public function getPolicyHolder(): ?array
    {
        return $this->policyHolder;
    }

    public function setPolicyHolder(?array $policyHolder): static
    {
        $this->policyHolder = $policyHolder;

        return $this;
    }

    public function getDrivers(): ?array
    {
        return $this->drivers;
    }

    public function setDrivers(?array $drivers): static
    {
        $this->drivers = $drivers;

        return $this;
    }

    public function getVehicles(): ?array
    {
        return $this->vehicles;
    }

    public function setVehicles(?array $vehicles): static
    {
        $this->vehicles = $vehicles;

        return $this;
    }
}
