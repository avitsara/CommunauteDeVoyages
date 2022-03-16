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

/* home/index.html.twig */
class __TwigTemplate_54f1db8a6eb8442447e95559ad0f0023 extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " HomePage ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo " <link href='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.css' rel='stylesheet' />
<style>

 .container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 20
        echo " <script src='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.js'></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
";
        // line 29
        echo "<div class=\"card\" style=\"width: 80%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 33
            echo "        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 38
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 38), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='img-thumbnail rounded float-right' src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 43), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 47), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 58), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 61), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\">

                 
                      ";
            // line 70
            echo "              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "


  </div>
</div>

<br>

<div class=\"container\">
    <div>
     <iframe  width=\"500\" height=\"500\" src=\"https://api.maptiler.com/maps/voyager/?key=tlsMQxY2O8t8fc48pkeW#0.0/0.00000/0.00000\"></iframe>

    </div>
</div>
  

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 74,  189 => 70,  181 => 61,  175 => 58,  169 => 55,  162 => 51,  155 => 47,  148 => 43,  142 => 40,  136 => 38,  130 => 33,  126 => 32,  121 => 29,  116 => 26,  109 => 25,  100 => 20,  93 => 19,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}

{% block stylesheet %}
 <link href='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.css' rel='stylesheet' />
<style>

 .container {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

{% endblock %}

{% block javascript %}
 <script src='https://unpkg.com/maplibre-gl@1.15.2/dist/maplibre-gl.js'></script>

{% endblock %}


{% block body %}
{{ include('menu.html.twig')}}
<br>
{# LISTE DES VOYAGES CRÉÉS PAR L'UTILISATEUR #}
<div class=\"card\" style=\"width: 80%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      {% for trip in trips %}
        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 {## On affiche les voyages de l'utilisateur ####}
                 <h4>   {{ trip.title }} </h4>
                 </h5>
              <img class='img-thumbnail rounded float-right' src=\"{{ vich_uploader_asset(trip, 'imageFile') }}\" width=\"60%\"/>
               
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
                  <p class=\"card-text\">

                 
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

<br>

<div class=\"container\">
    <div>
     <iframe  width=\"500\" height=\"500\" src=\"https://api.maptiler.com/maps/voyager/?key=tlsMQxY2O8t8fc48pkeW#0.0/0.00000/0.00000\"></iframe>

    </div>
</div>
  

    
{% endblock %}
", "home/index.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/index.html.twig");
    }
}
