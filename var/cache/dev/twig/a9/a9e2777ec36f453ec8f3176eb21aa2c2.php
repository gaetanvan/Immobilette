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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 3
            echo "<a href=\"/property/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "slug", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
    <div class=\"container containerCard\">
        <div class=\"card m-auto homeCard\" style=\"width: 23rem;\">
            <img src=\"uploads/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "file", [], "any", false, false, false, 6), "html", null, true);
            echo "\" class=\"card-img-top homeImg\" alt=\"...\">
            <div class=\"card-body row align-items-center\">
                <div class=\"col-8\">
                    <p class=\"bold card-text\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>
                    <p class=\"card-text\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "city", [], "any", false, false, false, 10), "html", null, true);
            echo "</p>
                    <p class=\"bold card-text\">";
            // line 11
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 11) / 100), "html", null, true);
            echo " €</p>
                </div>
                <div class=\"col-4\">
                    <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "area", [], "any", false, false, false, 14), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/card.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  89 => 11,  85 => 10,  81 => 9,  75 => 6,  68 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block card %}
    {% for property in properties %}
<a href=\"/property/{{ property.slug }}\">
    <div class=\"container containerCard\">
        <div class=\"card m-auto homeCard\" style=\"width: 23rem;\">
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
{% endblock %}", "home/card.html.twig", "C:\\laragon\\www\\Immobilette\\templates\\home\\card.html.twig");
    }
}
