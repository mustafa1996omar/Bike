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

/* bicycle/index.html.twig */
class __TwigTemplate_d4655172dd1bc3f0d86e0c3a94df3a7f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bicycle/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <title>Bicycle Speed</title>
    
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</head>

<body>

    <div class=\"container mt-5\">

        <h1>Bicycle Speed</h1>

        <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Color: ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 21, $this->source); })()), "getColor", [], "method", false, false, false, 21), "html", null, true);
        echo "</p>
            <p>Model: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 22, $this->source); })()), "getModel", [], "method", false, false, false, 22), "html", null, true);
        echo "</p>
            <p>Weight: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 23, $this->source); })()), "getWeight", [], "method", false, false, false, 23), "html", null, true);
        echo "</p>
        </div>

        <div class=\"col-md-6\">
            <p id=\"speed\">Current Speed: <span>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 27, $this->source); })()), "getSpeed", [], "method", false, false, false, 27), "html", null, true);
        echo "</span></p>
            <p>Top Speed: ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 28, $this->source); })()), "getTopSpeed", [], "method", false, false, false, 28), "html", null, true);
        echo "</p>
            <p>Gears: ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 29, $this->source); })()), "getNumberOfGears", [], "method", false, false, false, 29), "html", null, true);
        echo "</p>
        </div>
        </div>

        <button id=\"accelerate\" class=\"btn btn-success mr-2\">Accelerate</button>
        <button id=\"brake\" class=\"btn btn-danger mr-2\">Brake</button>
        <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-primary\">Back to Home</a>
    </div>

    <script>
        \$(document).ready(function() {
            // Function to update speed
            function updateSpeed(action) {
                \$.ajax({
                    url: '/bicycle',   // Change this to your route
                    method: 'GET',
                    data: { action: action },
                    dataType: 'json',
                    success: function(response) {
                        // Update the speed on the page
                        \$('#speed span').text(response.speed);
                    }
                });
            }

            // Event handlers for the buttons
            \$('#accelerate').click(function() {
                updateSpeed('accelerate');
            });

            \$('#brake').click(function() {
                updateSpeed('brake');
            });
        });
    </script>

</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "bicycle/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  85 => 29,  81 => 28,  77 => 27,  70 => 23,  66 => 22,  62 => 21,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <title>Bicycle Speed</title>
    
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
</head>

<body>

    <div class=\"container mt-5\">

        <h1>Bicycle Speed</h1>

        <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Color: {{ bicycle.getColor() }}</p>
            <p>Model: {{ bicycle.getModel() }}</p>
            <p>Weight: {{ bicycle.getWeight() }}</p>
        </div>

        <div class=\"col-md-6\">
            <p id=\"speed\">Current Speed: <span>{{ bicycle.getSpeed() }}</span></p>
            <p>Top Speed: {{ bicycle.getTopSpeed() }}</p>
            <p>Gears: {{ bicycle.getNumberOfGears() }}</p>
        </div>
        </div>

        <button id=\"accelerate\" class=\"btn btn-success mr-2\">Accelerate</button>
        <button id=\"brake\" class=\"btn btn-danger mr-2\">Brake</button>
        <a href=\"{{ path('home') }}\" class=\"btn btn-primary\">Back to Home</a>
    </div>

    <script>
        \$(document).ready(function() {
            // Function to update speed
            function updateSpeed(action) {
                \$.ajax({
                    url: '/bicycle',   // Change this to your route
                    method: 'GET',
                    data: { action: action },
                    dataType: 'json',
                    success: function(response) {
                        // Update the speed on the page
                        \$('#speed span').text(response.speed);
                    }
                });
            }

            // Event handlers for the buttons
            \$('#accelerate').click(function() {
                updateSpeed('accelerate');
            });

            \$('#brake').click(function() {
                updateSpeed('brake');
            });
        });
    </script>

</body>

</html>", "bicycle/index.html.twig", "C:\\Users\\musta\\Documents\\Projects\\Bike\\my_bicycle_app\\templates\\bicycle\\index.html.twig");
    }
}
