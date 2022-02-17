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

/* registration/register.html.twig */
class __TwigTemplate_c767ae3369151f9a03fb827a8eab0c6cbe9e7384749b02b2c6459f8c071f137b extends Template
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
        return "security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("security/base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Register
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> My very bad trip </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> Trips </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
</nav>

    <form>
    <div class=\"form-group\">
           <label for=\"lastname\"> Lastname :  </label>
           <input type=\"text\"  placeholder=\"Lastname\" class=\"form-control\" id=\"lastname\" name=\"registration_form[lastname]\">
    </div>
    <div class=\"form-group\">
           <label for=\"firstname\"> Firstname :  </label>
           <input type=\"text\"  placeholder=\"Firstname\" class=\"form-control\" id=\"firstname\" name=\"registration_form[firstname]\">
    </div>
   <div class=\"form-group\">
            <label for=\"email\">Email :</label>
            <input type=\"email\"  placeholder=\"Enter email\"class=\"form-control\" id=\"email\" name=\"registration_form[email]\">
    </div>
    <div class=\"form-group\">
            <label for=\"pwd\">Password:</label>
            <input type=\"password\"  placeholder=\"Enter password\" class=\"form-control\" id=\"pwd\" name=\"regsitration_form[plainPassword]\">
    </div>

    <div class=\"form-group\">
        <label for=\"pwd\"> Date of Birth :</label>
        <input type=\"date\" class=\"form-control\" id=\"date_of_birth\" name=\"regsitration_form[date_of_birth]\">

    </div>

     <div class=\"form-group\">
        <select class=\"form-select\" aria-label=\"Default select example\">
          <option selected> Sélectionner votre sexe  </option>
          <option value=\"Homme\">  Homme </option>
          <option value=\"Femme\">  Femme </option>
        </select>

    </div>
    <button type=\"submit\"  class=\"btn btn-primary\">Register</button>

    </form>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  68 => 6,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'security/base.html.twig' %}

{% block title %}
Register
{% endblock %}
{% block body %}
{# Menu haut #}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> My very bad trip </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> Trips </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
</nav>

    <form>
    <div class=\"form-group\">
           <label for=\"lastname\"> Lastname :  </label>
           <input type=\"text\"  placeholder=\"Lastname\" class=\"form-control\" id=\"lastname\" name=\"registration_form[lastname]\">
    </div>
    <div class=\"form-group\">
           <label for=\"firstname\"> Firstname :  </label>
           <input type=\"text\"  placeholder=\"Firstname\" class=\"form-control\" id=\"firstname\" name=\"registration_form[firstname]\">
    </div>
   <div class=\"form-group\">
            <label for=\"email\">Email :</label>
            <input type=\"email\"  placeholder=\"Enter email\"class=\"form-control\" id=\"email\" name=\"registration_form[email]\">
    </div>
    <div class=\"form-group\">
            <label for=\"pwd\">Password:</label>
            <input type=\"password\"  placeholder=\"Enter password\" class=\"form-control\" id=\"pwd\" name=\"regsitration_form[plainPassword]\">
    </div>

    <div class=\"form-group\">
        <label for=\"pwd\"> Date of Birth :</label>
        <input type=\"date\" class=\"form-control\" id=\"date_of_birth\" name=\"regsitration_form[date_of_birth]\">

    </div>

     <div class=\"form-group\">
        <select class=\"form-select\" aria-label=\"Default select example\">
          <option selected> Sélectionner votre sexe  </option>
          <option value=\"Homme\">  Homme </option>
          <option value=\"Femme\">  Femme </option>
        </select>

    </div>
    <button type=\"submit\"  class=\"btn btn-primary\">Register</button>

    </form>
  {## {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.lastname) }}
        {{ form_row(registrationForm.firstname) }}
 
        {{ form_row(registrationForm.email) }}
   

        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {{ form_end(registrationForm) }}
    <button type=\"submit\" class=\"btn\">Register</button>
#}
{% endblock %}
", "registration/register.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/registration/register.html.twig");
    }
}
