<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WordslistController extends Controller
{

    /**
     * @Route("/words_list/{words_package}", defaults={"words_package" = null}, name="words_list")
     * @Template()
     */
    public function indexAction($words_package)
    {
        $em = $this->getDoctrine()->getManager();
        $words = $em->getRepository('DwrFrontendBundle:Word')->findBy(array('part' => $words_package));
        $parts = $em->getRepository('DwrFrontendBundle:Word')->findAllFromColumn('DwrFrontendBundle:Word', 'part');
        
        return array(
            'parts' => $parts,
            'words' => $words,
            'words_package' => $words_package
        );
    }

}
