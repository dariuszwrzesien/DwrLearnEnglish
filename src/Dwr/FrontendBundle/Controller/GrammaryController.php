<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GrammaryController extends Controller
{
    /**
     * @Route("/grammary/{grammary_package}", defaults={"grammary_package" = null}, name="grammary")
     * @Template()
     */
    public function indexAction($grammary_package)
    {
        $em = $this->getDoctrine()->getManager();
        $grammary = $em->getRepository('DwrFrontendBundle:Grammary')->findBy(array('part' => $grammary_package));
        $parts = $em->getRepository('DwrFrontendBundle:Grammary')->findAllFromColumn('DwrFrontendBundle:Grammary', 'part');
        
        return array(
            'parts' => $parts,
            'grammary' => $grammary,
            'grammary_package' => $grammary_package
        );
    }
}
