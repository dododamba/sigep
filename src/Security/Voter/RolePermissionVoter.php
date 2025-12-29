<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

/**
 * Voter pour gérer les permissions basées sur les rôles
 * 
 * Utilisation dans les contrôleurs:
 * $this->denyAccessUnlessGranted('project.view')
 * $this->denyAccessUnlessGranted('user.edit')
 */
class RolePermissionVoter extends Voter
{
    // Liste des permissions supportées (entity.action)
    private const SUPPORTED_PERMISSIONS = [
        // Projects
        'project.view',
        'project.create',
        'project.edit',
        'project.delete',
        'project.export',
        
        // Financements
        'financement.view',
        'financement.create',
        'financement.edit',
        'financement.delete',
        'financement.export',
        
        // Conventions
        'convention.view',
        'convention.create',
        'convention.edit',
        'convention.delete',
        'convention.export',
        
        // Décaissements
        'decaissement.view',
        'decaissement.create',
        'decaissement.edit',
        'decaissement.delete',
        'decaissement.export',
        
        // Audits
        'audit.view',
        'audit.create',
        'audit.edit',
        'audit.delete',
        'audit.export',
        
        // Institutions
        'institution.view',
        'institution.create',
        'institution.edit',
        'institution.delete',
        'institution.export',
        
        // Partners
        'partner.view',
        'partner.create',
        'partner.edit',
        'partner.delete',
        'partner.export',
        
        // Users
        'user.view',
        'user.create',
        'user.edit',
        'user.delete',
        'user.export',
        
        // Dashboard
        'dashboard.view',
        'dashboard.create',
        'dashboard.edit',
        'dashboard.delete',
        'dashboard.export',
        
        // Top Management
        'top_management.view',
        'top_management.create',
        'top_management.edit',
        'top_management.delete',
        'top_management.export',
    ];

    /**
     * Détermine si ce voter peut voter sur l'attribut donné
     */
    protected function supports(string $attribute, mixed $subject): bool
    {
        // Ce voter gère toutes les permissions du format "entity.action"
        return in_array($attribute, self::SUPPORTED_PERMISSIONS, true);
    }

    /**
     * Effectue le vote sur l'attribut et le sujet
     */
    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // L'utilisateur doit être authentifié
        if (!$user instanceof User) {
            return false;
        }

        // Les super admins ont tous les droits
        if ($this->isSuperAdmin($user)) {
            return true;
        }

        // Vérifier si l'utilisateur a un rôle assigné
        $role = $user->getRole();
        if (!$role) {
            return false;
        }

        // Vérifier si le rôle est actif
        if (!$role->getIsActive()) {
            return false;
        }

        // Extraire l'entité et l'action de l'attribut
        [$entity, $action] = explode('.', $attribute);

        // Vérifier si le rôle a cette permission
        return $role->hasPermission($entity, $action);
    }

    /**
     * Vérifie si l'utilisateur est super admin
     */
    private function isSuperAdmin(User $user): bool
    {
        return in_array('ROLE_SUPER_ADMIN', $user->getRoles(), true);
    }
}
