<?php

namespace App\DataFixtures;

use App\Entity\Audit;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuditFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $projets = $manager->getRepository(Project::class)->findAll();

        if (empty($projets)) {
            return;
        }

        $audits = [
            [
                'type' => 'audit_financier',
                'titre' => 'Audit Financier Annuel 2024',
                'auditeur' => 'Cabinet Ernst & Young Tchad',
                'organisme' => 'Ernst & Young',
                'statut' => 'termine',
                'niveau' => 'bon',
                'score' => 82,
                'objectifs' => 'Vérifier la conformité des états financiers et des procédures de gestion.',
                'resultat' => 'Les comptes sont réguliers et sincères. Quelques recommandations mineures formulées.',
                'recommandations' => '1. Renforcer le contrôle interne\n2. Améliorer la documentation des dépenses\n3. Former le personnel comptable',
            ],
            [
                'type' => 'controle_qualite',
                'titre' => 'Contrôle Qualité des Travaux de Construction',
                'auditeur' => 'Ing. Hassan Mahamat',
                'organisme' => 'Direction du Contrôle Technique',
                'statut' => 'en_cours',
                'objectifs' => 'Vérifier la conformité des travaux aux normes techniques et aux plans approuvés.',
                'niveau' => 'satisfaisant',
                'score' => 75,
            ],
            [
                'type' => 'audit_technique',
                'titre' => 'Audit Technique des Équipements Installés',
                'auditeur' => 'Bureau d\'Études SOTEREM',
                'organisme' => 'SOTEREM',
                'statut' => 'termine',
                'niveau' => 'excellent',
                'score' => 92,
                'resultat' => 'Tous les équipements sont conformes aux spécifications techniques.',
                'recommandations' => 'Mettre en place un plan de maintenance préventive.',
            ],
            [
                'type' => 'inspection',
                'titre' => 'Inspection Semestrielle du Chantier',
                'auditeur' => 'Commission Technique Interministérielle',
                'organisme' => 'Primature',
                'statut' => 'planifie',
                'objectifs' => 'Inspection visuelle du chantier et vérification de l\'avancement des travaux.',
            ],
            [
                'type' => 'audit_conformite',
                'titre' => 'Audit de Conformité Environnementale',
                'auditeur' => 'Dr. Aminata Diallo',
                'organisme' => 'Ministère de l\'Environnement',
                'statut' => 'termine',
                'niveau' => 'moyen',
                'score' => 68,
                'resultat' => 'Quelques non-conformités détectées concernant la gestion des déchets.',
                'recommandations' => '1. Mettre en place une zone de tri des déchets\n2. Former le personnel aux bonnes pratiques environnementales\n3. Obtenir les autorisations manquantes',
            ],
            [
                'type' => 'evaluation',
                'titre' => 'Évaluation à Mi-Parcours du Projet',
                'auditeur' => 'Expert Indépendant - Jean-Pierre Dubois',
                'organisme' => 'Banque Mondiale',
                'statut' => 'en_cours',
                'objectifs' => 'Évaluer l\'atteinte des objectifs intermédiaires et l\'efficacité de la mise en œuvre.',
            ],
        ];

        foreach ($audits as $index => $data) {
            $audit = new Audit();
            $projet = $projets[array_rand($projets)];
            
            $audit->setProjet($projet);
            $audit->setType($data['type']);
            $audit->setTitre($data['titre']);
            $audit->setAuditeur($data['auditeur']);
            $audit->setOrganisme($data['organisme']);
            $audit->setStatut($data['statut']);
            
            if (isset($data['niveau'])) {
                $audit->setNiveau($data['niveau']);
            }
            
            if (isset($data['score'])) {
                $audit->setScore($data['score']);
            }
            
            if (isset($data['objectifs'])) {
                $audit->setObjectifs($data['objectifs']);
            }
            
            if (isset($data['resultat'])) {
                $audit->setResultat($data['resultat']);
            }
            
            if (isset($data['recommandations'])) {
                $audit->setRecommandations($data['recommandations']);
            }
            
            $dateAudit = (new \DateTime())->modify('-' . rand(30, 180) . ' days');
            $audit->setDateAudit($dateAudit);
            
            if ($data['statut'] !== 'planifie') {
                $dateDebut = (clone $dateAudit)->modify('-' . rand(1, 5) . ' days');
                $dateFin = (clone $dateAudit)->modify('+' . rand(1, 3) . ' days');
                $audit->setDateDebut($dateDebut);
                $audit->setDateFin($dateFin);
            }
            
            $audit->setCreatedBy('admin@sigep.td');

            $manager->persist($audit);
        }

        $manager->flush();
    }
}
