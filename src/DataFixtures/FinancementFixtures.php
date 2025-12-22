<?php

namespace App\DataFixtures;

use App\Entity\Financement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FinancementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $financements = [
            [
                'bailleur' => Financement::BAILLEUR_BM,
                'type' => Financement::TYPE_PRET,
                'numeroConvention' => 'CONV-BM-2024-001',
                'dateSignature' => new \DateTime('2024-03-15'),
                'dateEntreeVigueur' => new \DateTime('2024-06-01'),
                'dateEcheance' => new \DateTime('2029-03-15'),
                'montantEngage' => '45.50',
                'montantDecaisse' => '18.20',
                'contrepartieNationale' => '10.50',
                'tauxInteret' => '1.25%',
                'dureeFinancement' => '5 ans',
                'differeRemboursement' => '3 ans',
                'conditions' => 'Financement du Programme d\'Infrastructures Routières. Décaissements trimestriels sur présentation des états de dépenses.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_BAD,
                'type' => Financement::TYPE_PRET_CONCESSIONNEL,
                'numeroConvention' => 'CONV-BAD-2024-002',
                'dateSignature' => new \DateTime('2024-01-20'),
                'dateEntreeVigueur' => new \DateTime('2024-04-01'),
                'dateEcheance' => new \DateTime('2030-01-20'),
                'montantEngage' => '32.80',
                'montantDecaisse' => '14.50',
                'contrepartieNationale' => '6.50',
                'tauxInteret' => '0.75%',
                'dureeFinancement' => '6 ans',
                'differeRemboursement' => '4 ans',
                'conditions' => 'Appui au développement des énergies renouvelables. Centrale solaire de Moundou et extension réseau électrique.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_AFD,
                'type' => Financement::TYPE_SUBVENTION,
                'numeroConvention' => 'CONV-AFD-2023-015',
                'dateSignature' => new \DateTime('2023-09-10'),
                'dateEntreeVigueur' => new \DateTime('2023-12-01'),
                'dateEcheance' => new \DateTime('2026-09-10'),
                'montantEngage' => '18.20',
                'montantDecaisse' => '12.80',
                'contrepartieNationale' => '3.60',
                'tauxInteret' => '0%',
                'dureeFinancement' => '3 ans',
                'conditions' => 'Subvention pour le renforcement du système de santé. Construction et équipement de centres de santé.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_UE,
                'type' => Financement::TYPE_DON,
                'numeroConvention' => 'CONV-UE-2024-008',
                'dateSignature' => new \DateTime('2024-02-28'),
                'dateEntreeVigueur' => new \DateTime('2024-05-01'),
                'dateEcheance' => new \DateTime('2028-02-28'),
                'montantEngage' => '25.00',
                'montantDecaisse' => '8.50',
                'contrepartieNationale' => '5.00',
                'tauxInteret' => '0%',
                'dureeFinancement' => '4 ans',
                'conditions' => 'Programme d\'appui à la gouvernance et renforcement des capacités institutionnelles.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_FIDA,
                'type' => Financement::TYPE_PRET,
                'numeroConvention' => 'CONV-FIDA-2023-022',
                'dateSignature' => new \DateTime('2023-06-15'),
                'dateEntreeVigueur' => new \DateTime('2023-09-01'),
                'dateEcheance' => new \DateTime('2029-06-15'),
                'montantEngage' => '22.40',
                'montantDecaisse' => '19.80',
                'contrepartieNationale' => '4.50',
                'tauxInteret' => '0.50%',
                'dureeFinancement' => '6 ans',
                'differeRemboursement' => '2 ans',
                'conditions' => 'Programme d\'irrigation du Lac Tchad. Aménagement des périmètres irrigués et formation des agriculteurs.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_NATIONAL,
                'type' => Financement::TYPE_CREDIT,
                'numeroConvention' => 'CONV-BN-2024-012',
                'dateSignature' => new \DateTime('2024-01-01'),
                'dateEntreeVigueur' => new \DateTime('2024-01-01'),
                'dateEcheance' => new \DateTime('2024-12-31'),
                'montantEngage' => '15.00',
                'montantDecaisse' => '11.20',
                'contrepartieNationale' => '15.00',
                'conditions' => 'Budget national d\'investissement pour l\'éducation. Construction d\'établissements scolaires.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_OMS,
                'type' => Financement::TYPE_DON,
                'numeroConvention' => 'CONV-OMS-2023-005',
                'dateSignature' => new \DateTime('2023-12-01'),
                'dateEntreeVigueur' => new \DateTime('2024-01-01'),
                'dateEcheance' => new \DateTime('2025-12-31'),
                'montantEngage' => '8.40',
                'montantDecaisse' => '6.20',
                'contrepartieNationale' => '1.20',
                'tauxInteret' => '0%',
                'dureeFinancement' => '2 ans',
                'conditions' => 'Programme de renforcement du système de santé publique. Équipements médicaux et formation.',
                'statut' => Financement::STATUT_ACTIF,
            ],
            [
                'bailleur' => Financement::BAILLEUR_CHINE,
                'type' => Financement::TYPE_PRET,
                'numeroConvention' => 'CONV-CHN-2024-003',
                'dateSignature' => new \DateTime('2024-04-15'),
                'dateEntreeVigueur' => new \DateTime('2024-07-01'),
                'dateEcheance' => new \DateTime('2034-04-15'),
                'montantEngage' => '50.00',
                'montantDecaisse' => '12.50',
                'contrepartieNationale' => '8.00',
                'tauxInteret' => '2.0%',
                'dureeFinancement' => '10 ans',
                'differeRemboursement' => '5 ans',
                'conditions' => 'Construction du nouveau pont sur le Chari. Projet d\'infrastructure majeur incluant voies d\'accès.',
                'statut' => Financement::STATUT_EN_NEGOCIATION,
            ],
        ];

        foreach ($financements as $data) {
            $financement = new Financement();
            $financement->setBailleur($data['bailleur']);
            $financement->setType($data['type']);
            $financement->setNumeroConvention($data['numeroConvention']);
            $financement->setDateSignature($data['dateSignature']);
            $financement->setDateEntreeVigueur($data['dateEntreeVigueur'] ?? null);
            $financement->setDateEcheance($data['dateEcheance']);
            $financement->setMontantEngage($data['montantEngage']);
            $financement->setMontantDecaisse($data['montantDecaisse']);
            $financement->setContrepartieNationale($data['contrepartieNationale'] ?? null);
            $financement->setTauxInteret($data['tauxInteret'] ?? null);
            $financement->setDureeFinancement($data['dureeFinancement'] ?? null);
            $financement->setDiffereRemboursement($data['differeRemboursement'] ?? null);
            $financement->setConditions($data['conditions'] ?? null);
            $financement->setStatut($data['statut']);

            $manager->persist($financement);
        }

        $manager->flush();
    }
}
