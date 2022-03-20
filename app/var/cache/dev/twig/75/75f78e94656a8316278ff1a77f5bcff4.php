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

/* trip_search/search.html.twig */
class __TwigTemplate_1e7277d32a28494db8e2b4d7df22bfd7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip_search/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trip_search/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Search your trip ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
<h1>  Search your trip </h1>
<br>

    <div class='form-row' style=\"margin-left:70px\"> 
           ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripSearchForm"]) || array_key_exists("tripSearchForm", $context) ? $context["tripSearchForm"] : (function () { throw new RuntimeError('Variable "tripSearchForm" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
        
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripSearchForm"]) || array_key_exists("tripSearchForm", $context) ? $context["tripSearchForm"] : (function () { throw new RuntimeError('Variable "tripSearchForm" does not exist.', 17, $this->source); })()), "departure", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripSearchForm"]) || array_key_exists("tripSearchForm", $context) ? $context["tripSearchForm"] : (function () { throw new RuntimeError('Variable "tripSearchForm" does not exist.', 18, $this->source); })()), "destination", [], "any", false, false, false, 18), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tripSearchForm"]) || array_key_exists("tripSearchForm", $context) ? $context["tripSearchForm"] : (function () { throw new RuntimeError('Variable "tripSearchForm" does not exist.', 19, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
    <br>
    <button type=\"submit\" class=\"btn btn-primary\"> Search </button>
    
    </div>
 

        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["tripSearchForm"]) || array_key_exists("tripSearchForm", $context) ? $context["tripSearchForm"] : (function () { throw new RuntimeError('Variable "tripSearchForm" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

<h4 class=\" text-center\"> Your results </h4>

<div class=\"card\" width=\"100%\">
  <div class=\"row flex\">                        
  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 33
            echo "
    <div class=\"col-5\">  
            <div class=\"card text-center\" style=\"width: 15rem;\" >
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 39
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='img-thumbnail rounded mx-auto d-block' src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 44), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 48), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 59), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 62), "html", null, true);
            echo "
                  </p>
                  <br>
            
                 <br>
                      ";
            // line 71
            echo "              </div>
            </div>
        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </div>
   </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trip_search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 75,  195 => 71,  187 => 62,  181 => 59,  175 => 56,  168 => 52,  161 => 48,  154 => 44,  148 => 41,  142 => 39,  135 => 33,  131 => 32,  122 => 26,  112 => 19,  108 => 18,  104 => 17,  99 => 15,  90 => 9,  83 => 8,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Search your trip {% endblock %}
{% block stylesheet %}


{% endblock %}
{% block body %}
{{ include('menu.html.twig')}}
<br>
<h1>  Search your trip </h1>
<br>

    <div class='form-row' style=\"margin-left:70px\"> 
           {{ form_start(tripSearchForm) }}
        
            {{ form_row(tripSearchForm.departure,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripSearchForm.destination,{'attr':{'class':'form-control'}})}}
            {{ form_row(tripSearchForm.travelCompanionNumber,{'attr':{'class':'form-control'}})}}
    <br>
    <button type=\"submit\" class=\"btn btn-primary\"> Search </button>
    
    </div>
 

        {{ form_end(tripSearchForm) }}

<h4 class=\" text-center\"> Your results </h4>

<div class=\"card\" width=\"100%\">
  <div class=\"row flex\">                        
  {% for trip in trips %}

    <div class=\"col-5\">  
            <div class=\"card text-center\" style=\"width: 15rem;\" >
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 {## On affiche les voyages de l'utilisateur ####}
                 <h4>   {{ trip.title }} </h4>
                 </h5>
              <img class='img-thumbnail rounded mx-auto d-block' src=\"{{ vich_uploader_asset(trip, 'imageFile') }}\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : {{ trip.departure }}
                  </p>

                    <p class=\"card-text\"> 
                    Destination : {{ trip.destination }}
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : {{ trip.beginDate|date('Y-m-d') }}
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  {{ trip.endDate|date('Y-m-d') }}
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  {{ trip.travelCompanionNumber}}
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  {{ trip.transportation}}
                  </p>
                  <br>
            
                 <br>
                      {##  
                      <p class=\"card-text\"> 
                    {{ trip.description }}
                  </p> ##}
              </div>
            </div>
        </div>
                    {% endfor %}
        </div>
   </div>
{% endblock %}
", "trip_search/search.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/trip_search/search.html.twig");
    }
}
