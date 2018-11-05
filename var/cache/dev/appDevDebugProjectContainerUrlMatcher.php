<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // web_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'WebBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'web_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_web_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'web_homepage'));
            }

            return $ret;
        }
        not_web_homepage:

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/corte')) {
                // corte
                if (preg_match('#^/corte/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'corte')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::corteAction',));
                }

                // corte2
                if ('/corte' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::corteAction',  '_route' => 'corte2',);
                }

            }

            elseif (0 === strpos($pathinfo, '/contactar')) {
                // contactar
                if (preg_match('#^/contactar/(?P<sitio>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::contactarAction',));
                }

                // contactar2
                if ('/contactar' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::contactarAction',  '_route' => 'contactar2',);
                }

            }

            elseif (0 === strpos($pathinfo, '/categoria')) {
                // categoria
                if (preg_match('#^/categoria/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::categoriaAction',));
                }

                // categoria2
                if ('/categoria' === $pathinfo) {
                    return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::categoriaAction',  '_route' => 'categoria2',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/herramienta')) {
            // herramienta
            if (preg_match('#^/herramienta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'herramienta')), array (  '_controller' => 'WebBundle\\Controller\\DefaultController::herramientaAction',));
            }

            // herramienta2
            if ('/herramienta' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::herramientaAction',  '_route' => 'herramienta2',);
            }

        }

        // nosotros
        if ('/nosotros' === $pathinfo) {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::nosotrosAction',  '_route' => 'nosotros',);
        }

        // welcome
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'WebBundle\\Controller\\DefaultController::homepageAction',  '_route' => 'welcome',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_welcome;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'welcome'));
            }

            return $ret;
        }
        not_welcome:

        if (0 === strpos($pathinfo, '/gestioncorte/nuev')) {
            // nuevoCorte
            if ('/gestioncorte/nuevocorte' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\GestionCortesController::nuevoCorteAction',  '_route' => 'nuevoCorte',);
            }

            // nuevaCat
            if ('/gestioncorte/nuevacategoria' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\GestionCortesController::nuevaCatAction',  '_route' => 'nuevaCat',);
            }

            // nuevaHerramienta
            if ('/gestioncorte/nuevaherramienta' === $pathinfo) {
                return array (  '_controller' => 'WebBundle\\Controller\\GestionCortesController::nuevaHerramientaAction',  '_route' => 'nuevaHerramienta',);
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
