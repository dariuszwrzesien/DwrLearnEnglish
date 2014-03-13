<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GrammaryController extends Controller
{
    /**
     * @Route("/grammary/{grammary_package_id}", defaults={"grammary_package_id" = null}, name="grammary")
     * @Template()
     */
    public function indexAction($grammary_package_id)
    {
        $em = $this->getDoctrine()->getManager();
        $grammary = $em->getRepository('DwrFrontendBundle:Grammary')->findBy(array('part' => $grammary_package_id));
        $parts = $em->getRepository('DwrFrontendBundle:Grammary')->findAllPartsForEntity('DwrFrontendBundle:Grammary');
        
        return array(
            'parts' => $parts,
            'grammary' => $grammary,
            'grammary_package' => $grammary_package_id
        );
    }
}
