<?php

namespace App\DataFixtures;

use App\Entity\Usager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $usager = new Usager();
        $usager->setNom("Chow");
        $usager->setPrenom("Arty");
        $usager->setAdresse("2 rue jeanne d'arc, 54000 Nancy");
        $manager->persist($usager);
        $manager->flush();
    }
}
