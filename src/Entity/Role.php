<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
#[ORM\Table(name: 'roles')]
#[ORM\HasLifecycleCallbacks]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, unique: true)]
    #[Assert\NotBlank(message: 'Le nom du rôle est obligatoire')]
    #[Assert\Length(max: 100)]
    private ?string $name = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank(message: 'Le code du rôle est obligatoire')]
    #[Assert\Regex(
        pattern: '/^ROLE_[A-Z_]+$/',
        message: 'Le code doit commencer par ROLE_ et contenir uniquement des majuscules et underscores'
    )]
    private ?string $code = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::JSON)]
    private array $permissions = [];

    #[ORM\Column]
    private ?bool $isSystem = false;

    #[ORM\Column]
    private ?bool $isActive = true;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $priority = 0;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'role')]
    private Collection $users;

    // Liste des entités et leurs permissions possibles
    public const ENTITIES = [
        'project' => 'Projets',
        'financement' => 'Financements',
        'convention' => 'Conventions',
        'decaissement' => 'Décaissements',
        'audit' => 'Audits',
        'institution' => 'Institutions',
        'partner' => 'Partenaires',
        'user' => 'Utilisateurs',
        'dashboard' => 'Tableau de bord',
        'top_management' => 'Top Management',
    ];

    // Actions CRUD
    public const ACTIONS = [
        'view' => 'Consulter',
        'create' => 'Créer',
        'edit' => 'Modifier',
        'delete' => 'Supprimer',
        'export' => 'Exporter',
    ];

    // Rôles système prédéfinis
    public const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';
    public const ROLE_ADMIN = 'ROLE_ADMIN';
    public const ROLE_MANAGER = 'ROLE_MANAGER';
    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_GUEST = 'ROLE_GUEST';

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->permissions = [];
        $this->isSystem = false;
        $this->isActive = true;
        $this->priority = 0;
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime();
    }

    // Getters & Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = strtoupper($code);
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

    public function getPermissions(): array
    {
        return $this->permissions;
    }

    public function setPermissions(array $permissions): static
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getIsSystem(): ?bool
    {
        return $this->isSystem;
    }

    public function setIsSystem(bool $isSystem): static
    {
        $this->isSystem = $isSystem;
        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): static
    {
        $this->priority = $priority;
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

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setRole($this);
        }
        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            if ($user->getRole() === $this) {
                $user->setRole(null);
            }
        }
        return $this;
    }

    // Helper Methods

    /**
     * Vérifie si le rôle a une permission spécifique
     */
    public function hasPermission(string $entity, string $action): bool
    {
        $permission = $entity . '.' . $action;
        return in_array($permission, $this->permissions, true);
    }

    /**
     * Ajoute une permission
     */
    public function addPermission(string $entity, string $action): static
    {
        $permission = $entity . '.' . $action;
        if (!in_array($permission, $this->permissions, true)) {
            $this->permissions[] = $permission;
        }
        return $this;
    }

    /**
     * Supprime une permission
     */
    public function removePermission(string $entity, string $action): static
    {
        $permission = $entity . '.' . $action;
        $this->permissions = array_values(array_filter(
            $this->permissions,
            fn($p) => $p !== $permission
        ));
        return $this;
    }

    /**
     * Retourne toutes les permissions pour une entité donnée
     */
    public function getEntityPermissions(string $entity): array
    {
        return array_filter(
            $this->permissions,
            fn($p) => str_starts_with($p, $entity . '.')
        );
    }

    /**
     * Compte le nombre d'utilisateurs ayant ce rôle
     */
    public function getUsersCount(): int
    {
        return $this->users->count();
    }

    /**
     * Vérifie si le rôle peut être modifié
     */
    public function isEditable(): bool
    {
        return !$this->isSystem;
    }

    /**
     * Vérifie si le rôle peut être supprimé
     */
    public function isDeletable(): bool
    {
        return !$this->isSystem && $this->users->isEmpty();
    }

    /**
     * Retourne le badge de statut
     */
    public function getStatusBadge(): string
    {
        return $this->isActive ? 'success' : 'secondary';
    }

    /**
     * Retourne le label de statut
     */
    public function getStatusLabel(): string
    {
        return $this->isActive ? 'Actif' : 'Inactif';
    }

    /**
     * Retourne les permissions groupées par entité
     */
    public function getPermissionsByEntity(): array
    {
        $grouped = [];
        foreach (self::ENTITIES as $entityKey => $entityLabel) {
            $grouped[$entityKey] = [
                'label' => $entityLabel,
                'permissions' => []
            ];
            foreach (self::ACTIONS as $actionKey => $actionLabel) {
                $grouped[$entityKey]['permissions'][$actionKey] = [
                    'label' => $actionLabel,
                    'granted' => $this->hasPermission($entityKey, $actionKey)
                ];
            }
        }
        return $grouped;
    }

    /**
     * Compte le nombre total de permissions accordées
     */
    public function getPermissionsCount(): int
    {
        return count($this->permissions);
    }

    /**
     * Retourne le pourcentage de permissions accordées
     */
    public function getPermissionsPercentage(): float
    {
        $totalPossible = count(self::ENTITIES) * count(self::ACTIONS);
        if ($totalPossible === 0) {
            return 0;
        }
        return round(($this->getPermissionsCount() / $totalPossible) * 100, 1);
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }
}
