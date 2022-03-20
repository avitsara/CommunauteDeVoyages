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

/* trip/card.html.twig */
class __TwigTemplate_863f5f6dd29c3cb2863bac9b103070cf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trip/card.html.twig"));

        // line 1
        echo "<div class=\"card\" width=\"100%\">
<div class=\"row flex\">
    <div class=\"col-5\">  
        <div class=\"card text-center\" style=\"width: 15rem;\" >

        <img class=' card-img-top img-thumbnail rounded mx-auto d-block' src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 6, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" />
            <p class=\"card-text\"> Departure  : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 7, $this->source); })()), "departure", [], "any", false, false, false, 7), "html", null, true);
        echo " </p>
            <p class=\"card-text\"> Destination :  ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 8, $this->source); })()), "destination", [], "any", false, false, false, 8), "html", null, true);
        echo " </p>
            <p class=\"card-text\"> travelCompanionNumber :  ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trip"]) || array_key_exists("trip", $context) ? $context["trip"] : (function () { throw new RuntimeError('Variable "trip" does not exist.', 9, $this->source); })()), "travelCompanionNumber", [], "any", false, false, false, 9), "html", null, true);
        echo " </p>

        </div>
    </div>
</div>





</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trip/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\" width=\"100%\">
<div class=\"row flex\">
    <div class=\"col-5\">  
        <div class=\"card text-center\" style=\"width: 15rem;\" >

        <img class=' card-img-top img-thumbnail rounded mx-auto d-block' src=\"{{ vich_uploader_asset(trip, 'imageFile') }}\" />
            <p class=\"card-text\"> Departure  : {{ trip.departure }} </p>
            <p class=\"card-text\"> Destination :  {{ trip.destination }} </p>
            <p class=\"card-text\"> travelCompanionNumber :  {{ trip.travelCompanionNumber }} </p>

        </div>
    </div>
</div>





</div>", "trip/card.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/trip/card.html.twig");
    }
}
