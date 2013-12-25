<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/5a72185')) {
            // _assetic_5a72185
            if ($pathinfo === '/css/5a72185.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5a72185',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_5a72185',);
            }

            if (0 === strpos($pathinfo, '/css/5a72185_')) {
                // _assetic_5a72185_0
                if ($pathinfo === '/css/5a72185_mopabootstrapbundle_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5a72185',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_5a72185_0',);
                }

                // _assetic_5a72185_1
                if ($pathinfo === '/css/5a72185_eyecon-bootstrap-datepicker_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5a72185',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_5a72185_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/c1a8bcd')) {
            // _assetic_c1a8bcd
            if ($pathinfo === '/js/c1a8bcd.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd',);
            }

            if (0 === strpos($pathinfo, '/js/c1a8bcd_')) {
                // _assetic_c1a8bcd_0
                if ($pathinfo === '/js/c1a8bcd_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_0',);
                }

                if (0 === strpos($pathinfo, '/js/c1a8bcd_bootstrap-')) {
                    // _assetic_c1a8bcd_1
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-tooltip_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/c1a8bcd_bootstrap-a')) {
                        // _assetic_c1a8bcd_2
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-affix_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_2',);
                        }

                        // _assetic_c1a8bcd_3
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-alert_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_3',);
                        }

                    }

                    // _assetic_c1a8bcd_4
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-button_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_4',);
                    }

                    if (0 === strpos($pathinfo, '/js/c1a8bcd_bootstrap-c')) {
                        // _assetic_c1a8bcd_5
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-carousel_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_5',);
                        }

                        // _assetic_c1a8bcd_6
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-collapse_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_6',);
                        }

                    }

                    // _assetic_c1a8bcd_7
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-dropdown_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_7',);
                    }

                    // _assetic_c1a8bcd_8
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-modal_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_8',);
                    }

                    // _assetic_c1a8bcd_9
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-popover_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_9',);
                    }

                    // _assetic_c1a8bcd_10
                    if ($pathinfo === '/js/c1a8bcd_bootstrap-scrollspy_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_10',);
                    }

                    if (0 === strpos($pathinfo, '/js/c1a8bcd_bootstrap-t')) {
                        // _assetic_c1a8bcd_11
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-tab_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_11',);
                        }

                        // _assetic_c1a8bcd_12
                        if ($pathinfo === '/js/c1a8bcd_bootstrap-transition_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_12',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/c1a8bcd_mopabootstrap-')) {
                    // _assetic_c1a8bcd_13
                    if ($pathinfo === '/js/c1a8bcd_mopabootstrap-collection_14.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_13',);
                    }

                    // _assetic_c1a8bcd_14
                    if ($pathinfo === '/js/c1a8bcd_mopabootstrap-subnav_15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_14',);
                    }

                }

                // _assetic_c1a8bcd_15
                if ($pathinfo === '/js/c1a8bcd_eyecon-bootstrap-datepicker_16.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c1a8bcd',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_c1a8bcd_15',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/screen_diagnostic')) {
            // _assetic_d75f95d
            if ($pathinfo === '/css/screen_diagnostic.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd75f95d',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d75f95d',);
            }

            // _assetic_d75f95d_0
            if ($pathinfo === '/css/screen_diagnostic_diagnostic_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd75f95d',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d75f95d_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/head_compiled')) {
                // _assetic_ba30769
                if ($pathinfo === '/js/head_compiled.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba30769',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ba30769',);
                }

                // _assetic_ba30769_0
                if ($pathinfo === '/js/head_compiled_modernizr-2.5.3-respond-1.1.0.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ba30769',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ba30769_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/foot_compiled')) {
                // _assetic_0222968
                if ($pathinfo === '/js/foot_compiled.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0222968',);
                }

                if (0 === strpos($pathinfo, '/js/foot_compiled_')) {
                    if (0 === strpos($pathinfo, '/js/foot_compiled_bootstrap-')) {
                        // _assetic_0222968_0
                        if ($pathinfo === '/js/foot_compiled_bootstrap-tooltip_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0222968_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/foot_compiled_bootstrap-a')) {
                            // _assetic_0222968_1
                            if ($pathinfo === '/js/foot_compiled_bootstrap-affix_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0222968_1',);
                            }

                            // _assetic_0222968_2
                            if ($pathinfo === '/js/foot_compiled_bootstrap-alert_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0222968_2',);
                            }

                        }

                        // _assetic_0222968_3
                        if ($pathinfo === '/js/foot_compiled_bootstrap-button_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0222968_3',);
                        }

                        if (0 === strpos($pathinfo, '/js/foot_compiled_bootstrap-c')) {
                            // _assetic_0222968_4
                            if ($pathinfo === '/js/foot_compiled_bootstrap-carousel_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_0222968_4',);
                            }

                            // _assetic_0222968_5
                            if ($pathinfo === '/js/foot_compiled_bootstrap-collapse_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_0222968_5',);
                            }

                        }

                        // _assetic_0222968_6
                        if ($pathinfo === '/js/foot_compiled_bootstrap-dropdown_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_0222968_6',);
                        }

                        // _assetic_0222968_7
                        if ($pathinfo === '/js/foot_compiled_bootstrap-modal_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_0222968_7',);
                        }

                        // _assetic_0222968_8
                        if ($pathinfo === '/js/foot_compiled_bootstrap-popover_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_0222968_8',);
                        }

                        // _assetic_0222968_9
                        if ($pathinfo === '/js/foot_compiled_bootstrap-scrollspy_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_0222968_9',);
                        }

                        if (0 === strpos($pathinfo, '/js/foot_compiled_bootstrap-t')) {
                            // _assetic_0222968_10
                            if ($pathinfo === '/js/foot_compiled_bootstrap-tab_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_0222968_10',);
                            }

                            // _assetic_0222968_11
                            if ($pathinfo === '/js/foot_compiled_bootstrap-transition_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_0222968_11',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_mopabootstrap-')) {
                        // _assetic_0222968_12
                        if ($pathinfo === '/js/foot_compiled_mopabootstrap-collection_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_0222968_12',);
                        }

                        // _assetic_0222968_13
                        if ($pathinfo === '/js/foot_compiled_mopabootstrap-subnav_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_0222968_13',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/foot_compiled_html5bp_')) {
                        // _assetic_0222968_14
                        if ($pathinfo === '/js/foot_compiled_html5bp_plugins_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_0222968_14',);
                        }

                        // _assetic_0222968_15
                        if ($pathinfo === '/js/foot_compiled_html5bp_script_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_0222968_15',);
                        }

                    }

                    // _assetic_0222968_16
                    if ($pathinfo === '/js/foot_compiled_eyecon-bootstrap-datepicker_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0222968',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_0222968_16',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/c6025d6')) {
            // _assetic_c6025d6
            if ($pathinfo === '/css/c6025d6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6025d6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c6025d6',);
            }

            if (0 === strpos($pathinfo, '/css/c6025d6_bootstrap')) {
                // _assetic_c6025d6_0
                if ($pathinfo === '/css/c6025d6_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6025d6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c6025d6_0',);
                }

                // _assetic_c6025d6_1
                if ($pathinfo === '/css/c6025d6_bootstrap-responsive_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6025d6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c6025d6_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // hezu_web_demo_index
        if (preg_match('#^/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hezu_web_demo_index')), array (  '_controller' => 'Hezu\\Bundle\\WebBundle\\Controller\\DemoController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
