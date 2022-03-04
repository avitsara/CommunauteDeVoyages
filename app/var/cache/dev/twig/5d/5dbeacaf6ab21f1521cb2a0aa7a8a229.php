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
class __TwigTemplate_2ca1035641c5770e53f5861f039b2ef2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "trip/trip.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'body' => [$this, 'block_body'],
            ]
        );
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Create your trip ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
<h1> Create your trip </h1>
<div class=\"container\">

      ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 14, $this->source); })()), "departure", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 15, $this->source); })()), "destination", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 16, $this->source); })()), "beginDate", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            <br>
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 18, $this->source); })()), "endDate", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            <br>
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 20, $this->source); })()), "transportation", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            <br>
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 22, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            <br>
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "form-control", "id" => "exampleFormControlTextarea1"]]);
        echo "
            ";
        // line 26
        echo "            <br>
            <button type=\"submit\" class=\"btn btn-dark form-group\"> Create </button>

     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
</div>

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
        return array (  138 => 29,  133 => 26,  129 => 24,  124 => 22,  119 => 20,  114 => 18,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  93 => 12,  85 => 7,  78 => 6,  65 => 4,  48 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% use 'bootstrap_4_layout.html.twig' %}

{% block title %} Create your trip {% endblock %}

{% block body %}
{{ include('menu.html.twig')}}
<br>
<h1> Create your trip </h1>
<div class=\"container\">

      {{ form_start(tripCreationForm) }}
            {{ form_row(tripCreationForm.title,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.departure,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.destination,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.beginDate,{'attr':{'class':'form-group'}}) }}
            <br>
            {{ form_row(tripCreationForm.endDate,{'attr':{'class':'form-group'}}) }}
            <br>
            {{ form_row(tripCreationForm.transportation,{'attr':{'class':'form-control'}}) }}
            <br>
            {{ form_row(tripCreationForm.travelCompanionNumber,{'attr':{'class':'form-group'}}) }}
            <br>
            {{ form_row(tripCreationForm.description,{'attr':{'class':'form-control','id':'exampleFormControlTextarea1'}}) }}
            {## BOUTON PERMETTANT DE CRÉER LE VOYAGE ##}
            <br>
            <button type=\"submit\" class=\"btn btn-dark form-group\"> Create </button>

     {{ form_end(tripCreationForm) }}
</div>

{% endblock %}
", "trip/trip.html.twig", "/home/fullmetal/Documents/MASTER_INFORMATIQUE/M1/CommunauteDeVoyages/app/templates/trip/trip.html.twig");
    }
}
