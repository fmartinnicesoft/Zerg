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

        if (0 === strpos($pathinfo, '/zerg')) {
            // zergcalls_homepage
            if (rtrim($pathinfo, '/') === '/zerg') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'zergcalls_homepage');
                }

                return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::indexAction',  '_route' => 'zergcalls_homepage',);
            }

            if (0 === strpos($pathinfo, '/zerg/sites')) {
                // zergcalls_sites
                if ($pathinfo === '/zerg/sites') {
                    return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listSitesAction',  '_route' => 'zergcalls_sites',);
                }

                // zergcall_addsite
                if ($pathinfo === '/zerg/sites/add') {
                    return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addSiteAction',  '_route' => 'zergcall_addsite',);
                }

                // zergcall_modifysite
                if (0 === strpos($pathinfo, '/zerg/sites/modify') && preg_match('#^/zerg/sites/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_modifysite')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifySiteAction',));
                }

                // zergcall_delsite
                if (0 === strpos($pathinfo, '/zerg/sites/del') && preg_match('#^/zerg/sites/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_delsite')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delSiteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/zerg/c')) {
                if (0 === strpos($pathinfo, '/zerg/contacts')) {
                    // zergcalls_contacts
                    if ($pathinfo === '/zerg/contacts') {
                        return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listContactsAction',  '_route' => 'zergcalls_contacts',);
                    }

                    // zergcall_addcontact
                    if ($pathinfo === '/zerg/contacts/add') {
                        return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addContactAction',  '_route' => 'zergcall_addcontact',);
                    }

                    // zergcall_modifycontact
                    if (0 === strpos($pathinfo, '/zerg/contacts/modify') && preg_match('#^/zerg/contacts/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_modifycontact')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyContactAction',));
                    }

                    // zergcall_delcontact
                    if (0 === strpos($pathinfo, '/zerg/contacts/del') && preg_match('#^/zerg/contacts/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_delcontact')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delContactAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/zerg/calls')) {
                    // zergcalls_calls
                    if ($pathinfo === '/zerg/calls') {
                        return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listCallsAction',  '_route' => 'zergcalls_calls',);
                    }

                    // zergcall_addcall
                    if ($pathinfo === '/zerg/calls/add') {
                        return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addCallAction',  '_route' => 'zergcall_addcall',);
                    }

                    // zergcall_modifycall
                    if (0 === strpos($pathinfo, '/zerg/calls/modify') && preg_match('#^/zerg/calls/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_modifycall')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyCallAction',));
                    }

                    // zergcall_delcall
                    if (0 === strpos($pathinfo, '/zerg/calls/del') && preg_match('#^/zerg/calls/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_delcall')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delCallAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/zerg/licences')) {
                // zergcalls_licences
                if ($pathinfo === '/zerg/licences') {
                    return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listLicencesAction',  '_route' => 'zergcalls_licences',);
                }

                // zergcall_addlicence
                if ($pathinfo === '/zerg/licences/add') {
                    return array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addLicenceAction',  '_route' => 'zergcall_addlicence',);
                }

                // zergcall_modifylicence
                if (0 === strpos($pathinfo, '/zerg/licences/modify') && preg_match('#^/zerg/licences/modify/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_modifylicence')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyLicenceAction',));
                }

                // zergcall_dellicence
                if (0 === strpos($pathinfo, '/zerg/licences/del') && preg_match('#^/zerg/licences/del/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zergcall_dellicence')), array (  '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delLicenceAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
