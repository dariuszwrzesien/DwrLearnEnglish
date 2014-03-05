<?php

namespace Dwr\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dwr\FrontendBundle\Entity\Part;
use Dwr\FrontendBundle\Entity\Subpart;
use Dwr\FrontendBundle\Entity\Word;

class LoadData implements FixtureInterface
{

    function load(ObjectManager $manager)
    {
        $Part = new Part();
        $Part->setName("Part 1");
        $manager->persist($Part);
        
        $Subpart = new Subpart();
        $Subpart->setName("Subpart 1");
        $manager->persist($Subpart);
        
        $Word = new Word();
        $Word->setEnglish('ass');
        $Word->setPolish('dupa');
        $Word->setPart($Part);
        $Word->setSubpart($Subpart);
        $manager->persist($Word);
        
        $manager->flush();
        
    }

}
