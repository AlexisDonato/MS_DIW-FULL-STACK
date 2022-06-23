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
class __TwigTemplate_2cd57d5f5e14817a58212868760f9b19 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/style.css"), "html", null, true);
        echo "\">

\t\t";
        // line 14
        echo "\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.1.1/css/solid.css\" integrity=\"sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ\" crossorigin=\"anonymous\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css\" integrity=\"sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM\" crossorigin=\"anonymous\"/>

\t\t";
        // line 19
        echo "\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Blaka&display=swap\" rel=\"stylesheet\"> ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.jpeg\">
\t</head>

\t<body class=\"bg-dark text-light\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-dark text-light sticky-top border-bottom border-info\">
\t\t\t<a class=\"navbar-brand text-info\" ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo " href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_index");
            echo "\" ";
        } else {
            echo " href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" ";
        }
        echo ">
\t\t\t\t<p id=\"p1\" style=\"font-size: 3rem;\" class=\"mt-0 mb-0\">Discs & Artists</p>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler mr-auto\" ";
        // line 31
        echo " type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_index");
            echo "\">
\t\t\t\t\t\t\t\t<b>Discs list</b>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 43
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 44
                echo "\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_new");
                echo "\">
\t\t\t\t\t\t\t\t\t<i>New Disc</i>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_index");
            echo "\">
\t\t\t\t\t\t\t\t<b>Artists list</b>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 57
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 58
                echo "\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_new");
                echo "\">
\t\t\t\t\t\t\t\t\t<i>New artist</i>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 66
                echo "\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-danger\" href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo "\">
\t\t\t\t\t\t\t\t\t<b>Users</b>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-danger\" href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
                echo "\">
\t\t\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t\t\t<i>New user</i>
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"nav-link text-info\" href=\"";
            // line 82
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-info\">
\t\t\t\t\t\t\t<i>Logout</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t";
        }
        // line 88
        echo "
\t\t\t\t<span class=\"navbar-text text-secondary mt-0 mb-0\">
\t\t\t\t\t";
        // line 90
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            echo "\t\t\t\t\t\t<i class=\"d-flex fa-solid fa-user\">
\t\t\t\t\t\t\t<a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\"><p class=\"d-flex text-secondary mt-0 mb-0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "user", [], "any", false, false, false, 92), "email", [], "any", false, false, false, 92), "html", null, true);
            echo "</p></a>
\t\t\t\t\t\t</i><br>
\t\t\t\t\t";
        }
        // line 95
        echo "\t\t\t\t\t<i class=\"fa-solid fa-calendar\"></i>
\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y H:i:s"), "html", null, true);
        echo "
\t\t\t\t</span>
\t\t\t</div>
\t\t</nav>

\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 102
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t";
            // line 103
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
\t\t";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "\t\t";
        // line 109
        echo "\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  323 => 112,  305 => 107,  287 => 21,  267 => 6,  255 => 113,  253 => 112,  248 => 109,  246 => 108,  244 => 107,  241 => 106,  232 => 103,  229 => 102,  225 => 101,  217 => 96,  214 => 95,  206 => 92,  203 => 91,  201 => 90,  197 => 88,  188 => 82,  185 => 81,  174 => 73,  165 => 67,  162 => 66,  159 => 65,  150 => 59,  147 => 58,  145 => 57,  137 => 52,  134 => 51,  125 => 45,  122 => 44,  120 => 43,  112 => 38,  107 => 35,  105 => 34,  100 => 31,  86 => 28,  78 => 22,  76 => 21,  72 => 19,  66 => 14,  61 => 11,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Index
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('/css/style.css') }}\">

\t\t{# Font awesome icons #}
\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.1.1/css/solid.css\" integrity=\"sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ\" crossorigin=\"anonymous\"/>
\t\t<link
\t\trel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css\" integrity=\"sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM\" crossorigin=\"anonymous\"/>

\t\t{# Google Fonts #}
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Blaka&display=swap\" rel=\"stylesheet\"> {% block stylesheets %}{% endblock %}

\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.jpeg\">
\t</head>

\t<body class=\"bg-dark text-light\">
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-dark text-light sticky-top border-bottom border-info\">
\t\t\t<a class=\"navbar-brand text-info\" {% if is_granted('IS_AUTHENTICATED_FULLY') %} href=\"{{ path('app_disc_index') }}\" {% else %} href=\"{{ path('login') }}\" {% endif %}>
\t\t\t\t<p id=\"p1\" style=\"font-size: 3rem;\" class=\"mt-0 mb-0\">Discs & Artists</p>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler mr-auto\" {# mr-auto to force the hamburger menu to the left-hand side #} type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_disc_index') }}\">
\t\t\t\t\t\t\t\t<b>Discs list</b>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_disc_new') }}\">
\t\t\t\t\t\t\t\t\t<i>New Disc</i>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_artist_index') }}\">
\t\t\t\t\t\t\t\t<b>Artists list</b>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_artist_new') }}\">
\t\t\t\t\t\t\t\t\t<i>New artist</i>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-danger\" href=\"{{ path('app_user_index') }}\">
\t\t\t\t\t\t\t\t\t<b>Users</b>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link text-danger\" href=\"{{ path('app_user_new') }}\">
\t\t\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t\t\t<i>New user</i>
\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t<a class=\"nav-link text-info\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-info\">
\t\t\t\t\t\t\t<i>Logout</i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</a>
\t\t\t\t{% endif %}

\t\t\t\t<span class=\"navbar-text text-secondary mt-0 mb-0\">
\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t<i class=\"d-flex fa-solid fa-user\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_user_show', {'id': app.user.id}) }}\"><p class=\"d-flex text-secondary mt-0 mb-0\">{{ app.user.email }}</p></a>
\t\t\t\t\t\t</i><br>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<i class=\"fa-solid fa-calendar\"></i>
\t\t\t\t\t{{ \"now\" | date('d-m-Y H:i:s') }}
\t\t\t\t</span>
\t\t\t</div>
\t\t</nav>

\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}

\t\t{% block body %}{% endblock %}
\t\t{# <script src=\"{{ asset('js/js.js') }}\"></script> #}
\t\t<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t{% block javascripts %}{% endblock %}
\t</body>
</html>
", "base.html.twig", "/home/alexis/Documents/DIW22091/Exos/Symfony/Record3/templates/base.html.twig");
    }
}
