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
    static private $declaredRoutes = array(
        'mainpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'array' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::arrayAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/array',    ),  ),  4 =>   array (  ),),
        'xml' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::xmlAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/xml',    ),  ),  4 =>   array (  ),),
        'registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\SecuredController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/userform/',    ),  ),  4 =>   array (  ),),
        'registration_success' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\SecuredController::registerSuccessAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/userform/success',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'not_found' => array (  0 =>   array (    0 => 'url',  ),  1 =>   array (    '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::notFoundAction',  ),  2 =>   array (    'url' => '.+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '.+',      3 => 'url',    ),  ),  4 =>   array (  ),),
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
