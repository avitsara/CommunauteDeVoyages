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

/* menu.html.twig */
class __TwigTemplate_0af985d3507b1586cb87b928a31ee7b2 extends Template
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
        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <div class=\"container-fluid\">
 
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo ">Home
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "> Log in </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "> Create account </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo ">About</a>
        </li>

     
        <li class=\"nav-item dropdown\">
          <button class=\"btn btn-primary dropdown-toggle\"  id=\"navbarColor01\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"> Trips </button>

          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo ">Search for a trip</a>
            <a class=\"dropdown-item\" href=";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trip");
        echo "> New trip</a>
            <a class=\"dropdown-item\"  href=";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo " > Show trips </a>
         
        </li>
      </ul>
    
    </div>
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  79 => 26,  75 => 25,  64 => 17,  58 => 14,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/menu.html.twig");
    }
}
