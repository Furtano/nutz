<?php

namespace AppBundle\ORM\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setSpitzname('testilein');
        $userAdmin->setGeschlecht(1);
        $userAdmin->setGeburtsdatum(new \DateTime('06.10.1988'));
        $userAdmin->setProfilbildid(0);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
