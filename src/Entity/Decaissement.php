<?php

namespace App\Entity;

use App\Repository\DecaissementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DecaissementRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'decaissements')]
class Decaissement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $reference = null;

    #[ORM\ManyToOne(targetEntity: Financement::class, inversedBy: 'decaissements')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le financement est obligatoire')]
    private ?Financement $financement = null;

    #[ORM\ManyToOne(targetEntity: Project::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le projet est obligatoire')]
    private ?Project $projet = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le bénéficiaire est obligatoire')]
    #[Assert\Length(max: 255)]
    private ?string $beneficiaire = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    #[Assert\NotBlank(message: 'Le montant est obligatoire')]
    #[Assert\Positive(message: 'Le montant doit être positif')]
    private ?string $montant = null;

    #[ORM\Column(length: 3)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['XAF', 'EUR', 'USD'], message: 'Devise non valide')]
    private string $devise = 'XAF';

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date de demande est obligatoire')]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateValidation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateExecution = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['virement', 'cheque', 'paiement_direct', 'autre'], message: 'Mode de paiement non valide')]
    private string $modePaiement = 'virement';

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $ligneBudgetaire = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private string $statut = 'en_attente';

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pieceJustificative = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $validePar = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $executePar = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $createdBy = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $updatedBy = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTime();
        }
        $this->updatedAt = new \DateTime();
        
        // Génération automatique de la référence si non définie
        if ($this->reference === null) {
            $this->generateReference();
        }
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTime();
    }

    private function generateReference(): void
    {
        $year = date('Y');
        $this->reference = sprintf('DEC-%s-%s', $year, strtoupper(substr(uniqid(), -8)));
    }

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;
        return $this;
    }

    public function getFinancement(): ?Financement
    {
        return $this->financement;
    }

    public function setFinancement(?Financement $financement): static
    {
        $this->financement = $financement;
        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->projet;
    }

    public function setProject(?Project $projet): static
    {
        $this->projet = $projet;
        return $this;
    }

    public function getBeneficiaire(): ?string
    {
        return $this->beneficiaire;
    }

    public function setBeneficiaire(string $beneficiaire): static
    {
        $this->beneficiaire = $beneficiaire;
        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;
        return $this;
    }

    public function getDevise(): string
    {
        return $this->devise;
    }

    public function setDevise(string $devise): static
    {
        $this->devise = $devise;
        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): static
    {
        $this->dateDemande = $dateDemande;
        return $this;
    }

    public function getDateValidation(): ?\DateTimeInterface
    {
        return $this->dateValidation;
    }

    public function setDateValidation(?\DateTimeInterface $dateValidation): static
    {
        $this->dateValidation = $dateValidation;
        return $this;
    }

    public function getDateExecution(): ?\DateTimeInterface
    {
        return $this->dateExecution;
    }

    public function setDateExecution(?\DateTimeInterface $dateExecution): static
    {
        $this->dateExecution = $dateExecution;
        return $this;
    }

    public function getModePaiement(): string
    {
        return $this->modePaiement;
    }

    public function setModePaiement(string $modePaiement): static
    {
        $this->modePaiement = $modePaiement;
        return $this;
    }

    public function getLigneBudgetaire(): ?string
    {
        return $this->ligneBudgetaire;
    }

    public function setLigneBudgetaire(?string $ligneBudgetaire): static
    {
        $this->ligneBudgetaire = $ligneBudgetaire;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    public function getPieceJustificative(): ?string
    {
        return $this->pieceJustificative;
    }

    public function setPieceJustificative(?string $pieceJustificative): static
    {
        $this->pieceJustificative = $pieceJustificative;
        return $this;
    }

    public function getValidePar(): ?string
    {
        return $this->validePar;
    }

    public function setValidePar(?string $validePar): static
    {
        $this->validePar = $validePar;
        return $this;
    }

    public function getExecutePar(): ?string
    {
        return $this->executePar;
    }

    public function setExecutePar(?string $executePar): static
    {
        $this->executePar = $executePar;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): static
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): static
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    // Méthodes utilitaires

    public function getMontantFormate(): string
    {
        return number_format((float) $this->montant, 0, ',', ' ') . ' ' . $this->devise;
    }

    public function getStatutLabel(): string
    {
        return match($this->statut) {
            'en_attente' => 'En attente',
            'valide' => 'Validé',
            'execute' => 'Exécuté',
            'rejete' => 'Rejeté',
            'annule' => 'Annulé',
            default => 'Inconnu'
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match($this->statut) {
            'en_attente' => 'warning',
            'valide' => 'info',
            'execute' => 'success',
            'rejete' => 'danger',
            'annule' => 'secondary',
            default => 'secondary'
        };
    }

    public function getModePaiementLabel(): string
    {
        return match($this->modePaiement) {
            'virement' => 'Virement Bancaire',
            'cheque' => 'Chèque Trésor',
            'paiement_direct' => 'Paiement Direct Bailleur',
            'autre' => 'Autre',
            default => 'Non défini'
        };
    }

    public function isModifiable(): bool
    {
        return in_array($this->statut, ['en_attente', 'rejete']);
    }

    public function isAnnulable(): bool
    {
        return in_array($this->statut, ['en_attente', 'valide']);
    }

    public function __toString(): string
    {
        return $this->reference ?? 'Nouveau décaissement';
    }
}
