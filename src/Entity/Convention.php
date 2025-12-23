<?php

namespace App\Entity;

use App\Repository\ConventionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ConventionRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'conventions')]
class Convention
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Financement::class, inversedBy: 'conventions')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le financement est obligatoire')]
    private ?Financement $financement = null;

    #[ORM\Column(length: 100, unique: true)]
    #[Assert\NotBlank(message: 'Le code de référence est obligatoire')]
    #[Assert\Length(max: 100)]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'intitulé est obligatoire')]
    #[Assert\Length(max: 255)]
    private ?string $intitule = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['don', 'pret', 'mixte', 'c2d', 'autre'], message: 'Type de convention non valide')]
    private string $type = 'don';

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le partenaire est obligatoire')]
    private ?string $partenaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $agenceExecution = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    #[Assert\NotBlank(message: 'Le montant est obligatoire')]
    #[Assert\Positive(message: 'Le montant doit être positif')]
    private ?string $montantGlobal = null;

    #[ORM\Column(length: 3)]
    #[Assert\NotBlank]
    #[Assert\Choice(choices: ['XAF', 'EUR', 'USD'], message: 'Devise non valide')]
    private string $devise = 'XAF';

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $contrepartieEtat = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date de signature est obligatoire')]
    private ?\DateTimeInterface $dateSignature = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateMiseEnVigueur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateLimiteDecaissement = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private string $statut = 'en_cours';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $documentConvention = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

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
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updatedAt = new \DateTime();
    }

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): static
    {
        $this->intitule = $intitule;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getPartenaire(): ?string
    {
        return $this->partenaire;
    }

    public function setPartenaire(string $partenaire): static
    {
        $this->partenaire = $partenaire;
        return $this;
    }

    public function getAgenceExecution(): ?string
    {
        return $this->agenceExecution;
    }

    public function setAgenceExecution(?string $agenceExecution): static
    {
        $this->agenceExecution = $agenceExecution;
        return $this;
    }

    public function getMontantGlobal(): ?string
    {
        return $this->montantGlobal;
    }

    public function setMontantGlobal(string $montantGlobal): static
    {
        $this->montantGlobal = $montantGlobal;
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

    public function getContrepartieEtat(): ?string
    {
        return $this->contrepartieEtat;
    }

    public function setContrepartieEtat(?string $contrepartieEtat): static
    {
        $this->contrepartieEtat = $contrepartieEtat;
        return $this;
    }

    public function getDateSignature(): ?\DateTimeInterface
    {
        return $this->dateSignature;
    }

    public function setDateSignature(\DateTimeInterface $dateSignature): static
    {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    public function getDateMiseEnVigueur(): ?\DateTimeInterface
    {
        return $this->dateMiseEnVigueur;
    }

    public function setDateMiseEnVigueur(?\DateTimeInterface $dateMiseEnVigueur): static
    {
        $this->dateMiseEnVigueur = $dateMiseEnVigueur;
        return $this;
    }

    public function getDateLimiteDecaissement(): ?\DateTimeInterface
    {
        return $this->dateLimiteDecaissement;
    }

    public function setDateLimiteDecaissement(?\DateTimeInterface $dateLimiteDecaissement): static
    {
        $this->dateLimiteDecaissement = $dateLimiteDecaissement;
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

    public function getDocumentConvention(): ?string
    {
        return $this->documentConvention;
    }

    public function setDocumentConvention(?string $documentConvention): static
    {
        $this->documentConvention = $documentConvention;
        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): static
    {
        $this->observations = $observations;
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
        return number_format((float) $this->montantGlobal, 0, ',', ' ') . ' ' . $this->devise;
    }

    public function getContrepartieEtatFormate(): string
    {
        if ($this->contrepartieEtat === null) {
            return '0 FCFA';
        }
        return number_format((float) $this->contrepartieEtat, 0, ',', ' ') . ' FCFA';
    }

    public function getTypeLabel(): string
    {
        return match($this->type) {
            'don' => 'Don',
            'pret' => 'Prêt concessionnel',
            'mixte' => 'Financement mixte',
            'c2d' => 'Contrat de Désendettement (C2D)',
            'autre' => 'Autre',
            default => 'Non défini'
        };
    }

    public function getStatutLabel(): string
    {
        return match($this->statut) {
            'en_cours' => 'En cours',
            'cloture' => 'Clôturée',
            'suspendue' => 'Suspendue',
            'annulee' => 'Annulée',
            default => 'Inconnu'
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match($this->statut) {
            'en_cours' => 'success',
            'cloture' => 'secondary',
            'suspendue' => 'warning',
            'annulee' => 'danger',
            default => 'secondary'
        };
    }

    public function isActive(): bool
    {
        return $this->statut === 'en_cours';
    }

    public function isModifiable(): bool
    {
        return in_array($this->statut, ['en_cours', 'suspendue']);
    }

    public function getDureeEnMois(): ?int
    {
        if ($this->dateSignature === null || $this->dateLimiteDecaissement === null) {
            return null;
        }

        $diff = $this->dateSignature->diff($this->dateLimiteDecaissement);
        return ($diff->y * 12) + $diff->m;
    }

    public function getPartFinancementExterne(): float
    {
        $montant = (float) $this->montantGlobal;
        $contrepartie = (float) ($this->contrepartieEtat ?? 0);
        
        if ($montant == 0) {
            return 0;
        }
        
        return (($montant - $contrepartie) / $montant) * 100;
    }

    public function getPartContrepartieEtat(): float
    {
        $montant = (float) $this->montantGlobal;
        $contrepartie = (float) ($this->contrepartieEtat ?? 0);
        
        if ($montant == 0) {
            return 0;
        }
        
        return ($contrepartie / $montant) * 100;
    }

    public function __toString(): string
    {
        return $this->code ?? 'Nouvelle convention';
    }
}
