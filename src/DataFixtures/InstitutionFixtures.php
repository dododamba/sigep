<?php

namespace App\DataFixtures;

use App\Entity\TypeInstitution;
use App\Entity\SectorInstitution;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InstitutionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Types d'institutions
        $types = [
            [
                'name' => 'Ministère',
                'code' => 'MINISTERE',
                'description' => 'Département ministériel du gouvernement',
                'icon' => 'ri-government-line',
                'color' => '#002664'
            ],
            [
                'name' => 'Agence Nationale',
                'code' => 'AGENCE',
                'description' => 'Agence gouvernementale autonome',
                'icon' => 'ri-bank-line',
                'color' => '#1a4a8a'
            ],
            [
                'name' => 'Direction Générale',
                'code' => 'DG',
                'description' => 'Direction générale rattachée à un ministère',
                'icon' => 'ri-building-2-line',
                'color' => '#2a5a9a'
            ],
            [
                'name' => 'Projet / Unité de Gestion',
                'code' => 'PROJET',
                'description' => 'Unité de gestion de projet',
                'icon' => 'ri-folder-chart-line',
                'color' => '#3a6aaa'
            ],
            [
                'name' => 'Établissement Public',
                'code' => 'EPA',
                'description' => 'Établissement public administratif',
                'icon' => 'ri-community-line',
                'color' => '#4a7aba'
            ],
            [
                'name' => 'Collectivité Territoriale',
                'code' => 'CT',
                'description' => 'Administration territoriale décentralisée',
                'icon' => 'ri-map-pin-line',
                'color' => '#5a8aca'
            ],
        ];

        foreach ($types as $typeData) {
            $type = new TypeInstitution();
            $type->setName($typeData['name']);
            $type->setCode($typeData['code']);
            $type->setDescription($typeData['description']);
            $type->setIcon($typeData['icon']);
            $type->setColor($typeData['color']);
            
            $manager->persist($type);
            $this->addReference('type_inst_' . $typeData['code'], $type);
        }

        // Secteurs d'activité
        $sectors = [
            [
                'name' => 'Administration Générale',
                'code' => 'ADMIN',
                'description' => 'Services administratifs et gouvernance',
                'icon' => 'ri-briefcase-line',
                'color' => '#6366f1'
            ],
            [
                'name' => 'Éducation & Formation',
                'code' => 'EDUCATION',
                'description' => 'Enseignement et formation professionnelle',
                'icon' => 'ri-graduation-cap-line',
                'color' => '#8b5cf6'
            ],
            [
                'name' => 'Santé Publique',
                'code' => 'SANTE',
                'description' => 'Santé et services sociaux',
                'icon' => 'ri-heart-pulse-line',
                'color' => '#ec4899'
            ],
            [
                'name' => 'Infrastructures',
                'code' => 'INFRA',
                'description' => 'Travaux publics et infrastructures',
                'icon' => 'ri-road-map-line',
                'color' => '#f97316'
            ],
            [
                'name' => 'Agriculture & Élevage',
                'code' => 'AGRI',
                'description' => 'Secteur agricole et pastoral',
                'icon' => 'ri-plant-line',
                'color' => '#22c55e'
            ],
            [
                'name' => 'Économie & Finances',
                'code' => 'ECONOMIE',
                'description' => 'Finances publiques et développement économique',
                'icon' => 'ri-money-dollar-circle-line',
                'color' => '#eab308'
            ],
            [
                'name' => 'Justice & Sécurité',
                'code' => 'JUSTICE',
                'description' => 'Justice, défense et sécurité intérieure',
                'icon' => 'ri-scales-line',
                'color' => '#ef4444'
            ],
            [
                'name' => 'Environnement & Eau',
                'code' => 'ENVIRONNEMENT',
                'description' => 'Protection de l\'environnement et ressources en eau',
                'icon' => 'ri-water-flash-line',
                'color' => '#06b6d4'
            ],
            [
                'name' => 'Énergie & Mines',
                'code' => 'ENERGIE',
                'description' => 'Secteur énergétique et minier',
                'icon' => 'ri-flashlight-line',
                'color' => '#f59e0b'
            ],
            [
                'name' => 'Affaires Sociales',
                'code' => 'SOCIAL',
                'description' => 'Action sociale et protection des groupes vulnérables',
                'icon' => 'ri-team-line',
                'color' => '#14b8a6'
            ],
        ];

        foreach ($sectors as $sectorData) {
            $sector = new SectorInstitution();
            $sector->setName($sectorData['name']);
            $sector->setCode($sectorData['code']);
            $sector->setDescription($sectorData['description']);
            $sector->setIcon($sectorData['icon']);
            $sector->setColor($sectorData['color']);
            
            $manager->persist($sector);
            $this->addReference('sector_' . $sectorData['code'], $sector);
        }

        $manager->flush();
    }
}
