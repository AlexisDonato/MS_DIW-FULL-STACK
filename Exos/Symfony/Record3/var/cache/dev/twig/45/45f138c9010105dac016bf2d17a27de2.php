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

/* login/index.html.twig */
class __TwigTemplate_addc6cf6bb16c1cd47f7ee96847d66de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 9
        echo "
\t<form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\" mt-5\">Email:</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t<input type=\"hidden\" name=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_disc_index");
        echo "\" value=\"/account\">

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<button class=\"btn btn-info btn-sm mr-3\" type=\"submit\">login</button>

\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-info btn-sm ml-3\">Register
\t\t\t</a>
\t\t</div>
\t</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  104 => 25,  99 => 23,  87 => 14,  80 => 10,  77 => 9,  71 => 7,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# ... #}

{% block body %}
\t{% if error %}
\t\t<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t{% endif %}

\t<form action=\"{{ path('login') }}\" method=\"post\">
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\" mt-5\">Email:</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"password\">Password:</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\">
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t<input type=\"hidden\" name=\"{{ path('app_disc_index') }}\" value=\"/account\">

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<button class=\"btn btn-info btn-sm mr-3\" type=\"submit\">login</button>

\t\t\t<a href=\"{{ path('app_register') }}\" class=\"btn btn-info btn-sm ml-3\">Register
\t\t\t</a>
\t\t</div>
\t</form>
{% endblock %}
", "login/index.html.twig", "/home/alexis/Documents/DIW22091/Exos/Symfony/Record3/templates/login/index.html.twig");
    }
}
