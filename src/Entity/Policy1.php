<?php

namespace App\Entity;

use App\Repository\Policy1Repository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Policy1Repository::class)]
class Policy1
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 255)]
    private ?int $idUser = null;

    #[ORM\Column(length: 255)]
    private ?string $policyNo = null;

    #[ORM\Column(length: 255)]
    private ?string $policyStatus = null;

    #[ORM\Column(length: 255)]
    private ?string $policyType = null;

    #[ORM\Column(length: 255)]
    private ?string $policyEffectiveDate = null;
        
    #[ORM\Column(length: 255)]
    private ?string $policyExpirationDate = null;
    
    #[ORM\Column(length: 255)]
    private ?string $policyHolder = null;
    
    #[ORM\Column(length: 255)]
    private ?string $drivers = null;
    
    #[ORM\Column(length: 255)]
    private ?string $vehicles = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getIDUser(): ?int
    {
        return $this->idUser;
    }
    
    public function setIDUser(int $idUser): static
    {
        $this->idUser = $idUser;

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

    public function getPolicyStatus(): ?string
    {
        return $this->policyStatus;
    }

    public function setPolicyStatus(string $policyStatus): static
    {
        $this->policyStatus = $policyStatus;

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

    public function getPolicyEffectiveDate(): ?string
    {
        return $this->policyEffectiveDate;
    }

    public function setPolicyEffectiveDate(string $policyEffectiveDate): static
    {
        $this->policyEffectiveDate = $policyEffectiveDate;

        return $this;
    }
    
    public function getPolicyExpirationDate(): ?string
    {
        return $this->policyExpirationDate;
    }
    
    public function setPolicyExpirationDate(string $policyExpirationDate): static
    {
        $this->policyExpirationDate = $policyExpirationDate;

        return $this;
    }
    
    public function getPolicyHolder(): ?string
    {
        return $this->policyHolder;
    }
    
    public function setPolicyHolder(string $policyHolder): static
    {
        $this->policyHolder = $policyHolder;

        return $this;
    }
    
    public function getDrivers(): ?string
    {
        return $this->drivers;
    }
    
    public function setDrivers(string $drivers): static
    {
        $this->drivers = $drivers;

        return $this;
    }
    
    public function getVehicles(): ?string
    {
        return $this->vehicles;
    }
    
    public function setVehicles(string $vehicles): static
    {
        $this->vehicles = $vehicles;

        return $this;
    }
    
}
