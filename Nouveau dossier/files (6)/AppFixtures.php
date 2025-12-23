<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\Institution;
use App\Entity\Partner;
use App\Entity\Financement;
use App\Entity\Decaissement;
use App\Entity\Audit;
use App\Entity\TypeInstitution;
use App\Entity\TypePartner;
use App\Entity\SectorInstitution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // ===== TYPES D'INSTITUTIONS =====
        $typesInstitution = [
            ['name' => 'Ministère', 'code' => 'MIN', 'icon' => 'landmark', 'color' => '#002664'],
            ['name' => 'Établissement public', 'code' => 'EP', 'icon' => 'building-2', 'color' => '#10b981'],
            ['name' => 'Agence gouvernementale', 'code' => 'AG', 'icon' => 'briefcase', 'color' => '#f59e0b'],
            ['name' => 'Collectivité locale', 'code' => 'CL', 'icon' => 'map-pin', 'color' => '#8b5cf6'],
        ];

        $typeInstitutionEntities = [];
        foreach ($typesInstitution as $type) {
            $entity = new TypeInstitution();
            $entity->setName($type['name']);
            $entity->setCode($type['code']);
            $entity->setIcon($type['icon']);
            $entity->setColor($type['color']);
            $manager->persist($entity);
            $typeInstitutionEntities[$type['code']] = $entity;
        }

        // ===== SECTEURS =====
        $secteurs = [
            ['name' => 'Infrastructure', 'code' => 'INFRA', 'icon' => 'road', 'color' => '#002664'],
            ['name' => 'Santé', 'code' => 'SANTE', 'icon' => 'heart-pulse', 'color' => '#10b981'],
            ['name' => 'Énergie', 'code' => 'ENERG', 'icon' => 'zap', 'color' => '#FECB00'],
            ['name' => 'Agriculture', 'code' => 'AGRI', 'icon' => 'wheat', 'color' => '#22c55e'],
            ['name' => 'Éducation', 'code' => 'EDUC', 'icon' => 'graduation-cap', 'color' => '#3b82f6'],
            ['name' => 'Eau & Assainissement', 'code' => 'EAU', 'icon' => 'droplets', 'color' => '#06b6d4'],
        ];

        $sectorEntities = [];
        foreach ($secteurs as $s) {
            $entity = new SectorInstitution();
            $entity->setName($s['name']);
            $entity->setCode($s['code']);
            $entity->setIcon($s['icon']);
            $entity->setColor($s['color']);
            $manager->persist($entity);
            $sectorEntities[$s['code']] = $entity;
        }

        // ===== TYPES DE PARTENAIRES =====
        $typesPartner = [
            ['name' => 'Bailleur multilatéral', 'code' => 'MULTI'],
            ['name' => 'Bailleur bilatéral', 'code' => 'BILAT'],
            ['name' => 'Institution financière', 'code' => 'FIN'],
            ['name' => 'ONG internationale', 'code' => 'ONG'],
            ['name' => 'Agence de coopération', 'code' => 'COOP'],
        ];

        $typePartnerEntities = [];
        foreach ($typesPartner as $type) {
            $entity = new TypePartner();
            $entity->setName($type['name']);
            $entity->setCode($type['code']);
            $manager->persist($entity);
            $typePartnerEntities[$type['code']] = $entity;
        }

        // ===== INSTITUTIONS =====
        $institutions = [
            ['name' => 'Ministère des Infrastructures et des Transports', 'acronym' => 'MIT', 'type' => 'MIN', 'sector' => 'INFRA', 'head' => 'Adoum Younousmi'],
            ['name' => 'Ministère de la Santé Publique', 'acronym' => 'MSP', 'type' => 'MIN', 'sector' => 'SANTE', 'head' => 'Dr. Aziza Baroud'],
            ['name' => 'Ministère de l\'Énergie et du Pétrole', 'acronym' => 'MEP', 'type' => 'MIN', 'sector' => 'ENERG', 'head' => 'Djerassem Le Bémadjiel'],
            ['name' => 'Ministère de l\'Agriculture', 'acronym' => 'MA', 'type' => 'MIN', 'sector' => 'AGRI', 'head' => 'Mahamat Allahou Taher'],
            ['name' => 'Ministère de l\'Éducation Nationale', 'acronym' => 'MEN', 'type' => 'MIN', 'sector' => 'EDUC', 'head' => 'Moustapha Mahamat Seid'],
            ['name' => 'Ministère de l\'Hydraulique', 'acronym' => 'MH', 'type' => 'MIN', 'sector' => 'EAU', 'head' => 'Passalet Weddeye'],
            ['name' => 'Agence Tchadienne d\'Électrification Rurale', 'acronym' => 'ATER', 'type' => 'AG', 'sector' => 'ENERG', 'head' => 'Hassan Sylla'],
            ['name' => 'Société Nationale d\'Électricité', 'acronym' => 'SNE', 'type' => 'EP', 'sector' => 'ENERG', 'head' => 'Djidda Moussa'],
        ];

        $institutionEntities = [];
        foreach ($institutions as $inst) {
            $entity = new Institution();
            $entity->setName($inst['name']);
            $entity->setAcronym($inst['acronym']);
            $entity->setTypeInstitution($typeInstitutionEntities[$inst['type']]);
            $entity->setSector($sectorEntities[$inst['sector']]);
            $entity->setHeadName($inst['head']);
            $entity->setHeadTitle('Ministre' === explode(' ', $inst['name'])[0] ? 'Ministre' : 'Directeur Général');
            $entity->setStatus('Actif');
            $entity->setEmail(strtolower($inst['acronym']) . '@gouv.td');
            $entity->setAddress('N\'Djamena, Tchad');
            $manager->persist($entity);
            $institutionEntities[$inst['acronym']] = $entity;
        }

        // ===== PARTENAIRES (Bailleurs) =====
        $partners = [
            ['name' => 'Banque Mondiale', 'acronym' => 'BM', 'type' => 'MULTI', 'contact' => 'François Nankobogo', 'email' => 'fnankobogo@worldbank.org'],
            ['name' => 'Banque Africaine de Développement', 'acronym' => 'BAD', 'type' => 'MULTI', 'contact' => 'Ousmane Doré', 'email' => 'o.dore@afdb.org'],
            ['name' => 'Agence Française de Développement', 'acronym' => 'AFD', 'type' => 'BILAT', 'contact' => 'Jean-Pierre Marcelli', 'email' => 'marcellijp@afd.fr'],
            ['name' => 'Union Européenne', 'acronym' => 'UE', 'type' => 'MULTI', 'contact' => 'Ambassador Mechtild Rössler', 'email' => 'delegation-chad@eeas.europa.eu'],
            ['name' => 'Banque Islamique de Développement', 'acronym' => 'BID', 'type' => 'MULTI', 'contact' => 'Dr. Amadou Kanoute', 'email' => 'akanoute@isdb.org'],
            ['name' => 'BADEA', 'acronym' => 'BADEA', 'type' => 'MULTI', 'contact' => 'Sidi Ould Tah', 'email' => 'stah@badea.org'],
            ['name' => 'Fonds Saoudien pour le Développement', 'acronym' => 'FSD', 'type' => 'BILAT', 'contact' => 'Sultan Al-Marshad', 'email' => 'contact@sfd.gov.sa'],
            ['name' => 'EXIM Bank China', 'acronym' => 'EXIM-CN', 'type' => 'BILAT', 'contact' => 'Li Wei', 'email' => 'tchad@eximbank.gov.cn'],
            ['name' => 'Programme des Nations Unies pour le Développement', 'acronym' => 'PNUD', 'type' => 'MULTI', 'contact' => 'Kamil Kamaluddeen', 'email' => 'registry.td@undp.org'],
            ['name' => 'Fonds Koweitien', 'acronym' => 'KFAED', 'type' => 'BILAT', 'contact' => 'Marwan Al-Ghanem', 'email' => 'info@kuwait-fund.org'],
        ];

        $partnerEntities = [];
        foreach ($partners as $p) {
            $entity = new Partner();
            $entity->setName($p['name']);
            $entity->setAcronym($p['acronym']);
            $entity->setTypePartner($typePartnerEntities[$p['type']]);
            $entity->setContactName($p['contact']);
            $entity->setContactEmail($p['email']);
            $entity->setContactRole('Représentant Résident');
            $entity->setStatus('Actif');
            $entity->setAddress('N\'Djamena, Tchad');
            $manager->persist($entity);
            $partnerEntities[$p['acronym']] = $entity;
        }

        // ===== PROJETS =====
        $projects = [
            [
                'name' => 'Construction du Pont de Ngueli',
                'code' => 'PROJ-INFRA-001',
                'sector' => 'infrastructure',
                'budget' => 45000000000,
                'decaisse' => 28350000000,
                'progress' => 63,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MIT',
                'partner' => 'BAD',
                'localisation' => 'N\'Djamena - Kousseri',
                'dateDebut' => '-18 months',
                'dateFin' => '+12 months',
                'description' => 'Construction d\'un nouveau pont transfrontalier entre le Tchad et le Cameroun sur le fleuve Chari'
            ],
            [
                'name' => 'Réhabilitation Hôpital Général de Référence Nationale',
                'code' => 'PROJ-SANTE-001',
                'sector' => 'sante',
                'budget' => 18500000000,
                'decaisse' => 14800000000,
                'progress' => 80,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MSP',
                'partner' => 'BM',
                'localisation' => 'N\'Djamena',
                'dateDebut' => '-24 months',
                'dateFin' => '+3 months',
                'description' => 'Modernisation complète du HGRN incluant nouveaux équipements médicaux et extension des capacités'
            ],
            [
                'name' => 'Centrale Solaire de Moundou',
                'code' => 'PROJ-ENERG-001',
                'sector' => 'energie',
                'budget' => 32000000000,
                'decaisse' => 19200000000,
                'progress' => 60,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MEP',
                'partner' => 'AFD',
                'localisation' => 'Moundou, Logone Occidental',
                'dateDebut' => '-12 months',
                'dateFin' => '+18 months',
                'description' => 'Construction d\'une centrale solaire photovoltaïque de 30 MW pour électrifier le sud du pays'
            ],
            [
                'name' => 'Programme d\'Irrigation du Lac Tchad',
                'code' => 'PROJ-AGRI-001',
                'sector' => 'agriculture',
                'budget' => 25000000000,
                'decaisse' => 8750000000,
                'progress' => 35,
                'status' => 'en-cours',
                'priority' => 'moyenne',
                'institution' => 'MA',
                'partner' => 'BID',
                'localisation' => 'Région du Lac',
                'dateDebut' => '-10 months',
                'dateFin' => '+26 months',
                'description' => 'Développement de périmètres irrigués autour du Lac Tchad pour la production rizicole'
            ],
            [
                'name' => 'Construction de 50 Écoles Primaires',
                'code' => 'PROJ-EDUC-001',
                'sector' => 'education',
                'budget' => 12000000000,
                'decaisse' => 9600000000,
                'progress' => 80,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MEN',
                'partner' => 'UE',
                'localisation' => 'Régions du Sud',
                'dateDebut' => '-20 months',
                'dateFin' => '+4 months',
                'description' => 'Construction et équipement de 50 écoles primaires dans les zones rurales du sud'
            ],
            [
                'name' => 'Adduction d\'Eau Potable - Phase 2',
                'code' => 'PROJ-EAU-001',
                'sector' => 'eau',
                'budget' => 22000000000,
                'decaisse' => 5500000000,
                'progress' => 25,
                'status' => 'en-cours',
                'priority' => 'moyenne',
                'institution' => 'MH',
                'partner' => 'BAD',
                'localisation' => 'N\'Djamena et périphérie',
                'dateDebut' => '-6 months',
                'dateFin' => '+30 months',
                'description' => 'Extension du réseau d\'eau potable pour desservir 500 000 habitants supplémentaires'
            ],
            [
                'name' => 'Route N\'Djamena - Abéché',
                'code' => 'PROJ-INFRA-002',
                'sector' => 'infrastructure',
                'budget' => 85000000000,
                'decaisse' => 42500000000,
                'progress' => 50,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MIT',
                'partner' => 'EXIM-CN',
                'localisation' => 'N\'Djamena - Abéché (850 km)',
                'dateDebut' => '-24 months',
                'dateFin' => '+24 months',
                'description' => 'Réhabilitation et modernisation de l\'axe routier principal vers l\'est du pays'
            ],
            [
                'name' => 'Électrification Rurale - Guéra',
                'code' => 'PROJ-ENERG-002',
                'sector' => 'energie',
                'budget' => 8500000000,
                'decaisse' => 2550000000,
                'progress' => 30,
                'status' => 'en-retard',
                'priority' => 'moyenne',
                'institution' => 'MEP',
                'partner' => 'BID',
                'localisation' => 'Région du Guéra',
                'dateDebut' => '-14 months',
                'dateFin' => '+8 months',
                'description' => 'Installation de mini-réseaux solaires dans 45 villages de la région du Guéra'
            ],
            [
                'name' => 'Hôpital Régional de Sarh',
                'code' => 'PROJ-SANTE-002',
                'sector' => 'sante',
                'budget' => 15000000000,
                'decaisse' => 3000000000,
                'progress' => 20,
                'status' => 'en-retard',
                'priority' => 'haute',
                'institution' => 'MSP',
                'partner' => 'FSD',
                'localisation' => 'Sarh, Moyen-Chari',
                'dateDebut' => '-16 months',
                'dateFin' => '+6 months',
                'description' => 'Construction d\'un nouvel hôpital régional de 200 lits avec plateau technique moderne'
            ],
            [
                'name' => 'Programme Sécurité Alimentaire - Kanem',
                'code' => 'PROJ-AGRI-002',
                'sector' => 'agriculture',
                'budget' => 6500000000,
                'decaisse' => 6500000000,
                'progress' => 100,
                'status' => 'termine',
                'priority' => 'haute',
                'institution' => 'MA',
                'partner' => 'PNUD',
                'localisation' => 'Région du Kanem',
                'dateDebut' => '-36 months',
                'dateFin' => '-2 months',
                'description' => 'Programme de renforcement de la résilience des populations face à l\'insécurité alimentaire'
            ],
            [
                'name' => 'Université de Doba',
                'code' => 'PROJ-EDUC-002',
                'sector' => 'education',
                'budget' => 28000000000,
                'decaisse' => 0,
                'progress' => 0,
                'status' => 'planifie',
                'priority' => 'moyenne',
                'institution' => 'MEN',
                'partner' => 'BADEA',
                'localisation' => 'Doba, Logone Oriental',
                'dateDebut' => '+3 months',
                'dateFin' => '+48 months',
                'description' => 'Construction d\'une nouvelle université dans le sud pétrolier pour décentraliser l\'enseignement supérieur'
            ],
            [
                'name' => 'Station d\'Épuration N\'Djamena',
                'code' => 'PROJ-EAU-002',
                'sector' => 'eau',
                'budget' => 18000000000,
                'decaisse' => 14400000000,
                'progress' => 80,
                'status' => 'en-cours',
                'priority' => 'haute',
                'institution' => 'MH',
                'partner' => 'AFD',
                'localisation' => 'N\'Djamena',
                'dateDebut' => '-28 months',
                'dateFin' => '+5 months',
                'description' => 'Construction d\'une station moderne de traitement des eaux usées pour la capitale'
            ],
        ];

        $projectEntities = [];
        foreach ($projects as $p) {
            $entity = new Project();
            $entity->setName($p['name']);
            $entity->setCode($p['code']);
            $entity->setSector($p['sector']);
            $entity->setBudgetTotal($p['budget']);
            $entity->setMontantDecaisse($p['decaisse']);
            $entity->setProgress($p['progress']);
            $entity->setStatus($p['status']);
            $entity->setPriorite($p['priority']);
            $entity->setInstitution($institutionEntities[$p['institution']]);
            $entity->setPartnerPrincipal($partnerEntities[$p['partner']]);
            $entity->setLocalisation($p['localisation']);
            $entity->setDescription($p['description']);
            $entity->setDateDebut((new \DateTime())->modify($p['dateDebut']));
            $entity->setDateFin((new \DateTime())->modify($p['dateFin']));
            $entity->setSourceFinancement($partnerEntities[$p['partner']]->getName());
            $entity->setMaitreOuvrage($institutionEntities[$p['institution']]->getName());
            $manager->persist($entity);
            $projectEntities[$p['code']] = $entity;
        }

        // ===== FINANCEMENTS =====
        $financements = [
            ['convention' => 'CONV-BAD-2023-001', 'bailleur' => 'BAD', 'type' => 'pret', 'engage' => 85000000000, 'decaisse' => 48000000000, 'signature' => '-24 months', 'echeance' => '+36 months'],
            ['convention' => 'CONV-BM-2023-002', 'bailleur' => 'BM', 'type' => 'don', 'engage' => 25000000000, 'decaisse' => 18750000000, 'signature' => '-18 months', 'echeance' => '+24 months'],
            ['convention' => 'CONV-AFD-2024-001', 'bailleur' => 'AFD', 'type' => 'pret-concessionnel', 'engage' => 50000000000, 'decaisse' => 33600000000, 'signature' => '-12 months', 'echeance' => '+48 months'],
            ['convention' => 'CONV-UE-2023-001', 'bailleur' => 'UE', 'type' => 'don', 'engage' => 18000000000, 'decaisse' => 14400000000, 'signature' => '-20 months', 'echeance' => '+16 months'],
            ['convention' => 'CONV-BID-2024-001', 'bailleur' => 'BID', 'type' => 'pret', 'engage' => 33500000000, 'decaisse' => 11550000000, 'signature' => '-10 months', 'echeance' => '+38 months'],
            ['convention' => 'CONV-EXIM-2022-001', 'bailleur' => 'EXIM-CN', 'type' => 'pret', 'engage' => 120000000000, 'decaisse' => 42500000000, 'signature' => '-30 months', 'echeance' => '+30 months'],
            ['convention' => 'CONV-FSD-2023-001', 'bailleur' => 'FSD', 'type' => 'pret-concessionnel', 'engage' => 15000000000, 'decaisse' => 3000000000, 'signature' => '-16 months', 'echeance' => '+32 months'],
        ];

        $financementEntities = [];
        foreach ($financements as $f) {
            $entity = new Financement();
            $entity->setNumeroConvention($f['convention']);
            $entity->setBailleur($partnerEntities[$f['bailleur']]);
            $entity->setType($f['type']);
            $entity->setMontantEngage($f['engage']);
            $entity->setMontantDecaisse($f['decaisse']);
            $entity->setDateSignature((new \DateTime())->modify($f['signature']));
            $entity->setDateEcheance((new \DateTime())->modify($f['echeance']));
            $entity->setStatut(Financement::STATUT_ACTIF);
            $manager->persist($entity);
            $financementEntities[$f['convention']] = $entity;
        }

        // ===== DÉCAISSEMENTS =====
        $decaissements = [
            ['financement' => 'CONV-BAD-2023-001', 'projet' => 'PROJ-INFRA-001', 'montant' => 8500000000, 'statut' => 'execute', 'beneficiaire' => 'Entreprise SOGEA-SATOM', 'dateDemande' => '-45 days', 'dateExecution' => '-30 days'],
            ['financement' => 'CONV-BM-2023-002', 'projet' => 'PROJ-SANTE-001', 'montant' => 4500000000, 'statut' => 'execute', 'beneficiaire' => 'Ministère de la Santé', 'dateDemande' => '-60 days', 'dateExecution' => '-45 days'],
            ['financement' => 'CONV-AFD-2024-001', 'projet' => 'PROJ-ENERG-001', 'montant' => 6400000000, 'statut' => 'execute', 'beneficiaire' => 'SNE', 'dateDemande' => '-30 days', 'dateExecution' => '-15 days'],
            ['financement' => 'CONV-UE-2023-001', 'projet' => 'PROJ-EDUC-001', 'montant' => 3200000000, 'statut' => 'execute', 'beneficiaire' => 'MEN', 'dateDemande' => '-20 days', 'dateExecution' => '-5 days'],
            ['financement' => 'CONV-BID-2024-001', 'projet' => 'PROJ-AGRI-001', 'montant' => 2500000000, 'statut' => 'valide', 'beneficiaire' => 'ONDR', 'dateDemande' => '-10 days', 'dateExecution' => null],
            ['financement' => 'CONV-BAD-2023-001', 'projet' => 'PROJ-EAU-001', 'montant' => 5500000000, 'statut' => 'en_attente', 'beneficiaire' => 'STE', 'dateDemande' => '-3 days', 'dateExecution' => null],
            ['financement' => 'CONV-EXIM-2022-001', 'projet' => 'PROJ-INFRA-002', 'montant' => 12000000000, 'statut' => 'execute', 'beneficiaire' => 'CRBC', 'dateDemande' => '-90 days', 'dateExecution' => '-75 days'],
        ];

        foreach ($decaissements as $d) {
            $entity = new Decaissement();
            $entity->setFinancement($financementEntities[$d['financement']]);
            $entity->setProject($projectEntities[$d['projet']]);
            $entity->setMontant($d['montant']);
            $entity->setStatut($d['statut']);
            $entity->setBeneficiaire($d['beneficiaire']);
            $entity->setDateDemande((new \DateTime())->modify($d['dateDemande']));
            if ($d['dateExecution']) {
                $entity->setDateExecution((new \DateTime())->modify($d['dateExecution']));
            }
            $entity->setModePaiement('virement');
            $manager->persist($entity);
        }

        // ===== AUDITS =====
        $audits = [
            ['projet' => 'PROJ-INFRA-001', 'type' => 'audit_financier', 'titre' => 'Audit financier annuel - Pont Ngueli', 'auditeur' => 'Cabinet KPMG Tchad', 'date' => '+15 days', 'statut' => 'planifie'],
            ['projet' => 'PROJ-SANTE-001', 'type' => 'audit_technique', 'titre' => 'Contrôle qualité équipements médicaux', 'auditeur' => 'Bureau Veritas', 'date' => '-30 days', 'statut' => 'termine', 'score' => 85],
            ['projet' => 'PROJ-ENERG-001', 'type' => 'inspection', 'titre' => 'Inspection technique centrale solaire', 'auditeur' => 'SGS Tchad', 'date' => '-5 days', 'statut' => 'en_cours'],
            ['projet' => 'PROJ-INFRA-002', 'type' => 'suivi', 'titre' => 'Mission de suivi trimestriel Q4', 'auditeur' => 'Cellule de Suivi MIT', 'date' => '+30 days', 'statut' => 'planifie'],
            ['projet' => 'PROJ-EDUC-001', 'type' => 'evaluation', 'titre' => 'Évaluation à mi-parcours', 'auditeur' => 'Expert UE', 'date' => '-60 days', 'statut' => 'termine', 'score' => 78],
            ['projet' => 'PROJ-EAU-002', 'type' => 'audit_financier', 'titre' => 'Audit semestriel des comptes', 'auditeur' => 'PwC Tchad', 'date' => '+45 days', 'statut' => 'planifie'],
        ];

        foreach ($audits as $a) {
            $entity = new Audit();
            $entity->setProjet($projectEntities[$a['projet']]);
            $entity->setType($a['type']);
            $entity->setTitre($a['titre']);
            $entity->setAuditeur($a['auditeur']);
            $entity->setDateAudit((new \DateTime())->modify($a['date']));
            $entity->setStatut($a['statut']);
            if (isset($a['score'])) {
                $entity->setScore($a['score']);
                $entity->setNiveau($a['score'] >= 80 ? 'bon' : ($a['score'] >= 60 ? 'satisfaisant' : 'moyen'));
            }
            $entity->setOrganisme($a['auditeur']);
            $manager->persist($entity);
        }

        $manager->flush();
    }
}
