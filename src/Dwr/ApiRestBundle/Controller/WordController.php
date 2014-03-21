<?php

namespace Dwr\ApiRestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Dwr\FrontendBundle\Entity\Word;
use FOS\RestBundle\Controller\Annotations as Rest;

class WordController extends Controller
{

    /**
     * @Rest\View
     */
    public function allAction($part_id)
    {

        $words = array();
        $em = $this->getDoctrine()->getManager();
        $Words = $em->getRepository('DwrFrontendBundle:Word')->findBy(array('part' => (int) $part_id));

        $words['result'] = count($Words);
        foreach ($Words as $word) {
            $words[$word->getId()]['id'] = [$word->getId()];
            $words[$word->getId()]['part'] = [$word->getPart()->getId()];
            $words[$word->getId()]['english'] = [$word->getEnglish()];
            $words[$word->getId()]['polish'] = [$word->getPolish()];
        }

        if ($Words) {
            return array('words' => $words);
        } else {
            return array(
                'result' => '0',
                'error' => 'Words not found in database, check part id'
            );
        }
    }

    /**
     * @Rest\View
     */
    public function getAction($part_id, $word_id)
    {
        $em = $this->getDoctrine()->getManager();
        $word = $em->getRepository('DwrFrontendBundle:Word')
                ->findOneBy(array('part' => $part_id, 'id' => $word_id));

        if ($word) {
            return array(
                'result' => '1',
                'id' => $word->getId(),
                'part_id' => $word->getPart()->getId(),
                'english' => $word->getEnglish(),
                'polish' => $word->getPolish(),
            );
        } else {
            return array(
                'result' => '0',
                'error' => 'Word not found in database, check part id and word id'
            );
        }
    }

}
