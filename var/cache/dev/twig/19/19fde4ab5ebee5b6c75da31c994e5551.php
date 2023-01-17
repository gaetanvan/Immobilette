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
class __TwigTemplate_8c7f0bd8ad65ebe2647a65243a261da7 extends Template
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
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/immobilette.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/announcement.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap\" rel=\"stylesheet\">
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
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav class=\"container text-center mt-3 mb-3\">
\t\t\t\t<div class=\"row align-items-center justify-content-center navigationbar\">
\t\t\t\t\t<div class=\"col mx-auto\">
\t\t\t\t\t\t<a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
\t\t\t\t\t\t\t<i class=\"bi bi-house\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<p class=\"font-weight-bolder fs-4 title\">POO Immo</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "\t\t\t\t\t\t\t<a class=\"\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t\t\t<small>(";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "surname", [], "any", false, false, false, 56), "html", null, true);
            echo ")</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t<a class=\"\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t\t\t<p class=\"connect\">Connexion</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main role=\"main\"> ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "\t\t\t<footer></footer>
\t\t</main>
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
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

    // line 68
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
        return array (  186 => 68,  166 => 10,  152 => 72,  147 => 69,  145 => 68,  139 => 64,  130 => 59,  124 => 56,  118 => 54,  116 => 53,  105 => 45,  95 => 38,  71 => 17,  67 => 16,  63 => 15,  58 => 12,  56 => 10,  45 => 1,);
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
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/announcement.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap\" rel=\"stylesheet\">
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
\t\t\t<nav class=\"container text-center mt-3 mb-3\">
\t\t\t\t<div class=\"row align-items-center justify-content-center navigationbar\">
\t\t\t\t\t<div class=\"col mx-auto\">
\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">
\t\t\t\t\t\t\t<i class=\"bi bi-house\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<p class=\"font-weight-bolder fs-4 title\">POO Immo</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<a class=\"\" href=\"{{ path('app_account') }}\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t\t\t<small>({{ app.user.surname }})</small>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"\" href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill\" style=\"font-size: 1.5em\"></i>
\t\t\t\t\t\t\t\t<p class=\"connect\">Connexion</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main role=\"main\"> {% block content %}{% endblock %}
\t\t\t<footer></footer>
\t\t</main>
\t\t<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
\t\t<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
\t</body>
</html>
", "base.html.twig", "C:\\Users\\33699\\OneDrive\\Bureau\\symfony\\ProjetImmo\\Immobilette\\templates\\base.html.twig");
    }
}
