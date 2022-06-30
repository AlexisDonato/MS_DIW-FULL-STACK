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

/* artist/show.html.twig */
class __TwigTemplate_895fe97c4a3bf50f16a1a88d10a0e8aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artist/show.html.twig", 1);
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

        echo "Artist
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
        echo "\t<div class=\"d-flex justify-content-center\">
\t\t<h1 class=\"text-info mt-3 mb-3\">Artist details</h1>
\t</div>

\t<table class=\"table table-striped table-dark text-light\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Id</th>
\t\t\t\t<td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Name</th>
\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Url</th>
\t\t\t\t<td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 23, $this->source); })()), "url", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Albums</th>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 27, $this->source); })()), "discs", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["disc"]) {
            // line 28
            echo "\t\t\t\t\t<td><img src=\"/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"card-img-top img-thumbnail bg-dark\" style=\"width:80px\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "picture", [], "any", false, false, false, 28), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disc"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index");
        echo "\">
\t\t<button class=\"btn btn-outline-info ml-3 mr-3\">Artists list</button>
\t</a><br>
\t";
        // line 39
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">
\t\t\t<button class=\"btn btn-info mt-3 ml-3\">Edit</button>
\t\t</a>
\t";
        }
        // line 44
        echo "
\t";
        // line 45
        echo twig_include($this->env, $context, "artist/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "artist/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 45,  162 => 44,  154 => 40,  152 => 39,  146 => 36,  139 => 31,  131 => 29,  124 => 28,  120 => 27,  113 => 23,  106 => 19,  99 => 15,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Artist
{% endblock %}

{% block body %}
\t<div class=\"d-flex justify-content-center\">
\t\t<h1 class=\"text-info mt-3 mb-3\">Artist details</h1>
\t</div>

\t<table class=\"table table-striped table-dark text-light\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Id</th>
\t\t\t\t<td>{{ artist.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Name</th>
\t\t\t\t<td>{{ artist.name }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Url</th>
\t\t\t\t<td>{{ artist.url }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"text-info\">Albums</th>
\t\t\t\t{% for disc in artist.discs %}
\t\t\t\t\t<td><img src=\"/img/{{ disc.picture }}\" class=\"card-img-top img-thumbnail bg-dark\" style=\"width:80px\" alt=\"{{ disc.picture }}\">
\t\t\t\t\t\t{{ disc.title }}</td>
\t\t\t\t{% endfor %}
\t\t\t</tr>
\t\t</tbody>
\t</table>


\t<a href=\"{{ path('app_artist_index') }}\">
\t\t<button class=\"btn btn-outline-info ml-3 mr-3\">Artists list</button>
\t</a><br>
\t{% if is_granted('ROLE_ADMIN') %}
\t\t<a href=\"{{ path('app_artist_edit', {'id': artist.id}) }}\">
\t\t\t<button class=\"btn btn-info mt-3 ml-3\">Edit</button>
\t\t</a>
\t{% endif %}

\t{{ include('artist/_delete_form.html.twig') }}
{% endblock %}
", "artist/show.html.twig", "/home/alexis/Documents/DIW22091/Exos/Symfony/Record3/templates/artist/show.html.twig");
    }
}
