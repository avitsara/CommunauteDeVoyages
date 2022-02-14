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

/* distinct/authentication/login.html.twig */
class __TwigTemplate_221ca8f01eb9ac9b47bc776e2afe2dade8b0c0f1afd4fedb608d7ffe6735ce4d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "distinct/authentication/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "distinct/authentication/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo " \">
       
        ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "lastname", [], "any", false, false, false, 11), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 14
        echo "
        <div class=\"topnav\">
            <label for=\"inputEmail\">Email</label>
            ";
        // line 18
        echo "
            <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <div class=\"login-container\">
                <label for=\"inputPassword\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Extension\CsrfRuntime')->getCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
            </div>
        </div>


        <form>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
        ";
        // line 57
        echo "
        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "distinct/authentication/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  108 => 25,  99 => 18,  94 => 14,  86 => 11,  83 => 10,  81 => 9,  75 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    {## app_login = chemin amenant au formulaire ##}
    <form method=\"post\" action=\"{{path('app_login')}} \">
       
        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.lastname }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}

        <div class=\"topnav\">
            <label for=\"inputEmail\">Email</label>
            {#<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>#}

            <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <div class=\"login-container\">
                <label for=\"inputPassword\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"{{ csrf_token('authenticate') }}\"
                >
            </div>
        </div>


        <form>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
        {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
        #}

        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
    </form>
{% endblock %}
", "distinct/authentication/login.html.twig", "/home/jary/Bureau/CommunauteDeVoyages/app/templates/distinct/authentication/login.html.twig");
    }
}
