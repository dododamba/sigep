<?php

namespace App\Entity;

use App\Repository\CallForTenderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CallForTenderRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'call_for_tenders')]
class CallForTender
{
    public const STATUS_OUVERT = 'ouvert';
    public const STATUS_FERME = 'ferme';
    public const STATUS_ATTRIBUTION_EN_COURS = 'attribution_en_cours';
    public const STATUS_ATTRIBUE = 'attribue';
    public const STATUS_ANNULE = 'annule';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Project::class, inversedBy: 'callForTenders')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le projet est obligatoire')]
    private ?Project $project = null;

    #[ORM\Column(length: 100, unique: true)]
    #[Assert\NotBlank(message: 'La référence de l\'appel d\'offres est obligatoire')]
    private ?string $reference = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'intitulé de l\'appel d\'offres est obligatoire')]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date de publication est obligatoire')]
    private ?\DateTimeInterface $publicationDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: 'La date limite de soumission est obligatoire')]
    private ?\DateTimeInterface $submissionDeadline = null;

    #[ORM\Column(length: 50)]
    private string $status = self::STATUS_OUVERT;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $winningCompany = null; // Entreprise attributaire

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $contractAmount = null; // Montant contractuel

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $documentLink = null; // Lien vers le document de l'appel d'offres

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): static
    {
        $this->reference = $reference;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getPublicationDate(): ?\DateTimeInterface
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(\DateTimeInterface $publicationDate): static
    {
        $this->publicationDate = $publicationDate;
        return $this;
    }

    public function getSubmissionDeadline(): ?\DateTimeInterface
    {
        return $this->submissionDeadline;
    }

    public function setSubmissionDeadline(\DateTimeInterface $submissionDeadline): static
    {
        $this->submissionDeadline = $submissionDeadline;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getWinningCompany(): ?string
    {
        return $this->winningCompany;
    }

    public function setWinningCompany(?string $winningCompany): static
    {
        $this->winningCompany = $winningCompany;
        return $this;
    }

    public function getContractAmount(): ?string
    {
        return $this->contractAmount;
    }

    public function setContractAmount(?string $contractAmount): static
    {
        $this->contractAmount = $contractAmount;
        return $this;
    }

    public function getDocumentLink(): ?string
    {
        return $this->documentLink;
    }

    public function setDocumentLink(?string $documentLink): static
    {
        $this->documentLink = $documentLink;
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

    public function getStatusLabel(): string
    {
        return match ($this->status) {
            self::STATUS_OUVERT => 'Ouvert',
            self::STATUS_FERME => 'Fermé',
            self::STATUS_ATTRIBUTION_EN_COURS => 'Attribution en cours',
            self::STATUS_ATTRIBUE => 'Attribué',
            self::STATUS_ANNULE => 'Annulé',
            default => 'Inconnu'
        };
    }

    public function getStatusBadgeClass(): string
    {
        return match ($this->status) {
            self::STATUS_OUVERT => 'info',
            self::STATUS_FERME => 'secondary',
            self::STATUS_ATTRIBUTION_EN_COURS => 'warning',
            self::STATUS_ATTRIBUE => 'success',
            self::STATUS_ANNULE => 'danger',
            default => 'secondary'
        };
    }

    public function isOngoing(): bool
    {
        return in_array($this->status, [self::STATUS_OUVERT, self::STATUS_ATTRIBUTION_EN_COURS]);
    }
}
