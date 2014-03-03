<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CheckmeController extends Controller
{
    /**
     * @Route("/check_me", name="check_me")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
