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

/* contact/index.html.twig */
class __TwigTemplate_1e5e5e5b631bfceaa5a2fabaaac65c79 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Contact Form ";
        
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

<div class='form-row' style=\"margin-left:70px\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
    <br>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1", "data-form-type" => "email"]]);
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 12, $this->source); })()), "lastname", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1", "data-form-type" => "email"]]);
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 13, $this->source); })()), "phone", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1", "data-form-type" => "email"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control", "id" => "exampleInputEmail1", "data-form-type" => "email"]]);
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 15, $this->source); })()), "message", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control"], "id" => "exampleTextarea"]);
        echo "

    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "


</div>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-left:70px\"> Submit </button>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  100 => 15,  96 => 14,  92 => 13,  88 => 12,  84 => 11,  79 => 9,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Contact Form {% endblock %}

{% block body %}
{{ include('menu.html.twig')}}

<div class='form-row' style=\"margin-left:70px\">
    {{ form_start(contactForm) }}
    <br>
            {{ form_row(contactForm.firstname,{'attr':{'class':'form-control','id':'exampleInputEmail1','data-form-type':'email'}}) }}
            {{ form_row(contactForm.lastname,{'attr':{'class':'form-control','id':'exampleInputEmail1','data-form-type':'email'}}) }}
            {{ form_row(contactForm.phone,{'attr':{'class':'form-control','id':'exampleInputEmail1','data-form-type':'email'}}) }}
            {{ form_row(contactForm.email,{'attr':{'class':'form-control','id':'exampleInputEmail1','data-form-type':'email'}}) }}
            {{ form_row(contactForm.message,{'attr':{'class':'form-control'},'id':'exampleTextarea'})}}

    {{ form_end(contactForm) }}


</div>
    <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-left:70px\"> Submit </button>

{% endblock %}
", "contact/index.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/contact/index.html.twig");
    }
}
