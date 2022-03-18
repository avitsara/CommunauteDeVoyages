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

/* home/map.html.twig */
class __TwigTemplate_8b6cf22f0b0b4616b7f77b83ee1e8622 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/map.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\" />
<title>Demo: Add custom markers in Mapbox GL JS</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans\"rel=\"stylesheet\"/>
<link href=\"https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\"/>
<script src=\"https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
<style>
body {
margin: 0;
padding: 0;
}
#map {
position: absolute;
top: 0;
bottom: 0;
width: 100%;
}
.marker {
background-image: url('marker-editor.svg');
background-size: cover;
width: 50px;
height: 50px;
border-radius: 50%;
cursor: pointer;
}
.mapboxgl-popup {
max-width: 200px;
}
.mapboxgl-popup-content {
text-align: center;
font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<div id=\"map\"></div>
 
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
 
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
 
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/light-v10',
center: [-96, 37.8],
zoom: 3
});
 
// add markers to map
for (const feature of geojson.features) {
// create a HTML element for each feature
const el = document.createElement('div');
el.className = 'marker';
 
// make a marker for each feature and add it to the map
new mapboxgl.Marker(el)
.setLngLat(feature.geometry.coordinates)
.setPopup(
new mapboxgl.Popup({ offset: 25 }) // add popups
.setHTML(
`<h3>\${feature.properties.title}</h3><p>\${feature.properties.description}</p>`
)
)
.addTo(map);
}
</script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"utf-8\" />
<title>Demo: Add custom markers in Mapbox GL JS</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans\"rel=\"stylesheet\"/>
<link href=\"https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\"/>
<script src=\"https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
<style>
body {
margin: 0;
padding: 0;
}
#map {
position: absolute;
top: 0;
bottom: 0;
width: 100%;
}
.marker {
background-image: url('marker-editor.svg');
background-size: cover;
width: 50px;
height: 50px;
border-radius: 50%;
cursor: pointer;
}
.mapboxgl-popup {
max-width: 200px;
}
.mapboxgl-popup-content {
text-align: center;
font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>
<div id=\"map\"></div>
 
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
 
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
 
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/light-v10',
center: [-96, 37.8],
zoom: 3
});
 
// add markers to map
for (const feature of geojson.features) {
// create a HTML element for each feature
const el = document.createElement('div');
el.className = 'marker';
 
// make a marker for each feature and add it to the map
new mapboxgl.Marker(el)
.setLngLat(feature.geometry.coordinates)
.setPopup(
new mapboxgl.Popup({ offset: 25 }) // add popups
.setHTML(
`<h3>\${feature.properties.title}</h3><p>\${feature.properties.description}</p>`
)
)
.addTo(map);
}
</script>
</body>
</html>
", "home/map.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/map.html.twig");
    }
}
