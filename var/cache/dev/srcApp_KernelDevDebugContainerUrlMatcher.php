<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
            '/work-with-us' => [[['_route' => 'partenaires', '_controller' => 'App\\Controller\\AboutController::partnership'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'account_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'account_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'account_register', '_controller' => 'App\\Controller\\AccountController::register'], null, null, null, false, false, null]],
            '/password' => [[['_route' => 'password-update', '_controller' => 'App\\Controller\\AccountController::updatePassword'], null, null, null, false, false, null]],
            '/dashboard' => [[['_route' => 'account_dashboard', '_controller' => 'App\\Controller\\AccountController::dashboard'], null, null, null, false, false, null]],
            '/info' => [[['_route' => 'account_profil', '_controller' => 'App\\Controller\\AccountController::profil'], null, null, null, false, false, null]],
            '/adresses' => [[['_route' => 'account_adresses', '_controller' => 'App\\Controller\\AccountController::adresses'], null, null, null, false, false, null]],
            '/admin/admin_login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\AdminController::login'], null, null, null, false, false, null]],
            '/admin/admin_logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\AdminController::logout'], null, null, null, false, false, null]],
            '/politique-des-retours' => [[['_route' => 'retours', '_controller' => 'App\\Controller\\HelpController::index'], null, null, null, false, false, null]],
            '/guide-des-des-tailles' => [[['_route' => 'tailles', '_controller' => 'App\\Controller\\HelpController::tailles'], null, null, null, false, false, null]],
            '/tailles-hommes' => [[['_route' => 'thomme', '_controller' => 'App\\Controller\\HelpController::tailleHomme'], null, null, null, false, false, null]],
            '/tailles-femmes' => [[['_route' => 'tfemme', '_controller' => 'App\\Controller\\HelpController::tailleFemmes'], null, null, null, false, false, null]],
            '/politique-de-confidentialite' => [[['_route' => 'confidentialite', '_controller' => 'App\\Controller\\HelpController::confidentialite'], null, null, null, false, false, null]],
            '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\HelpController::faq'], null, null, null, false, false, null]],
            '/cgv' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\HelpController::cgv'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/shopping/cart' => [[['_route' => 'shopping_cart', '_controller' => 'App\\Controller\\ShopController::cart'], null, null, null, false, false, null]],
            '/shopping/confirm' => [[['_route' => 'shopping_confirm', '_controller' => 'App\\Controller\\ShopController::confirmcart'], null, null, null, false, false, null]],
            '/shopping/commande-ok' => [[['_route' => 'commande_ok', '_controller' => 'App\\Controller\\ShopController::succes'], null, null, null, false, false, null]],
            '/shopping/commande-echec' => [[['_route' => 'commande_echec', '_controller' => 'App\\Controller\\ShopController::echec'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/shop/(?'
                        .'|([^/]++)(*:186)'
                        .'|list/([^/]++)(*:207)'
                        .'|detail/([^/]++)(*:230)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            186 => [[['_route' => 'show_categories', '_controller' => 'App\\Controller\\HomeController::showcats'], ['main'], null, null, false, true, null]],
            207 => [[['_route' => 'show_articles', '_controller' => 'App\\Controller\\HomeController::showarticles'], ['cat'], null, null, false, true, null]],
            230 => [[['_route' => 'show_detail', '_controller' => 'App\\Controller\\HomeController::detailarticle'], ['art'], null, null, false, true, null]],
        ];
    }
}
