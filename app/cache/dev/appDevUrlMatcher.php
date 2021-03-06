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
        $context = $this->context;
        $request = $this->request;

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

        if (0 === strpos($pathinfo, '/admin')) {
            // login
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Ceb\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                // login_check
                if ($pathinfo === '/admin/login_check') {
                    return array('_route' => 'login_check');
                }

                // logout
                if ($pathinfo === '/admin/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        if (0 === strpos($pathinfo, '/No')) {
            // ceb_contact_contact
            if ($pathinfo === '/Nous-contacter') {
                return array (  '_controller' => 'Ceb\\AutreBundle\\Controller\\DefaultController::contactAction',  '_route' => 'ceb_contact_contact',);
            }

            // ceb_partenaire_homepage
            if ($pathinfo === '/Nos-partenaires') {
                return array (  '_controller' => 'Ceb\\AutreBundle\\Controller\\DefaultController::partenaireAction',  '_route' => 'ceb_partenaire_homepage',);
            }

        }

        // ceb_present_homepage
        if ($pathinfo === '/Presentation-entreprise') {
            return array (  '_controller' => 'Ceb\\AutreBundle\\Controller\\DefaultController::presentationAction',  '_route' => 'ceb_present_homepage',);
        }

        // ceb_goldbook_homepage
        if ($pathinfo === '/Livre-d\'or') {
            return array (  '_controller' => 'Ceb\\GoldbookBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ceb_goldbook_homepage',);
        }

        if (0 === strpos($pathinfo, '/Travaux-')) {
            // ceb_photo_homepage
            if ($pathinfo === '/Travaux-finis') {
                return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::Travaux_finiAction',  '_route' => 'ceb_photo_homepage',);
            }

            // ceb_photo_cuisine
            if ($pathinfo === '/Travaux-cuisines') {
                return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::cuisineAction',  '_route' => 'ceb_photo_cuisine',);
            }

            // ceb_photo_bain
            if ($pathinfo === '/Travaux-bains') {
                return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::bainAction',  '_route' => 'ceb_photo_bain',);
            }

        }

        // ceb_photo_finition
        if ($pathinfo === '/Details-des-finitions') {
            return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::finitionAction',  '_route' => 'ceb_photo_finition',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/upload')) {
                // uploadtravaux_fini
                if ($pathinfo === '/admin/upload/travaux_fini') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::uploadtravaux_finiAction',  '_route' => 'uploadtravaux_fini',);
                }

                // uploadcuisine
                if ($pathinfo === '/admin/upload/cuisine') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::uploadcuisineAction',  '_route' => 'uploadcuisine',);
                }

                // uploadbain
                if ($pathinfo === '/admin/upload/bain') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::uploadbainAction',  '_route' => 'uploadbain',);
                }

                // uploadfinition
                if ($pathinfo === '/admin/upload/finition') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::uploadfinitionAction',  '_route' => 'uploadfinition',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/succes')) {
                // succestravaux_fini
                if ($pathinfo === '/admin/succestravaux_fini') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::succestravaux_finiAction',  '_route' => 'succestravaux_fini',);
                }

                // succescuisine
                if ($pathinfo === '/admin/succescuisine') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::succescuisineAction',  '_route' => 'succescuisine',);
                }

                // succesbain
                if ($pathinfo === '/admin/succesbain') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::succesbainAction',  '_route' => 'succesbain',);
                }

                // succesfinition
                if ($pathinfo === '/admin/succesfinition') {
                    return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\AdmController::succesfinitionAction',  '_route' => 'succesfinition',);
                }

            }

            // erreur_photo
            if ($pathinfo === '/admin/erreur') {
                return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::erreurAction',  '_route' => 'erreur_photo',);
            }

            if (0 === strpos($pathinfo, '/admin/delete')) {
                if (0 === strpos($pathinfo, '/admin/delete/bain')) {
                    // deleteBain
                    if ($pathinfo === '/admin/delete/bain') {
                        return array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::deleteBainAction',  '_route' => 'deleteBain',);
                    }

                    // destroyBain
                    if (preg_match('#^/admin/delete/bain/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'destroyBain')), array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::DestroyBainAction',));
                    }

                }

                // destroyCuisine
                if (0 === strpos($pathinfo, '/admin/delete/cuisine') && preg_match('#^/admin/delete/cuisine/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destroyCuisine')), array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::DestroyCuisineAction',));
                }

                // destroyFinition
                if (0 === strpos($pathinfo, '/admin/delete/finition') && preg_match('#^/admin/delete/finition/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destroyFinition')), array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::DestroyFinitionAction',));
                }

                // destroyTravau
                if (0 === strpos($pathinfo, '/admin/delete/travau') && preg_match('#^/admin/delete/travau/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'destroyTravau')), array (  '_controller' => 'Ceb\\PhotoBundle\\Controller\\DefaultController::DestroyTravauAction',));
                }

            }

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
