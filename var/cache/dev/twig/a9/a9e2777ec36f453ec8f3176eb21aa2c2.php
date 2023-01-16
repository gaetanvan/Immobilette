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

/* home/card.html.twig */
class __TwigTemplate_a92162ccddaead190e6f83788d8dad1b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card' => [$this, 'block_card'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/card.html.twig"));

        // line 1
        $this->displayBlock('card', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card"));

        // line 2
        echo "    <div class=\"d-xs-flex flex-xs-column row\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 4
            echo "<a class=\"align-self-center col-md-4\" style=\"width: 90%;\" href=\"/property/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 4), "html", null, true);
            echo "\">
    <div class=\"container containerCard nopadding\">
        <div class=\"card m-auto homeCard darkblue\" style=\"width: 90%;\">
            <img src=\"uploads/";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "file", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"card-img-top homeImg\" alt=\"...\">
            <div class=\"card-body row align-items-center\">
                <div class=\"col-8\">
                    <p class=\"bold card-text\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
                    <p class=\"bold card-text\">";
            // line 12
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 12) / 100), "html", null, true);
            echo " €</p>
                </div>
                <div class=\"col-4\">
                    <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "area", [], "any", false, false, false, 15), "html", null, true);
            echo "m²</p>
                </div>
            </div>
        </div>
    </div>
</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  97 => 15,  91 => 12,  87 => 11,  83 => 10,  77 => 7,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block card %}
    <div class=\"d-xs-flex flex-xs-column row\">
    {% for property in properties %}
<a class=\"align-self-center col-md-4\" style=\"width: 90%;\" href=\"/property/{{ property.slug }}\">
    <div class=\"container containerCard nopadding\">
        <div class=\"card m-auto homeCard darkblue\" style=\"width: 90%;\">
            <img src=\"uploads/{{ property.file }}\" class=\"card-img-top homeImg\" alt=\"...\">
            <div class=\"card-body row align-items-center\">
                <div class=\"col-8\">
                    <p class=\"bold card-text\">{{ property.name }}</p>
                    <p class=\"card-text\">{{ property.city }}</p>
                    <p class=\"bold card-text\">{{property.price / 100}} €</p>
                </div>
                <div class=\"col-4\">
                    <p class=\"card-text\">{{ property.area }}m²</p>
                </div>
            </div>
        </div>
    </div>
</a>
    {% endfor %}
    <div>
{% endblock %}", "home/card.html.twig", "C:\\laragon\\www\\Immobilette\\templates\\home\\card.html.twig");
    }
}
