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
            if ($pathinfo === '/check_me') {
                return array (  '_controller' => 'Dwr\\FrontendBundle\\Controller\\CheckmeController::indexAction',  '_route' => 'check_me',);
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
        if ($pathinfo === '/grammary') {
            return array (  '_controller' => 'Dwr\\FrontendBundle\\Controller\\GrammaryController::indexAction',  '_route' => 'grammary',);
        }

        // issues
        if ($pathinfo === '/issues') {
            return array (  '_controller' => 'Dwr\\FrontendBundle\\Controller\\IssuesController::indexAction',  '_route' => 'issues',);
        }

        // words_list
        if (0 === strpos($pathinfo, '/words_list') && preg_match('#^/words_list(?:/(?P<words_package>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'words_list')), array (  'words_package' => NULL,  '_controller' => 'Dwr\\FrontendBundle\\Controller\\WordslistController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
