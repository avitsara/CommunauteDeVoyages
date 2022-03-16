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
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\"> 
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'row', ["attr" => ["class" => "form-control ", "id" => "inputsm", "data-form-type" => "email"]]);
        echo "
    </div>
    <div class=\"form-group\"> 
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 11, $this->source); })()), "departure", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
     <div class=\"form-group\"> 
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 14, $this->source); })()), "destination", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
    <div class=\"form-group\"> 
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 17, $this->source); })()), "beginDate", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
    </div>
    <div class=\"form-group\"> 
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 20, $this->source); })()), "endDate", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
    </div>
    <div class=\"form-group\"> 
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 23, $this->source); })()), "transportation", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div> 

     <div class=\"form-group\"> 
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 27, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    </div>
     <div class=\"form-group\"> 
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'row', ["attr" => ["class" => "form-control"], "id" => "exampleTextarea"]);
        echo "
    </div> 
       <div class=\"form-group\"> 
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 33, $this->source); })()), "imageFile", [], "any", false, false, false, 33), 'row');
        echo "
    </div> 
 

    <button type=\"submit\" class=\"btn btn-primary\"> Create trip </button>


";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 40, $this->source); })()), 'form_end');
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
        return array (  128 => 40,  118 => 33,  112 => 30,  106 => 27,  99 => 23,  93 => 20,  87 => 17,  81 => 14,  75 => 11,  69 => 8,  64 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{{ include('menu.html.twig')}}
<br>
{{ form_start(tripCreationForm) }}
    <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.title,{'attr':{'class':'form-control ','id':'inputsm','data-form-type':'email'}}) }}
    </div>
    <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.departure,{'attr':{'class':'form-control'}})}}
    </div>
     <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.destination,{'attr':{'class':'form-control'}})}}
    </div>
    <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.beginDate,{'attr':{'class':'form-group'}})}}
    </div>
    <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.endDate,{'attr':{'class':'form-group'}})}}
    </div>
    <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.transportation,{'attr':{'class':'form-control'}})}}
    </div> 

     <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.travelCompanionNumber,{'attr':{'class':'form-control'}})}}
    </div>
     <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.description,{'attr':{'class':'form-control'},'id':'exampleTextarea'})}}
    </div> 
       <div class=\"form-group\"> 
        {{ form_row(tripCreationForm.imageFile) }}
    </div> 
 

    <button type=\"submit\" class=\"btn btn-primary\"> Create trip </button>


{{ form_end(tripCreationForm) }}
{% endblock %}", "trip/trip.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/trip/trip.html.twig");
    }
}
