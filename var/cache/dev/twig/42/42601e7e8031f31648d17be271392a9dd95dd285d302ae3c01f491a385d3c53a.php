<?php

/* base.html.twig */
class __TwigTemplate_3d174e4eb15eb2789518ea450744c40be17886adea2b237842cc73b266103389 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/superhero/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5\" >
    <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
      <img src=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/imagesinfo/logo.svg"), "html", null, true);
        echo " class=\"logo\" width=\"30\" height=\"30\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    
  <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor03\">
    <ul class=\"navbar-nav mx-auto\">
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_categories", ["main" => 1]);
        echo "\"><span>Hommes</span></a>
      </li>
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_categories", ["main" => 2]);
        echo "\"><span>Femmes</span></a>
      </li>
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_categories", ["main" => 3]);
        echo "\"><span>Accessoires</span></a>
      </li>
    </ul>
    
    <ul class=\"navbar-nav ml-auto\">
    ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 39, $this->source); })()), "user", [])) {
            // line 40
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "    <a href=\"/admin\" class=\"nav-link\"><i class=\"fas fa-chart-line\"></i></a>
    ";
            }
            // line 43
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_dashboard");
            echo "\" class=\"nav-link\"><i class=\"fas fa-user-circle\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_cart");
            echo "\" class=\"nav-link\"><i class=\"fas fa-shopping-cart\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_logout");
            echo "\" class=\"nav-link\"><i class=\"fas fa-power-off\"></i></a>
      </li>
    ";
        } else {
            // line 52
            echo "    
    <li class=\"nav-item\">
        <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_login");
            echo "\" class=\"nav-link\"><i class=\"fas fa-user-circle\"></i></a>      
      </li>
    <li class=\"nav-item\">
        <a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping_cart");
            echo "\" class=\"nav-link\"><i class=\"fas fa-shopping-cart\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_register");
            echo "\" class=\"nav-link\"><i class=\"fas fa-user-plus\"></i></a>
      </li>
    ";
        }
        // line 63
        echo "    </ul>
  </div>
</nav>

        <div class=\"container\">
          ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "flashes", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            echo "             <div class=\"alert alert-success\">
                ";
            // line 70
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "          </div>
          ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        
        
        ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 134
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 149
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "          <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
          <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Roboto\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
          <link rel=\"stylesheet\" type=\"text/css\" href=\"magnifier.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "           
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 80
        echo "        <div class=\"footer-container mt-5 d-flex justify-content-around\">
          <div class=\"grid-footer-flex\">
            <div class=\"grid-item-left\">
              <div class=\"footer-flex__menu-center mt-5\">
                <h5>Provoke Your Destiny</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">A propos de nous</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partenaires");
        echo "\">Devenir Partenaire</a></li>
                </ul>
              </div>
            </div>
          </div>
            <div class=\"grid-item-center\">
              <div class=\"footer-contact-top mt-5\">
                <h5>Contactez-nous</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a></li>
                </ul>
              </div>
              <div class=\"footer-help\">
                <h5>Informations</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retours");
        echo "\">Politique des retours</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tailles");
        echo "\">Guide des tailles</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgv");
        echo "\">Conditions Générale de Vente</a></li>
                </ul>
              </div>
            </div>
          <div class=\"footer-copyright mt-5\">
            <div class=\"grid\">
              <div class=\"copyright-left\">
                <p role=\"contentinfo\">@ 2019 <strong>Provoke Corporation</strong> | Tous droits réservés |<br> ProvokeUrDestiny.com</p>
              </div>
              <div class=\"copyright-center\">
                <ul class=\"footer-list\">
                  <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confidentialite");
        echo "\">Politique de Confidentialité</a></li>
                <ul>
              </div>
              <div class=\"social\">
                <h5 class=\"mb-3\">Réseaux Sociaux</h5>
                  <a class=\"fb-ic mr-3\" href=\"https://fr-fr.facebook.com/\" target=\"blank\"><i class=\"fab fa-facebook-f\" style=\"font-size:23px;\"></i></a>
                  <a class=\"tw-ic mr-3\" href=\"https://twitter.com/login?lang=fr\" target=\"blank\"><i class=\"fab fa-twitter\" style=\"font-size:23px;\"></i></a>
                  <a class=\"ins-ic mr-3\" href=\"https://www.instagram.com/?hl=fr\" target=\"blank\"><i class=\"fab fa-instagram\" style=\"font-size:23px;\"></i></a>
                  <a class=\"ins-ic\" href=\"https://www.spotify.com/fr/\" target=\"blank\"><i class=\"fab fa-spotify\" style=\"font-size:23px;\"></i></a>
              </div>
            </div>
          </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "        <script>  
window.setTimeout(function() {

    \$(\".alert-success\").fadeTo(500, 0).slideUp(500, function(){

        \$(this).remove();

    });

}, 3000);


</script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 135,  342 => 134,  319 => 121,  305 => 110,  299 => 107,  293 => 104,  284 => 98,  272 => 89,  266 => 86,  258 => 80,  249 => 79,  238 => 75,  229 => 74,  215 => 10,  206 => 9,  188 => 5,  177 => 149,  174 => 134,  172 => 79,  168 => 77,  166 => 74,  163 => 73,  154 => 70,  151 => 69,  147 => 68,  140 => 63,  134 => 60,  128 => 57,  122 => 54,  118 => 52,  112 => 49,  106 => 46,  99 => 43,  95 => 41,  92 => 40,  90 => 39,  82 => 34,  76 => 31,  70 => 28,  58 => 19,  54 => 18,  49 => 15,  47 => 9,  40 => 5,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/4/superhero/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        {% block stylesheets %}
          <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
          <link href=\"https://fonts.googleapis.com/css?family=Montserrat|Roboto\" rel=\"stylesheet\">
          <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
          <link rel=\"stylesheet\" type=\"text/css\" href=\"magnifier.css\">
        {% endblock %}
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-5\" >
    <a class=\"navbar-brand\" href=\"{{path('home')}}\">
      <img src={{ asset('uploads/imagesinfo/logo.svg')}} class=\"logo\" width=\"30\" height=\"30\" alt=\"\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
    </button>
    
  <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor03\">
    <ul class=\"navbar-nav mx-auto\">
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"{{ path('show_categories', { 'main' : 1 }) }}\"><span>Hommes</span></a>
      </li>
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"{{ path('show_categories', { 'main' : 2 }) }}\"><span>Femmes</span></a>
      </li>
      <li class=\"nav-item px-3\">
        <a class=\"nav-link\" href=\"{{path('show_categories', { 'main' : 3 }) }}\"><span>Accessoires</span></a>
      </li>
    </ul>
    
    <ul class=\"navbar-nav ml-auto\">
    {% if app.user %}
    {% if is_granted ('ROLE_ADMIN') %}
    <a href=\"/admin\" class=\"nav-link\"><i class=\"fas fa-chart-line\"></i></a>
    {% endif %}
        <a href=\"{{path('account_dashboard')}}\" class=\"nav-link\"><i class=\"fas fa-user-circle\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{path('shopping_cart')}}\" class=\"nav-link\"><i class=\"fas fa-shopping-cart\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{path('account_logout')}}\" class=\"nav-link\"><i class=\"fas fa-power-off\"></i></a>
      </li>
    {% else %}
    
    <li class=\"nav-item\">
        <a href=\"{{path('account_login')}}\" class=\"nav-link\"><i class=\"fas fa-user-circle\"></i></a>      
      </li>
    <li class=\"nav-item\">
        <a href=\"{{path('shopping_cart')}}\" class=\"nav-link\"><i class=\"fas fa-shopping-cart\"></i></a>
      </li>
      <li class=\"nav-item\">
        <a href=\"{{path('account_register')}}\" class=\"nav-link\"><i class=\"fas fa-user-plus\"></i></a>
      </li>
    {% endif %}
    </ul>
  </div>
</nav>

        <div class=\"container\">
          {% for message in app.flashes('success') %}
             <div class=\"alert alert-success\">
                {{ message }}
              </div>
            {% endfor %}
          </div>
          {% block body %}
           
          {% endblock %}
        
        
        {% block footer %}
        <div class=\"footer-container mt-5 d-flex justify-content-around\">
          <div class=\"grid-footer-flex\">
            <div class=\"grid-item-left\">
              <div class=\"footer-flex__menu-center mt-5\">
                <h5>Provoke Your Destiny</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('about')}}\">A propos de nous</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('partenaires')}}\">Devenir Partenaire</a></li>
                </ul>
              </div>
            </div>
          </div>
            <div class=\"grid-item-center\">
              <div class=\"footer-contact-top mt-5\">
                <h5>Contactez-nous</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('faq')}}\">FAQ</a></li>
                </ul>
              </div>
              <div class=\"footer-help\">
                <h5>Informations</h5>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('retours')}}\">Politique des retours</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('tailles')}}\">Guide des tailles</a></li>
                </ul>
                <ul class=\"footer-general-nav\">
                  <li><a href=\"{{path('cgv')}}\">Conditions Générale de Vente</a></li>
                </ul>
              </div>
            </div>
          <div class=\"footer-copyright mt-5\">
            <div class=\"grid\">
              <div class=\"copyright-left\">
                <p role=\"contentinfo\">@ 2019 <strong>Provoke Corporation</strong> | Tous droits réservés |<br> ProvokeUrDestiny.com</p>
              </div>
              <div class=\"copyright-center\">
                <ul class=\"footer-list\">
                  <li><a href=\"{{path('confidentialite')}}\">Politique de Confidentialité</a></li>
                <ul>
              </div>
              <div class=\"social\">
                <h5 class=\"mb-3\">Réseaux Sociaux</h5>
                  <a class=\"fb-ic mr-3\" href=\"https://fr-fr.facebook.com/\" target=\"blank\"><i class=\"fab fa-facebook-f\" style=\"font-size:23px;\"></i></a>
                  <a class=\"tw-ic mr-3\" href=\"https://twitter.com/login?lang=fr\" target=\"blank\"><i class=\"fab fa-twitter\" style=\"font-size:23px;\"></i></a>
                  <a class=\"ins-ic mr-3\" href=\"https://www.instagram.com/?hl=fr\" target=\"blank\"><i class=\"fab fa-instagram\" style=\"font-size:23px;\"></i></a>
                  <a class=\"ins-ic\" href=\"https://www.spotify.com/fr/\" target=\"blank\"><i class=\"fab fa-spotify\" style=\"font-size:23px;\"></i></a>
              </div>
            </div>
          </div>
        {% endblock %}
        {% block javascripts %}
        <script>  
window.setTimeout(function() {

    \$(\".alert-success\").fadeTo(500, 0).slideUp(500, function(){

        \$(this).remove();

    });

}, 3000);


</script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "G:\\Projet Boutique\\provoke\\templates\\base.html.twig");
    }
}
