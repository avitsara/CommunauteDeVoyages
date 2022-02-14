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

/* core/footer.html.twig */
class __TwigTemplate_580c13d77884383c14cea1de880edc0cb40f137c3f18618c47ad67bb3083581d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/footer.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 3
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
        return "core/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block footer %}
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
", "core/footer.html.twig", "/home/jary/Bureau/CommunauteDeVoyages/app/templates/core/footer.html.twig");
    }
}
