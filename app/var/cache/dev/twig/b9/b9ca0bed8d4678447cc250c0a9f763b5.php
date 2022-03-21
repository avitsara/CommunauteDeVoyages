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

/* home/home.html.twig */
class __TwigTemplate_2c76c6bba85bdfbc82b17e6a4b8ad569 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " HomePage ";
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 26
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 137
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
<br>
";
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 140)) {
            // line 141
            echo "<h1> Hello  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 141), "html", null, true);
            echo " </h1>

<a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-primary\">Logout</a>
<br>
";
        }
        // line 146
        echo "
<br>
";
        // line 149
        echo "<div class=\"card\" style=\"width: 100%;\">
  <h2> My trips  </h2>
  <div class=\"row flex\" width=\"100%\">
      ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 153
            echo "     
        <div class=\"col-3\">  
            <div class=\"card text-center\" style=\"width: 15rem;\" >
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 159
            echo "                 <h4>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 159), "html", null, true);
            echo " </h4>
                 </h5>
              <img class='img-thumbnail rounded mx-auto d-block' src=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
               
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 164), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 168), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 172
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 172), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 176
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 176), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 179), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 182), "html", null, true);
            echo "
                  </p>
                  <br>
                 <p class=\"card-text\"> 

                  <a  href='";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
            echo "' class=\"btn btn-primary btn-sm\" role=\"button\"> Contact User </a>
                  </p>
                 <br>
                      ";
            // line 194
            echo "              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "


  </div>
</div>
<br>

<div id=\"map\"></div>
  <button id=\"fly\"></button>


   

";
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 198,  299 => 194,  293 => 187,  285 => 182,  279 => 179,  273 => 176,  266 => 172,  259 => 168,  252 => 164,  246 => 161,  240 => 159,  233 => 153,  229 => 152,  224 => 149,  220 => 146,  214 => 143,  208 => 141,  206 => 140,  201 => 138,  197 => 137,  86 => 27,  82 => 26,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/home.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/home.html.twig");
    }
}
