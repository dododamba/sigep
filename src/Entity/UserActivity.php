<?php

namespace App\Entity;

use App\Repository\UserActivityRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserActivityRepository::class)]
#[ORM\Table(name: 'user_activities')]
#[ORM\Index(name: 'idx_user_id', columns: ['user_id'])]
#[ORM\Index(name: 'idx_created_at', columns: ['created_at'])]
#[ORM\Index(name: 'idx_activity_type', columns: ['activity_type'])]
#[ORM\Index(name: 'idx_entity_type', columns: ['entity_type'])]
#[ORM\HasLifecycleCallbacks]
class UserActivity
{
    // Types d'activités
    public const TYPE_LOGIN = 'login';
    public const TYPE_LOGOUT = 'logout';
    public const TYPE_CREATE = 'create';
    public const TYPE_UPDATE = 'update';
    public const TYPE_DELETE = 'delete';
    public const TYPE_VIEW = 'view';
    public const TYPE_EXPORT = 'export';
    public const TYPE_IMPORT = 'import';
    public const TYPE_DOWNLOAD = 'download';
    public const TYPE_UPLOAD = 'upload';
    public const TYPE_VALIDATE = 'validate';
    public const TYPE_REJECT = 'reject';
    public const TYPE_APPROVE = 'approve';
    public const TYPE_COMMENT = 'comment';
    public const TYPE_SEARCH = 'search';

    // Entités concernées
    public const ENTITY_PROJECT = 'project';
    public const ENTITY_FINANCEMENT = 'financement';
    public const ENTITY_CONVENTION = 'convention';
    public const ENTITY_DECAISSEMENT = 'decaissement';
    public const ENTITY_AUDIT = 'audit';
    public const ENTITY_INSTITUTION = 'institution';
    public const ENTITY_PARTNER = 'partner';
    public const ENTITY_USER = 'user';
    public const ENTITY_ROLE = 'role';
    public const ENTITY_DASHBOARD = 'dashboard';
    public const ENTITY_DOCUMENT = 'document';

    // Niveaux d'importance
    public const LEVEL_LOW = 'low';
    public const LEVEL_MEDIUM = 'medium';
    public const LEVEL_HIGH = 'high';
    public const LEVEL_CRITICAL = 'critical';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?User $user = null;

    #[ORM\Column(length: 50)]
    private ?string $activityType = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $entityType = null;

    #[ORM\Column(nullable: true)]
    private ?int $entityId = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entityName = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 20)]
    private ?string $level = self::LEVEL_MEDIUM;

    #[ORM\Column(length: 45)]
    private ?string $ipAddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $userAgent = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $metadata = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $changes = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $route = null;

    #[ORM\Column(length: 10)]
    private ?string $method = 'GET';

    #[ORM\Column(nullable: true)]
    private ?int $duration = null; // en millisecondes

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    private ?\DateTimeImmutable $createdAt = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->level = self::LEVEL_MEDIUM;
        $this->metadata = [];
        $this->changes = [];
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        if ($this->createdAt === null) {
            $this->createdAt = new \DateTimeImmutable();
        }
    }

    // Getters & Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getActivityType(): ?string
    {
        return $this->activityType;
    }

    public function setActivityType(string $activityType): static
    {
        $this->activityType = $activityType;
        return $this;
    }

    public function getEntityType(): ?string
    {
        return $this->entityType;
    }

    public function setEntityType(?string $entityType): static
    {
        $this->entityType = $entityType;
        return $this;
    }

    public function getEntityId(): ?int
    {
        return $this->entityId;
    }

    public function setEntityId(?int $entityId): static
    {
        $this->entityId = $entityId;
        return $this;
    }

    public function getEntityName(): ?string
    {
        return $this->entityName;
    }

    public function setEntityName(?string $entityName): static
    {
        $this->entityName = $entityName;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): static
    {
        $this->level = $level;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(string $ipAddress): static
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function getMetadata(): ?array
    {
        return $this->metadata ?? [];
    }

    public function setMetadata(?array $metadata): static
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function addMetadata(string $key, mixed $value): static
    {
        $metadata = $this->getMetadata();
        $metadata[$key] = $value;
        $this->metadata = $metadata;
        return $this;
    }

    public function getChanges(): ?array
    {
        return $this->changes ?? [];
    }

    public function setChanges(?array $changes): static
    {
        $this->changes = $changes;
        return $this;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    public function setRoute(?string $route): static
    {
        $this->route = $route;
        return $this;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setMethod(string $method): static
    {
        $this->method = $method;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): static
    {
        $this->duration = $duration;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    // Helper Methods

    public function getActivityTypeLabel(): string
    {
        return match($this->activityType) {
            self::TYPE_LOGIN => 'Connexion',
            self::TYPE_LOGOUT => 'Déconnexion',
            self::TYPE_CREATE => 'Création',
            self::TYPE_UPDATE => 'Modification',
            self::TYPE_DELETE => 'Suppression',
            self::TYPE_VIEW => 'Consultation',
            self::TYPE_EXPORT => 'Exportation',
            self::TYPE_IMPORT => 'Importation',
            self::TYPE_DOWNLOAD => 'Téléchargement',
            self::TYPE_UPLOAD => 'Upload',
            self::TYPE_VALIDATE => 'Validation',
            self::TYPE_REJECT => 'Rejet',
            self::TYPE_APPROVE => 'Approbation',
            self::TYPE_COMMENT => 'Commentaire',
            self::TYPE_SEARCH => 'Recherche',
            default => ucfirst($this->activityType)
        };
    }

    public function getEntityTypeLabel(): string
    {
        return match($this->entityType) {
            self::ENTITY_PROJECT => 'Projet',
            self::ENTITY_FINANCEMENT => 'Financement',
            self::ENTITY_CONVENTION => 'Convention',
            self::ENTITY_DECAISSEMENT => 'Décaissement',
            self::ENTITY_AUDIT => 'Audit',
            self::ENTITY_INSTITUTION => 'Institution',
            self::ENTITY_PARTNER => 'Partenaire',
            self::ENTITY_USER => 'Utilisateur',
            self::ENTITY_ROLE => 'Rôle',
            self::ENTITY_DASHBOARD => 'Tableau de bord',
            self::ENTITY_DOCUMENT => 'Document',
            default => ucfirst($this->entityType ?? 'Système')
        };
    }

    public function getLevelBadgeClass(): string
    {
        return match($this->level) {
            self::LEVEL_LOW => 'secondary',
            self::LEVEL_MEDIUM => 'info',
            self::LEVEL_HIGH => 'warning',
            self::LEVEL_CRITICAL => 'danger',
            default => 'secondary'
        };
    }

    public function getLevelLabel(): string
    {
        return match($this->level) {
            self::LEVEL_LOW => 'Faible',
            self::LEVEL_MEDIUM => 'Moyen',
            self::LEVEL_HIGH => 'Élevé',
            self::LEVEL_CRITICAL => 'Critique',
            default => 'Normal'
        };
    }

    public function getActivityIcon(): string
    {
        return match($this->activityType) {
            self::TYPE_LOGIN => 'log-in',
            self::TYPE_LOGOUT => 'log-out',
            self::TYPE_CREATE => 'plus-circle',
            self::TYPE_UPDATE => 'edit',
            self::TYPE_DELETE => 'trash-2',
            self::TYPE_VIEW => 'eye',
            self::TYPE_EXPORT => 'download',
            self::TYPE_IMPORT => 'upload',
            self::TYPE_DOWNLOAD => 'download-cloud',
            self::TYPE_UPLOAD => 'upload-cloud',
            self::TYPE_VALIDATE => 'check-circle',
            self::TYPE_REJECT => 'x-circle',
            self::TYPE_APPROVE => 'thumbs-up',
            self::TYPE_COMMENT => 'message-circle',
            self::TYPE_SEARCH => 'search',
            default => 'activity'
        };
    }

    public function getTimeAgo(): string
    {
        $now = new \DateTimeImmutable();
        $diff = $now->getTimestamp() - $this->createdAt->getTimestamp();

        if ($diff < 60) {
            return 'À l\'instant';
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            return "Il y a {$minutes} min";
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            return "Il y a {$hours}h";
        } elseif ($diff < 2592000) {
            $days = floor($diff / 86400);
            return "Il y a {$days}j";
        } else {
            return $this->createdAt->format('d/m/Y');
        }
    }

    public static function getActivityTypes(): array
    {
        return [
            'Connexion' => self::TYPE_LOGIN,
            'Déconnexion' => self::TYPE_LOGOUT,
            'Création' => self::TYPE_CREATE,
            'Modification' => self::TYPE_UPDATE,
            'Suppression' => self::TYPE_DELETE,
            'Consultation' => self::TYPE_VIEW,
            'Exportation' => self::TYPE_EXPORT,
            'Importation' => self::TYPE_IMPORT,
            'Téléchargement' => self::TYPE_DOWNLOAD,
            'Upload' => self::TYPE_UPLOAD,
            'Validation' => self::TYPE_VALIDATE,
            'Rejet' => self::TYPE_REJECT,
            'Approbation' => self::TYPE_APPROVE,
            'Commentaire' => self::TYPE_COMMENT,
            'Recherche' => self::TYPE_SEARCH,
        ];
    }

    public static function getEntityTypes(): array
    {
        return [
            'Projet' => self::ENTITY_PROJECT,
            'Financement' => self::ENTITY_FINANCEMENT,
            'Convention' => self::ENTITY_CONVENTION,
            'Décaissement' => self::ENTITY_DECAISSEMENT,
            'Audit' => self::ENTITY_AUDIT,
            'Institution' => self::ENTITY_INSTITUTION,
            'Partenaire' => self::ENTITY_PARTNER,
            'Utilisateur' => self::ENTITY_USER,
            'Rôle' => self::ENTITY_ROLE,
            'Tableau de bord' => self::ENTITY_DASHBOARD,
            'Document' => self::ENTITY_DOCUMENT,
        ];
    }

    public function __toString(): string
    {
        return sprintf(
            '%s - %s (%s)',
            $this->getActivityTypeLabel(),
            $this->getEntityTypeLabel(),
            $this->createdAt->format('d/m/Y H:i')
        );
    }
}
