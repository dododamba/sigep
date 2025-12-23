<?php

namespace App\DataFixtures;

use App\Entity\Convention;
use App\Entity\Financement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ConventionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $financements = $manager->getRepository(Financement::class)->findAll();

        if (empty($financements)) {
            return;
        }

        $conventions = [
            [
                'code' => 'TCH-2023-BM-001',
                'intitule' => 'Projet d\'Appui au Développement Rural Inclusif',
                'type' => 'don',
                'partenaire' => 'Banque Mondiale',
                'agence' => 'Ministère de l\'Agriculture',
                'montant' => 45000000000,
                'contrepartie' => 5000000000,
                'description' => 'Amélioration de la productivité agricole et accès aux marchés pour les petits producteurs.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2023-BAD-015',
                'intitule' => 'Programme de Modernisation des Infrastructures Routières',
                'type' => 'pret',
                'partenaire' => 'Banque Africaine de Développement (BAD)',
                'agence' => 'Ministère des Infrastructures',
                'montant' => 78000000000,
                'contrepartie' => 12000000000,
                'description' => 'Réhabilitation et construction de routes nationales et régionales.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2024-UE-007',
                'intitule' => 'Renforcement des Capacités en Santé Publique',
                'type' => 'don',
                'partenaire' => 'Union Européenne',
                'agence' => 'Ministère de la Santé Publique',
                'montant' => 32000000000,
                'contrepartie' => 3000000000,
                'description' => 'Amélioration de l\'accès aux soins de santé primaire dans les zones rurales.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2024-AFD-012',
                'intitule' => 'Projet Énergie Solaire pour l\'Électrification Rurale',
                'type' => 'mixte',
                'partenaire' => 'Agence Française de Développement (AFD)',
                'agence' => 'Société Nationale d\'Électricité',
                'montant' => 56000000000,
                'contrepartie' => 8000000000,
                'description' => 'Installation de systèmes solaires dans 200 villages ruraux.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2022-BID-009',
                'intitule' => 'Programme d\'Adduction d\'Eau Potable',
                'type' => 'pret',
                'partenaire' => 'Banque Islamique de Développement (BID)',
                'agence' => 'Société Tchadienne des Eaux',
                'montant' => 41000000000,
                'contrepartie' => 6000000000,
                'description' => 'Construction de forages et réseaux de distribution d\'eau potable.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2023-JICA-004',
                'intitule' => 'Amélioration de l\'Éducation de Base',
                'type' => 'don',
                'partenaire' => 'JICA (Japon)',
                'agence' => 'Ministère de l\'Éducation Nationale',
                'montant' => 28000000000,
                'contrepartie' => 2000000000,
                'description' => 'Construction d\'écoles et formation des enseignants.',
                'statut' => 'en_cours',
            ],
            [
                'code' => 'TCH-2021-BM-008',
                'intitule' => 'Projet de Gouvernance et Réforme Institutionnelle',
                'type' => 'don',
                'partenaire' => 'Banque Mondiale',
                'agence' => 'Primature',
                'montant' => 19000000000,
                'contrepartie' => 1000000000,
                'description' => 'Modernisation de l\'administration publique et transparence.',
                'statut' => 'cloture',
            ],
            [
                'code' => 'TCH-2024-C2D-001',
                'intitule' => 'C2D Santé et Éducation',
                'type' => 'c2d',
                'partenaire' => 'France (C2D)',
                'agence' => 'Ministère des Finances',
                'montant' => 22000000000,
                'contrepartie' => 0,
                'description' => 'Contrat de Désendettement et de Développement pour les secteurs sociaux.',
                'statut' => 'en_cours',
            ],
        ];

        foreach ($conventions as $data) {
            $convention = new Convention();
            $financement = $financements[array_rand($financements)];
            
            $convention->setFinancement($financement);
            $convention->setCode($data['code']);
            $convention->setIntitule($data['intitule']);
            $convention->setType($data['type']);
            $convention->setPartenaire($data['partenaire']);
            $convention->setAgenceExecution($data['agence']);
            $convention->setMontantGlobal((string) $data['montant']);
            $convention->setDevise('XAF');
            $convention->setContrepartieEtat((string) $data['contrepartie']);
            
            $dateSignature = (new \DateTime())->modify('-' . rand(180, 730) . ' days');
            $convention->setDateSignature($dateSignature);
            
            $dateMiseEnVigueur = (clone $dateSignature)->modify('+' . rand(30, 90) . ' days');
            $convention->setDateMiseEnVigueur($dateMiseEnVigueur);
            
            $dateLimite = (clone $dateSignature)->modify('+' . rand(3, 5) . ' years');
            $convention->setDateLimiteDecaissement($dateLimite);
            
            $convention->setDescription($data['description']);
            $convention->setStatut($data['statut']);
            $convention->setCreatedBy('admin@sigep.td');

            $manager->persist($convention);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            // FinancementFixtures::class,
        ];
    }
}
