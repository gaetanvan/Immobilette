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

/* owner/index.html.twig */
class __TwigTemplate_3a519bdc067e0bbe307d6718270ce372 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "owner/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "owner/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "owner/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formulaire proprietaire
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owner.css"), "html", null, true);
        echo "\">
\t<h1>Formulaire proprietaire</h1>
\t";
        // line 11
        echo "\t<form method=\"post\" class=\"w-75 m-auto text-center\">
\t\t<label for=\"inputEmail\">Type de biens</label>
\t\t<input type=\"text\" value=\"\" name=\"type\" id=\"inputType\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputRoom\">Pièces</label>
\t\t<input type=\"number\" value=\"\" name=\"room\" id=\"inputRoom\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputAera\">Surface</label>
\t\t<input type=\"number\" value=\"\" name=\"aera\" id=\"inputAera\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputPrice\">Prix</label>
\t\t<input type=\"number\" value=\"\" name=\"price\" id=\"inputPrice\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputCity\">Ville</label>
\t\t<input type=\"text\" value=\"\" name=\"city\" id=\"inputCity\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputImage\">Photos</label>
\t\t<input type=\"text\" value=\"\" name=\"Image\" id=\"inputImage\" class=\"form-control\" required autofocus>

\t\t<button class=\"btn mt-5\" type=\"submit\">Valider</button>

\t</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "owner/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 11,  89 => 8,  79 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulaire proprietaire
{% endblock %}


{% block content %}
\t<link rel=\"stylesheet\" href=\"{{ asset('assets/css/owner.css') }}\">
\t<h1>Formulaire proprietaire</h1>
\t{# {{ form(form)}} #}
\t<form method=\"post\" class=\"w-75 m-auto text-center\">
\t\t<label for=\"inputEmail\">Type de biens</label>
\t\t<input type=\"text\" value=\"\" name=\"type\" id=\"inputType\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputRoom\">Pièces</label>
\t\t<input type=\"number\" value=\"\" name=\"room\" id=\"inputRoom\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputAera\">Surface</label>
\t\t<input type=\"number\" value=\"\" name=\"aera\" id=\"inputAera\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputPrice\">Prix</label>
\t\t<input type=\"number\" value=\"\" name=\"price\" id=\"inputPrice\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputCity\">Ville</label>
\t\t<input type=\"text\" value=\"\" name=\"city\" id=\"inputCity\" class=\"form-control\" required autofocus>

\t\t<label for=\"inputImage\">Photos</label>
\t\t<input type=\"text\" value=\"\" name=\"Image\" id=\"inputImage\" class=\"form-control\" required autofocus>

\t\t<button class=\"btn mt-5\" type=\"submit\">Valider</button>

\t</form>
{% endblock %}
", "owner/index.html.twig", "C:\\Users\\33699\\OneDrive\\Bureau\\symfony\\ProjetImmo\\Immobilette\\templates\\owner\\index.html.twig");
    }
}
