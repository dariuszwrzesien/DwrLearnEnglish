<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class CheckmeController extends Controller
{

    /**
     * @Route("/check_me/{part_id}", defaults={"part_id" = null}, name="check_me")
     * @Template()
     */
    public function indexAction(Request $request, $part_id)
    {


        $em = $this->getDoctrine()->getManager();

        $parts = $em->getRepository('DwrFrontendBundle:Word')
                ->findAllPartsForEntity('DwrFrontendBundle:Word');
        $part = $em->getRepository('DwrFrontendBundle:Part')
                ->findOneBy(array('id' => $part_id));

        $form = $this->createFormBuilder()
                ->add('part_id', 'hidden')
                ->add('word_id', 'hidden')
                ->add('next', 'submit', array(
                    'attr' => array(
                        'class' => 'btn btn-primary btn-lg navbar-btn next-button'))
                     )
                ->getForm();



//        if($request->get('POST')){
        $part_id = '779';
        $word_id = '36444';
        $word = $em->getRepository('DwrFrontendBundle:Word')
                ->findOneBy(array('part' => $part_id, 'id' => $word_id));
//        }

        return array(
            'part' => $part,
            'parts' => $parts,
            'word' => $word,
            'form' => $form->createView(),
        );
    }

}
