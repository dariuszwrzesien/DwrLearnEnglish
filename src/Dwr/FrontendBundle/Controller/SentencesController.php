<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SentencesController extends Controller
{

    /**
     * @Route("/sentences/{sentences_package_id}", defaults={"sentences_package_id" = null}, name="sentences")
     * @Template()
     */
    public function indexAction($sentences_package_id)
    {
        $em = $this->getDoctrine()->getManager();

        $sentences = $em->getRepository('DwrFrontendBundle:Sentence')->findBy(array('part' => $sentences_package_id));
        $part = $em->getRepository('DwrFrontendBundle:Part')->findOneBy(array('id' => $sentences_package_id));
        $parts = $em->getRepository('DwrFrontendBundle:Sentence')->findAllPartsForEntity('DwrFrontendBundle:Sentence');

        return array(
            'part' => $part,
            'parts' => $parts,
            'sentences' => $sentences,
            'sentences_package' => $sentences_package_id
        );
    }

}
