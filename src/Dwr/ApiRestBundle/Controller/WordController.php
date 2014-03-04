<?php

namespace Dwr\ApiRestBundle\Controller;

use Dwr\FrontendBundle\Entity\Word;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class WordController
{

    /**
     * @Rest\View
     */
    public function allAction()
    {
        $words = ['1' => 'dupa', '2' => 'dupsko'];

        return array('words' => $words);
    }

    /**
     * @Rest\View
     */
    public function getAction($id)
    {
        $word = 'dupa' . $id;

        return array('word' => $word);
    }

}
