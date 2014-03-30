<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/c')) {
            // check_me
            if (0 === strpos($pathinfo, '/check_me') && preg_match('#^/check_me(?:/(?P<part_id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'check_me')), array (  'part_id' => NULL,  '_controller' => 'Dwr\\FrontendBundle\\Controller\\CheckmeController::indexAction',));
            }

            // contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'Dwr\\FrontendBundle\\Controller\\ContactController::indexAction',  '_route' => 'contact',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Dwr\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'index',);
        }

        // grammary
        if (0 === strpos($pathinfo, '/grammary') && preg_match('#^/grammary(?:/(?P<grammary_package_id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'grammary')), array (  'grammary_package_id' => NULL,  '_controller' => 'Dwr\\FrontendBundle\\Controller\\GrammaryController::indexAction',));
        }

        // sentences
        if (0 === strpos($pathinfo, '/sentences') && preg_match('#^/sentences(?:/(?P<sentences_package_id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sentences')), array (  'sentences_package_id' => NULL,  '_controller' => 'Dwr\\FrontendBundle\\Controller\\SentencesController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/word')) {
            if (0 === strpos($pathinfo, '/words')) {
                // words_list
                if (0 === strpos($pathinfo, '/words_list') && preg_match('#^/words_list(?:/(?P<words_package_id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'words_list')), array (  'words_package_id' => NULL,  '_controller' => 'Dwr\\FrontendBundle\\Controller\\WordslistController::indexAction',));
                }

                // dwr_apirest_words_all
                if (preg_match('#^/words/(?P<part_id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_dwr_apirest_words_all;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwr_apirest_words_all')), array (  '_controller' => 'Dwr\\ApiRestBundle\\Controller\\WordController::allAction',  '_format' => 'json',));
                }
                not_dwr_apirest_words_all:

            }

            // dwr_apirest_word_get
            if (preg_match('#^/word/(?P<part_id>\\d+)/(?P<word_id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dwr_apirest_word_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwr_apirest_word_get')), array (  '_controller' => 'Dwr\\ApiRestBundle\\Controller\\WordController::getAction',  '_format' => 'json',));
            }
            not_dwr_apirest_word_get:

        }

        // nelmio_api_doc_index
        if (rtrim($pathinfo, '/') === '/api/doc') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
            }

            return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
        }
        not_nelmio_api_doc_index:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
