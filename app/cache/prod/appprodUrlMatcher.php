<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // FrontendWebBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'FrontendWebBundle_homepage');
            }
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\HomeController::indexAction',  '_route' => 'FrontendWebBundle_homepage',);
        }

        // FrontendWebBundle_search_result
        if ($pathinfo === '/results') {
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\SearchController::resultsAction',  '_route' => 'FrontendWebBundle_search_result',);
        }

        // FrontendWebBundle_client_subscribe
        if ($pathinfo === '/subscribe') {
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\ClientController::subscribeAction',  '_route' => 'FrontendWebBundle_client_subscribe',);
        }

        // FrontendWebBundle_client_subscribe_success
        if ($pathinfo === '/subscribe/success') {
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\ClientController::subscribeSuccessAction',  '_route' => 'FrontendWebBundle_client_subscribe_success',);
        }

        // BackendAdminBundle_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'BackendAdminBundle_homepage');
            }
            return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'BackendAdminBundle_homepage',);
        }

        // login
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/admin/login_check') {
            return array('_route' => 'login_check');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
