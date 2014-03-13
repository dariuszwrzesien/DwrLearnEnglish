<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WordslistController extends Controller
{

    /**
     * @Route("/words_list/{words_package_id}", defaults={"words_package_id" = null}, name="words_list")
     * @Template()
     */
    public function indexAction($words_package_id)
    {
        $em = $this->getDoctrine()->getManager();
                
        $words = $em->getRepository('DwrFrontendBundle:Word')->findBy(array('part' => (int)$words_package_id));
        $parts = $em->getRepository('DwrFrontendBundle:Word')->findAllPartsForEntity('DwrFrontendBundle:Word');
        
        return array(
            'parts' => $parts,
            'words' => $words,
            'words_package' => $words_package_id
        );
    }

}
