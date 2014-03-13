<?php

namespace Dwr\FrontendBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Dwr\FrontendBundle\Entity\Part;
use Dwr\FrontendBundle\Entity\Subpart;
use Dwr\FrontendBundle\Entity\Word;
use Dwr\FrontendBundle\Entity\Grammary;
use Dwr\FrontendBundle\Entity\Sentence;

class LoadData implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $dataStorage = array(
            'word' => 'data/words',
            'sentence' => 'data/sentences',
            'grammary' => 'data/grammary'
        );
        
        foreach ($dataStorage as $dataDir) {
            if (opendir($dataDir)) {
                $dirHandle = opendir($dataDir);
                while (false !== ($file = readdir($dirHandle))) {
                    if ($file != "." && $file != "..") {
                        $xml = simplexml_load_file($dataDir . '/' . $file);
                        foreach ($xml->children() as $child) {
                            /**
                             * Add Part and Subpart if don't exist
                             */
                            $Part = $this->addPart($manager, $child->part);
                            $Subpart = $this->addSubpart($manager, $child->subpart);

                            /**
                             * Add Data to Entity
                             */
                            $Object = $this->addData($manager, $child, $Part, $Subpart);
                        }
                    }
                }
            }
        }
        $manager->flush();
    }

    private function addPart(ObjectManager $manager, $part)
    {
        $partInDb = $manager->getRepository('DwrFrontendBundle:Part')
                ->findOneBy(array('name' => $part));

        if ($partInDb) {
            return $partInDb;
        } else {
            $Part = new Part();
            $Part->setName($part);
            $manager->persist($Part);
            $manager->flush();
            return $Part;
        }
    }

    private function addSubpart(ObjectManager $manager, $subpart)
    {
        $subpartInDb = $manager->getRepository('DwrFrontendBundle:Subpart')
                ->findOneBy(array('name' => $subpart));

        if ($subpartInDb) {
            return $subpartInDb;
        } else {
            $Subpart = new Subpart();
            $Subpart->setName($subpart);
            $manager->persist($Subpart);
            $manager->flush();
            return $Subpart;
        }
    }

    private function addData(ObjectManager $manager, \SimpleXMLElement $data, $Part, $Subpart)
    {

        $entityName = "Dwr\FrontendBundle\Entity\\"
                . ucfirst((string) $data->getName());

        $Object = new $entityName();
        $Object->setPart($Part);
        $Object->setSubpart($Subpart);

        foreach ($data as $key => $val) {
            if ($key !== 'part' && $key !== 'subpart') {
                $func = 'set' . ucfirst($key);
                $Object->$func($data->$key);
            }
        }

        $manager->persist($Object);
//        $manager->flush();
        return $Object;
    }

}
