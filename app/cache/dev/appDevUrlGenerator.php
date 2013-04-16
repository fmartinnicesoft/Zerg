<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'zergcalls_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/',    ),  ),  4 =>   array (  ),),
        'zergcalls_sites' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listSitesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/sites',    ),  ),  4 =>   array (  ),),
        'zergcall_addsite' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addSiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/sites/add',    ),  ),  4 =>   array (  ),),
        'zergcall_modifysite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifySiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/sites/modify',    ),  ),  4 =>   array (  ),),
        'zergcall_delsite' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delSiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/sites/del',    ),  ),  4 =>   array (  ),),
        'zergcalls_contacts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listContactsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/contacts',    ),  ),  4 =>   array (  ),),
        'zergcall_addcontact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/contacts/add',    ),  ),  4 =>   array (  ),),
        'zergcall_modifycontact' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/contacts/modify',    ),  ),  4 =>   array (  ),),
        'zergcall_delcontact' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/contacts/del',    ),  ),  4 =>   array (  ),),
        'zergcalls_calls' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listCallsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/calls',    ),  ),  4 =>   array (  ),),
        'zergcall_addcall' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addCallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/calls/add',    ),  ),  4 =>   array (  ),),
        'zergcall_modifycall' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyCallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/calls/modify',    ),  ),  4 =>   array (  ),),
        'zergcall_delcall' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delCallAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/calls/del',    ),  ),  4 =>   array (  ),),
        'zergcalls_licences' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::listLicencesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/licences',    ),  ),  4 =>   array (  ),),
        'zergcall_addlicence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::addLicenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/zerg/licences/add',    ),  ),  4 =>   array (  ),),
        'zergcall_modifylicence' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::modifyLicenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/licences/modify',    ),  ),  4 =>   array (  ),),
        'zergcall_dellicence' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Zerg\\CallsBundle\\Controller\\CallsController::delLicenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/zerg/licences/del',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
