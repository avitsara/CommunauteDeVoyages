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

/* trip/trip.html.twig */
class __TwigTemplate_b0ff3415c5114577fbc6e80d9b815f76 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/trip.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
    <h1> Create a new trip  </h1>

<div class=\"container\">

        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control ", "id" => "inputsm", "data-form-type" => "email"]]);
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 12, $this->source); })()), "departure", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 13, $this->source); })()), "tripDepartureRegion", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"], "id" => "exampleTextarea"]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 14, $this->source); })()), "destination", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 15, $this->source); })()), "tripDestinationRegion", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"], "id" => "exampleTextarea"]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 16, $this->source); })()), "beginDate", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 17, $this->source); })()), "endDate", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 18, $this->source); })()), "transportation", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 19, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"], "id" => "exampleTextarea"]);
        echo "
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 21, $this->source); })()), "imageFile", [], "any", false, false, false, 21), 'row');
        echo "
   
 
    <br>
    <button type=\"submit\" class=\"btn btn-primary\"> Create trip </button>

</div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trip/trip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{{ include('menu.html.twig')}}
<br>
    <h1> Create a new trip  </h1>

<div class=\"container\">

        {{ form_start(tripCreationForm) }}
            {{ form_row(tripCreationForm.title,{'attr':{'class':'form-control ','id':'inputsm','data-form-type':'email'}}) }}
            {{ form_row(tripCreationForm.departure,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripCreationForm.tripDepartureRegion,{'attr':{'class':'form-control'},'id':'exampleTextarea'})}}
            {{ form_row(tripCreationForm.destination,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripCreationForm.tripDestinationRegion,{'attr':{'class':'form-control'},'id':'exampleTextarea'})}}
            {{ form_row(tripCreationForm.beginDate,{'attr':{'class':'form-group'}})}}
            {{ form_row(tripCreationForm.endDate,{'attr':{'class':'form-group'}})}}
            {{ form_row(tripCreationForm.transportation,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripCreationForm.travelCompanionNumber,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripCreationForm.description,{'attr':{'class':'form-control'},'id':'exampleTextarea'})}}
            {{ form_row(tripCreationForm.imageFile) }}
   
 
    <br>
    <button type=\"submit\" class=\"btn btn-primary\"> Create trip </button>

</div>
{{ form_end(tripCreationForm) }}
{% endblock %}", "trip/trip.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/trip/trip.html.twig");
    }
}
