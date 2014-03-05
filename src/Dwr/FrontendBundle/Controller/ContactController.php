<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function indexAction()
    {
        $author = $this->container->getParameter('author');
        $author_mail = $this->container->getParameter('author_mail');
        
        return array('author' => $author, 'author_mail' => $author_mail);
    }
}
