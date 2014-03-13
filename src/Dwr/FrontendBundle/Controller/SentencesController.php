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
                
        $sentences = $em->getRepository('DwrFrontendBundle:Sentence')->findBy(array('part' => (int)$sentences_package_id));
        $parts = $em->getRepository('DwrFrontendBundle:Sentence')->findAllPartsForEntity('DwrFrontendBundle:Sentence');
        
        return array(
            'parts' => $parts,
            'sentences' => $sentences,
            'sentences_package' => $sentences_package_id
        );
    }
}
