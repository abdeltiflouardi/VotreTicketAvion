<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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

        if (0 === strpos($pathinfo, '/admin')) {
            // BackendAdminBundle_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BackendAdminBundle_homepage');
                }
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'BackendAdminBundle_homepage',);
            }

            // BackendAdminBundle_profile_index
            if ($pathinfo === '/admin/profile') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProfileController::indexAction',  '_route' => 'BackendAdminBundle_profile_index',);
            }

            // BackendAdminBundle_client_index
            if ($pathinfo === '/admin/client') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::indexAction',  '_route' => 'BackendAdminBundle_client_index',);
            }

            // BackendAdminBundle_client_new
            if ($pathinfo === '/admin/client/new') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::newAction',  '_route' => 'BackendAdminBundle_client_new',);
            }

            // BackendAdminBundle_reservation_index
            if ($pathinfo === '/admin/reservation') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::indexAction',  '_route' => 'BackendAdminBundle_reservation_index',);
            }

            // BackendAdminBundle_reservation_new
            if ($pathinfo === '/admin/reservation/new') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::newAction',  '_route' => 'BackendAdminBundle_reservation_new',);
            }

            // BackendAdminBundle_vols_index
            if ($pathinfo === '/admin/vols') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::indexAction',  '_route' => 'BackendAdminBundle_vols_index',);
            }

            // BackendAdminBundle_vols_new
            if ($pathinfo === '/admin/vols/new') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::newAction',  '_route' => 'BackendAdminBundle_vols_new',);
            }

            // BackendAdminBundle_airoport_index
            if ($pathinfo === '/admin/airoport') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::indexAction',  '_route' => 'BackendAdminBundle_airoport_index',);
            }

            // BackendAdminBundle_airoport_new
            if ($pathinfo === '/admin/airoport/new') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::newAction',  '_route' => 'BackendAdminBundle_airoport_new',);
            }

            // login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/admin/login_check') {
                return array('_route' => 'login_check');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
