<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        $words = $this->getRandomWords(120);

        return array('words' => $words);
    }
    
    private function getRandomWords($number)
    {
        $em = $this->getDoctrine()->getManager();
        $words = $em->getRepository('DwrFrontendBundle:Word')->findRandomWords($number);
        
        return $words;
    }
}
