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

/* distinct/authentication/login.html.twig */
class __TwigTemplate_40fd3c3f234ab3d3e328fdd7e1ca448a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo " \">
       
        ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7)) {
            // line 8
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "lastname", [], "any", false, false, false, 9), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 12
        echo "
        <div class=\"topnav\">
            <label for=\"inputEmail\">Email</label>
            ";
        // line 16
        echo "
            <input type=\"email\" value=\"\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <div class=\"login-container\">
                <label for=\"inputPassword\">Password</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

                <input type=\"hidden\" name=\"_csrf_token\"
                       value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                >
            </div>
        </div>


        <form>
            <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
            </div>
            <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        </form>
        ";
        // line 55
        echo "
        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "distinct/authentication/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 55,  94 => 23,  85 => 16,  80 => 12,  72 => 9,  69 => 8,  67 => 7,  61 => 5,  59 => 4,  55 => 3,  48 => 1,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "distinct/authentication/login.html.twig", "/home/fullmetal/Documents/CommunauteDeVoyages/app/templates/distinct/authentication/login.html.twig");
    }
}
