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
        echo "<link href=\"https://unpkg.com/maplibre-gl@2.1.7/dist/maplibre-gl.css\" rel=\"stylesheet\" /><style>

\t#map {  width: 100%; }
  #fly {
position: relative;
margin: 0px auto;
width: 10%;
height: 0px;
padding: 0px;
border: none;
border-radius: 3px;
font-size: 12px;
text-align: center;
color: #000;
background: #68707b;
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 27
        echo "    <script src=\"https://unpkg.com/maplibre-gl@2.1.7/dist/maplibre-gl.js\"></script>
     <script>
     /// var styleJson = 'https://api.maptiler.com/maps/voyager/style.json?key=tlsMQxY2O8t8fc48pkeW';
window.onload = function(){
   var map = new maplibregl.Map({
      container: 'map',
      style: 'https://api.maptiler.com/maps/streets/style.json?key=tlsMQxY2O8t8fc48pkeW',
      center: [-0.07, 51.5],
      zoom: 6,
      hash: true,
    });

    map.on('load', function () {
\t\tmap.loadImage(
\t\t'https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-plane-512.png',
\t\tfunction (error, image) {
\t\tif (error) throw error;
\t\tmap.addImage('AirPort_icon', image);
        const geojson = {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-77.032, 38.913]
},
'properties': {
'title': 'Mapbox',
'description': 'Washington, D.C.'
}
},
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-122.414, 37.776]
},
'properties': {
'title': 'Mapbox',
'description': 'San Francisco, California'
}
}
]
};

\t\tmap.addSource('AirPorts_points', {
\t\t\ttype: 'geojson',
\t\t\tdata: geojson
\t\t});

\t\tmap.addLayer({
\t\t'id': 'AirPorts',
\t\t'type': 'symbol',
\t\t'source': 'AirPorts_points',
\t\t'layout': {
\t\t'icon-image': 'AirPort_icon',
\t\t'icon-size': 0.05
\t\t}
\t\t});
\t\t}
\t\t);
\t\t});
    
///var marker = new maplibregl.Marker().setLngLat([0.11, 51.49]).addTo(map);    
} 
</script>
  <script> 
 
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
";
        // line 104
        echo "<div class=\"card\" style=\"width: 100%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 108
            echo "        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 113
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 113), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='img-thumbnail rounded float-right' src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 118), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 122), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 126), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 130), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 133), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 136), "html", null, true);
            echo "
                  </p>

                 
                      ";
            // line 144
            echo "              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "


  </div>
</div>
<br>

<div id=\"map\"></div>
  <button id=\"fly\"></button>


   

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
        return array (  272 => 148,  263 => 144,  256 => 136,  250 => 133,  244 => 130,  237 => 126,  230 => 122,  223 => 118,  217 => 115,  211 => 113,  205 => 108,  201 => 107,  196 => 104,  191 => 101,  184 => 100,  107 => 27,  100 => 26,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}

{% block stylesheet %}
<link href=\"https://unpkg.com/maplibre-gl@2.1.7/dist/maplibre-gl.css\" rel=\"stylesheet\" /><style>

\t#map {  width: 100%; }
  #fly {
position: relative;
margin: 0px auto;
width: 10%;
height: 0px;
padding: 0px;
border: none;
border-radius: 3px;
font-size: 12px;
text-align: center;
color: #000;
background: #68707b;
}
</style>

{% endblock %}

{% block javascript %}
    <script src=\"https://unpkg.com/maplibre-gl@2.1.7/dist/maplibre-gl.js\"></script>
     <script>
     /// var styleJson = 'https://api.maptiler.com/maps/voyager/style.json?key=tlsMQxY2O8t8fc48pkeW';
window.onload = function(){
   var map = new maplibregl.Map({
      container: 'map',
      style: 'https://api.maptiler.com/maps/streets/style.json?key=tlsMQxY2O8t8fc48pkeW',
      center: [-0.07, 51.5],
      zoom: 6,
      hash: true,
    });

    map.on('load', function () {
\t\tmap.loadImage(
\t\t'https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-plane-512.png',
\t\tfunction (error, image) {
\t\tif (error) throw error;
\t\tmap.addImage('AirPort_icon', image);
        const geojson = {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-77.032, 38.913]
},
'properties': {
'title': 'Mapbox',
'description': 'Washington, D.C.'
}
},
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-122.414, 37.776]
},
'properties': {
'title': 'Mapbox',
'description': 'San Francisco, California'
}
}
]
};

\t\tmap.addSource('AirPorts_points', {
\t\t\ttype: 'geojson',
\t\t\tdata: geojson
\t\t});

\t\tmap.addLayer({
\t\t'id': 'AirPorts',
\t\t'type': 'symbol',
\t\t'source': 'AirPorts_points',
\t\t'layout': {
\t\t'icon-image': 'AirPort_icon',
\t\t'icon-size': 0.05
\t\t}
\t\t});
\t\t}
\t\t);
\t\t});
    
///var marker = new maplibregl.Marker().setLngLat([0.11, 51.49]).addTo(map);    
} 
</script>
  <script> 
 
</script>
{% endblock %}


{% block body %}
{{ include('menu.html.twig')}}
<br>
{# LISTE DES VOYAGES CRÉÉS PAR L'UTILISATEUR #}
<div class=\"card\" style=\"width: 100%;\">
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

<div id=\"map\"></div>
  <button id=\"fly\"></button>


   

{###  tlsMQxY2O8t8fc48pkeW #####}
{% endblock %}
", "home/index.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/index.html.twig");
    }
}
