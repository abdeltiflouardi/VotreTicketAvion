<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'FrontendWebBundle_homepage' => true,
       'FrontendWebBundle_search_result' => true,
       'FrontendWebBundle_client_subscribe' => true,
       'FrontendWebBundle_client_subscribe_success' => true,
       'BackendAdminBundle_homepage' => true,
       'login' => true,
       'login_check' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getFrontendWebBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Frontend\\WebBundle\\Controller\\HomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getFrontendWebBundle_search_resultRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Frontend\\WebBundle\\Controller\\SearchController::resultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/results',  ),));
    }

    private function getFrontendWebBundle_client_subscribeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Frontend\\WebBundle\\Controller\\ClientController::subscribeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/subscribe',  ),));
    }

    private function getFrontendWebBundle_client_subscribe_successRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Frontend\\WebBundle\\Controller\\ClientController::subscribeSuccessAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/subscribe/success',  ),));
    }

    private function getBackendAdminBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/login_check',  ),));
    }
}
