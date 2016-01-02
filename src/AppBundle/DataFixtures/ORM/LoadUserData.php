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
      $manager->flush();
      $anzeige2 = new Anzeige();
      $anzeige2->setAnzeigetext($lorem);
      $anzeige2->setEintrageDatum(new \DateTime("now"));
      $manager->persist($anzeige2);
      $manager->flush();

      $anzeige3 = new Anzeige();
      $anzeige3->setAnzeigetext($lorem);
      $anzeige3->setEintrageDatum(new \DateTime("now"));
      $manager->persist($anzeige3);
      $manager->flush();


        $userAdmin = new User();
        $userAdmin->setSpitzname('dummy');
        $userAdmin->setGeschlecht(1);
        $userAdmin->setGeburtsdatum(new \DateTime('02.02.2000'));
        $userAdmin->setProfilbildid(0);
        $userAdmin->setAnzeige($anzeige1);
        $manager->persist($userAdmin);
        $manager->flush();

                $userAdmin2 = new User();
                $userAdmin2->setSpitzname('nadine');
                $userAdmin2->setGeschlecht(0);
                $userAdmin2->setGeburtsdatum(new \DateTime('02.02.2000'));
                $userAdmin2->setProfilbildid(0);
                $userAdmin2->setAnzeige($anzeige2);
                $manager->persist($userAdmin2);
                $manager->flush();


                        $userAdmin3 = new User();
                        $userAdmin3->setSpitzname('mate');
                        $userAdmin3->setGeschlecht(1);
                        $userAdmin3->setGeburtsdatum(new \DateTime('02.05.1955'));
                        $userAdmin3->setProfilbildid(0);
                        $userAdmin3->setAnzeige($anzeige3);
                        $manager->persist($userAdmin3);
                        $manager->flush();

    }
}
