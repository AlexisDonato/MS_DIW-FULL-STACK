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

/* disc/show.html.twig */
class __TwigTemplate_419dabfc2a039230fa35f646dfbef156 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disc/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "disc/show.html.twig", 1);
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

        echo "DetailsController
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
        echo "
\t<div class=\"container\">
\t\t<div class=\"text-center pt-3\">
\t\t\t<h1 class=\"text-info\">Disc details</h1><br>
\t\t</div>
\t\t<div class=\"form-row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"title\">Title</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"artistname\">Artist</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"artistname\" name=\"artistname\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 22, $this->source); })()), "artist", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"year\">Year</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 29, $this->source); })()), "year", [], "any", false, false, false, 29), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"genre\">Genre</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"genre\" name=\"genre\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 33, $this->source); })()), "genre", [], "any", false, false, false, 33), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"label\">Label</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"label\" name=\"label\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 40, $this->source); })()), "label", [], "any", false, false, false, 40), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"price\">Price</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"price\" name=\"price\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 44, $this->source); })()), "price", [], "any", false, false, false, 44), "html", null, true);
        echo "\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<div class=\"form-group col-4\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"picture\">Picture</label>
\t\t\t\t\t\t\t<img src=\"/img/";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 50, $this->source); })()), "picture", [], "any", false, false, false, 50), "html", null, true);
        echo "\" class=\"img-fluid img-thumbnail\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 50, $this->source); })()), "picture", [], "any", false, false, false, 50), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 50, $this->source); })()), "picture", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["disc"]) || array_key_exists("disc", $context) ? $context["disc"] : (function () { throw new RuntimeError('Variable "disc" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info mt-5 ml-3\">Edit</button>
\t\t\t\t\t\t\t\t</a><br>
\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_index");
        echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-info mt-3 ml-3\">Discs list</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 63
            echo "\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "disc/_delete_form.html.twig");
            echo "
\t\t\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "disc/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  182 => 63,  180 => 62,  173 => 59,  165 => 55,  163 => 54,  152 => 50,  143 => 44,  136 => 40,  126 => 33,  119 => 29,  109 => 22,  102 => 18,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DetailsController
{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"text-center pt-3\">
\t\t\t<h1 class=\"text-info\">Disc details</h1><br>
\t\t</div>
\t\t<div class=\"form-row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"title\">Title</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"{{disc.title}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"artistname\">Artist</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"artistname\" name=\"artistname\" class=\"form-control\" value=\"{{disc.artist.name}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"year\">Year</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"year\" name=\"year\" class=\"form-control\" value=\"{{disc.year}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"genre\">Genre</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"genre\" name=\"genre\" class=\"form-control\" value=\"{{disc.genre}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-row d-flex justify-content-around\">
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"label\">Label</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"label\" name=\"label\" class=\"form-control\" value=\"{{disc.label}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group col-md-6\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"price\">Price</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"price\" name=\"price\" class=\"form-control\" value=\"{{disc.price}}\" readonly>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-row d-flex justify-content-center mb-3\">
\t\t\t\t\t\t<div class=\"form-group col-4\">
\t\t\t\t\t\t\t<label class=\"text-secondary\" for=\"picture\">Picture</label>
\t\t\t\t\t\t\t<img src=\"/img/{{disc.picture}}\" class=\"img-fluid img-thumbnail\" alt=\"{{disc.picture}}\" title=\"{{disc.picture}}\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_disc_edit', {'id': disc.id}) }}\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info mt-5 ml-3\">Edit</button>
\t\t\t\t\t\t\t\t</a><br>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_disc_index') }}\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-info mt-3 ml-3\">Discs list</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t{{ include('disc/_delete_form.html.twig') }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "disc/show.html.twig", "/home/alexis/Documents/DIW22091/Exos/Symfony/Record3/templates/disc/show.html.twig");
    }
}
