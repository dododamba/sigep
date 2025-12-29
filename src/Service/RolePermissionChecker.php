<?php

namespace App\Service;

use App\Entity\Role;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;

/**
 * Service pour vérifier les permissions basées sur les rôles
 */
class RolePermissionChecker
{
    public function __construct(
        private Security $security
    ) {}

    /**
     * Vérifie si l'utilisateur connecté a une permission spécifique
     */
    public function hasPermission(string $entity, string $action): bool
    {
        $user = $this->security->getUser();
        
        if (!$user instanceof User) {
            return false;
        }

        // Super admin a tous les droits
        if ($this->security->isGranted('ROLE_SUPER_ADMIN')) {
            return true;
        }

        $role = $user->getRole();
        
        if (!$role) {
            return false;
        }

        return $role->hasPermission($entity, $action);
    }

    /**
     * Vérifie si l'utilisateur peut voir une entité
     */
    public function canView(string $entity): bool
    {
        return $this->hasPermission($entity, 'view');
    }

    /**
     * Vérifie si l'utilisateur peut créer une entité
     */
    public function canCreate(string $entity): bool
    {
        return $this->hasPermission($entity, 'create');
    }

    /**
     * Vérifie si l'utilisateur peut modifier une entité
     */
    public function canEdit(string $entity): bool
    {
        return $this->hasPermission($entity, 'edit');
    }

    /**
     * Vérifie si l'utilisateur peut supprimer une entité
     */
    public function canDelete(string $entity): bool
    {
        return $this->hasPermission($entity, 'delete');
    }

    /**
     * Vérifie si l'utilisateur peut exporter une entité
     */
    public function canExport(string $entity): bool
    {
        return $this->hasPermission($entity, 'export');
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
     * Vérifie plusieurs permissions à la fois (OR)
     */
    public function hasAnyPermission(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            [$entity, $action] = explode('.', $permission);
            if ($this->hasPermission($entity, $action)) {
                return true;
            }
        }
        return false;
    }

    /**
     * Vérifie plusieurs permissions à la fois (AND)
     */
    public function hasAllPermissions(array $permissions): bool
    {
        foreach ($permissions as $permission) {
            [$entity, $action] = explode('.', $permission);
            if (!$this->hasPermission($entity, $action)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Retourne les entités auxquelles l'utilisateur a accès
     */
    public function getAccessibleEntities(string $action = 'view'): array
    {
        $user = $this->security->getUser();
        
        if (!$user instanceof User) {
            return [];
        }

        if ($this->security->isGranted('ROLE_SUPER_ADMIN')) {
            return array_keys(Role::ENTITIES);
        }

        $role = $user->getRole();
        
        if (!$role) {
            return [];
        }

        $accessible = [];
        foreach (Role::ENTITIES as $entityKey => $entityLabel) {
            if ($role->hasPermission($entityKey, $action)) {
                $accessible[] = $entityKey;
            }
        }

        return $accessible;
    }
}
