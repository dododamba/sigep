<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Institution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        // Récupérer les institutions (créées dans InstitutionFixtures)
        $institutions = $manager->getRepository(Institution::class)->findAll();

        if (empty($institutions)) {
            echo "⚠️  Aucune institution trouvée. Veuillez créer des institutions d'abord.\n";
            return;
        }

        // Données réalistes pour le Tchad
        $usersData = [
            // Super Administrateur - Présidence
            [
                'firstname' => 'Mahamat',
                'lastname' => 'DÉBY',
                'email' => 'mahamat.deby@presidence.td',
                'phone' => '+235 66 00 00 01',
                'address' => 'Palais Rose, N\'Djamena',
                'matricule' => 'PRES-2024-001',
                'department' => 'Direction Générale',
                'hireDate' => new \DateTime('2024-01-15'),
                'roles' => ['ROLE_SUPER_ADMIN', 'ROLE_ADMIN'],
                'accessLevel' => 'SUPER_ADMIN',
                'isVerified' => true,
                'institutionType' => 'primature',
            ],
            
            // Ministère des Finances et du Budget
            [
                'firstname' => 'Tahir',
                'lastname' => 'HAMID NGUILIN',
                'email' => 'tahir.hamid@finances.gouv.td',
                'phone' => '+235 66 12 34 56',
                'address' => 'Ministère des Finances, Avenue Charles de Gaulle, N\'Djamena',
                'matricule' => 'MFB-2023-045',
                'department' => 'Direction Générale du Budget',
                'hireDate' => new \DateTime('2023-05-01'),
                'roles' => ['ROLE_ADMIN'],
                'accessLevel' => 'ADMIN',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Fatima',
                'lastname' => 'MAHAMAT',
                'email' => 'fatima.mahamat@finances.gouv.td',
                'phone' => '+235 66 23 45 67',
                'address' => 'Quartier Ridina, N\'Djamena',
                'matricule' => 'MFB-2022-087',
                'department' => 'Direction de la Comptabilité Publique',
                'hireDate' => new \DateTime('2022-09-15'),
                'roles' => ['ROLE_MANAGER'],
                'accessLevel' => 'MANAGER',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Hassan',
                'lastname' => 'ABDERAMAN',
                'email' => 'hassan.abderaman@finances.gouv.td',
                'phone' => '+235 66 34 56 78',
                'address' => 'Quartier Moursal, N\'Djamena',
                'matricule' => 'MFB-2024-012',
                'department' => 'Service du Contrôle Budgétaire',
                'hireDate' => new \DateTime('2024-02-01'),
                'roles' => ['ROLE_USER'],
                'accessLevel' => 'USER_STANDARD',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],

            // Ministère du Plan et de la Coopération Internationale
            [
                'firstname' => 'Saleh',
                'lastname' => 'KEBZABO',
                'email' => 'saleh.kebzabo@plan.gouv.td',
                'phone' => '+235 66 45 67 89',
                'address' => 'Ministère du Plan, Boulevard de la Liberté, N\'Djamena',
                'matricule' => 'MPCI-2023-001',
                'department' => 'Direction Générale',
                'hireDate' => new \DateTime('2023-01-10'),
                'roles' => ['ROLE_ADMIN'],
                'accessLevel' => 'ADMIN',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Amina',
                'lastname' => 'KOUSSOURI',
                'email' => 'amina.koussouri@plan.gouv.td',
                'phone' => '+235 66 56 78 90',
                'address' => 'Quartier Chagoua, N\'Djamena',
                'matricule' => 'MPCI-2023-034',
                'department' => 'Direction des Projets de Développement',
                'hireDate' => new \DateTime('2023-06-20'),
                'roles' => ['ROLE_MANAGER'],
                'accessLevel' => 'MANAGER',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Youssouf',
                'lastname' => 'ADAM',
                'email' => 'youssouf.adam@plan.gouv.td',
                'phone' => '+235 66 67 89 01',
                'address' => 'Quartier Sabangali, N\'Djamena',
                'matricule' => 'MPCI-2024-015',
                'department' => 'Service de Suivi-Évaluation',
                'hireDate' => new \DateTime('2024-03-01'),
                'roles' => ['ROLE_USER'],
                'accessLevel' => 'USER_STANDARD',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],

            // Ministère des Infrastructures et des Transports
            [
                'firstname' => 'Aziz',
                'lastname' => 'MAHAMAT SALEH',
                'email' => 'aziz.saleh@infrastructures.gouv.td',
                'phone' => '+235 66 78 90 12',
                'address' => 'Ministère des Infrastructures, N\'Djamena',
                'matricule' => 'MIT-2023-010',
                'department' => 'Direction Générale',
                'hireDate' => new \DateTime('2023-04-15'),
                'roles' => ['ROLE_ADMIN'],
                'accessLevel' => 'ADMIN',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Mariam',
                'lastname' => 'OUSMAN',
                'email' => 'mariam.ousman@infrastructures.gouv.td',
                'phone' => '+235 66 89 01 23',
                'address' => 'Quartier Toukra, N\'Djamena',
                'matricule' => 'MIT-2023-045',
                'department' => 'Direction des Routes et Ponts',
                'hireDate' => new \DateTime('2023-07-10'),
                'roles' => ['ROLE_MANAGER'],
                'accessLevel' => 'MANAGER',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],

            // Ministère de l'Éducation Nationale
            [
                'firstname' => 'Abderahim',
                'lastname' => 'BIREME HAMID',
                'email' => 'abderahim.hamid@education.gouv.td',
                'phone' => '+235 66 90 12 34',
                'address' => 'Ministère de l\'Education, Avenue Mobutu, N\'Djamena',
                'matricule' => 'MEN-2022-008',
                'department' => 'Direction Générale',
                'hireDate' => new \DateTime('2022-10-01'),
                'roles' => ['ROLE_ADMIN'],
                'accessLevel' => 'ADMIN',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Zara',
                'lastname' => 'MAHAMAT NOUR',
                'email' => 'zara.nour@education.gouv.td',
                'phone' => '+235 66 01 23 45',
                'address' => 'Quartier Bololo, N\'Djamena',
                'matricule' => 'MEN-2023-067',
                'department' => 'Direction de la Planification',
                'hireDate' => new \DateTime('2023-08-15'),
                'roles' => ['ROLE_MANAGER'],
                'accessLevel' => 'MANAGER',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],

            // Ministère de la Santé Publique
            [
                'firstname' => 'Abdoulaye',
                'lastname' => 'SABRE FADOUL',
                'email' => 'abdoulaye.fadoul@sante.gouv.td',
                'phone' => '+235 66 12 34 56',
                'address' => 'Ministère de la Santé, N\'Djamena',
                'matricule' => 'MSP-2023-020',
                'department' => 'Direction Générale',
                'hireDate' => new \DateTime('2023-03-01'),
                'roles' => ['ROLE_ADMIN'],
                'accessLevel' => 'ADMIN',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Hawa',
                'lastname' => 'HASSAN',
                'email' => 'hawa.hassan@sante.gouv.td',
                'phone' => '+235 66 23 45 67',
                'address' => 'Quartier Kabalaye, N\'Djamena',
                'matricule' => 'MSP-2023-056',
                'department' => 'Direction des Projets de Santé',
                'hireDate' => new \DateTime('2023-09-10'),
                'roles' => ['ROLE_MANAGER'],
                'accessLevel' => 'MANAGER',
                'isVerified' => true,
                'institutionType' => 'ministère',
            ],

            // Utilisateurs en attente de vérification
            [
                'firstname' => 'Ibrahim',
                'lastname' => 'MAHAMAT',
                'email' => 'ibrahim.mahamat@gouvernement.td',
                'phone' => '+235 66 34 56 78',
                'address' => 'Quartier Walia, N\'Djamena',
                'matricule' => 'TEMP-2024-001',
                'department' => 'Service Administratif',
                'hireDate' => new \DateTime('2024-11-01'),
                'roles' => ['ROLE_USER'],
                'accessLevel' => 'USER_STANDARD',
                'isVerified' => false,
                'institutionType' => 'ministère',
            ],
            [
                'firstname' => 'Aisha',
                'lastname' => 'YOUSSOUF',
                'email' => 'aisha.youssouf@gouvernement.td',
                'phone' => '+235 66 45 67 89',
                'address' => 'Quartier Dembé, N\'Djamena',
                'matricule' => 'TEMP-2024-002',
                'department' => 'Service Comptabilité',
                'hireDate' => new \DateTime('2024-11-15'),
                'roles' => ['ROLE_USER'],
                'accessLevel' => 'USER_STANDARD',
                'isVerified' => false,
                'institutionType' => 'ministère',
            ],
        ];

        $createdCount = 0;
        $defaultPassword = 'password123'; // En production, utiliser des mots de passe forts

        foreach ($usersData as $userData) {
            // Chercher une institution correspondante au type
            $institution = null;
            foreach ($institutions as $inst) {
                if (stripos($inst->getType(), $userData['institutionType']) !== false) {
                    $institution = $inst;
                    break;
                }
            }

            // Si aucune institution correspondante, prendre la première
            if (!$institution && !empty($institutions)) {
                $institution = $institutions[0];
            }

            $user = new User();
            $user->setFirstname($userData['firstname'])
                ->setLastname($userData['lastname'])
                ->setEmail($userData['email'])
                ->setPhone($userData['phone'] ?? null)
                ->setAddress($userData['address'] ?? null)
                ->setMatricule($userData['matricule'] ?? null)
                ->setDepartment($userData['department'] ?? null)
                ->setHireDate($userData['hireDate'] ?? null)
                ->setRoles($userData['roles'])
                ->setAccessLevel($userData['accessLevel'])
                ->setIsVerified($userData['isVerified'])
                ->setInstitution($institution);

            // Hasher le mot de passe
            $hashedPassword = $this->passwordHasher->hashPassword($user, $defaultPassword);
            $user->setPassword($hashedPassword);

            $manager->persist($user);
            $createdCount++;
        }

        $manager->flush();

        echo "✅ {$createdCount} utilisateurs créés avec succès !\n";
        echo "📧 Email par défaut : les emails sont dans les fixtures\n";
        echo "🔑 Mot de passe par défaut pour tous : {$defaultPassword}\n";
    }

    public function getDependencies(): array
    {
        return [
            // InstitutionFixtures::class, // Décommentez si vous avez des fixtures d'institutions
        ];
    }
}
