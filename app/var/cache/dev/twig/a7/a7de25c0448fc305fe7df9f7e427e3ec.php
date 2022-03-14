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
        echo "<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" />
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
";
        // line 12
        echo "<fiv class=\"container\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 16
            echo "        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 21
            echo "                 <a href=#>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 21), "html", null, true);
            echo " </a>
                 </h5>
                 <p class=\"card-text\"> 
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "description", [], "any", false, false, false, 24), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 27), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 31), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                   Nombre de voyageurs :  ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "travelCompanionNumber", [], "any", false, false, false, 42), "html", null, true);
            echo "
                  </p>
                     <p class=\"card-text\"> 
                   Moyen de transport :  ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "transportation", [], "any", false, false, false, 45), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\">
              <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["trip"], "imageFile"), "html", null, true);
            echo "\" width=\"60%\"/>
                  </p> 
              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</p>
  </div>
</div>
";
        // line 60
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
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
        return array (  179 => 60,  173 => 54,  161 => 48,  155 => 45,  149 => 42,  143 => 39,  136 => 35,  129 => 31,  122 => 27,  116 => 24,  109 => 21,  103 => 16,  99 => 15,  94 => 12,  89 => 9,  82 => 8,  74 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}
{% block stylesheet %}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" />
{% endblock %}

{% block body %}
{{ include('menu.html.twig')}}
<br>
{# LISTE DES VOYAGES CRÉÉS PAR L'UTILISATEUR #}
<fiv class=\"container\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      {% for trip in trips %}
        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 {## On affiche les voyages de l'utilisateur ####}
                 <a href=#>   {{ trip.title }} </a>
                 </h5>
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
              <img src=\"{{ vich_uploader_asset(trip, 'imageFile') }}\" width=\"60%\"/>
                  </p> 
              </div>
            </div>
        </div>
      {% endfor %}

</p>
  </div>
</div>
{# Footer #}
{## INCLUSION DU FOOTER ###}
{{ include('footer.html.twig')}}
{% endblock %}
", "home/index.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/home/index.html.twig");
    }
}
