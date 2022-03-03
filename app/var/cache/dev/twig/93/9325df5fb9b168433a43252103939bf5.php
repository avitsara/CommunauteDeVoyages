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

/* crud_trip/show.html.twig */
class __TwigTemplate_eecbae1324346a9a64b7a4aee6985233 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_trip/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "crud_trip/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Trip";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
    <h1>Trip</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 18, $this->source); })()), "departure", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Destination</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 22, $this->source); })()), "destination", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BeginDate</th>
                <td>";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 26, $this->source); })()), "beginDate", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 26, $this->source); })()), "beginDate", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 30, $this->source); })()), "endDate", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 30, $this->source); })()), "endDate", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Transportation</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 34, $this->source); })()), "transportation", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TravelCompanionNumber</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 38, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 42, $this->source); })()), "description", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 46, $this->source); })()), "title", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_crud_trip_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_crud_trip_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 55
        echo twig_include($this->env, $context, "crud_trip/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "crud_trip/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  153 => 53,  148 => 51,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  91 => 18,  84 => 14,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Trip{% endblock %}

{% block body %}
{{ include('menu.html.twig')}}
<br>
    <h1>Trip</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ trip.id }}</td>
            </tr>
            <tr>
                <th>Departure</th>
                <td>{{ trip.departure }}</td>
            </tr>
            <tr>
                <th>Destination</th>
                <td>{{ trip.destination }}</td>
            </tr>
            <tr>
                <th>BeginDate</th>
                <td>{{ trip.beginDate ? trip.beginDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>EndDate</th>
                <td>{{ trip.endDate ? trip.endDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Transportation</th>
                <td>{{ trip.transportation }}</td>
            </tr>
            <tr>
                <th>TravelCompanionNumber</th>
                <td>{{ trip.travelCompanionNumber }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ trip.description }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ trip.title }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_crud_trip_index') }}\">back to list</a>

    <a href=\"{{ path('app_crud_trip_edit', {'id': trip.id}) }}\">edit</a>

    {{ include('crud_trip/_delete_form.html.twig') }}
{% endblock %}
", "crud_trip/show.html.twig", "/home/fullmetal/Bureau/CommunauteDeVoyages/app/templates/crud_trip/show.html.twig");
    }
}
