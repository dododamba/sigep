<?php

namespace App\Controller;

use App\Entity\Role;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/roles')]
//#[IsGranted('ROLE_ADMIN')]
class RoleController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private RoleRepository $roleRepository
    ) {}

    /**
     * Liste des rôles avec statistiques
     */
    #[Route('', name: 'app_roles', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $page = max(1, $request->query->getInt('page', 1));
        $limit = 15;
        
        $search = $request->query->get('search');
        $isActive = $request->query->get('active');
        $isSystem = $request->query->get('system');

        // Convertir les filtres en booléens
        $activeFilter = $isActive === 'true' ? true : ($isActive === 'false' ? false : null);
        $systemFilter = $isSystem === 'true' ? true : ($isSystem === 'false' ? false : null);

        $roles = $this->roleRepository->findPaginated(
            $page,
            $limit,
            $search,
            $activeFilter,
            $systemFilter
        );

        $total = $this->roleRepository->countFiltered($search, $activeFilter, $systemFilter);
        $totalPages = ceil($total / $limit);

        // Statistiques
        $stats = $this->roleRepository->getStatistics();
        $countByStatus = $this->roleRepository->countByStatus();
        $countByType = $this->roleRepository->countByType();
        $mostUsed = $this->roleRepository->findMostUsed(5);

        return $this->render('role/index.html.twig', [
            'roles' => $roles,
            'stats' => $stats,
            'countByStatus' => $countByStatus,
            'countByType' => $countByType,
            'mostUsed' => $mostUsed,
            'currentPage' => $page,
            'totalPages' => $totalPages,
            'total' => $total,
            'search' => $search,
            'activeFilter' => $isActive,
            'systemFilter' => $isSystem,
        ]);
    }

    /**
     * Créer un nouveau rôle
     */
    #[Route('/new', name: 'app_roles_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $role = new Role();
        $role->setIsActive(true);
        $role->setPriority(0);

        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si le code existe déjà
            if ($this->roleRepository->codeExists($role->getCode())) {
                $this->addFlash('error', 'Ce code de rôle existe déjà.');
                return $this->render('role/new.html.twig', [
                    'role' => $role,
                    'form' => $form,
                    'entities' => Role::ENTITIES,
                    'actions' => Role::ACTIONS,
                ]);
            }

            // Traiter les permissions du formulaire
            $permissions = [];
            $permissionsData = $request->request->all('permissions');
            
            if (isset($permissionsData) && is_array($permissionsData)) {
                foreach ($permissionsData as $entity => $actions) {
                    if (is_array($actions)) {
                        foreach ($actions as $action => $value) {
                            if ($value === '1' || $value === 'on') {
                                $permissions[] = $entity . '.' . $action;
                            }
                        }
                    }
                }
            }

            $role->setPermissions($permissions);

            $this->entityManager->persist($role);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf(
                'Le rôle "%s" a été créé avec succès avec %d permission(s).',
                $role->getName(),
                count($permissions)
            ));

            return $this->redirectToRoute('app_roles');
        }

        return $this->render('role/new.html.twig', [
            'role' => $role,
            'form' => $form,
            'entities' => Role::ENTITIES,
            'actions' => Role::ACTIONS,
        ]);
    }

    /**
     * Afficher les détails d'un rôle
     */
    #[Route('/{id}', name: 'app_roles_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Role $role): Response
    {
        return $this->render('role/show.html.twig', [
            'role' => $role,
            'entities' => Role::ENTITIES,
            'actions' => Role::ACTIONS,
        ]);
    }

    /**
     * Modifier un rôle
     */
    #[Route('/{id}/edit', name: 'app_roles_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Role $role): Response
    {
        // Empêcher la modification des rôles système
        if ($role->getIsSystem()) {
            $this->addFlash('error', 'Les rôles système ne peuvent pas être modifiés.');
            return $this->redirectToRoute('app_roles_show', ['id' => $role->getId()]);
        }

        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si le code existe déjà (sauf pour ce rôle)
            if ($this->roleRepository->codeExists($role->getCode(), $role->getId())) {
                $this->addFlash('error', 'Ce code de rôle est déjà utilisé par un autre rôle.');
                return $this->render('role/edit.html.twig', [
                    'role' => $role,
                    'form' => $form,
                    'entities' => Role::ENTITIES,
                    'actions' => Role::ACTIONS,
                ]);
            }

            // Traiter les permissions du formulaire
            $permissions = [];
            $permissionsData = $request->request->all('permissions');
            
            if (isset($permissionsData) && is_array($permissionsData)) {
                foreach ($permissionsData as $entity => $actions) {
                    if (is_array($actions)) {
                        foreach ($actions as $action => $value) {
                            if ($value === '1' || $value === 'on') {
                                $permissions[] = $entity . '.' . $action;
                            }
                        }
                    }
                }
            }

            $role->setPermissions($permissions);

            $this->entityManager->flush();

            $this->addFlash('success', sprintf(
                'Le rôle "%s" a été modifié avec succès. %d permission(s) accordée(s).',
                $role->getName(),
                count($permissions)
            ));

            return $this->redirectToRoute('app_roles');
        }

        return $this->render('role/edit.html.twig', [
            'role' => $role,
            'form' => $form,
            'entities' => Role::ENTITIES,
            'actions' => Role::ACTIONS,
        ]);
    }

    /**
     * Supprimer un rôle
     */
    #[Route('/{id}', name: 'app_roles_delete', methods: ['POST'])]
    public function delete(Request $request, Role $role): Response
    {
        // Empêcher la suppression des rôles système
        if ($role->getIsSystem()) {
            $this->addFlash('error', 'Les rôles système ne peuvent pas être supprimés.');
            return $this->redirectToRoute('app_roles');
        }

        // Empêcher la suppression si des utilisateurs sont assignés
        if (!$role->isDeletable()) {
            $this->addFlash('error', sprintf(
                'Le rôle "%s" ne peut pas être supprimé car %d utilisateur(s) y sont assigné(s).',
                $role->getName(),
                $role->getUsersCount()
            ));
            return $this->redirectToRoute('app_roles');
        }

        if ($this->isCsrfTokenValid('delete' . $role->getId(), $request->request->get('_token'))) {
            $roleName = $role->getName();
            
            $this->entityManager->remove($role);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Le rôle "%s" a été supprimé avec succès.', $roleName));
        }

        return $this->redirectToRoute('app_roles');
    }

    /**
     * Activer/Désactiver un rôle
     */
    #[Route('/{id}/toggle-status', name: 'app_roles_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, Role $role): JsonResponse
    {
        if (!$this->isCsrfTokenValid('toggle-status' . $role->getId(), $request->request->get('_token'))) {
            return $this->json(['error' => 'Token CSRF invalide'], Response::HTTP_FORBIDDEN);
        }

        // Empêcher la désactivation des rôles système
        if ($role->getIsSystem()) {
            return $this->json(['error' => 'Les rôles système ne peuvent pas être désactivés'], Response::HTTP_FORBIDDEN);
        }

        $role->setIsActive(!$role->getIsActive());
        $this->entityManager->flush();

        $status = $role->getIsActive() ? 'activé' : 'désactivé';

        return $this->json([
            'success' => true,
            'status' => $role->getStatusLabel(),
            'isActive' => $role->getIsActive(),
            'message' => sprintf('Le rôle "%s" a été %s avec succès.', $role->getName(), $status),
        ]);
    }

    /**
     * Dupliquer un rôle
     */
    #[Route('/{id}/duplicate', name: 'app_roles_duplicate', methods: ['POST'])]
    public function duplicate(Request $request, Role $role): Response
    {
        if (!$this->isCsrfTokenValid('duplicate' . $role->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_roles');
        }

        // Générer un nouveau code et nom unique
        $newCode = $role->getCode() . '_COPY_' . uniqid();
        $newName = $role->getName() . ' (Copie)';

        try {
            $newRole = $this->roleRepository->cloneRole($role, $newName, $newCode);

            $this->addFlash('success', sprintf(
                'Le rôle "%s" a été dupliqué avec succès en "%s".',
                $role->getName(),
                $newRole->getName()
            ));

            return $this->redirectToRoute('app_roles_edit', ['id' => $newRole->getId()]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la duplication du rôle.');
            return $this->redirectToRoute('app_roles');
        }
    }

    /**
     * API: Recherche de rôles
     */
    #[Route('/api/search', name: 'app_roles_api_search', methods: ['GET'], priority: 10)]
    public function apiSearch(Request $request): JsonResponse
    {
        $query = $request->query->get('q', '');
        
        if (strlen($query) < 2) {
            return $this->json([]);
        }

        $roles = $this->roleRepository->search($query);
        
        $results = array_map(function($role) {
            return [
                'id' => $role->getId(),
                'name' => $role->getName(),
                'code' => $role->getCode(),
                'description' => $role->getDescription(),
                'isActive' => $role->getIsActive(),
                'isSystem' => $role->getIsSystem(),
                'usersCount' => $role->getUsersCount(),
                'permissionsCount' => $role->getPermissionsCount(),
            ];
        }, $roles);

        return $this->json($results);
    }

    /**
     * API: Statistiques des rôles
     */
    #[Route('/api/stats', name: 'app_roles_api_stats', methods: ['GET'], priority: 10)]
    public function apiStats(): JsonResponse
    {
        $stats = $this->roleRepository->getStatistics();
        
        return $this->json($stats);
    }

    /**
     * API: Liste des rôles actifs (pour les sélecteurs)
     */
    #[Route('/api/active', name: 'app_roles_api_active', methods: ['GET'], priority: 10)]
    public function apiActive(): JsonResponse
    {
        $roles = $this->roleRepository->findAllActive();
        
        $results = array_map(function($role) {
            return [
                'id' => $role->getId(),
                'name' => $role->getName(),
                'code' => $role->getCode(),
                'permissionsCount' => $role->getPermissionsCount(),
            ];
        }, $roles);

        return $this->json($results);
    }

    /**
     * API: Permissions d'un rôle
     */
    #[Route('/{id}/permissions', name: 'app_roles_api_permissions', methods: ['GET'])]
    public function apiPermissions(Role $role): JsonResponse
    {
        return $this->json([
            'id' => $role->getId(),
            'name' => $role->getName(),
            'code' => $role->getCode(),
            'permissions' => $role->getPermissions(),
            'permissionsByEntity' => $role->getPermissionsByEntity(),
            'permissionsCount' => $role->getPermissionsCount(),
            'permissionsPercentage' => $role->getPermissionsPercentage(),
        ]);
    }

    /**
     * Exporter les rôles en JSON
     */
    #[Route('/export/json', name: 'app_roles_export_json', methods: ['GET'], priority: 10)]
    public function exportJson(): JsonResponse
    {
        $roles = $this->roleRepository->findAll();
        
        $data = array_map(function($role) {
            return [
                'id' => $role->getId(),
                'name' => $role->getName(),
                'code' => $role->getCode(),
                'description' => $role->getDescription(),
                'permissions' => $role->getPermissions(),
                'isSystem' => $role->getIsSystem(),
                'isActive' => $role->getIsActive(),
                'priority' => $role->getPriority(),
                'usersCount' => $role->getUsersCount(),
                'createdAt' => $role->getCreatedAt()->format('Y-m-d H:i:s'),
            ];
        }, $roles);

        return $this->json($data);
    }

    /**
     * Matrice des permissions (Vue d'ensemble)
     */
    #[Route('/permissions-matrix', name: 'app_roles_permissions_matrix', methods: ['GET'])]
    public function permissionsMatrix(): Response
    {
        $roles = $this->roleRepository->findAllNonSystem();
        
        $matrix = [];
        foreach (Role::ENTITIES as $entityKey => $entityLabel) {
            $matrix[$entityKey] = [
                'label' => $entityLabel,
                'roles' => []
            ];
            
            foreach ($roles as $role) {
                $matrix[$entityKey]['roles'][$role->getId()] = [];
                
                foreach (Role::ACTIONS as $actionKey => $actionLabel) {
                    $matrix[$entityKey]['roles'][$role->getId()][$actionKey] = $role->hasPermission($entityKey, $actionKey);
                }
            }
        }

        return $this->render('role/permissions_matrix.html.twig', [
            'roles' => $roles,
            'matrix' => $matrix,
            'entities' => Role::ENTITIES,
            'actions' => Role::ACTIONS,
        ]);
    }
}
