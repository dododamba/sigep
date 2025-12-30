<?php

namespace App\Service;

use App\Entity\UserActivity;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\SecurityBundle\Security;

/**
 * Service pour enregistrer automatiquement les activités des utilisateurs
 */
class ActivityLogger
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private RequestStack $requestStack,
        private Security $security
    ) {}

    /**
     * Enregistre une activité
     */
    public function log(
        string $activityType,
        string $description,
        ?string $entityType = null,
        ?int $entityId = null,
        ?string $entityName = null,
        ?array $metadata = null,
        ?array $changes = null,
        string $level = UserActivity::LEVEL_MEDIUM,
        ?User $user = null
    ): ?UserActivity {
        // Récupérer l'utilisateur connecté si non fourni
        if ($user === null) {
            $user = $this->security->getUser();
            if (!$user instanceof User) {
                return null; // Pas d'utilisateur connecté
            }
        }

        $request = $this->requestStack->getCurrentRequest();
        
        $activity = new UserActivity();
        $activity->setUser($user)
                 ->setActivityType($activityType)
                 ->setEntityType($entityType)
                 ->setEntityId($entityId)
                 ->setEntityName($entityName)
                 ->setDescription($description)
                 ->setLevel($level)
                 ->setMetadata($metadata ?? [])
                 ->setChanges($changes ?? []);

        if ($request) {
            $activity->setIpAddress($request->getClientIp() ?? '0.0.0.0')
                     ->setUserAgent($request->headers->get('User-Agent'))
                     ->setRoute($request->attributes->get('_route'))
                     ->setMethod($request->getMethod());
        }

        $this->entityManager->persist($activity);
        $this->entityManager->flush();

        return $activity;
    }

    /**
     * Log une connexion
     */
    public function logLogin(?User $user = null): ?UserActivity
    {
        return $this->log(
            UserActivity::TYPE_LOGIN,
            'Connexion à l\'application',
            null,
            null,
            null,
            null,
            null,
            UserActivity::LEVEL_LOW,
            $user
        );
    }

    /**
     * Log une déconnexion
     */
    public function logLogout(?User $user = null): ?UserActivity
    {
        return $this->log(
            UserActivity::TYPE_LOGOUT,
            'Déconnexion de l\'application',
            null,
            null,
            null,
            null,
            null,
            UserActivity::LEVEL_LOW,
            $user
        );
    }

    /**
     * Log une création d'entité
     */
    public function logCreate(
        string $entityType,
        int $entityId,
        string $entityName,
        ?array $metadata = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_CREATE,
            sprintf('Création de %s: %s', $this->getEntityLabel($entityType), $entityName),
            $entityType,
            $entityId,
            $entityName,
            $metadata,
            null,
            UserActivity::LEVEL_MEDIUM
        );
    }

    /**
     * Log une modification d'entité
     */
    public function logUpdate(
        string $entityType,
        int $entityId,
        string $entityName,
        array $changes,
        ?array $metadata = null
    ): ?UserActivity {
        $changesCount = count($changes);
        $description = sprintf(
            'Modification de %s: %s (%d champ%s modifié%s)',
            $this->getEntityLabel($entityType),
            $entityName,
            $changesCount,
            $changesCount > 1 ? 's' : '',
            $changesCount > 1 ? 's' : ''
        );

        return $this->log(
            UserActivity::TYPE_UPDATE,
            $description,
            $entityType,
            $entityId,
            $entityName,
            $metadata,
            $changes,
            UserActivity::LEVEL_MEDIUM
        );
    }

    /**
     * Log une suppression d'entité
     */
    public function logDelete(
        string $entityType,
        int $entityId,
        string $entityName,
        ?array $metadata = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_DELETE,
            sprintf('Suppression de %s: %s', $this->getEntityLabel($entityType), $entityName),
            $entityType,
            $entityId,
            $entityName,
            $metadata,
            null,
            UserActivity::LEVEL_HIGH
        );
    }

    /**
     * Log une consultation
     */
    public function logView(
        string $entityType,
        int $entityId,
        string $entityName,
        ?array $metadata = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_VIEW,
            sprintf('Consultation de %s: %s', $this->getEntityLabel($entityType), $entityName),
            $entityType,
            $entityId,
            $entityName,
            $metadata,
            null,
            UserActivity::LEVEL_LOW
        );
    }

    /**
     * Log un export
     */
    public function logExport(
        string $entityType,
        string $format,
        int $recordCount,
        ?array $metadata = null
    ): ?UserActivity {
        $description = sprintf(
            'Exportation de %d %s au format %s',
            $recordCount,
            $this->getEntityLabel($entityType),
            strtoupper($format)
        );

        return $this->log(
            UserActivity::TYPE_EXPORT,
            $description,
            $entityType,
            null,
            null,
            array_merge($metadata ?? [], ['format' => $format, 'count' => $recordCount]),
            null,
            UserActivity::LEVEL_MEDIUM
        );
    }

    /**
     * Log une validation
     */
    public function logValidate(
        string $entityType,
        int $entityId,
        string $entityName,
        ?string $comment = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_VALIDATE,
            sprintf('Validation de %s: %s', $this->getEntityLabel($entityType), $entityName),
            $entityType,
            $entityId,
            $entityName,
            $comment ? ['comment' => $comment] : null,
            null,
            UserActivity::LEVEL_HIGH
        );
    }

    /**
     * Log un rejet
     */
    public function logReject(
        string $entityType,
        int $entityId,
        string $entityName,
        ?string $reason = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_REJECT,
            sprintf('Rejet de %s: %s', $this->getEntityLabel($entityType), $entityName),
            $entityType,
            $entityId,
            $entityName,
            $reason ? ['reason' => $reason] : null,
            null,
            UserActivity::LEVEL_HIGH
        );
    }

    /**
     * Log un téléchargement de document
     */
    public function logDownload(
        string $fileName,
        string $entityType,
        ?int $entityId = null,
        ?string $entityName = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_DOWNLOAD,
            sprintf('Téléchargement du document: %s', $fileName),
            $entityType,
            $entityId,
            $entityName,
            ['filename' => $fileName],
            null,
            UserActivity::LEVEL_LOW
        );
    }

    /**
     * Log un upload de document
     */
    public function logUpload(
        string $fileName,
        string $entityType,
        ?int $entityId = null,
        ?string $entityName = null
    ): ?UserActivity {
        return $this->log(
            UserActivity::TYPE_UPLOAD,
            sprintf('Upload du document: %s', $fileName),
            $entityType,
            $entityId,
            $entityName,
            ['filename' => $fileName],
            null,
            UserActivity::LEVEL_MEDIUM
        );
    }

    /**
     * Log une recherche
     */
    public function logSearch(string $query, string $entityType, int $resultCount): ?UserActivity
    {
        return $this->log(
            UserActivity::TYPE_SEARCH,
            sprintf('Recherche dans %s: "%s" (%d résultat%s)', 
                $this->getEntityLabel($entityType),
                $query,
                $resultCount,
                $resultCount > 1 ? 's' : ''
            ),
            $entityType,
            null,
            null,
            ['query' => $query, 'result_count' => $resultCount],
            null,
            UserActivity::LEVEL_LOW
        );
    }

    /**
     * Log une action critique
     */
    public function logCritical(
        string $activityType,
        string $description,
        ?string $entityType = null,
        ?int $entityId = null,
        ?string $entityName = null,
        ?array $metadata = null
    ): ?UserActivity {
        return $this->log(
            $activityType,
            $description,
            $entityType,
            $entityId,
            $entityName,
            $metadata,
            null,
            UserActivity::LEVEL_CRITICAL
        );
    }

    /**
     * Retourne le label français d'une entité
     */
    private function getEntityLabel(string $entityType): string
    {
        return match($entityType) {
            UserActivity::ENTITY_PROJECT => 'Projet',
            UserActivity::ENTITY_FINANCEMENT => 'Financement',
            UserActivity::ENTITY_CONVENTION => 'Convention',
            UserActivity::ENTITY_DECAISSEMENT => 'Décaissement',
            UserActivity::ENTITY_AUDIT => 'Audit',
            UserActivity::ENTITY_INSTITUTION => 'Institution',
            UserActivity::ENTITY_PARTNER => 'Partenaire',
            UserActivity::ENTITY_USER => 'Utilisateur',
            UserActivity::ENTITY_ROLE => 'Rôle',
            UserActivity::ENTITY_DASHBOARD => 'Tableau de bord',
            UserActivity::ENTITY_DOCUMENT => 'Document',
            default => ucfirst($entityType)
        };
    }

    /**
     * Nettoie les anciennes activités (à exécuter périodiquement)
     */
    public function cleanup(int $daysToKeep = 90): int
    {
        $date = new \DateTimeImmutable("-{$daysToKeep} days");
        $repo = $this->entityManager->getRepository(UserActivity::class);
        
        return $repo->deleteOlderThan($date);
    }

    /**
     * Retourne les statistiques d'activité de l'utilisateur connecté
     */
    public function getUserStats(?User $user = null): array
    {
        if ($user === null) {
            $user = $this->security->getUser();
            if (!$user instanceof User) {
                return [];
            }
        }

        $repo = $this->entityManager->getRepository(UserActivity::class);
        
        $qb = $repo->createQueryBuilder('a');
        
        $stats = $qb->select([
                'COUNT(a.id) as total',
                'COUNT(CASE WHEN DATE(a.createdAt) = CURRENT_DATE() THEN 1 END) as today',
                'COUNT(CASE WHEN a.activityType = :login THEN 1 END) as logins',
                'MAX(a.createdAt) as last_activity'
            ])
            ->where('a.user = :user')
            ->setParameter('user', $user)
            ->setParameter('login', UserActivity::TYPE_LOGIN)
            ->getQuery()
            ->getSingleResult();

        return [
            'total' => (int) $stats['total'],
            'today' => (int) $stats['today'],
            'logins' => (int) $stats['logins'],
            'last_activity' => $stats['last_activity']
        ];
    }
}
