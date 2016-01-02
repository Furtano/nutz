<?php

namespace AppBundle\ORM\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Anzeige;
use Symfony\Component\Validator\Constraints\Date;

class LoadAnzeigeData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        

    }
}
