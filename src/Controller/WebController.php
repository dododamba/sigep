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
    

    #[Route('/projects', name: 'app_projects')]
    public function projects(): Response
    {
        return $this->render('projects/index.html.twig');
    }

    #[Route('/institutions', name: 'app_institutions')]
    public function institutions(): Response
    {
        return $this->render('institutions/index.html.twig');
    }

    #[Route('/financements', name: 'app_financements')]
    public function financements(): Response
    {
        return $this->render('financements/index.html.twig');
    }

    #[Route('/finances', name: 'app_finances')]
    public function finances(): Response
    {
        return $this->render('finances/index.html.twig');
    }


    #[Route('/conventions', name: 'app_conventions')]
    public function conventions(): Response
    {
        return $this->render('conventions/index.html.twig');
    }


    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('profile/index.html.twig');
    }

}
