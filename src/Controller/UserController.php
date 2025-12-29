<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Institution;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Repository\InstitutionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/user')]
//#[IsGranted('ROLE_ADMIN')]
class UserController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher,
        private SluggerInterface $slugger
    ) {}

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(
        UserRepository $userRepository,
        InstitutionRepository $institutionRepository
    ): Response {
        // Récupérer l'institution de l'utilisateur connecté
        $currentUser = $this->getUser();
        $institution = $currentUser->getInstitution();

        // Filtrer les utilisateurs par institution
        $users = $institution 
            ? $userRepository->findBy(['institution' => $institution], ['createdAt' => 'DESC'])
            : $userRepository->findAll();

        // Calculer les statistiques
        $stats = $this->calculateUserStats($users);

        return $this->render('user/index.html.twig', [
            'users' => $users,
            'institution' => $institution,
            'stats' => $stats,
        ]);
    }

    #[Route('/api/list', name: 'app_user_api_list', methods: ['GET'])]
    public function apiList(
        Request $request,
        UserRepository $userRepository
    ): JsonResponse {
        $currentUser = $this->getUser();
        $institution = $currentUser->getInstitution();

        $users = $institution 
            ? $userRepository->findBy(['institution' => $institution])
            : $userRepository->findAll();

        $data = array_map(function(User $user) {
            return [
                'id' => $user->getId(),
                'fullName' => $user->getFullName(),
                'email' => $user->getEmail(),
                'roles' => $user->getRoles(),
                'isVerified' => $user->isVerified(),
                'institution' => $user->getInstitution() ? [
                    'id' => $user->getInstitution()->getId(),
                    'nom' => $user->getInstitution()->getNom(),
                ] : null,
                'matricule' => $user->getMatricule(),
                'department' => $user->getDepartment(),
                'accessLevel' => $user->getAccessLevel(),
                'accessLevelLabel' => $user->getAccessLevelLabel(),
                'createdAt' => $user->getCreatedAt()?->format('Y-m-d H:i:s'),
            ];
        }, $users);

        return $this->json([
            'success' => true,
            'data' => $data,
            'total' => count($data),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $user = new User();
        $currentUser = $this->getUser();
        
        // Assigner automatiquement l'institution de l'utilisateur connecté
        if ($currentUser->getInstitution()) {
            $user->setInstitution($currentUser->getInstitution());
        }

        $form = $this->createForm(UserType::class, $user, [
            'is_edit' => false,
            'institution' => $currentUser->getInstitution()
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer le mot de passe
            $plainPassword = $form->get('password')->getData();
            if ($plainPassword) {
                $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);
            }

            // Gérer l'upload de l'avatar
            $avatarFile = $form->get('avatarFile')->getData();
            if ($avatarFile) {
                $this->handleAvatarUpload($user, $avatarFile);
            }

            // Assurer que l'institution est bien définie
            if (!$user->getInstitution() && $currentUser->getInstitution()) {
                $user->setInstitution($currentUser->getInstitution());
            }

            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf(
                'L\'utilisateur "%s" a été créé avec succès.',
                $user->getFullName()
            ));

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
            'institution' => $currentUser->getInstitution(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        // Vérifier que l'utilisateur appartient à la même institution
        $currentUser = $this->getUser();
        if ($currentUser->getInstitution() && 
            !$user->belongsToInstitution($currentUser->getInstitution())) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas accéder à cet utilisateur.');
        }

        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user): Response
    {
        // Vérifier que l'utilisateur appartient à la même institution
        $currentUser = $this->getUser();
        if ($currentUser->getInstitution() && 
            !$user->belongsToInstitution($currentUser->getInstitution())) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cet utilisateur.');
        }

        $form = $this->createForm(UserType::class, $user, [
            'is_edit' => true,
            'institution' => $currentUser->getInstitution()
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gérer le mot de passe s'il est fourni
            $plainPassword = $form->get('password')->getData();
            if ($plainPassword) {
                $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
                $user->setPassword($hashedPassword);
            }

            // Gérer l'upload de l'avatar
            $avatarFile = $form->get('avatarFile')->getData();
            if ($avatarFile) {
                $this->handleAvatarUpload($user, $avatarFile);
            }

            $this->entityManager->flush();

            $this->addFlash('success', sprintf(
                'L\'utilisateur "%s" a été modifié avec succès.',
                $user->getFullName()
            ));

            return $this->redirectToRoute('app_user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'institution' => $currentUser->getInstitution(),
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user): Response
    {
        // Vérifier que l'utilisateur appartient à la même institution
        $currentUser = $this->getUser();
        if ($currentUser->getInstitution() && 
            !$user->belongsToInstitution($currentUser->getInstitution())) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer cet utilisateur.');
        }

        // Empêcher la suppression de son propre compte
        if ($user->getId() === $currentUser->getId()) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer votre propre compte.');
            return $this->redirectToRoute('app_user_index');
        }

        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $fullName = $user->getFullName();
            
            // Supprimer l'avatar s'il existe
            if ($user->getAvatar()) {
                $avatarPath = $this->getParameter('kernel.project_dir') . '/public/uploads/avatars/' . $user->getAvatar();
                if (file_exists($avatarPath)) {
                    unlink($avatarPath);
                }
            }

            $this->entityManager->remove($user);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf(
                'L\'utilisateur "%s" a été supprimé avec succès.',
                $fullName
            ));
        }

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/{id}/toggle-status', name: 'app_user_toggle_status', methods: ['POST'])]
    public function toggleStatus(Request $request, User $user): Response
    {
        // Vérifier que l'utilisateur appartient à la même institution
        $currentUser = $this->getUser();
        if ($currentUser->getInstitution() && 
            !$user->belongsToInstitution($currentUser->getInstitution())) {
            throw $this->createAccessDeniedException('Vous ne pouvez pas modifier cet utilisateur.');
        }

        if ($this->isCsrfTokenValid('toggle-status'.$user->getId(), $request->request->get('_token'))) {
            $user->setIsVerified(!$user->isVerified());
            $this->entityManager->flush();

            $status = $user->isVerified() ? 'activé' : 'désactivé';
            $this->addFlash('success', sprintf(
                'L\'utilisateur "%s" a été %s avec succès.',
                $user->getFullName(),
                $status
            ));
        }

        return $this->redirectToRoute('app_user_index');
    }

    #[Route('/api/{id}', name: 'app_user_api_show', methods: ['GET'])]
    public function apiShow(User $user): JsonResponse
    {
        // Vérifier que l'utilisateur appartient à la même institution
        $currentUser = $this->getUser();
        if ($currentUser->getInstitution() && 
            !$user->belongsToInstitution($currentUser->getInstitution())) {
            return $this->json([
                'success' => false,
                'message' => 'Accès non autorisé'
            ], Response::HTTP_FORBIDDEN);
        }

        return $this->json([
            'success' => true,
            'data' => [
                'id' => $user->getId(),
                'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'fullName' => $user->getFullName(),
                'email' => $user->getEmail(),
                'phone' => $user->getPhone(),
                'address' => $user->getAddress(),
                'roles' => $user->getRoles(),
                'isVerified' => $user->isVerified(),
                'avatar' => $user->getAvatar(),
                'initials' => $user->getInitials(),
                'institution' => $user->getInstitution() ? [
                    'id' => $user->getInstitution()->getId(),
                    'nom' => $user->getInstitution()->getNom(),
                    'sigle' => $user->getInstitution()->getSigle(),
                    'type' => $user->getInstitution()->getType(),
                ] : null,
                'matricule' => $user->getMatricule(),
                'hireDate' => $user->getHireDate()?->format('Y-m-d'),
                'department' => $user->getDepartment(),
                'accessLevel' => $user->getAccessLevel(),
                'accessLevelLabel' => $user->getAccessLevelLabel(),
                'createdAt' => $user->getCreatedAt()?->format('Y-m-d H:i:s'),
                'isAdmin' => $user->isAdmin(),
                'isManager' => $user->isManager(),
                'isSuperAdmin' => $user->isSuperAdmin(),
            ]
        ]);
    }

    #[Route('/api/stats', name: 'app_user_api_stats', methods: ['GET'])]
    public function apiStats(UserRepository $userRepository): JsonResponse
    {
        $currentUser = $this->getUser();
        $institution = $currentUser->getInstitution();

        $users = $institution 
            ? $userRepository->findBy(['institution' => $institution])
            : $userRepository->findAll();

        $stats = $this->calculateUserStats($users);

        return $this->json([
            'success' => true,
            'data' => $stats,
        ]);
    }

    /**
     * Gère l'upload de l'avatar
     */
    private function handleAvatarUpload(User $user, $avatarFile): void
    {
        $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $this->slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$avatarFile->guessExtension();

        try {
            $avatarFile->move(
                $this->getParameter('kernel.project_dir') . '/public/uploads/avatars',
                $newFilename
            );

            // Supprimer l'ancien avatar s'il existe
            if ($user->getAvatar()) {
                $oldAvatarPath = $this->getParameter('kernel.project_dir') . '/public/uploads/avatars/' . $user->getAvatar();
                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }

            $user->setAvatar($newFilename);
        } catch (FileException $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'upload de l\'avatar.');
        }
    }

    /**
     * Calcule les statistiques des utilisateurs
     */
    private function calculateUserStats(array $users): array
    {
        $total = count($users);
        $verified = 0;
        $unverified = 0;
        $admins = 0;
        $managers = 0;
        $standardUsers = 0;

        foreach ($users as $user) {
            if ($user->isVerified()) {
                $verified++;
            } else {
                $unverified++;
            }

            if ($user->isAdmin()) {
                $admins++;
            } elseif ($user->isManager()) {
                $managers++;
            } else {
                $standardUsers++;
            }
        }

        return [
            'total' => $total,
            'verified' => $verified,
            'unverified' => $unverified,
            'admins' => $admins,
            'managers' => $managers,
            'standardUsers' => $standardUsers,
            'verifiedPercentage' => $total > 0 ? round(($verified / $total) * 100, 1) : 0,
        ];
    }
}
