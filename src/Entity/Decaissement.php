<?php

namespace App\Entity;

use App\Repository\DecaissementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DecaissementRepository::class)]
class Decaissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'decaissements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Financement $financement = null;

    #[ORM\Column(type: 'decimal', precision: 15, scale: 2)]
    private float $montant;

    #[ORM\Column(type: 'date')]
    private \DateTimeInterface $dateDecaissement;

    #[ORM\Column(length: 50)]
    private string $modePaiement; // virement, chèque, espèces

    #[ORM\Column(length: 50)]
    private string $statut; // validé, en_attente, rejeté

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $reference = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $justification = null;

    // Getters & Setters …

    public function getId(): ?int { return $this->id; }

    public function getFinancement(): ?Financement { return $this->financement; }
    public function setFinancement(Financement $financement): self { $this->financement = $financement; return $this; }

    public function getMontant(): float { return $this->montant; }
    public function setMontant(float $montant): self { $this->montant = $montant; return $this; }

    public function getDateDecaissement(): \DateTimeInterface { return $this->dateDecaissement; }
    public function setDateDecaissement(\DateTimeInterface $dateDecaissement): self { $this->dateDecaissement = $dateDecaissement; return $this; }

    public function getModePaiement(): string { return $this->modePaiement; }
    public function setModePaiement(string $modePaiement): self { $this->modePaiement = $modePaiement; return $this; }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): self { $this->statut = $statut; return $this; }

    public function getReference(): ?string { return $this->reference; }
    public function setReference(?string $reference): self { $this->reference = $reference; return $this; }

    public function getJustification(): ?string { return $this->justification; }
    public function setJustification(?string $justification): self { $this->justification = $justification; return $this; }
}
