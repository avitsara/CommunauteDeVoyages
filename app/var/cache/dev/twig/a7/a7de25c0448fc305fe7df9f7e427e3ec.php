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

\t#map {  width: 50%; height:100% }
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
        'coordinates': [23.728541, 37.988579]
        },
      'properties': {
        'title': 'Mapbox',
        'description': 'Attica'
        }
    },
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      /// coordinates : [longitude,latitude]
      'coordinates': [9.170685, 45.473702]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Milan'
      }
    },
    // \"latitude\":-15.344724,\"longitude\":48.270561,
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [14.409943,35.917973]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Malta'
      }
    },
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [2.342865,48.858705]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Paris'
      }
    },
      {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [48.270561,-15.344724]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Mahanjaga'
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

    // line 137
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 138
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>

";
        // line 142
        echo "<div class=\"card\" style=\"width: 100%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 146
            echo "     
        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 152
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 152), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='img-thumbnail rounded float-right' src=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 157), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 161), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 165
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 165), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 172), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 175), "html", null, true);
            echo "
                  </p>

                 
                      ";
            // line 183
            echo "              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
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
        return array (  311 => 187,  302 => 183,  295 => 175,  289 => 172,  283 => 169,  276 => 165,  269 => 161,  262 => 157,  256 => 154,  250 => 152,  243 => 146,  239 => 145,  234 => 142,  228 => 138,  221 => 137,  107 => 27,  100 => 26,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}

{% block stylesheet %}
<link href=\"https://unpkg.com/maplibre-gl@2.1.7/dist/maplibre-gl.css\" rel=\"stylesheet\" /><style>

\t#map {  width: 50%; height:100% }
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
        'coordinates': [23.728541, 37.988579]
        },
      'properties': {
        'title': 'Mapbox',
        'description': 'Attica'
        }
    },
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      /// coordinates : [longitude,latitude]
      'coordinates': [9.170685, 45.473702]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Milan'
      }
    },
    // \"latitude\":-15.344724,\"longitude\":48.270561,
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [14.409943,35.917973]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Malta'
      }
    },
    {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [2.342865,48.858705]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Paris'
      }
    },
      {
      'type': 'Feature',
      'geometry': {
      'type': 'Point',
      'coordinates': [48.270561,-15.344724]
      },
      'properties': {
      'title': 'Mapbox',
      'description': 'Mahanjaga'
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
