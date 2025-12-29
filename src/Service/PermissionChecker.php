<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * Service pour vérifier les permissions des utilisateurs
 * 
 * Utilisation dans les contrôleurs:
 * $this->permissionChecker->canView('project')
 * $this->permissionChecker->canEdit('user')
 * 
 * Utilisation dans Twig:
 * {% if permission_checker.canCreate('project') %}
 */
class PermissionChecker
{
    public function __construct(
        private Security $security
    ) {}

    /**
     * Vérifie si l'utilisateur connecté peut voir une entité
     */
    public function canView(string $entity): bool
    {
        return $this->hasPermission($entity, 'view');
    }

    /**
     * Vérifie si l'utilisateur connecté peut créer une entité
     */
    public function canCreate(string $entity): bool
    {
        return $this->hasPermission($entity, 'create');
    }

    /**
     * Vérifie si l'utilisateur connecté peut modifier une entité
     */
    public function canEdit(string $entity): bool
    {
        return $this->hasPermission($entity, 'edit');
    }

    /**
     * Vérifie si l'utilisateur connecté peut supprimer une entité
     */
    public function canDelete(string $entity): bool
    {
        return $this->hasPermission($entity, 'delete');
    }

    /**
     * Vérifie si l'utilisateur connecté peut exporter une entité
     */
    public function canExport(string $entity): bool
    {
        return $this->hasPermission($entity, 'export');
    }

    /**
     * Vérifie une permission spécifique
     */
    public function hasPermission(string $entity, string $action): bool
    {
        $permission = $entity . '.' . $action;
        return $this->security->isGranted($permission);
    }

    /**
     * Vérifie si l'utilisateur est super admin
     */
    public function isSuperAdmin(): bool
    {
        return $this->security->isGranted('ROLE_SUPER_ADMIN');
    }

    /**
     * Vérifie si l'utilisateur est admin
     */
    public function isAdmin(): bool
    {
        return $this->security->isGranted('ROLE_ADMIN');
    }

    /**
     * Vérifie si l'utilisateur est manager
     */
    public function isManager(): bool
    {
        return $this->security->isGranted('ROLE_MANAGER');
    }

    /**
     * Retourne toutes les permissions de l'utilisateur connecté
     */
    public function getUserPermissions(): array
    {
        $user = $this->security->getUser();
        
        if (!$user instanceof User) {
            return [];
        }

        $role = $user->getRole();
        
        if (!$role) {
            return [];
        }

        return $role->getPermissions();
    }

    /**
     * Retourne le rôle de l'utilisateur connecté
     */
    public function getUserRole(): ?\App\Entity\Role
    {
        $user = $this->security->getUser();
        
        if (!$user instanceof User) {
            return null;
        }

        return $user->getRole();
    }

    /**
     * Vérifie si l'utilisateur a au moins une des permissions données
     */
    public function hasAnyPermission(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if (strpos($permission, '.') !== false) {
                // Format: entity.action
                if ($this->security->isGranted($permission)) {
                    return true;
                }
            } else {
                // Format: entity (toutes les actions)
                $actions = ['view', 'create', 'edit', 'delete', 'export'];
                foreach ($actions as $action) {
                    if ($this->hasPermission($permission, $action)) {
                        return true;
                    }
                }
            }
        }
        
        return false;
    }

    /**
     * Vérifie si l'utilisateur a toutes les permissions données
     */
    public function hasAllPermissions(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            if (strpos($permission, '.') !== false) {
                // Format: entity.action
                if (!$this->security->isGranted($permission)) {
                    return false;
                }
            } else {
                // Format: entity (toutes les actions)
                $actions = ['view', 'create', 'edit', 'delete', 'export'];
                foreach ($actions as $action) {
                    if (!$this->hasPermission($permission, $action)) {
                        return false;
                    }
                }
            }
        }
        
        return true;
    }

    /**
     * Retourne un tableau des entités accessibles par l'utilisateur
     */
    public function getAccessibleEntities(): array
    {
        $entities = [
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

        $accessible = [];
        
        foreach ($entities as $key => $label) {
            if ($this->canView($key)) {
                $accessible[$key] = $label;
            }
        }

        return $accessible;
    }

    /**
     * Compte le nombre total de permissions de l'utilisateur
     */
    public function getUserPermissionsCount(): int
    {
        return count($this->getUserPermissions());
    }

    /**
     * Vérifie si l'utilisateur peut accéder à un module complet
     */
    public function canAccessModule(string $entity): bool
    {
        // Un utilisateur peut accéder à un module s'il a au moins la permission "view"
        return $this->canView($entity);
    }
}
