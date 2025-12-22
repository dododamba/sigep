<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WebController extends AbstractController
{
    #[Route('/', name: 'app_web')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_login');
    }
    
   
    #[Route('/conventions', name: 'app_conventions')]
    public function conventions(): Response
    {
        return $this->render('conventions/index.html.twig');
    }

     #[Route('/roles', name: 'app_roles')]
    public function roles(RoleRepository $roleRepository): Response
    {
        $roles = $roleRepository->findAll();

        return $this->render('user/roles.html.twig', [
            'roles' => $roles,
        ]);
    }

    #[Route('/login-history', name: 'app_login_history')]
    public function loginHistory(LoginHistoryRepository $loginHistoryRepository): Response
    {
        $histories = $loginHistoryRepository->findBy([], ['loginAt' => 'DESC']);

        return $this->render('user/login_history.html.twig', [
            'histories' => $histories,
        ]);
    }
}
