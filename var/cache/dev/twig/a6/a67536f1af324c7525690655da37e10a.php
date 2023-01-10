<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_cf35c53c432527c191c655fc0254366e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/immobilette.css"), "html", null, true);
        echo "\">


\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<!-- Custom styles for this template -->
\t\t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Immobilette</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nos locations<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Qui sommes-nous ?<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t\t\t";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62)) {
            // line 63
            echo "\t\t\t\t\t\t\t<a class=\"mr-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">Mon compte
\t\t\t\t\t\t\t\t<small>(";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "surname", [], "any", false, false, false, 64), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a>
\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t<a class=\"mr-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t\t<main role=\"main\">
\t\t\t";
        // line 77
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 78
            echo "\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t<h1>Example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Sign up today</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t<h1>Another example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-right\">
\t\t\t\t\t\t\t\t\t<h1>One more for good measure.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t";
        }
        // line 132
        echo "
\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t    ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t<div class=\"container marketing ";
        // line 137
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo "\">
\t\t\t\t<?php phpinfo(); ?>
\t\t\t\t";
        // line 139
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "
\t\t\t</div>
\t\t\t<!-- /.container -->

\t\t\t<!-- FOOTER -->
\t\t\t<footer class=\"footer-custom\">
\t\t\t\t<p>&copy; Immobilette
\t\t\t\t</p>
\t\t\t</br>
\t\t\t<small>La mobilette de l'immobilier
\t\t\t</br>
\t\t\t<a href=\"#\">Privacy</a>
\t\t\t&middot;
\t\t\t<a href=\"#\">Terms</a>
\t\t</small>
\t</body>
</html></p></footer></main><script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script><script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Immobilette
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  281 => 139,  261 => 10,  249 => 156,  231 => 140,  229 => 139,  222 => 137,  215 => 132,  159 => 78,  157 => 77,  149 => 71,  144 => 69,  139 => 68,  134 => 66,  129 => 64,  124 => 63,  122 => 62,  99 => 42,  91 => 37,  68 => 17,  63 => 15,  58 => 12,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
\t\t<meta name=\"generator\" content=\"Jekyll v4.1.1\">
\t\t<title>
\t\t\t{% block title %}Immobilette
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Bootstrap core CSS -->
\t\t<link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/immobilette.css') }}\">


\t\t<style>
\t\t\t.bd-placeholder-img {
\t\t\t\tfont-size: 1.125rem;
\t\t\t\ttext-anchor: middle;
\t\t\t\t-webkit-user-select: none;
\t\t\t\t-moz-user-select: none;
\t\t\t\t-ms-user-select: none;
\t\t\t\tuser-select: none;
\t\t\t}

\t\t\t@media(min-width: 768px) {
\t\t\t\t.bd-placeholder-img-lg {
\t\t\t\t\tfont-size: 3.5rem;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t\t<!-- Custom styles for this template -->
\t\t<link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Immobilette</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Nos locations<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Qui sommes-nous ?<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"navbar-item-custom\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a class=\"mr-3\" href=\"{{ path('app_account') }}\">Mon compte
\t\t\t\t\t\t\t\t<small>({{ app.user.surname }})</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\">Deconnexion</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"mr-3\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\">Inscription</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t\t<main role=\"main\">
\t\t\t{% if block('carousel') is defined %}
\t\t\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t\t</ol>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t\t\t<h1>Example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Sign up today</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t<h1>Another example headline.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Learn more</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"xMidYMid slice\" focusable=\"false\" role=\"img\"><rect width=\"100%\" height=\"100%\" fill=\"#777\"/></svg>
\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t<div class=\"carousel-caption text-right\">
\t\t\t\t\t\t\t\t\t<h1>One more for good measure.</h1>
\t\t\t\t\t\t\t\t\t<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-lg btn-primary\" href=\"#\" role=\"button\">Browse gallery</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<!-- Marketing messaging and featurettes
\t\t\t\t\t\t    ================================================== -->
\t\t\t<!-- Wrap the rest of the page in another container to center all the content. -->

\t\t\t<div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %}\">
\t\t\t\t<?php phpinfo(); ?>
\t\t\t\t{% block content %}{% endblock %}

\t\t\t</div>
\t\t\t<!-- /.container -->

\t\t\t<!-- FOOTER -->
\t\t\t<footer class=\"footer-custom\">
\t\t\t\t<p>&copy; Immobilette
\t\t\t\t</p>
\t\t\t</br>
\t\t\t<small>La mobilette de l'immobilier
\t\t\t</br>
\t\t\t<a href=\"#\">Privacy</a>
\t\t\t&middot;
\t\t\t<a href=\"#\">Terms</a>
\t\t</small>
\t</body>
</html></p></footer></main><script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script><script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script></body></html>
", "base.html.twig", "C:\\Users\\33699\\OneDrive\\Bureau\\symfony\\Immobilette\\templates\\base.html.twig");
    }
}
