<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request): Response
    {
        return $this->render('profile/edit.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/update', name: 'app_profile_update', methods: ['POST'])]
    public function profileUpdate(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        SluggerInterface $slugger
    ): Response {
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            throw new AccessDeniedException('Vous devez être connecté.');
        }

        // 1. Gestion du téléchargement de l'image
        $uploadedFile = $request->files->get('avatar');
        if ($uploadedFile) {
            $this->handleAvatarUpload($uploadedFile, $user, $slugger);
        }

        // 2. Mettre à jour les informations personnelles
        $this->updatePersonalInfo($user, $request);

        // 3. Mettre à jour le mot de passe si fourni
        $this->updatePassword($user, $request, $passwordHasher);

        // 4. Mettre à jour les informations professionnelles (si admin)
        $this->updateProfessionalInfo($user, $request);

        // 5. Sauvegarder les modifications
        $entityManager->flush();

        $this->addFlash('success', 'Profil mis à jour avec succès !');
        return $this->redirectToRoute('app_profile');
    }

    /**
     * Gère le téléchargement de l'avatar
     */
    private function handleAvatarUpload(
        $uploadedFile, 
        User $user, 
        SluggerInterface $slugger
    ): void {
        // Vérifier si le fichier est une image
        if (!in_array($uploadedFile->getMimeType(), ['image/jpeg', 'image/png', 'image/gif'])) {
            $this->addFlash('error', 'Le fichier doit être une image (JPG, PNG ou GIF).');
            return;
        }

        // Vérifier la taille du fichier (max 2MB)
        if ($uploadedFile->getSize() > 2 * 1024 * 1024) {
            $this->addFlash('error', 'L\'image ne doit pas dépasser 2 Mo.');
            return;
        }

        // Supprimer l'ancienne image si elle existe
        if ($user->getAvatar()) {
            $this->deleteOldAvatar($user);
        }

        // Générer un nom de fichier unique
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = $slugger->slug($originalFilename);
        $newFilename = $safeFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();

        try {
            // Déplacer le fichier vers le répertoire d'upload
            $uploadedFile->move(
                $this->getParameter('avatars_directory'),
                $newFilename
            );

            // Mettre à jour l'entité avec le nouveau nom de fichier
            $user->setAvatar($newFilename);
            
            $this->addFlash('success', 'Photo de profil mise à jour avec succès.');

        } catch (FileException $e) {
            $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image.');
        }
    }

    /**
     * Supprime l'ancien avatar du serveur
     */
    private function deleteOldAvatar(User $user): void
    {
        $avatarPath = $this->getParameter('avatars_directory').'/'.$user->getAvatar();
        
        if (file_exists($avatarPath)) {
            unlink($avatarPath);
        }
    }

    /**
     * Met à jour les informations personnelles de l'utilisateur
     */
    private function updatePersonalInfo(User $user, Request $request): void
    {
        $user->setFirstname($request->request->get('firstname'));
        $user->setLastname($request->request->get('lastname'));
        $user->setEmail($request->request->get('email'));
        $user->setPhone($request->request->get('phone'));
        $user->setAddress($request->request->get('address'));
    }

    /**
     * Met à jour le mot de passe si les champs sont remplis
     */
    private function updatePassword(
        User $user, 
        Request $request, 
        UserPasswordHasherInterface $passwordHasher
    ): void {
        $oldPassword = $request->request->get('old_password');
        $newPassword = $request->request->get('new_password');
        $confirmPassword = $request->request->get('confirm_password');

        if ($oldPassword && $newPassword && $confirmPassword) {
            // Vérifier l'ancien mot de passe
            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('error', 'L\'ancien mot de passe est incorrect.');
                return;
            }

            // Vérifier que les nouveaux mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $this->addFlash('error', 'Les nouveaux mots de passe ne correspondent pas.');
                return;
            }

            // Vérifier la complexité du mot de passe
            if (strlen($newPassword) < 8) {
                $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
                return;
            }

            // Hasher et enregistrer le nouveau mot de passe
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            
            $this->addFlash('success', 'Mot de passe mis à jour avec succès.');
        }
    }

    /**
     * Met à jour les informations professionnelles (accessible seulement aux admins)
     */
    private function updateProfessionalInfo(User $user, Request $request): void
    {
        // Seuls les administrateurs peuvent modifier ces informations
        if (!$this->isGranted('ROLE_ADMIN')) {
            return;
        }

        $user->setMatricule($request->request->get('matricule'));
        $user->setDepartment($request->request->get('department'));
        $user->setAccessLevel($request->request->get('accessLevel'));

        // Gestion de la date d'embauche
        $hireDateStr = $request->request->get('hireDate');
        if ($hireDateStr) {
            try {
                $hireDate = new \DateTime($hireDateStr);
                $user->setHireDate($hireDate);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Format de date invalide.');
            }
        }

        // Gestion du statut actif/inactif
        $isActive = $request->request->get('isActive') === '1';
        $user->setIsActive($isActive);
    }

    /**
     * Supprime l'avatar de l'utilisateur
     */
    #[Route('/avatar/delete', name: 'app_profile_avatar_delete', methods: ['POST'])]
    public function deleteAvatar(EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            throw new AccessDeniedException('Vous devez être connecté.');
        }

        if ($user->getAvatar()) {
            // Supprimer le fichier du serveur
            $this->deleteOldAvatar($user);
            
            // Supprimer la référence dans l'entité
            $user->setAvatar(null);
            $entityManager->flush();
            
            $this->addFlash('success', 'Photo de profil supprimée avec succès.');
        } else {
            $this->addFlash('warning', 'Vous n\'avez pas de photo de profil.');
        }

        return $this->redirectToRoute('app_profile_edit');
    }
}