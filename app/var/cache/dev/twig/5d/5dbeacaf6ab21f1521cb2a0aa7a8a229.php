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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/trip.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip/trip.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Create your trip ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1> Create your trip </h1>
<div class=\"container\">

      ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 10, $this->source); })()), "departure", [], "any", false, false, false, 10), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 11, $this->source); })()), "destination", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 12, $this->source); })()), "beginDate", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 13, $this->source); })()), "endDate", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 14, $this->source); })()), "transportation", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 15, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-group"]]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 18
        echo "            <button type=\"submit\" class=\"btn btn-dark\"> Create </button>

     ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripCreationForm"]) || array_key_exists("tripCreationForm", $context) ? $context["tripCreationForm"] : (function () { throw new RuntimeError('Variable "tripCreationForm" does not exist.', 20, $this->source); })()), 'form_end');
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
        return array (  114 => 20,  110 => 18,  106 => 16,  102 => 15,  98 => 14,  94 => 13,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Create your trip {% endblock %}

{% block body %}
<h1> Create your trip </h1>
<div class=\"container\">

      {{ form_start(tripCreationForm) }}
            {{ form_row(tripCreationForm.departure,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.destination,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.beginDate,{'attr':{'class':'form-group'}}) }}
            {{ form_row(tripCreationForm.endDate,{'attr':{'class':'form-group'}}) }}
            {{ form_row(tripCreationForm.transportation,{'attr':{'class':'form-control'}}) }}
            {{ form_row(tripCreationForm.travelCompanionNumber,{'attr':{'class':'form-group'}}) }}
            {{ form_row(tripCreationForm.description,{'attr':{'class':'form-control'}}) }}
            {## BOUTON PERMETTANT DE CRÉER LE VOYAGE ##}
            <button type=\"submit\" class=\"btn btn-dark\"> Create </button>

     {{ form_end(tripCreationForm) }}
</div>

{% endblock %}
", "trip/trip.html.twig", "/home/fullmetal/Bureau/CommunauteDeVoyages/app/templates/trip/trip.html.twig");
    }
}
