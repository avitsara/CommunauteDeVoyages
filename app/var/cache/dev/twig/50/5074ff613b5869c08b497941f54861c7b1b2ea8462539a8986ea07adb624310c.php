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

/* distinct/home/home.html.twig */
class __TwigTemplate_1e734aef641321c176ad4fd7539699813f096c1120c50721111568624038fe15 extends Template
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
            'menu' => [$this, 'block_menu'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "core/wrapper.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "distinct/home/home.html.twig"));

        $this->parent = $this->loadTemplate("core/wrapper.html.twig", "distinct/home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CMV | Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  ";
        $this->displayBlock('menu', $context, $blocks);
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 125
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
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

    </header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "    <footer class=\"small bg-light\">
        <div class=\"container py-3 py-sm-5\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Quick links</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">What's new</a></li>
                        <li><a href=\"#\">Featured Product</a></li>
                        <li><a href=\"#\">News letter</a></li>
                        <li><a href=\"#\">My account</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Information</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Membership</a></li>
                        <li><a href=\"#\">Shipping &amp; returns</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li><a href=\"#\">Sitemap</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Follow us</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">Facebook</a></li>
                        <li><a href=\"#\">Twitter</a></li>
                        <li><a href=\"#\">Instagram</a></li>
                        <li><a href=\"#\">LinkedIn</a></li>
                        <li><a href=\"#\">YouTube</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <address>
                        <strong>BIET Jhansi</strong><br />
                        Panchwati Hostel<br />
                        Jhansi, Uttar Pradesh<br />
                        <abbr title=\"Telephone\">T:</abbr
                        ><a href=\"tel:+919876543210\">(987) 654-3210</a><br />
                        <abbr title=\"Mail\">M:</abbr
                        ><a href=\"mailto:info@domain.com\">info@domain.com</a>
                    </address>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-9\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\">&copy; 2017 Web Company, Inc.</li>
                        <li class=\"list-inline-item\">All rights reserved.</li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\">Terms of use and privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"dropdown dropup p-0\">
                        <button
                                type=\"button\"
                                class=\"btn btn-secondary btn-sm dropdown-toggle\"
                                id=\"dropdownMenuButton\"
                                data-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\"
                        >
                            Visit other sites:
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a href=\"#\" class=\"dropdown-item\">www.otherwebsite.com</a>
                            <a href=\"#\" class=\"dropdown-item\">www.newwebsite.com</a>
                            <a href=\"#\" class=\"dropdown-item\">www.oldwebsite.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "distinct/home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  142 => 46,  97 => 7,  90 => 6,  80 => 125,  78 => 46,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'core/wrapper.html.twig' %}

{% block title %}CMV | Home{% endblock %}

{% block body %}
  {% block menu %}
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Link</a>
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

    </header>
{% endblock %}
{## ###}{% block footer %}
    <footer class=\"small bg-light\">
        <div class=\"container py-3 py-sm-5\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Quick links</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">What's new</a></li>
                        <li><a href=\"#\">Featured Product</a></li>
                        <li><a href=\"#\">News letter</a></li>
                        <li><a href=\"#\">My account</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Information</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Membership</a></li>
                        <li><a href=\"#\">Shipping &amp; returns</a></li>
                        <li><a href=\"#\">Contact</a></li>
                        <li><a href=\"#\">Sitemap</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <h6>Follow us</h6>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\">Facebook</a></li>
                        <li><a href=\"#\">Twitter</a></li>
                        <li><a href=\"#\">Instagram</a></li>
                        <li><a href=\"#\">LinkedIn</a></li>
                        <li><a href=\"#\">YouTube</a></li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <address>
                        <strong>BIET Jhansi</strong><br />
                        Panchwati Hostel<br />
                        Jhansi, Uttar Pradesh<br />
                        <abbr title=\"Telephone\">T:</abbr
                        ><a href=\"tel:+919876543210\">(987) 654-3210</a><br />
                        <abbr title=\"Mail\">M:</abbr
                        ><a href=\"mailto:info@domain.com\">info@domain.com</a>
                    </address>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-9\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\">&copy; 2017 Web Company, Inc.</li>
                        <li class=\"list-inline-item\">All rights reserved.</li>
                        <li class=\"list-inline-item\">
                            <a href=\"#\">Terms of use and privacy policy</a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3\">
                    <div class=\"dropdown dropup p-0\">
                        <button
                                type=\"button\"
                                class=\"btn btn-secondary btn-sm dropdown-toggle\"
                                id=\"dropdownMenuButton\"
                                data-toggle=\"dropdown\"
                                aria-haspopup=\"true\"
                                aria-expanded=\"false\"
                        >
                            Visit other sites:
                        </button>
                        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                            <a href=\"#\" class=\"dropdown-item\">www.otherwebsite.com</a>
                            <a href=\"#\" class=\"dropdown-item\">www.newwebsite.com</a>
                            <a href=\"#\" class=\"dropdown-item\">www.oldwebsite.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
{% endblock %}



{% endblock %}
", "distinct/home/home.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/distinct/home/home.html.twig");
    }
}
