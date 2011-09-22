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

        // FrontendWebBundle_web_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'FrontendWebBundle_web_index');
            }
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\HomeController::indexAction',  '_route' => 'FrontendWebBundle_web_index',);
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

        // FrontendWebBundle_vols_store
        if ($pathinfo === '/vols') {
            return array (  '_controller' => 'Frontend\\WebBundle\\Controller\\VolsController::storeAction',  '_route' => 'FrontendWebBundle_vols_store',);
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

            if (0 === strpos($pathinfo, '/admin/client')) {
                // client
                if (rtrim($pathinfo, '/') === '/admin/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/admin/client/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::showAction',)), array('_route' => 'client_show'));
                }

                // client_new
                if ($pathinfo === '/admin/client/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/admin/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/admin/client/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::editAction',)), array('_route' => 'client_edit'));
                }

                // client_update
                if (preg_match('#^/admin/client/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::updateAction',)), array('_route' => 'client_update'));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/admin/client/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClientController::deleteAction',)), array('_route' => 'client_delete'));
                }
                not_client_delete:

            }

            if (0 === strpos($pathinfo, '/admin/vols')) {
                // vols
                if (rtrim($pathinfo, '/') === '/admin/vols') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'vols');
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::indexAction',  '_route' => 'vols',);
                }

                // vols_show
                if (preg_match('#^/admin/vols/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::showAction',)), array('_route' => 'vols_show'));
                }

                // vols_new
                if ($pathinfo === '/admin/vols/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::newAction',  '_route' => 'vols_new',);
                }

                // vols_create
                if ($pathinfo === '/admin/vols/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_vols_create;
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::createAction',  '_route' => 'vols_create',);
                }
                not_vols_create:

                // vols_edit
                if (preg_match('#^/admin/vols/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::editAction',)), array('_route' => 'vols_edit'));
                }

                // vols_update
                if (preg_match('#^/admin/vols/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_vols_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::updateAction',)), array('_route' => 'vols_update'));
                }
                not_vols_update:

                // vols_delete
                if (preg_match('#^/admin/vols/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_vols_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\VolsController::deleteAction',)), array('_route' => 'vols_delete'));
                }
                not_vols_delete:

            }

            if (0 === strpos($pathinfo, '/admin/airoport')) {
                // airoport
                if (rtrim($pathinfo, '/') === '/admin/airoport') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'airoport');
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::indexAction',  '_route' => 'airoport',);
                }

                // airoport_show
                if (preg_match('#^/admin/airoport/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::showAction',)), array('_route' => 'airoport_show'));
                }

                // airoport_new
                if ($pathinfo === '/admin/airoport/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::newAction',  '_route' => 'airoport_new',);
                }

                // airoport_create
                if ($pathinfo === '/admin/airoport/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_airoport_create;
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::createAction',  '_route' => 'airoport_create',);
                }
                not_airoport_create:

                // airoport_edit
                if (preg_match('#^/admin/airoport/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::editAction',)), array('_route' => 'airoport_edit'));
                }

                // airoport_update
                if (preg_match('#^/admin/airoport/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_airoport_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::updateAction',)), array('_route' => 'airoport_update'));
                }
                not_airoport_update:

                // airoport_delete
                if (preg_match('#^/admin/airoport/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_airoport_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AiroportController::deleteAction',)), array('_route' => 'airoport_delete'));
                }
                not_airoport_delete:

            }

            if (0 === strpos($pathinfo, '/admin/reservation')) {
                // reservation
                if (rtrim($pathinfo, '/') === '/admin/reservation') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reservation');
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation',);
                }

                // reservation_show
                if (preg_match('#^/admin/reservation/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::showAction',)), array('_route' => 'reservation_show'));
                }

                // reservation_new
                if ($pathinfo === '/admin/reservation/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                }

                // reservation_create
                if ($pathinfo === '/admin/reservation/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reservation_create;
                    }
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
                }
                not_reservation_create:

                // reservation_edit
                if (preg_match('#^/admin/reservation/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::editAction',)), array('_route' => 'reservation_edit'));
                }

                // reservation_update
                if (preg_match('#^/admin/reservation/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reservation_update;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::updateAction',)), array('_route' => 'reservation_update'));
                }
                not_reservation_update:

                // reservation_delete
                if (preg_match('#^/admin/reservation/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_reservation_delete;
                    }
                    return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ReservationController::deleteAction',)), array('_route' => 'reservation_delete'));
                }
                not_reservation_delete:

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
