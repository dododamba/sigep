<?php

namespace App\Twig\Extension;

use App\Service\PermissionChecker;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Extension Twig pour rendre le PermissionChecker accessible dans les templates
 * 
 * Utilisation dans Twig:
 * {% if permission_checker.canView('project') %}
 * {% if permission_checker.canCreate('user') %}
 * {% if permission_checker.hasPermission('audit', 'edit') %}
 */
class PermissionExtension extends AbstractExtension
{
    public function __construct(
        private PermissionChecker $permissionChecker
    ) {}

    public function getFunctions(): array
    {
        return [
            new TwigFunction('permission_checker', [$this, 'getPermissionChecker']),
            new TwigFunction('can_view', [$this->permissionChecker, 'canView']),
            new TwigFunction('can_create', [$this->permissionChecker, 'canCreate']),
            new TwigFunction('can_edit', [$this->permissionChecker, 'canEdit']),
            new TwigFunction('can_delete', [$this->permissionChecker, 'canDelete']),
            new TwigFunction('can_export', [$this->permissionChecker, 'canExport']),
            new TwigFunction('has_permission', [$this->permissionChecker, 'hasPermission']),
            new TwigFunction('has_any_permission', [$this->permissionChecker, 'hasAnyPermission']),
            new TwigFunction('has_all_permissions', [$this->permissionChecker, 'hasAllPermissions']),
            new TwigFunction('can_access_module', [$this->permissionChecker, 'canAccessModule']),
        ];
    }

    public function getPermissionChecker(): PermissionChecker
    {
        return $this->permissionChecker;
    }
}
