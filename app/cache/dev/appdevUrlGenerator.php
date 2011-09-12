<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'FrontendWebBundle_homepage' => true,
       'FrontendWebBundle_search_result' => true,
       'FrontendWebBundle_client_subscribe' => true,
       'FrontendWebBundle_client_subscribe_success' => true,
       'BackendAdminBundle_homepage' => true,
       'BackendAdminBundle_profile_index' => true,
       'BackendAdminBundle_client_index' => true,
       'BackendAdminBundle_client_new' => true,
       'BackendAdminBundle_reservation_index' => true,
       'BackendAdminBundle_reservation_new' => true,
       'BackendAdminBundle_vols_index' => true,
       'BackendAdminBundle_vols_new' => true,
       'BackendAdminBundle_airoport_index' => true,
       'BackendAdminBundle_airoport_new' => true,
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

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
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

    private function getBackendAdminBundle_profile_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProfileController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/profile',  ),));
    }

    private function getBackendAdminBundle_client_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/client',  ),));
    }

    private function getBackendAdminBundle_client_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/client/new',  ),));
    }

    private function getBackendAdminBundle_reservation_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/reservation',  ),));
    }

    private function getBackendAdminBundle_reservation_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/reservation/new',  ),));
    }

    private function getBackendAdminBundle_vols_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/vols',  ),));
    }

    private function getBackendAdminBundle_vols_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/vols/new',  ),));
    }

    private function getBackendAdminBundle_airoport_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/airoport',  ),));
    }

    private function getBackendAdminBundle_airoport_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/airoport/new',  ),));
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
