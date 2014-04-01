<?php

namespace Dwr\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
use Dwr\FrontendBundle\Entity\Part;

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

        $word = null;
        if ($part) {
            if ($this->randomWord($request, $part)) {
                $word = $this->randomWord($request, $part);
            } else {
                return $this->redirect($this->generateUrl('check_me'));
            }
        } else {
            $this->clearCookie();
        }

        $form = $this->createFormBuilder()
                ->add('part_id', 'hidden')
                ->add('word_id', 'hidden')
                ->add('next', 'submit', array(
                    'attr' => array(
                        'class' => 'btn btn-primary btn-lg navbar-btn next-button'))
                )
                ->getForm();

        return array(
            'part' => $part,
            'parts' => $parts,
            'word' => $word,
            'form' => $form->createView(),
        );
    }

    protected function randomWord(Request $request, Part $part)
    {
        $em = $this->getDoctrine()->getManager();

        $allWordsId = $em->getRepository('DwrFrontendBundle:Word')
                ->findWordsIdByPart($part);

        $randomId = rand(0, count($allWordsId) - 1);
        $alreadyDrawn = unserialize($request->cookies->get('words'));
        if ($alreadyDrawn) {
            if (count($alreadyDrawn) < count($allWordsId)) {
                while (in_array($randomId, $alreadyDrawn)) {
                    $randomId = rand(0, count($allWordsId) - 1);
                }
                $alreadyDrawn[] = $randomId;
                $this->setCookie($alreadyDrawn);
            } else {
                return null;
            }
        } else {
            $alreadyDrawn[] = $randomId;
            $this->setCookie($alreadyDrawn);
        }
        $word = $em->getRepository('DwrFrontendBundle:Word')
                ->findOneBy(array('id' => $allWordsId[$randomId]['id']));

        return $word;
    }

    protected function setCookie(array $data)
    {

        $cookie = new Cookie('words', serialize($data), (time() + 3600 * 24 * 7));
        $response = new Response();
        $response->headers->setCookie($cookie);
        $response->sendHeaders();
    }

    protected function clearCookie()
    {
        $data = array();
        $cookie = new Cookie('words', serialize($data), (time() - 3600));
        $response = new Response();
        $response->headers->setCookie($cookie);
        $response->sendHeaders();
    }

}
