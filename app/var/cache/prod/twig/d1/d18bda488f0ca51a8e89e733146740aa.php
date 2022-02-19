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

/* registration/registerCopie.html.twig */
class __TwigTemplate_388de072753094e31ba5bb0e425a972a extends Template
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
        return "security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("security/base.html.twig", "registration/registerCopie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Register
";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
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
        echo "   <form>
    <div class=\"form-group\">
           <label for=\"lastname\"> Lastname :  </label>
           <input type=\"text\"  placeholder=\"Lastname\" class=\"form-control\" id=\"lastname\" name=\"registration_form[lastname]\">
    </div>
    <div class=\"form-group\">
           <label for=\"firstname\"> Firstname :  </label>
           <input type=\"text\"  placeholder=\"Firstname\" class=\"form-control\" id=\"firstname\" name=\"registration_form[firstname]\">
    </div>
   <div class=\"form-group\">
            <label for=\"email\">Email :</label>
            <input type=\"email\"  placeholder=\"Enter email\"class=\"form-control\" id=\"email\" name=\"registration_form[email]\">
    </div>
    <div class=\"form-group\">
            <label for=\"pwd\">Password:</label>
            <input type=\"password\"  placeholder=\"Enter password\" class=\"form-control\" id=\"pwd\" name=\"regsitration_form[plainPassword]\">
    </div>

    <div class=\"form-group\">
        <label for=\"pwd\"> Date of Birth :</label>
        <input type=\"date\" class=\"form-control\" id=\"date_of_birth\" name=\"regsitration_form[date_of_birth]\">

    </div>

     <div class=\"form-group\">
        <select class=\"form-select\" aria-label=\"Default select example\">
          <option selected> Sélectionner votre sexe  </option>
          <option value=\"Homme\">  Homme </option>
          <option value=\"Femme\">  Femme </option>
        </select>

    </div>
    <button type=\"submit\"  class=\"btn btn-primary\">Register</button>

    </form>
";
        // line 80
        echo "
  ";
        // line 94
        echo "
";
        // line 96
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
      <a href=\"#!\" class=\"btn btn-danger btn-rounded\">Sign up!</a>
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
    }

    public function getTemplateName()
    {
        return "registration/registerCopie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 96,  137 => 94,  134 => 80,  97 => 44,  60 => 8,  56 => 6,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/registerCopie.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/registration/registerCopie.html.twig");
    }
}
