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

/* map.html.twig */
class __TwigTemplate_81e7822cbe96fc304225c033d1869836 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "map.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<title>Display a map on a webpage</title>
<meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\">
<link href=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css\" rel=\"stylesheet\">
<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js\"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 20%; }
</style>
</head>
<body>
<div id=\"map\"></div>
<script>
\tmapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
const map = new mapboxgl.Map({
container: 'map', // container ID
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: [-74.5, 40], // starting position [lng, lat]
zoom: 9 // starting zoom
});
</script>
 
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<title>Display a map on a webpage</title>
<meta name=\"viewport\" content=\"initial-scale=1,maximum-scale=1,user-scalable=no\">
<link href=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css\" rel=\"stylesheet\">
<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js\"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 20%; }
</style>
</head>
<body>
<div id=\"map\"></div>
<script>
\tmapboxgl.accessToken = 'pk.eyJ1IjoiZnVsbG1ldGFsYWxjaGVtaXN0OTIiLCJhIjoiY2wwcXFoMTR1MjdnbjNqcHdsY3V0ZmdrbCJ9.yXymeZBgXGPbhkQGtRtjLA';
const map = new mapboxgl.Map({
container: 'map', // container ID
style: 'mapbox://styles/mapbox/streets-v11', // style URL
center: [-74.5, 40], // starting position [lng, lat]
zoom: 9 // starting zoom
});
</script>
 
</body>
</html>
", "map.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/map.html.twig");
    }
}
