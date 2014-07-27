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

        // mainpage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mainpage');
            }

            return array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'mainpage',);
        }

        // array
        if ($pathinfo === '/array') {
            return array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::arrayAction',  '_route' => 'array',);
        }

        // xml
        if ($pathinfo === '/xml') {
            return array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::xmlAction',  '_route' => 'xml',);
        }

        if (0 === strpos($pathinfo, '/userform')) {
            // registration
            if (rtrim($pathinfo, '/') === '/userform') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'registration');
                }

                return array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\SecuredController::registerAction',  '_route' => 'registration',);
            }

            // registration_success
            if ($pathinfo === '/userform/success') {
                return array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\SecuredController::registerSuccessAction',  '_route' => 'registration_success',);
            }

        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array('_route' => '_security_check');
        }

        // not_found
        if (preg_match('#^/(?P<url>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_not_found;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'not_found')), array (  '_controller' => 'ITS\\AtlasBundle\\Controller\\DefaultController::notFoundAction',));
        }
        not_not_found:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
