<?php

namespace Dwr\FrontendBundle\Controller;

use Dwr\FrontendBundle\Entity\Part;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class CheckmeController extends Controller
{

    public $session;

    /**
     * @Route("/check_me/{part_id}", defaults={"part_id" = null}, name="check_me")
     * @Template()
     */
    public function indexAction(Request $request, $part_id)
    {
        
        $this->session = $request->getSession();

        $em = $this->getDoctrine()->getManager();
        $parts = $em->getRepository('DwrFrontendBundle:Word')
                ->findAllPartsForEntity('DwrFrontendBundle:Word');
        $part = $em->getRepository('DwrFrontendBundle:Part')
                ->findOneBy(array('id' => $part_id));

        $word = null;
        if ($part) {
            $word = $this->randomWord($this->session, $part);
            if (null == $word) {
                return $this->redirect($this->generateUrl('check_me'));
            }
        } else {
            $this->session->clear();
        }

        $form = $this->createFormBuilder()
                ->add('part_id', 'hidden')
                ->add('word_id', 'hidden')
                ->add(
                    'next',
                    'submit',
                    array(
                        'attr' => array(
                            'class' => 'btn btn-primary btn-lg navbar-btn next-button')
                        )
                )
                ->getForm();

        $progress = null;
        if ($part) {
            $progress = $this->getProgress($this->session, $part);
        }

        return array(
            'part' => $part,
            'parts' => $parts,
            'word' => $word,
            'form' => $form->createView(),
            'progress' => $progress,
        );
    }
    
    /**
     * @Route("/restart", name="restart")
     */
    public function restartAction(Request $request){
      
        //Get params from request
        $params = array();
        $requestContent = $request->getContent();
        if (!empty($requestContent))
        {
            $params = json_decode($requestContent, true);
        }
        
        if($params['package_id']){
            $params['path'] = $this->generateUrl('check_me', array(), true) .
                              '/' .
                              $params['package_id'];
        }
        
        //Clear session
        $this->session = $request->getSession();
        $this->session->clear();

        //Prepare response
        $response = new Response(json_encode(
            array(
                'code' => 200, 
                'success' => true,
                'package_id' => $params['package_id'],
                'package_path' => $params['path']
                )
            ));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
    protected function getProgress(Session $session, $part) {

        $em = $this->getDoctrine()->getManager();
        $alreadyDrawn = unserialize($session->get('words'));
        $allWordsId = $em->getRepository('DwrFrontendBundle:Word')
                ->findWordsIdByPart($part);

        $counter = count($alreadyDrawn);
        $denominator = count($allWordsId);

        $progress = array();
        $progress['alreadyDrawnAmount'] = count($alreadyDrawn);
        $progress['allWordsAmount'] = count($allWordsId);

        if ($denominator > 0) {
            $progress['percentage'] = $this->calculatePercentage($counter, $denominator);
            return $progress;
        }
    }

    protected function calculatePercentage($counter, $denominator) {
        return ($counter * 100) / $denominator;
    }

    protected function randomWord(Session $session, Part $part) {
        $em = $this->getDoctrine()->getManager();

        $allWordsId = $em->getRepository('DwrFrontendBundle:Word')
                ->findWordsIdByPart($part);

        $randomId = rand(0, count($allWordsId) - 1);
        $alreadyDrawn = unserialize($session->get('words'));
        if ($alreadyDrawn) {
            if (count($alreadyDrawn) < count($allWordsId)) {
                while (in_array($randomId, $alreadyDrawn)) {
                    $randomId = rand(0, count($allWordsId) - 1);
                }
                $alreadyDrawn[] = $randomId;
                $this->setSession($alreadyDrawn);
            } else {
                return null;
            }
        } else {
            $alreadyDrawn[] = $randomId;
            $this->setSession($alreadyDrawn);
        }
        $word = $em->getRepository('DwrFrontendBundle:Word')
                ->findOneBy(array('id' => $allWordsId[$randomId]['id']));

        return $word;
    }

    protected function setSession(array $data) {
        $this->session->set('words', serialize($data), (time() + 3600 * 24 * 7));
    }

}
