<?php

namespace AppBundle\ORM\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use AppBundle\Entity\Anzeige;
class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
      $lorem = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
      $anzeige1 = new Anzeige();
      $anzeige1->setAnzeigetext($lorem);
      $anzeige1->setEintrageDatum(new \DateTime("now"));
      $manager->persist($anzeige1);

      $anzeige2 = new Anzeige();
      $anzeige2->setAnzeigetext($lorem);
      $anzeige2->setEintrageDatum(new \DateTime("now"));
      $manager->persist($anzeige2);

      $anzeige3 = new Anzeige();
      $anzeige3->setAnzeigetext($lorem);
      $anzeige3->setEintrageDatum(new \DateTime("now"));
      $manager->persist($anzeige3);

        $userAdmin = new User();
        $userAdmin->setAnzeige($anzeige1);
        $userAdmin->setSpitzname('dummy');
        $userAdmin->setGeschlecht('1');
        $userAdmin->setAlter('22');
        $userAdmin->setProfilbildId('0');
        $userAdmin->setEmail('sc1hady@posteo.de');
        $manager->persist($userAdmin);

                $userAdmin2 = new User();
                $userAdmin2->setSpitzname('nadine');
                $userAdmin2->setGeschlecht(0);
                $userAdmin2->setAlter(29);
                $userAdmin2->setProfilbildId(0);
                $userAdmin2->setAnzeige($anzeige2);
                $userAdmin2->setEmail('scha4dy@posteo.de');
                $manager->persist($userAdmin2);


                        $userAdmin3 = new User();
                        $userAdmin3->setSpitzname('mate');
                        $userAdmin3->setGeschlecht(1);
                        $userAdmin3->setAlter(27);
                        $userAdmin3->setProfilbildId(0);
                        $userAdmin3->setEmail('schad5y@posteo.de');
                        $userAdmin3->setAnzeige($anzeige3);
                        $manager->persist($userAdmin3);
                        $manager->flush();


    }
}
