<?php

namespace App\Entity;

use App\Repository\AuditRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AuditRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'audits')]
class Audit
{
    public const STATUT_PLANIFIE = 'planifie';
    public const STATUT_EN_COURS = 'en_cours';
    public const STATUT_TERMINE = 'termine';
    public const STATUT_ANNULE = 'annule';

    public const TYPE_FINANCIER = 'financier';
    public const TYPE_TECHNIQUE = 'technique';
    public const TYPE_CONFORMITE = 'conformite';
    public const TYPE_ENVIRONNEMENTAL = 'environnemental';

    public const NIVEAU_EXCELLENT = 'excellent';
    public const NIVEAU_BON = 'bon';
    public const NIVEAU_SATISFAISANT = 'satisfaisant';
    public const NIVEAU_MOYEN = 'moyen';
    public const NIVEAU_INSUFFISANT = 'insuffisant';
    public const NIVEAU_CRITIQUE = 'critique';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $reference = null;

    #[ORM\ManyToOne(targetEntity: Project::class, inversedBy: 'audits')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le projet est obligatoire')]
    private ?Project $project = null;

    #[ORM\Column(length: 50)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre de l\'audit est obligatoire')]
    private ?string $title = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $endDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateAudit = null;

    #[ORM\Column(length: 255)]
    private ?string $auditeur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $organisme = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $objectifs = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $findings = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resultat = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $recommendations = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

    #[ORM\Column(length: 50)]
    private string $statut = self::STATUT_PLANIFIE;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(nullable: true)]
    private ?int $score = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private array $documents = [];

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private array $photos = [];

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $auditReport = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $createdBy = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $updatedBy = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->documents = [];
        $this->photos = [];
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        if ($this->reference === null) {
            $this->reference = 'AUD-' . date('Ymd') . '-' . strtoupper(uniqid());
        }
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime();
    }

    public static function getTypes(): array
    {
        return [
            'Audit Financier' => self::TYPE_FINANCIER,
            'Audit Technique' => self::TYPE_TECHNIQUE,
            'Audit de Conformité' => self::TYPE_CONFORMITE,
            'Audit Environnemental' => self::TYPE_ENVIRONNEMENTAL,
        ];
    }

    public static function getStatuts(): array
    {
        return [
            'Planifié' => self::STATUT_PLANIFIE,
            'En cours' => self::STATUT_EN_COURS,
            'Terminé' => self::STATUT_TERMINE,
            'Annulé' => self::STATUT_ANNULE,
        ];
    }

    public static function getNiveaux(): array
    {
        return [
            'Excellent' => self::NIVEAU_EXCELLENT,
            'Bon' => self::NIVEAU_BON,
            'Satisfaisant' => self::NIVEAU_SATISFAISANT,
            'Moyen' => self::NIVEAU_MOYEN,
            'Insuffisant' => self::NIVEAU_INSUFFISANT,
            'Critique' => self::NIVEAU_CRITIQUE,
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;
        return $this;
    }

    public function getProjet(): ?Project
    {
        return $this->project;
    }

    public function setProjet(?Project $project): self
    {
        $this->project = $project;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->startDate = $dateDebut;
        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->endDate = $dateFin;
        return $this;
    }

    public function getDateAudit(): ?\DateTimeInterface
    {
        return $this->dateAudit;
    }

    public function setDateAudit(\DateTimeInterface $dateAudit): self
    {
        $this->dateAudit = $dateAudit;
        return $this;
    }

    public function getAuditeur(): ?string
    {
        return $this->auditeur;
    }

    public function setAuditeur(string $auditeur): self
    {
        $this->auditeur = $auditeur;
        return $this;
    }

    public function getOrganisme(): ?string
    {
        return $this->organisme;
    }

    public function setOrganisme(?string $organisme): self
    {
        $this->organisme = $organisme;
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

    public function getObjectifs(): ?string
    {
        return $this->objectifs;
    }

    public function setObjectifs(?string $objectifs): self
    {
        $this->objectifs = $objectifs;
        return $this;
    }

    public function getFindings(): ?string
    {
        return $this->findings;
    }

    public function setFindings(?string $findings): static
    {
        $this->findings = $findings;
        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(?string $resultat): self
    {
        $this->resultat = $resultat;
        return $this;
    }

    public function getRecommendations(): ?string
    {
        return $this->recommendations;
    }

    public function setRecommendations(?string $recommendations): static
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;
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

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): self
    {
        $this->niveau = $niveau;
        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;
        return $this;
    }

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function setDocuments(?array $documents): self
    {
        $this->documents = $documents ?? [];
        return $this;
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function setPhotos(?array $photos): self
    {
        $this->photos = $photos ?? [];
        return $this;
    }

    public function getAuditReport(): ?string
    {
        return $this->auditReport;
    }

    public function setAuditReport(?string $auditReport): static
    {
        $this->auditReport = $auditReport;
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

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?string $updatedBy): self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }

    public function getStatutLabel(): string
    {
        return match ($this->statut) {
            self::STATUT_PLANIFIE => 'Planifié',
            self::STATUT_EN_COURS => 'En cours',
            self::STATUT_TERMINE => 'Terminé',
            self::STATUT_ANNULE => 'Annulé',
            default => 'Inconnu'
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match ($this->statut) {
            self::STATUT_PLANIFIE => 'info',
            self::STATUT_EN_COURS => 'warning',
            self::STATUT_TERMINE => 'success',
            self::STATUT_ANNULE => 'danger',
            default => 'secondary'
        };
    }

    public function getTypeLabel(): string
    {
        $types = array_flip(self::getTypes());
        return $types[$this->type] ?? $this->type;
    }

    public function getNiveauLabel(): string
    {
        $niveaux = array_flip(self::getNiveaux());
        return $niveaux[$this->niveau] ?? $this->niveau;
    }

    public function isModifiable(): bool
    {
        return $this->statut !== self::STATUT_TERMINE && $this->statut !== self::STATUT_ANNULE;
    }

    public function getNombreDocuments(): int
    {
        return count($this->documents);
    }

    public function getNombrePhotos(): int
    {
        return count($this->photos);
    }

}