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
    
 #[Route('/incidents', name: 'app_incidents')]
    public function incidents(): Response
    {
        return $this->render('incidents.html.twig');
    }
  

    #[Route('/condamnations', name: 'app_condamnations')]
    public function condamnations(): Response
    {
        return $this->render('condamnations.html.twig');
    }

     #[Route('/sujets', name: 'app_sujets')]
    public function sujets(): Response
    {
        return $this->render('sujets.html.twig');
    }

     #[Route('/organisations', name: 'app_organisations')]
    public function organisations(): Response
    {
        return $this->render('organisations.html.twig');
    }


     #[Route('/identites', name: 'app_identites')]
    public function identites(): Response
    {
        return $this->render('identites.html.twig');
    }


     #[Route('/contenus', name: 'app_contenus')]
    public function contenus(): Response
    {
        return $this->render('contenus.html.twig');
    }

     #[Route('/signalements', name: 'app_signalements')]
    public function signalements(): Response
    {
        return $this->render('signalements.html.twig');
    }

     #[Route('/enquetes', name: 'app_enquetes')]
    public function enquetes(): Response
    {
        return $this->render('enquetes.html.twig');
    }

      #[Route('/etablissements', name: 'app_etablissements')]
    public function etablissements(): Response
    {
        return $this->render('etablissements.html.twig');
    }


    


}
