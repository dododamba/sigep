<?php

namespace App\EventListener;

use App\Service\ActivityLogger;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\TerminateEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;
use Symfony\Component\Security\Http\Event\LogoutEvent;

/**
 * Listener d'événements pour logger automatiquement certaines actions
 */
class ActivitySubscriber implements EventSubscriberInterface
{
    private ?float $requestStartTime = null;

    public function __construct(
        private ActivityLogger $activityLogger
    ) {}

    public static function getSubscribedEvents(): array
    {
        return [
            LoginSuccessEvent::class => 'onLoginSuccess',
            LogoutEvent::class => 'onLogout',
            KernelEvents::REQUEST => ['onKernelRequest', 10],
            KernelEvents::TERMINATE => ['onKernelTerminate', -10],
        ];
    }

    /**
     * Log automatique lors d'une connexion réussie
     */
    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();
        $this->activityLogger->logLogin($user);
    }

    /**
     * Log automatique lors d'une déconnexion
     */
    public function onLogout(LogoutEvent $event): void
    {
        $user = $event->getToken()?->getUser();
        if ($user) {
            $this->activityLogger->logLogout($user);
        }
    }

    /**
     * Enregistrer le temps de début de requête
     */
    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $this->requestStartTime = microtime(true);
    }

    /**
     * Logger automatiquement certaines actions selon la route
     * (Optionnel - peut être désactivé si trop verbeux)
     */
    public function onKernelTerminate(TerminateEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $route = $request->attributes->get('_route');

        // Calculer la durée de la requête
        $duration = null;
        if ($this->requestStartTime !== null) {
            $duration = (int) ((microtime(true) - $this->requestStartTime) * 1000);
        }

        // Logger les exports automatiquement
        if (str_contains($route, '_export') && $request->isMethod('GET')) {
            // Le logging sera fait dans le contrôleur spécifique
            // mais on pourrait ajouter une logique générique ici
        }

        // Logger les suppressions automatiquement (méthode DELETE)
        if ($request->isMethod('DELETE') && str_contains($route, '_delete')) {
            // Idem, le logging sera fait dans le contrôleur
        }
    }
}
