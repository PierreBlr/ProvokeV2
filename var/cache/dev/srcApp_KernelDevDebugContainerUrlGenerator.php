<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'about' => [[], ['_controller' => 'App\\Controller\\AboutController::index'], [], [['text', '/about']], [], []],
        'partenaires' => [[], ['_controller' => 'App\\Controller\\AboutController::partnership'], [], [['text', '/work-with-us']], [], []],
        'account_login' => [[], ['_controller' => 'App\\Controller\\AccountController::login'], [], [['text', '/login']], [], []],
        'account_logout' => [[], ['_controller' => 'App\\Controller\\AccountController::logout'], [], [['text', '/logout']], [], []],
        'account_register' => [[], ['_controller' => 'App\\Controller\\AccountController::register'], [], [['text', '/register']], [], []],
        'password-update' => [[], ['_controller' => 'App\\Controller\\AccountController::updatePassword'], [], [['text', '/password']], [], []],
        'account_dashboard' => [[], ['_controller' => 'App\\Controller\\AccountController::dashboard'], [], [['text', '/dashboard']], [], []],
        'account_profil' => [[], ['_controller' => 'App\\Controller\\AccountController::profil'], [], [['text', '/info']], [], []],
        'account_adresses' => [[], ['_controller' => 'App\\Controller\\AccountController::adresses'], [], [['text', '/adresses']], [], []],
        'admin_login' => [[], ['_controller' => 'App\\Controller\\AdminController::login'], [], [['text', '/admin/admin_login']], [], []],
        'admin_logout' => [[], ['_controller' => 'App\\Controller\\AdminController::logout'], [], [['text', '/admin/admin_logout']], [], []],
        'retours' => [[], ['_controller' => 'App\\Controller\\HelpController::index'], [], [['text', '/politique-des-retours']], [], []],
        'tailles' => [[], ['_controller' => 'App\\Controller\\HelpController::tailles'], [], [['text', '/guide-des-des-tailles']], [], []],
        'thomme' => [[], ['_controller' => 'App\\Controller\\HelpController::tailleHomme'], [], [['text', '/tailles-hommes']], [], []],
        'tfemme' => [[], ['_controller' => 'App\\Controller\\HelpController::tailleFemmes'], [], [['text', '/tailles-femmes']], [], []],
        'confidentialite' => [[], ['_controller' => 'App\\Controller\\HelpController::confidentialite'], [], [['text', '/politique-de-confidentialite']], [], []],
        'faq' => [[], ['_controller' => 'App\\Controller\\HelpController::faq'], [], [['text', '/faq']], [], []],
        'cgv' => [[], ['_controller' => 'App\\Controller\\HelpController::cgv'], [], [['text', '/cgv']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'show_categories' => [['main'], ['_controller' => 'App\\Controller\\HomeController::showcats'], [], [['variable', '/', '[^/]++', 'main', true], ['text', '/shop']], [], []],
        'show_articles' => [['cat'], ['_controller' => 'App\\Controller\\HomeController::showarticles'], [], [['variable', '/', '[^/]++', 'cat', true], ['text', '/shop/list']], [], []],
        'show_detail' => [['art'], ['_controller' => 'App\\Controller\\HomeController::detailarticle'], [], [['variable', '/', '[^/]++', 'art', true], ['text', '/shop/detail']], [], []],
        'shopping_cart' => [[], ['_controller' => 'App\\Controller\\ShopController::cart'], [], [['text', '/shopping/cart']], [], []],
        'shopping_confirm' => [[], ['_controller' => 'App\\Controller\\ShopController::confirmcart'], [], [['text', '/shopping/confirm']], [], []],
        'commande_ok' => [[], ['_controller' => 'App\\Controller\\ShopController::succes'], [], [['text', '/shopping/commande-ok']], [], []],
        'commande_echec' => [[], ['_controller' => 'App\\Controller\\ShopController::echec'], [], [['text', '/shopping/commande-echec']], [], []],
        'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
