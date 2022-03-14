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

/* footer.html.twig */
class __TwigTemplate_99da3e45c8f1f99aca144626d2fc6a31 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<!-- Footer -->
<footer class=\"page-footer font-small stylish-color-dark pt-4\">

  <!-- Footer Links -->
  <div class=\"container text-center text-md-left\">

    <!-- Grid row -->
    <div class=\"row\">

      <!-- Grid column -->
      <div class=\"col-md-4 mx-auto\">

        <!-- Content -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Footer Content</h5>
        

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">
      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\"> Plan of Site </h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\"> Home </a>
          </li>
          <li>
            <a href=\"#!\"> Features </a>
          </li>
          <li>
            <a href=\"#!\"> Home </a>
          </li>
          <li>
            <a href=\"#!\"> About </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class=\"list-unstyled list-inline text-center py-2\">
    <li class=\"list-inline-item\">
      <h5 class=\"mb-1\">Register for free</h5>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-danger btn-rounded\">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->

  <!-- Social buttons -->

  <!-- Copyright -->

  <!-- Copyright -->

</footer>
<!-- Footer -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 61,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
<footer class=\"page-footer font-small stylish-color-dark pt-4\">

  <!-- Footer Links -->
  <div class=\"container text-center text-md-left\">

    <!-- Grid row -->
    <div class=\"row\">

      <!-- Grid column -->
      <div class=\"col-md-4 mx-auto\">

        <!-- Content -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Footer Content</h5>
        

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">
      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\"> Plan of Site </h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\"> Home </a>
          </li>
          <li>
            <a href=\"#!\"> Features </a>
          </li>
          <li>
            <a href=\"#!\"> Home </a>
          </li>
          <li>
            <a href=\"#!\"> About </a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <ul class=\"list-unstyled list-inline text-center py-2\">
    <li class=\"list-inline-item\">
      <h5 class=\"mb-1\">Register for free</h5>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home')}}\" class=\"btn btn-danger btn-rounded\">Sign up!</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->

  <!-- Social buttons -->

  <!-- Copyright -->

  <!-- Copyright -->

</footer>
<!-- Footer -->", "footer.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/footer.html.twig");
    }
}
