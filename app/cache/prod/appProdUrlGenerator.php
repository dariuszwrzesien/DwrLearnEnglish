<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'check_me' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dwr\\FrontendBundle\\Controller\\CheckmeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check_me',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dwr\\FrontendBundle\\Controller\\ContactController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dwr\\FrontendBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'grammary' => array (  0 =>   array (    0 => 'grammary_package_id',  ),  1 =>   array (    'grammary_package_id' => NULL,    '_controller' => 'Dwr\\FrontendBundle\\Controller\\GrammaryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'grammary_package_id',    ),    1 =>     array (      0 => 'text',      1 => '/grammary',    ),  ),  4 =>   array (  ),),
        'sentences' => array (  0 =>   array (    0 => 'sentences_package_id',  ),  1 =>   array (    'sentences_package_id' => NULL,    '_controller' => 'Dwr\\FrontendBundle\\Controller\\SentencesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'sentences_package_id',    ),    1 =>     array (      0 => 'text',      1 => '/sentences',    ),  ),  4 =>   array (  ),),
        'words_list' => array (  0 =>   array (    0 => 'words_package_id',  ),  1 =>   array (    'words_package_id' => NULL,    '_controller' => 'Dwr\\FrontendBundle\\Controller\\WordslistController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'words_package_id',    ),    1 =>     array (      0 => 'text',      1 => '/words_list',    ),  ),  4 =>   array (  ),),
        'dwr_apirest_words_all' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Dwr\\ApiRestBundle\\Controller\\WordController::allAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/words',    ),  ),  4 =>   array (  ),),
        'dwr_apirest_word_get' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Dwr\\ApiRestBundle\\Controller\\WordController::getAction',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'GET',    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/word',    ),  ),  4 =>   array (  ),),
        'nelmio_api_doc_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/doc/',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
