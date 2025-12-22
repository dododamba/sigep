<?php

namespace App\DataFixtures;

use App\Entity\Financement;
use App\Entity\Partner;
use App\Entity\TypePartner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /*
        |----------------------------------------------------------------------
        | TYPE PARTNERS
        |----------------------------------------------------------------------
        */

        $typePartnerData = [
            'bailleur' => ['Bailleur de fonds', 'BAILLEUR'],
            'etat'     => ['État', 'ETAT'],
            'ong'      => ['ONG', 'ONG'],
            'prive'    => ['Secteur privé', 'PRIVE'],
        ];

        $typePartners = [];

        foreach ($typePartnerData as $key => [$name, $code]) {
            $type = new TypePartner();
            $type->setName($name)
                 ->setCode($code)
                 ->setDescription("Type de partenaire : $name");

            $manager->persist($type);
            $typePartners[$key] = $type;
        }

        /*
        |----------------------------------------------------------------------
        | PARTNERS
        |----------------------------------------------------------------------
        */

        $partnersData = [
            ['Banque Mondiale – Tchad', 'BM', 'bailleur'],
            ['Banque Africaine de Développement', 'BAD', 'bailleur'],
            ['Agence Française de Développement', 'AFD', 'bailleur'],
            ['Union Européenne – Tchad', 'UE', 'bailleur'],
            ['FIDA', 'FIDA', 'bailleur'],
            ['Chine EXIM Bank', 'CHINE', 'bailleur'],
            ['Ministère de l’Économie et de la Planification', 'MEP', 'etat'],
        ];

        $partners = [];

        foreach ($partnersData as [$name, $acronym, $typeKey]) {
            $partner = new Partner();
            $partner->setName($name)
                    ->setAcronym($acronym)
                    ->setContactEmail(strtolower($acronym) . '@example.org')
                    ->setStatus('Actif')
                    ->setDescription('Partenaire institutionnel')
                    ->setTypePartner($typePartners[$typeKey]);

            $manager->persist($partner);
            $partners[] = $partner;
        }

        /*
        |----------------------------------------------------------------------
        | FINANCEMENTS
        |----------------------------------------------------------------------
        */

        for ($i = 1; $i <= 20; $i++) {

            $engage   = mt_rand(5_000_000_000, 50_000_000_000);
            $decaisse = mt_rand(1_000_000_000, $engage);

            $financement = new Financement();
            $financement
                ->setBailleur($partners[array_rand($partners)])
                ->setType(Financement::TYPE_PRET)
                ->setNumeroConvention('CONV-TD-2024-' . str_pad($i, 3, '0', STR_PAD_LEFT))
                ->setDateSignature(new \DateTime('2024-01-01'))
                ->setDateEntreeVigueur(new \DateTime('2024-03-01'))
                ->setDateEcheance(new \DateTime('2029-12-31'))
                ->setMontantEngage((string) $engage)
                ->setMontantDecaisse((string) $decaisse)
                ->setContrepartieNationale((string) mt_rand(500_000_000, 5_000_000_000))
                ->setTauxInteret('1.5 %')
                ->setDureeFinancement('5 ans')
                ->setStatut(Financement::STATUT_ACTIF)
                ->setConditions('Financement de projets structurants');

            $manager->persist($financement);
        }

        $manager->flush();
    }
}
