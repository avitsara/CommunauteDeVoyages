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

    // line 4
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 5
        echo "<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css'  />
<style>
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 13
        echo "<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
";
        // line 22
        echo "<div class=\"card\" style=\"width: 80%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 26
            echo "        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 31
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='card-img-top' src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
                 <p class=\"card-text\"> 
                    ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 38), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 42), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 53), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 56), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\">

                 

              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
</p>


  </div>
</div>
<p class=\"card-text\">

 <div id=\"map\">
                  
</div>
</p>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9 // starting zoom
    });
</script>
                  </p> 
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
        return array (  196 => 66,  180 => 56,  174 => 53,  168 => 50,  161 => 46,  154 => 42,  147 => 38,  141 => 35,  136 => 33,  130 => 31,  124 => 26,  120 => 25,  115 => 22,  110 => 19,  103 => 18,  94 => 13,  87 => 12,  75 => 5,  68 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}
{% block stylesheet %}
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css'  />
<style>
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>

{% endblock %}

{% block javascript %}
<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js\"></script>

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
              <img class='card-img-top' src=\"{{ vich_uploader_asset(trip, 'imageFile') }}\" width=\"60%\"/>
                 <p class=\"card-text\"> 
                    {{ trip.description }}
                  </p>
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

                 

              </div>
            </div>
        </div>
      {% endfor %}

</p>


  </div>
</div>
<p class=\"card-text\">

 <div id=\"map\">
                  
</div>
</p>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9 // starting zoom
    });
</script>
                  </p> 
{% endblock %}
", "home/index.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/index.html.twig");
    }
}
