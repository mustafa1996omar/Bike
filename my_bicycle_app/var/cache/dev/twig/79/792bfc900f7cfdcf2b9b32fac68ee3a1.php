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
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
</head>
<body>
<h1>Bicycle</h1>
    <p>Color: ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 9, $this->source); })()), "getColor", [], "method", false, false, false, 9), "html", null, true);
        echo "</p>
    <p>Model: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 10, $this->source); })()), "getModel", [], "method", false, false, false, 10), "html", null, true);
        echo "</p>
    <p id=\"speed\">Current speed: <span></span></p>
    <p>Number of Gears: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 12, $this->source); })()), "getNumberOfGears", [], "method", false, false, false, 12), "html", null, true);
        echo "</p>
    <p>Weight: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bicycle"]) || array_key_exists("bicycle", $context) ? $context["bicycle"] : (function () { throw new RuntimeError('Variable "bicycle" does not exist.', 13, $this->source); })()), "getWeight", [], "method", false, false, false, 13), "html", null, true);
        echo "</p>

    <button id=\"accelerate\">Accelerate</button>
    <button id=\"brake\">Brake</button>

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
        return array (  63 => 13,  59 => 12,  54 => 10,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Bicycle Speed</title>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
</head>
<body>
<h1>Bicycle</h1>
    <p>Color: {{ bicycle.getColor() }}</p>
    <p>Model: {{ bicycle.getModel() }}</p>
    <p id=\"speed\">Current speed: <span></span></p>
    <p>Number of Gears: {{ bicycle.getNumberOfGears() }}</p>
    <p>Weight: {{ bicycle.getWeight() }}</p>

    <button id=\"accelerate\">Accelerate</button>
    <button id=\"brake\">Brake</button>

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
</html>", "bicycle/index.html.twig", "C:\\Users\\musta\\Documents\\Projects\\PHP\\my_bicycle_app\\templates\\bicycle\\index.html.twig");
    }
}
