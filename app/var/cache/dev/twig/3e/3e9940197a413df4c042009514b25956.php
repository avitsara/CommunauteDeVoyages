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
class __TwigTemplate_461204e72c52c865177a31359757bd69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> My very bad trip </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> Trips </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
</nav>
";
        // line 44
        echo "<fiv class=\"container\">
  <h2> My trips  </h2>
  <div class=\"row flex\">
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trips"]) || array_key_exists("trips", $context) ? $context["trips"] : (function () { throw new RuntimeError('Variable "trips" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trip"]) {
            // line 48
            echo "        <div class=\"col-5\">  
            <div class=\"card\">
              <div class=\"card body\">
                 <h5 class=\"card-title\">
                 ";
            // line 53
            echo "                 <a href=#>   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "title", [], "any", false, false, false, 53), "html", null, true);
            echo " </a>
                 </h5>
                 <p class=\"card-text\"> 
                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "description", [], "any", false, false, false, 56), "html", null, true);
            echo "
                  </p>
                  <p class=\"card-text\"> 
                    Départ : ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "departure", [], "any", false, false, false, 59), "html", null, true);
            echo "
                  </p>

                    <p class=\"card-text\"> 
                    Destination : ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "destination", [], "any", false, false, false, 63), "html", null, true);
            echo "
                  </p>

                     <p class=\"card-text\"> 
                   Date de départ : ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "beginDate", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true);
            echo "
                  </p>

                      <p class=\"card-text\"> 
                   Date de retour:  ";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trip"], "endDate", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true);
            echo "
                  </p>
              </div>
            </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "  </div>
</div>
";
        // line 80
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
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
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
      <a href=";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo " class=\"btn btn-danger btn-rounded\">Sign up!</a>
    </li>

      <ul class=\"list-unstyled list-inline text-center py-2\">
    <li class=\"list-inline-item\">
      <h5 class=\"mb-1\">Sign in </h5>
    </li>
    <li class=\"list-inline-item\">
      <a href=";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo " class=\"btn btn-danger btn-rounded\">Sign in</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class=\"list-unstyled list-inline text-center\">
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-fb mx-1\">
        <i class=\"fab fa-facebook-f\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-tw mx-1\">
        <i class=\"fab fa-twitter\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-gplus mx-1\">
        <i class=\"fab fa-google-plus-g\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-li mx-1\">
        <i class=\"fab fa-linkedin-in\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-dribbble mx-1\">
        <i class=\"fab fa-dribbble\"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
    <a href=\"https://mdbootstrap.com/\"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
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
        return array (  301 => 201,  290 => 193,  175 => 80,  171 => 77,  159 => 71,  152 => 67,  145 => 63,  138 => 59,  132 => 56,  125 => 53,  119 => 48,  115 => 47,  110 => 44,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} HomePage {% endblock %}

{% block body %}
{# Menu haut #}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"#\"> My very bad trip </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\"> Trips </a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                Dropdown
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\" href=\"#\">Action</a>
                <a class=\"dropdown-item\" href=\"#\">Another action</a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
            </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
        </div>
</nav>
{# MENU BAS #}
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
              </div>
            </div>
        </div>
      {% endfor %}
  </div>
</div>
{# Footer #}
<!-- Footer -->
<footer class=\"page-footer font-small stylish-color-dark pt-4\">

  <!-- Footer Links -->
  <div class=\"container text-center text-md-left\">

    <!-- Grid row -->
    <div class=\"row\">

      <!-- Grid column -->
      <div class=\"col-md-4 mx-auto\">

        <!-- Content -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none\">

      <!-- Grid column -->
      <div class=\"col-md-2 mx-auto\">

        <!-- Links -->
        <h5 class=\"font-weight-bold text-uppercase mt-3 mb-4\">Links</h5>

        <ul class=\"list-unstyled\">
          <li>
            <a href=\"#!\">Link 1</a>
          </li>
          <li>
            <a href=\"#!\">Link 2</a>
          </li>
          <li>
            <a href=\"#!\">Link 3</a>
          </li>
          <li>
            <a href=\"#!\">Link 4</a>
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
      <a href={{path('app_register')}} class=\"btn btn-danger btn-rounded\">Sign up!</a>
    </li>

      <ul class=\"list-unstyled list-inline text-center py-2\">
    <li class=\"list-inline-item\">
      <h5 class=\"mb-1\">Sign in </h5>
    </li>
    <li class=\"list-inline-item\">
      <a href={{path('app_login')}} class=\"btn btn-danger btn-rounded\">Sign in</a>
    </li>
  </ul>
  <!-- Call to action -->

  <hr>

  <!-- Social buttons -->
  <ul class=\"list-unstyled list-inline text-center\">
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-fb mx-1\">
        <i class=\"fab fa-facebook-f\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-tw mx-1\">
        <i class=\"fab fa-twitter\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-gplus mx-1\">
        <i class=\"fab fa-google-plus-g\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-li mx-1\">
        <i class=\"fab fa-linkedin-in\"> </i>
      </a>
    </li>
    <li class=\"list-inline-item\">
      <a class=\"btn-floating btn-dribbble mx-1\">
        <i class=\"fab fa-dribbble\"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3\">© 2020 Copyright:
    <a href=\"https://mdbootstrap.com/\"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
{% endblock %}
", "home/index.html.twig", "/home/fullmetal/Bureau/CommunauteDeVoyages/app/templates/home/index.html.twig");
    }
}
