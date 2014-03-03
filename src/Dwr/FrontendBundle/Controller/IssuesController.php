<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IssuesController extends Controller
{
    /**
     * @Route("/issues", name="issues")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
