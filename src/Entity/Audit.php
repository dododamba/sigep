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
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Project::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le projet est obligatoire')]
    private ?Project $projet = null;

    #[ORM\Column(length: 50, unique: true)]
    private ?string $reference = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le type d\'audit est obligatoire')]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(max: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date est obligatoire')]
    private ?\DateTimeInterface $dateAudit = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'L\'auditeur/contrôleur est obligatoire')]
    private ?string $auditeur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $organisme = null;

    #[ORM\Column(length: 50)]
    private string $statut = 'planifie';

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $objectifs = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $resultat = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $recommandations = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $niveau = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $score = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $documents = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $photos = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observations = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

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
        $this->documents = [];
        $this->photos = [];
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTime();
        }
        $this->updatedAt = new \DateTime();
        
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
        $type = strtoupper(substr($this->type ?? 'AUD', 0, 3));
        $this->reference = sprintf('%s-%s-%s', $type, $year, strtoupper(substr(uniqid(), -6)));
    }

    // Getters et Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjet(): ?Project
    {
        return $this->projet;
    }

    public function setProjet(?Project $projet): static
    {
        $this->projet = $projet;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDateAudit(): ?\DateTimeInterface
    {
        return $this->dateAudit;
    }

    public function setDateAudit(\DateTimeInterface $dateAudit): static
    {
        $this->dateAudit = $dateAudit;
        return $this;
    }

    public function getAuditeur(): ?string
    {
        return $this->auditeur;
    }

    public function setAuditeur(string $auditeur): static
    {
        $this->auditeur = $auditeur;
        return $this;
    }

    public function getOrganisme(): ?string
    {
        return $this->organisme;
    }

    public function setOrganisme(?string $organisme): static
    {
        $this->organisme = $organisme;
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

    public function getObjectifs(): ?string
    {
        return $this->objectifs;
    }

    public function setObjectifs(?string $objectifs): static
    {
        $this->objectifs = $objectifs;
        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(?string $resultat): static
    {
        $this->resultat = $resultat;
        return $this;
    }

    public function getRecommandations(): ?string
    {
        return $this->recommandations;
    }

    public function setRecommandations(?string $recommandations): static
    {
        $this->recommandations = $recommandations;
        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): static
    {
        $this->niveau = $niveau;
        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): static
    {
        $this->score = $score;
        return $this;
    }

    public function getDocuments(): ?array
    {
        return $this->documents ?? [];
    }

    public function setDocuments(?array $documents): static
    {
        $this->documents = $documents;
        return $this;
    }

    public function addDocument(string $document): static
    {
        $documents = $this->getDocuments();
        if (!in_array($document, $documents)) {
            $documents[] = $document;
            $this->documents = $documents;
        }
        return $this;
    }

    public function removeDocument(string $document): static
    {
        $documents = $this->getDocuments();
        $key = array_search($document, $documents);
        if ($key !== false) {
            unset($documents[$key]);
            $this->documents = array_values($documents);
        }
        return $this;
    }

    public function getPhotos(): ?array
    {
        return $this->photos ?? [];
    }

    public function setPhotos(?array $photos): static
    {
        $this->photos = $photos;
        return $this;
    }

    public function addPhoto(string $photo): static
    {
        $photos = $this->getPhotos();
        if (!in_array($photo, $photos)) {
            $photos[] = $photo;
            $this->photos = $photos;
        }
        return $this;
    }

    public function removePhoto(string $photo): static
    {
        $photos = $this->getPhotos();
        $key = array_search($photo, $photos);
        if ($key !== false) {
            unset($photos[$key]);
            $this->photos = array_values($photos);
        }
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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;
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

    public function getTypeLabel(): string
    {
        return match($this->type) {
            'audit_financier' => 'Audit Financier',
            'audit_technique' => 'Audit Technique',
            'audit_conformite' => 'Audit de Conformité',
            'controle_qualite' => 'Contrôle Qualité',
            'inspection' => 'Inspection',
            'evaluation' => 'Évaluation',
            'suivi' => 'Suivi',
            default => ucfirst(str_replace('_', ' ', $this->type ?? ''))
        };
    }

    public function getStatutLabel(): string
    {
        return match($this->statut) {
            'planifie' => 'Planifié',
            'en_cours' => 'En cours',
            'termine' => 'Terminé',
            'reporte' => 'Reporté',
            'annule' => 'Annulé',
            default => 'Inconnu'
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match($this->statut) {
            'planifie' => 'warning',
            'en_cours' => 'info',
            'termine' => 'success',
            'reporte' => 'secondary',
            'annule' => 'danger',
            default => 'secondary'
        };
    }

    public function getNiveauLabel(): string
    {
        return match($this->niveau) {
            'excellent' => 'Excellent',
            'bon' => 'Bon',
            'satisfaisant' => 'Satisfaisant',
            'moyen' => 'Moyen',
            'insuffisant' => 'Insuffisant',
            'critique' => 'Critique',
            default => 'Non évalué'
        };
    }

    public function getNiveauBadgeClass(): string
    {
        return match($this->niveau) {
            'excellent', 'bon' => 'success',
            'satisfaisant', 'moyen' => 'warning',
            'insuffisant', 'critique' => 'danger',
            default => 'secondary'
        };
    }

    public function getNombreDocuments(): int
    {
        return count($this->getDocuments());
    }

    public function getNombrePhotos(): int
    {
        return count($this->getPhotos());
    }

    public function isModifiable(): bool
    {
        return in_array($this->statut, ['planifie', 'en_cours']);
    }

    public function getDureeEnJours(): ?int
    {
        if ($this->dateDebut === null || $this->dateFin === null) {
            return null;
        }

        $diff = $this->dateDebut->diff($this->dateFin);
        return $diff->days;
    }

    public static function getTypes(): array
    {
        return [
            'Audit Financier' => 'audit_financier',
            'Audit Technique' => 'audit_technique',
            'Audit de Conformité' => 'audit_conformite',
            'Contrôle Qualité' => 'controle_qualite',
            'Inspection' => 'inspection',
            'Évaluation' => 'evaluation',
            'Suivi' => 'suivi',
        ];
    }

    public static function getStatuts(): array
    {
        return [
            'Planifié' => 'planifie',
            'En cours' => 'en_cours',
            'Terminé' => 'termine',
            'Reporté' => 'reporte',
            'Annulé' => 'annule',
        ];
    }

    public static function getNiveaux(): array
    {
        return [
            'Excellent' => 'excellent',
            'Bon' => 'bon',
            'Satisfaisant' => 'satisfaisant',
            'Moyen' => 'moyen',
            'Insuffisant' => 'insuffisant',
            'Critique' => 'critique',
        ];
    }

    public function __toString(): string
    {
        return $this->reference ?? 'Nouvel audit';
    }
}
