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

/* disc/index.html.twig */
class __TwigTemplate_af084a362e9aa2055dd3b069b43149a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/index.html.twig", 1);
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

        echo "Discs list
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"bg-image\" style=\"background-image: /img/BG.jpeg');
\t\t    height: 100vh;\" img src=\"/img/BG.jpeg\">
    </div>

\t<div class=\"container\">
\t\t<div class=\"text-center pt-3\">
\t\t\t<h1 class=\"text-info\">Discs List</h1><br>
\t\t</div>
\t\t";
        // line 15
        $context["col"] = 1;
        // line 16
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["discs"]) || array_key_exists("discs", $context) ? $context["discs"] : (function () { throw new RuntimeError('Variable "discs" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disc"]) {
            // line 17
            echo "\t\t\t";
            if (((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 17, $this->source); })()) == 1)) {
                // line 18
                echo "\t\t\t\t<div class=\"row mb-2 justify-content-around\">
\t\t\t\t";
            }
            // line 20
            echo "
\t\t\t\t<div class=\"col-2 p-0\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail\" src=\"/img/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 22), "html", null, true);
            echo "\" width=\"200px\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 d-flex flex-column p-0\">
\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t<h5>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "<br></h5>
\t\t\t\t\t\t<b>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disc"], "artist", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</b><br>
\t\t\t\t\t\t<b>Label :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "label", [], "any", false, false, false, 30), "html", null, true);
            echo "<br>
\t\t\t\t\t\t<b>Year :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "year", [], "any", false, false, false, 33), "html", null, true);
            echo "<br>
\t\t\t\t\t\t<b>Genre :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "genre", [], "any", false, false, false, 36), "html", null, true);
            echo "<br>
\t\t\t\t\t\t<b>Price :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "price", [], "any", false, false, false, 39), "html", null, true);
            echo "<br>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"mt-auto mb-2 d-flex justify-content-around\">
\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_show", ["id" => twig_get_attribute($this->env, $this->source, $context["disc"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" style=\"font-size: 2rem; color: #17a2b8;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye fa-sm\" title=\"Details\" alt=\"Details\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["disc"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" style=\"font-size: 2rem; color: #17a2b8;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil fa-sm\" title=\"Edit\" alt=\"Edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 52
            if (((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 52, $this->source); })()) == 2)) {
                // line 53
                echo "\t\t\t\t</div>
\t\t\t\t";
                // line 54
                $context["col"] = 1;
                // line 55
                echo "\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t";
                $context["col"] = ((isset($context["col"]) || array_key_exists("col", $context) ? $context["col"] : (function () { throw new RuntimeError('Variable "col" does not exist.', 56, $this->source); })()) + 1);
                // line 57
                echo "\t\t\t";
            }
            // line 58
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "disc/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 60,  198 => 58,  195 => 57,  192 => 56,  189 => 55,  187 => 54,  184 => 53,  182 => 52,  178 => 50,  170 => 46,  168 => 45,  162 => 42,  156 => 39,  150 => 36,  144 => 33,  138 => 30,  132 => 27,  128 => 26,  117 => 22,  113 => 20,  109 => 18,  106 => 17,  101 => 16,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Discs list
{% endblock %}

{% block body %}
\t<div class=\"bg-image\" style=\"background-image: /img/BG.jpeg');
\t\t    height: 100vh;\" img src=\"/img/BG.jpeg\">
    </div>

\t<div class=\"container\">
\t\t<div class=\"text-center pt-3\">
\t\t\t<h1 class=\"text-info\">Discs List</h1><br>
\t\t</div>
\t\t{% set col = 1 %}
\t\t{% for disc in discs %}
\t\t\t{% if (col == 1)%}
\t\t\t\t<div class=\"row mb-2 justify-content-around\">
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"col-2 p-0\">
\t\t\t\t\t<img class=\"img-fluid img-thumbnail\" src=\"/img/{{disc.picture}}\" alt=\"{{disc.picture}}\" title=\"{{disc.picture}}\" width=\"200px\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-3 d-flex flex-column p-0\">
\t\t\t\t\t<div class=\"small\">
\t\t\t\t\t\t<h5>{{disc.title}}<br></h5>
\t\t\t\t\t\t<b>{{disc.artist.name}}</b><br>
\t\t\t\t\t\t<b>Label :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{disc.label}}<br>
\t\t\t\t\t\t<b>Year :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{disc.year}}<br>
\t\t\t\t\t\t<b>Genre :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{disc.genre}}<br>
\t\t\t\t\t\t<b>Price :
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{disc.price}}<br>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"mt-auto mb-2 d-flex justify-content-around\">
\t\t\t\t\t\t<a href=\"{{ path('app_disc_show', {'id': disc.id}) }}\" style=\"font-size: 2rem; color: #17a2b8;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye fa-sm\" title=\"Details\" alt=\"Details\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<a href=\"{{ path('app_disc_edit', {'id': disc.id}) }}\" style=\"font-size: 2rem; color: #17a2b8;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-pencil fa-sm\" title=\"Edit\" alt=\"Edit\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if (col == 2) %}
\t\t\t\t</div>
\t\t\t\t{% set col = 1 %}
\t\t\t{% else %}
\t\t\t\t{% set col = col + 1 %}
\t\t\t{% endif %}

\t\t{% endfor %}
\t</div>

{% endblock %}
", "disc/index.html.twig", "/home/alexis/Documents/DIW22091/Exos/Symfony/Record3/templates/disc/index.html.twig");
    }
}
