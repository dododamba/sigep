<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $projects = [
            [
                'name' => 'Route Nationale N\'Djamena - Abéché',
                'code' => 'PRJ-2024-001',
                'sector' => Project::SECTOR_INFRASTRUCTURE,
                'description' => 'Réhabilitation et modernisation de 850 km de route nationale reliant la capitale N\'Djamena à Abéché, deuxième ville du pays. Ce projet comprend l\'élargissement à 2x2 voies, la construction de ponts, et l\'installation d\'éclairage sur les sections urbaines.',
                'localisation' => 'N\'Djamena - Abéché',
                'priorite' => Project::PRIORITY_HAUTE,
                'status' => Project::STATUS_EN_COURS,
                'dateDebut' => new \DateTime('2024-01-15'),
                'dateFin' => new \DateTime('2027-12-31'),
                'budgetTotal' => '45.5',
                'montantDecaisse' => '18.2',
                'progress' => 65,
                'sourceFinancement' => 'Banque Mondiale + BAD',
                'maitreOuvrage' => 'Ministère des Infrastructures',
                'chefProjet' => 'Mahamat Ibrahim',
                'beneficiaires' => '2.5 millions d\'habitants',
                'financementNational' => '10.5',
                'financementPartenaires' => '35.0',
            ],
            [
                'name' => 'Centrale Solaire de Moundou',
                'code' => 'PRJ-2024-002',
                'sector' => Project::SECTOR_ENERGIE,
                'description' => 'Construction d\'une centrale solaire photovoltaïque de 50 MW avec système de stockage par batteries. Le projet vise à fournir une électricité propre et fiable à la ville de Moundou et ses environs.',
                'localisation' => 'Moundou',
                'priorite' => Project::PRIORITY_HAUTE,
                'status' => Project::STATUS_EN_COURS,
                'dateDebut' => new \DateTime('2024-03-01'),
                'dateFin' => new \DateTime('2026-06-30'),
                'budgetTotal' => '28.5',
                'montantDecaisse' => '12.8',
                'progress' => 45,
                'sourceFinancement' => 'BAD + AFD',
                'maitreOuvrage' => 'Ministère de l\'Énergie',
                'chefProjet' => 'Fatima Hassan',
                'beneficiaires' => '500,000 habitants',
                'financementNational' => '5.5',
                'financementPartenaires' => '23.0',
            ],
            [
                'name' => 'Hôpital Régional de Sarh',
                'code' => 'PRJ-2023-015',
                'sector' => Project::SECTOR_SANTE,
                'description' => 'Construction d\'un complexe hospitalier de 300 lits comprenant des services d\'urgence, de chirurgie, de maternité et d\'imagerie médicale. Le projet inclut la formation du personnel médical et l\'équipement en matériel moderne.',
                'localisation' => 'Sarh',
                'priorite' => Project::PRIORITY_HAUTE,
                'status' => Project::STATUS_EN_RETARD,
                'dateDebut' => new \DateTime('2023-09-15'),
                'dateFin' => new \DateTime('2025-03-31'),
                'budgetTotal' => '18.2',
                'montantDecaisse' => '6.9',
                'progress' => 38,
                'sourceFinancement' => 'Budget National + OMS',
                'maitreOuvrage' => 'Ministère de la Santé',
                'chefProjet' => 'Dr. Aïcha Moussa',
                'beneficiaires' => '800,000 habitants',
                'financementNational' => '8.2',
                'financementPartenaires' => '10.0',
            ],
            [
                'name' => 'Périmètre Irrigué du Lac Tchad',
                'code' => 'PRJ-2024-008',
                'sector' => Project::SECTOR_AGRICULTURE,
                'description' => 'Aménagement de 15,000 hectares de terres agricoles irriguées comprenant la construction de canaux d\'irrigation, de stations de pompage et la mise en place d\'un système de gestion de l\'eau. Formation des agriculteurs aux techniques modernes.',
                'localisation' => 'Région du Lac',
                'priorite' => Project::PRIORITY_MOYENNE,
                'status' => Project::STATUS_TERMINE,
                'dateDebut' => new \DateTime('2024-01-01'),
                'dateFin' => new \DateTime('2025-11-30'),
                'budgetTotal' => '22.4',
                'montantDecaisse' => '19.8',
                'progress' => 89,
                'sourceFinancement' => 'FIDA + Budget National',
                'maitreOuvrage' => 'Ministère de l\'Agriculture',
                'chefProjet' => 'Oumar Saleh',
                'beneficiaires' => '50,000 agriculteurs',
                'financementNational' => '7.4',
                'financementPartenaires' => '15.0',
            ],
            [
                'name' => 'École Normale Supérieure de Bongor',
                'code' => 'PRJ-2024-012',
                'sector' => Project::SECTOR_EDUCATION,
                'description' => 'Construction d\'un campus universitaire comprenant des salles de cours, des laboratoires, une bibliothèque et des logements pour étudiants. Capacité de 2000 étudiants par an.',
                'localisation' => 'Bongor',
                'priorite' => Project::PRIORITY_NORMALE,
                'status' => Project::STATUS_PLANIFIE,
                'dateDebut' => new \DateTime('2024-09-01'),
                'dateFin' => new \DateTime('2027-12-31'),
                'budgetTotal' => '8.6',
                'montantDecaisse' => '2.2',
                'progress' => 25,
                'sourceFinancement' => 'Budget National + UNESCO',
                'maitreOuvrage' => 'Ministère de l\'Éducation',
                'chefProjet' => 'Prof. Djimet Adoum',
                'beneficiaires' => '2,000 étudiants/an',
                'financementNational' => '4.6',
                'financementPartenaires' => '4.0',
            ],
            [
                'name' => 'Adduction d\'Eau Potable Abéché',
                'code' => 'PRJ-2023-022',
                'sector' => Project::SECTOR_EAU,
                'description' => 'Construction d\'un réseau d\'adduction d\'eau potable incluant des forages profonds, une station de traitement, un château d\'eau et 150 km de canalisations pour desservir la ville d\'Abéché.',
                'localisation' => 'Abéché',
                'priorite' => Project::PRIORITY_HAUTE,
                'status' => Project::STATUS_EN_COURS,
                'dateDebut' => new \DateTime('2023-06-01'),
                'dateFin' => new \DateTime('2025-02-28'),
                'budgetTotal' => '12.3',
                'montantDecaisse' => '10.1',
                'progress' => 82,
                'sourceFinancement' => 'Union Européenne + AFD',
                'maitreOuvrage' => 'Ministère de l\'Hydraulique',
                'chefProjet' => 'Ing. Yaya Brahim',
                'beneficiaires' => '200,000 habitants',
                'financementNational' => '2.3',
                'financementPartenaires' => '10.0',
            ],
            [
                'name' => 'Pont sur le Chari à N\'Djamena',
                'code' => 'PRJ-2024-003',
                'sector' => Project::SECTOR_INFRASTRUCTURE,
                'description' => 'Construction d\'un nouveau pont de 800 mètres sur le fleuve Chari avec 4 voies de circulation, pistes cyclables et piétonnes, incluant les voies d\'accès et l\'éclairage public.',
                'localisation' => 'N\'Djamena',
                'priorite' => Project::PRIORITY_MOYENNE,
                'status' => Project::STATUS_EN_COURS,
                'dateDebut' => new \DateTime('2024-04-15'),
                'dateFin' => new \DateTime('2027-09-30'),
                'budgetTotal' => '15.5',
                'montantDecaisse' => '4.2',
                'progress' => 27,
                'sourceFinancement' => 'Chine EXIM Bank',
                'maitreOuvrage' => 'Ministère des Infrastructures',
                'chefProjet' => 'Ing. Ali Mahamat',
                'beneficiaires' => '1.5 million d\'habitants',
                'financementNational' => '3.5',
                'financementPartenaires' => '12.0',
            ],
            [
                'name' => 'Centres de Santé Communautaires Doba',
                'code' => 'PRJ-2024-018',
                'sector' => Project::SECTOR_SANTE,
                'description' => 'Construction et équipement de 10 centres de santé communautaires pour améliorer l\'accès aux soins de base dans la région de Doba. Formation du personnel soignant local.',
                'localisation' => 'Doba et environs',
                'priorite' => Project::PRIORITY_NORMALE,
                'status' => Project::STATUS_TERMINE,
                'dateDebut' => new \DateTime('2024-02-01'),
                'dateFin' => new \DateTime('2024-11-30'),
                'budgetTotal' => '5.8',
                'montantDecaisse' => '5.8',
                'progress' => 100,
                'sourceFinancement' => 'UNICEF + Budget National',
                'maitreOuvrage' => 'Ministère de la Santé',
                'chefProjet' => 'Dr. Khadija Mahamat',
                'beneficiaires' => '150,000 habitants',
                'financementNational' => '1.8',
                'financementPartenaires' => '4.0',
            ],
            [
                'name' => 'Lycée Technique d\'Am-Timan',
                'code' => 'PRJ-2024-025',
                'sector' => Project::SECTOR_EDUCATION,
                'description' => 'Construction d\'un lycée technique avec ateliers de mécanique, électricité et menuiserie. Capacité de 800 élèves avec internat pour 200 places.',
                'localisation' => 'Am-Timan',
                'priorite' => Project::PRIORITY_MOYENNE,
                'status' => Project::STATUS_EN_COURS,
                'dateDebut' => new \DateTime('2024-05-01'),
                'dateFin' => new \DateTime('2026-08-31'),
                'budgetTotal' => '6.2',
                'montantDecaisse' => '2.5',
                'progress' => 40,
                'sourceFinancement' => 'AFD + Budget National',
                'maitreOuvrage' => 'Ministère de l\'Éducation',
                'chefProjet' => 'M. Abdoulaye Damba',
                'beneficiaires' => '800 élèves/an',
                'financementNational' => '2.2',
                'financementPartenaires' => '4.0',
            ],
            [
                'name' => 'Barrage Hydroélectrique de Léré',
                'code' => 'PRJ-2025-001',
                'sector' => Project::SECTOR_ENERGIE,
                'description' => 'Construction d\'un barrage hydroélectrique de 25 MW sur le Mayo-Kebbi avec retenue d\'eau pour l\'irrigation agricole. Projet intégré énergie-agriculture.',
                'localisation' => 'Léré, Mayo-Kebbi',
                'priorite' => Project::PRIORITY_HAUTE,
                'status' => Project::STATUS_PLANIFIE,
                'dateDebut' => new \DateTime('2025-01-01'),
                'dateFin' => new \DateTime('2028-12-31'),
                'budgetTotal' => '35.0',
                'montantDecaisse' => '0',
                'progress' => 5,
                'sourceFinancement' => 'Banque Mondiale + BID',
                'maitreOuvrage' => 'Ministère de l\'Énergie',
                'chefProjet' => 'Ing. Hassan Abdallah',
                'beneficiaires' => '300,000 habitants',
                'financementNational' => '7.0',
                'financementPartenaires' => '28.0',
            ],
        ];

        foreach ($projects as $data) {
            $project = new Project();
            $project->setName($data['name']);
            $project->setCode($data['code']);
            $project->setSector($data['sector']);
            $project->setDescription($data['description']);
            $project->setLocalisation($data['localisation']);
            $project->setPriorite($data['priorite']);
            $project->setStatus($data['status']);
            $project->setDateDebut($data['dateDebut']);
            $project->setDateFin($data['dateFin']);
            $project->setBudgetTotal($data['budgetTotal']);
            $project->setMontantDecaisse($data['montantDecaisse']);
            $project->setProgress($data['progress']);
            $project->setSourceFinancement($data['sourceFinancement']);
            $project->setMaitreOuvrage($data['maitreOuvrage']);
            $project->setChefProjet($data['chefProjet']);
            $project->setBeneficiaires($data['beneficiaires']);
            $project->setFinancementNational($data['financementNational'] ?? null);
            $project->setFinancementPartenaires($data['financementPartenaires'] ?? null);

            $manager->persist($project);
        }

        $manager->flush();
    }
}
