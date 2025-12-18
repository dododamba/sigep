<?php

namespace App\DataFixtures;

use App\Entity\TypePartner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TypePartnerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $types = [
            ['name' => 'Multilatéral', 'code' => 'MULTI', 'description' => 'Organisations internationales et institutions multilatérales'],
            ['name' => 'Bilatéral', 'code' => 'BILAT', 'description' => 'Coopération bilatérale entre États'],
            ['name' => 'ONG Internationale', 'code' => 'ONG', 'description' => 'Organisations non gouvernementales internationales'],
            ['name' => 'Secteur Privé', 'code' => 'PRIVE', 'description' => 'Entreprises et investisseurs privés'],
            ['name' => 'Agence UN', 'code' => 'UN', 'description' => 'Agences des Nations Unies'],
            ['name' => 'Fondation', 'code' => 'FOND', 'description' => 'Fondations philanthropiques'],
            ['name' => 'Banque', 'code' => 'BANK', 'description' => 'Institutions financières et banques'],
        ];

        foreach ($types as $typeData) {
            $type = new TypePartner();
            $type->setName($typeData['name']);
            $type->setCode($typeData['code']);
            $type->setDescription($typeData['description']);
            
            $manager->persist($type);
            $this->addReference('type_' . $typeData['code'], $type);
        }

        $manager->flush();
    }
}
