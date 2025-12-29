<?php

namespace App\DataFixtures;

use App\Entity\{
    Role,
    TypePartner,
    Partner,
    TypeInstitution,
    SectorInstitution,
    Institution,
    Project,
    Financement,
    Convention,
    Decaissement,
    Audit,
    User
};
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        echo "🚀 Chargement des fixtures SIGEP Tchad...\n\n";

        /*
        |=========================================================
        | 1. ROLES SYSTÈME
        |=========================================================
        */
        echo "📋 Création des rôles système...\n";
        
        $roles = [];
        $entities = [
            'project', 'financement', 'convention', 'decaissement',
            'audit', 'institution', 'partner', 'user',
            'dashboard', 'top_management'
        ];
        $actions = ['view', 'create', 'edit', 'delete', 'export'];

        // SUPER ADMIN
        $roles['SUPER_ADMIN'] = (new Role())
            ->setName('Super Administrateur')
            ->setCode('ROLE_SUPER_ADMIN')
            ->setDescription('Accès complet au système sans restriction')
            ->setIsSystem(true)
            ->setIsActive(true)
            ->setPriority(100)
            ->setPermissions(
                array_merge(...array_map(
                    fn($e) => array_map(fn($a) => "$e.$a", $actions),
                    $entities
                ))
            );

        // ADMIN
        $roles['ADMIN'] = (new Role())
            ->setName('Administrateur')
            ->setCode('ROLE_ADMIN')
            ->setDescription('Gestion complète sauf suppression utilisateurs')
            ->setIsSystem(true)
            ->setIsActive(true)
            ->setPriority(90)
            ->setPermissions(
                array_merge(...array_map(
                    fn($e) => $e === 'user'
                        ? ['user.view', 'user.create', 'user.edit']
                        : array_map(fn($a) => "$e.$a", $actions),
                    $entities
                ))
            );

        // MANAGER
        $roles['MANAGER'] = (new Role())
            ->setName('Gestionnaire')
            ->setCode('ROLE_MANAGER')
            ->setDescription('Gestion opérationnelle des projets et financements')
            ->setIsSystem(true)
            ->setIsActive(true)
            ->setPriority(80)
            ->setPermissions([
                'project.view','project.create','project.edit','project.delete','project.export',
                'financement.view','financement.create','financement.edit','financement.delete','financement.export',
                'convention.view','convention.create','convention.edit','convention.delete','convention.export',
                'decaissement.view','decaissement.create','decaissement.edit','decaissement.delete','decaissement.export',
                'audit.view','audit.create','audit.edit','audit.export',
                'institution.view','institution.edit','institution.export',
                'partner.view','partner.edit','partner.export',
                'user.view',
                'dashboard.view','dashboard.export'
            ]);

        // USER
        $roles['USER'] = (new Role())
            ->setName('Utilisateur Standard')
            ->setCode('ROLE_USER')
            ->setDescription('Accès limité en consultation et création')
            ->setIsSystem(true)
            ->setIsActive(true)
            ->setPriority(50)
            ->setPermissions([
                'project.view','project.create','project.export',
                'financement.view','financement.export',
                'convention.view','convention.export',
                'decaissement.view','decaissement.export',
                'audit.view',
                'institution.view',
                'partner.view',
                'dashboard.view'
            ]);

        foreach ($roles as $role) {
            $manager->persist($role);
        }
        echo "   ✓ 4 rôles système créés\n\n";

        /*
        |=========================================================
        | 2. TYPES D'INSTITUTIONS
        |=========================================================
        */
        echo "🏛️ Création des types d'institutions...\n";
        
        $typeInstitutions = [];
        foreach ([
            ['Ministère', 'MINISTERE', 'Ministères du gouvernement tchadien', 'building-2', '#004d99'],
            ['Agence', 'AGENCE', 'Agences gouvernementales', 'briefcase', '#0ea5e9'],
            ['Direction', 'DIRECTION', 'Directions générales', 'building', '#10b981'],
            ['Projet', 'PROJET', 'Unités de gestion de projets', 'folder', '#f59e0b'],
            ['Collectivité', 'COLLECTIVITE', 'Collectivités territoriales', 'map-pin', '#8b5cf6'],
        ] as [$name, $code, $desc, $icon, $color]) {
            $type = (new TypeInstitution())
                ->setName($name)
                ->setCode($code)
                ->setDescription($desc)
                ->setIcon($icon)
                ->setColor($color);
            $manager->persist($type);
            $typeInstitutions[$code] = $type;
        }
        echo "   ✓ 5 types d'institutions créés\n\n";

        /*
        |=========================================================
        | 3. SECTEURS D'INSTITUTIONS
        |=========================================================
        */
        echo "🎯 Création des secteurs d'institutions...\n";
        
        $secteurs = [];
        foreach ([
            ['Infrastructure', 'INFRASTRUCTURE', 'Routes, ponts, bâtiments', 'road', '#ef4444'],
            ['Santé', 'SANTE', 'Hôpitaux, centres de santé', 'heart-pulse', '#10b981'],
            ['Éducation', 'EDUCATION', 'Écoles, universités', 'graduation-cap', '#3b82f6'],
            ['Agriculture', 'AGRICULTURE', 'Développement rural', 'wheat', '#22c55e'],
            ['Énergie', 'ENERGIE', 'Électricité, énergies renouvelables', 'zap', '#f59e0b'],
            ['Eau', 'EAU', 'Eau potable et assainissement', 'droplets', '#06b6d4'],
            ['Finance', 'FINANCE', 'Gestion financière', 'dollar-sign', '#daa520'],
        ] as [$name, $code, $desc, $icon, $color]) {
            $secteur = (new SectorInstitution())
                ->setName($name)
                ->setCode($code)
                ->setDescription($desc)
                ->setIcon($icon)
                ->setColor($color);
            $manager->persist($secteur);
            $secteurs[$code] = $secteur;
        }
        echo "   ✓ 7 secteurs créés\n\n";

        /*
        |=========================================================
        | 4. INSTITUTIONS
        |=========================================================
        */
        echo "🏢 Création des institutions...\n";
        
        $institutions = [];
        $institutionsData = [
            ['Ministère des Infrastructures', 'MI', $typeInstitutions['MINISTERE'], $secteurs['INFRASTRUCTURE'], 
             'Mahamat SALEH', 'Ministre', 'contact@mi.td', '+235 22 52 44 75'],
            ['Ministère de la Santé Publique', 'MSP', $typeInstitutions['MINISTERE'], $secteurs['SANTE'],
             'Dr. Fatima NOUR', 'Ministre', 'contact@msp.td', '+235 22 52 48 90'],
            ['Ministère de l\'Éducation Nationale', 'MEN', $typeInstitutions['MINISTERE'], $secteurs['EDUCATION'],
             'Abdelkerim SEID', 'Ministre', 'contact@education.td', '+235 22 52 41 67'],
            ['Ministère de l\'Économie et de la Planification', 'MEP', $typeInstitutions['MINISTERE'], $secteurs['FINANCE'],
             'Tahir Hamid NGUILIN', 'Ministre', 'contact@economie.td', '+235 22 52 50 08'],
            ['Direction Générale du Budget', 'DGB', $typeInstitutions['DIRECTION'], $secteurs['FINANCE'],
             'Ali MAHAMAT', 'Directeur Général', 'contact@budget.td', '+235 22 52 35 21'],
            ['Agence Nationale des Infrastructures Routières', 'ANIR', $typeInstitutions['AGENCE'], $secteurs['INFRASTRUCTURE'],
             'Hassan ABDOULAYE', 'Directeur Général', 'contact@anir.td', '+235 66 29 45 78'],
        ];

        foreach ($institutionsData as $i => [$name, $acr, $type, $sect, $head, $title, $email, $phone]) {
            $institution = (new Institution())
                ->setName($name)
                ->setAcronym($acr)
                ->setTypeInstitution($type)
                ->setSector($sect)
                ->setHeadName($head)
                ->setHeadTitle($title)
                ->setEmail($email)
                ->setPhone($phone)
                ->setAddress('N\'Djamena, Tchad')
                ->setStatus('Actif')
                ->setDescription("Institution officielle de la République du Tchad");
            
            $manager->persist($institution);
            $institutions[] = $institution;
        }
        echo "   ✓ 6 institutions créées\n\n";

        /*
        |=========================================================
        | 5. TYPES DE PARTENAIRES
        |=========================================================
        */
        echo "🤝 Création des types de partenaires...\n";
        
        $typePartners = [];
        foreach ([
            'bailleur' => ['Bailleur de fonds', 'BAILLEUR', 'Organismes de financement internationaux'],
            'technique' => ['Partenaire technique', 'TECHNIQUE', 'Assistance technique et conseil'],
            'ong' => ['ONG', 'ONG', 'Organisations non gouvernementales'],
            'prive' => ['Secteur privé', 'PRIVE', 'Entreprises et secteur privé'],
        ] as $key => [$name, $code, $desc]) {
            $type = (new TypePartner())
                ->setName($name)
                ->setCode($code)
                ->setDescription($desc);
            $manager->persist($type);
            $typePartners[$key] = $type;
        }
        echo "   ✓ 4 types de partenaires créés\n\n";

        /*
        |=========================================================
        | 6. PARTENAIRES
        |=========================================================
        */
        echo "🌍 Création des partenaires...\n";
        
        $partners = [];
        $partnersData = [
            ['Banque Mondiale', 'BM', $typePartners['bailleur'], 'contact@worldbank.org', 'Organisation internationale de financement'],
            ['Banque Africaine de Développement', 'BAD', $typePartners['bailleur'], 'contact@afdb.org', 'Banque régionale de développement'],
            ['Agence Française de Développement', 'AFD', $typePartners['bailleur'], 'afdndjamena@afd.fr', 'Agence bilatérale française'],
            ['Union Européenne', 'UE', $typePartners['bailleur'], 'delegation-chad@eeas.europa.eu', 'Délégation de l\'Union Européenne'],
            ['Programme des Nations Unies', 'PNUD', $typePartners['technique'], 'registry.td@undp.org', 'Assistance technique onusienne'],
            ['Banque Islamique de Développement', 'BID', $typePartners['bailleur'], 'contact@isdb.org', 'Banque islamique multilatérale'],
            ['Coopération Suisse', 'DDC', $typePartners['bailleur'], 'ndjamena@eda.admin.ch', 'Coopération bilatérale suisse'],
        ];

        foreach ($partnersData as [$name, $acr, $type, $email, $desc]) {
            $partner = (new Partner())
                ->setName($name)
                ->setAcronym($acr)
                ->setTypePartner($type)
                ->setContactEmail($email)
                ->setContactName('Point Focal ' . $acr)
                ->setContactRole('Coordinateur')
                ->setStatus('Actif')
                ->setDescription($desc)
                ->setAddress('N\'Djamena, Tchad');
            
            $manager->persist($partner);
            $partners[] = $partner;
        }
        echo "   ✓ 7 partenaires créés\n\n";

        /*
        |=========================================================
        | 7. PROJETS
        |=========================================================
        */
        echo "📁 Création des projets...\n";
        
        $projects = [];
        $projectsData = [
            ['Pont de Ngueli', 'PROJ-2024-001', 'infrastructure', 'N\'Djamena', 'haute', 'en-cours', 45, 
             '25000000000', '15000000000', $institutions[0], $partners[0]],
            ['Route N\'Djamena-Abéché', 'PROJ-2024-002', 'infrastructure', 'N\'Djamena - Abéché', 'haute', 'en-cours', 30,
             '85000000000', '25000000000', $institutions[0], $partners[1]],
            ['Centre Hospitalier Universitaire', 'PROJ-2024-003', 'sante', 'N\'Djamena', 'haute', 'planifie', 10,
             '45000000000', '5000000000', $institutions[1], $partners[2]],
            ['Construction Lycée Moderne', 'PROJ-2024-004', 'education', 'Moundou', 'moyenne', 'en-cours', 60,
             '8000000000', '4500000000', $institutions[2], $partners[3]],
            ['Électrification Rurale Phase 2', 'PROJ-2024-005', 'energie', 'Provinces du Sud', 'haute', 'en-cours', 40,
             '35000000000', '14000000000', $institutions[5], $partners[4]],
            ['Adduction d\'Eau Potable', 'PROJ-2023-012', 'eau', 'Sarh', 'normale', 'en-retard', 75,
             '12000000000', '10000000000', $institutions[5], $partners[5]],
            ['Développement Agricole Intégré', 'PROJ-2023-008', 'agriculture', 'Région du Lac', 'moyenne', 'en-cours', 55,
             '18000000000', '10000000000', $institutions[5], $partners[6]],
            ['Réhabilitation Bâtiments Administratifs', 'PROJ-2024-006', 'infrastructure', 'N\'Djamena', 'normale', 'termine', 100,
             '5000000000', '5000000000', $institutions[3], $partners[0]],
        ];

        foreach ($projectsData as $i => [$name, $code, $sector, $local, $prio, $status, $prog, $budget, $dec, $inst, $part]) {
            $project = (new Project())
                ->setName($name)
                ->setCode($code)
                ->setSector($sector)
                ->setLocalisation($local)
                ->setPriorite($prio)
                ->setStatus($status)
                ->setProgress($prog)
                ->setBudgetTotal($budget)
                ->setMontantDecaisse($dec)
                ->setInstitution($inst)
                ->setPartnerPrincipal($part)
                ->setDateDebut(new \DateTime('-' . rand(12, 36) . ' months'))
                ->setDateFin(new \DateTime('+' . rand(12, 48) . ' months'))
                ->setMaitreOuvrage($inst->getName())
                ->setChefProjet('Chef de Projet ' . ($i + 1))
                ->setSourceFinancement($part->getName())
                ->setDescription("Projet de développement dans le secteur " . $sector);
            
            $manager->persist($project);
            $projects[] = $project;
        }
        echo "   ✓ 8 projets créés\n\n";

        /*
        |=========================================================
        | 8. FINANCEMENTS
        |=========================================================
        */
        echo "💰 Création des financements...\n";
        
        $financements = [];
        foreach ($projects as $i => $project) {
            $partner = $project->getPartnerPrincipal();
            $budget = (float) $project->getBudgetTotal();
            
            $financement = (new Financement())
                ->setBailleur($partner)
                ->setType(['pret', 'don', 'subvention'][rand(0, 2)])
                ->setNumeroConvention('FIN-' . date('Y') . '-' . str_pad($i + 1, 3, '0', STR_PAD_LEFT))
                ->setDateSignature(new \DateTime('-' . rand(6, 24) . ' months'))
                ->setDateEntreeVigueur(new \DateTime('-' . rand(3, 18) . ' months'))
                ->setDateEcheance(new \DateTime('+' . rand(24, 60) . ' months'))
                ->setMontantEngage((string) $budget)
                ->setMontantDecaisse($project->getMontantDecaisse())
                ->setContrepartieNationale((string) ($budget * 0.15))
                ->setStatut(Financement::STATUT_ACTIF)
                ->setTauxInteret(rand(0, 3) . '.' . rand(0, 99) . '%')
                ->setDureeFinancement(rand(5, 10) . ' ans')
                ->setConditions('Conditions standard du bailleur')
                ->setNotes('Financement du projet: ' . $project->getName());
            
            $financement->addProjet($project);
            $manager->persist($financement);
            $financements[] = $financement;
        }
        echo "   ✓ 8 financements créés\n\n";

        /*
        |=========================================================
        | 9. CONVENTIONS
        |=========================================================
        */
        echo "📄 Création des conventions...\n";
        
        foreach ($financements as $i => $financement) {
            $convention = (new Convention())
                ->setFinancement($financement)
                ->setCode('CONV-' . date('Y') . '-' . str_pad($i + 1, 3, '0', STR_PAD_LEFT))
                ->setIntitule('Convention de financement - ' . $financement->getNumeroConvention())
                ->setType(['don', 'pret', 'mixte'][rand(0, 2)])
                ->setPartenaire($financement->getBailleur()->getName())
                ->setMontantGlobal($financement->getMontantEngage())
                ->setDevise('XAF')
                ->setContrepartieEtat($financement->getContrepartieNationale())
                ->setDateSignature($financement->getDateSignature())
                ->setDateMiseEnVigueur($financement->getDateEntreeVigueur())
                ->setDateLimiteDecaissement($financement->getDateEcheance())
                ->setStatut('en_cours')
                ->setDescription('Convention de financement entre l\'État du Tchad et ' . $financement->getBailleur()->getName())
                ->setCreatedBy('system');
            
            $manager->persist($convention);
        }
        echo "   ✓ 8 conventions créées\n\n";

        /*
        |=========================================================
        | 10. DÉCAISSEMENTS
        |=========================================================
        */
        echo "💳 Création des décaissements...\n";
        
        $decaissements = [];
        foreach ($financements as $financement) {
            $nombreDecaissements = rand(2, 5);
            $montantTotal = (float) $financement->getMontantDecaisse();
            $montantParDecaissement = $montantTotal / $nombreDecaissements;
            
            for ($j = 0; $j < $nombreDecaissements; $j++) {
                $projet = $financement->getProjets()->first();
                $statuts = ['execute', 'execute', 'valide', 'en_attente'];
                $statut = $statuts[rand(0, count($statuts) - 1)];
                
                $decaissement = (new Decaissement())
                    ->setFinancement($financement)
                    ->setProject($projet)
                    ->setBeneficiaire($projet->getMaitreOuvrage() ?? 'Bénéficiaire ' . ($j + 1))
                    ->setMontant((string) round($montantParDecaissement, 2))
                    ->setDevise('XAF')
                    ->setDateDemande(new \DateTime('-' . rand(30, 180) . ' days'))
                    ->setModePaiement(['virement', 'cheque', 'paiement_direct'][rand(0, 2)])
                    ->setStatut($statut)
                    ->setDescription('Décaissement n°' . ($j + 1) . ' pour ' . $projet->getName())
                    ->setCreatedBy('system');
                
                if (in_array($statut, ['valide', 'execute'])) {
                    $decaissement->setDateValidation(new \DateTime('-' . rand(15, 150) . ' days'))
                                 ->setValidePar('Validateur Finance');
                }
                
                if ($statut === 'execute') {
                    $decaissement->setDateExecution(new \DateTime('-' . rand(5, 120) . ' days'))
                                 ->setExecutePar('Exécuteur Trésor');
                }
                
                $manager->persist($decaissement);
                $decaissements[] = $decaissement;
            }
        }
        echo "   ✓ " . count($decaissements) . " décaissements créés\n\n";

        /*
        |=========================================================
        | 11. AUDITS
        |=========================================================
        */
        echo "🔍 Création des audits...\n";
        
        $audits = [];
        $typesAudit = ['audit_financier', 'audit_technique', 'controle_qualite', 'inspection'];
        $niveaux = ['excellent', 'bon', 'satisfaisant', 'moyen'];
        
        foreach ($projects as $i => $project) {
            $nombreAudits = rand(1, 3);
            
            for ($j = 0; $j < $nombreAudits; $j++) {
                $type = $typesAudit[array_rand($typesAudit)];
                $statut = ['termine', 'termine', 'en_cours', 'planifie'][rand(0, 3)];
                
                $audit = (new Audit())
                    ->setProjet($project)
                    ->setType($type)
                    ->setTitre(ucfirst(str_replace('_', ' ', $type)) . ' - ' . $project->getName())
                    ->setDateAudit(new \DateTime('-' . rand(30, 365) . ' days'))
                    ->setAuditeur('Cabinet d\'Audit ' . ['KPMG', 'Deloitte', 'EY', 'PwC'][rand(0, 3)])
                    ->setOrganisme('Cabinet indépendant')
                    ->setStatut($statut)
                    ->setObjectifs('Vérifier la conformité et l\'efficacité du projet')
                    ->setDateDebut(new \DateTime('-' . rand(60, 400) . ' days'))
                    ->setDateFin(new \DateTime('-' . rand(30, 300) . ' days'))
                    ->setCreatedBy('system');
                
                if ($statut === 'termine') {
                    $niveau = $niveaux[array_rand($niveaux)];
                    $audit->setNiveau($niveau)
                          ->setScore(rand(60, 95))
                          ->setResultat('Audit complété avec niveau ' . $niveau)
                          ->setRecommandations('Recommandations d\'amélioration continue')
                          ->setObservations('Observations détaillées suite à l\'audit');
                }
                
                $manager->persist($audit);
                $audits[] = $audit;
            }
        }
        echo "   ✓ " . count($audits) . " audits créés\n\n";

        /*
        |=========================================================
        | 12. UTILISATEURS
        |=========================================================
        */
        echo "👥 Création des utilisateurs...\n";
        
        $users = [];
        $usersData = [
            ['Dominique', 'DAMBA', 'dominique@sigep.td', 'SUPER_ADMIN', $roles['SUPER_ADMIN'], $institutions[3], 'MAT-2024-001'],
            ['Amina', 'KOUSSOURI', 'amina.koussouri@sigep.td', 'MANAGER', $roles['MANAGER'], $institutions[0], 'MAT-2024-002'],
            ['Ibrahim', 'MAHAMAT', 'ibrahim.mahamat@sigep.td', 'USER', $roles['USER'], $institutions[1], 'MAT-2024-003'],
            ['Fatima', 'ABDELKERIM', 'fatima.abdelkerim@sigep.td', 'MANAGER', $roles['MANAGER'], $institutions[2], 'MAT-2024-004'],
            ['Hassan', 'SALEH', 'hassan.saleh@sigep.td', 'ADMIN', $roles['ADMIN'], $institutions[3], 'MAT-2024-005'],
            ['Aïcha', 'AHMAT', 'aicha.ahmat@sigep.td', 'USER', $roles['USER'], $institutions[4], 'MAT-2024-006'],
        ];

        foreach ($usersData as [$fn, $ln, $email, $level, $role, $inst, $mat]) {
            $user = (new User())
                ->setFirstname($fn)
                ->setLastname($ln)
                ->setEmail($email)
                ->setAccessLevel($level)
                ->setRoles([$role])
                ->setInstitution($inst)
                ->setMatricule($mat)
                ->setDepartment($inst->getName())
                ->setPhone('+235 ' . rand(60, 99) . ' ' . rand(10, 99) . ' ' . rand(10, 99) . ' ' . rand(10, 99))
                ->setAddress('N\'Djamena, Tchad')
                ->setIsVerified(true)
                ->setHireDate(new \DateTime('-' . rand(12, 60) . ' months'));

            $user->setPassword(
                $this->passwordHasher->hashPassword($user, 'password123')
            );

            $manager->persist($user);
            $users[] = $user;
        }
        echo "   ✓ 6 utilisateurs créés\n\n";

        /*
        |=========================================================
        | FLUSH FINAL
        |=========================================================
        */
        echo "💾 Enregistrement en base de données...\n";
        $manager->flush();
        
        echo "\n";
        echo "✅ ==========================================\n";
        echo "✅  FIXTURES SIGEP TCHAD CHARGÉES AVEC SUCCÈS\n";
        echo "✅ ==========================================\n\n";
        echo "📊 Résumé:\n";
        echo "   • 4 Rôles système\n";
        echo "   • 5 Types d'institutions\n";
        echo "   • 7 Secteurs\n";
        echo "   • 6 Institutions\n";
        echo "   • 4 Types de partenaires\n";
        echo "   • 7 Partenaires\n";
        echo "   • 8 Projets\n";
        echo "   • 8 Financements\n";
        echo "   • 8 Conventions\n";
        echo "   • " . count($decaissements) . " Décaissements\n";
        echo "   • " . count($audits) . " Audits\n";
        echo "   • 6 Utilisateurs\n\n";
        echo "🔑 Credentials:\n";
        echo "   📧 admin@sigep.td       🔒 password123 (Super Admin)\n";
        echo "   📧 amina.koussouri@sigep.td  🔒 password123 (Manager)\n";
        echo "   📧 ibrahim.mahamat@sigep.td  🔒 password123 (User)\n\n";
        echo "🚀 Système prêt à l'emploi!\n\n";
    }
}
