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

/* mahardhi/template/common/home.twig */
class __TwigTemplate_0292d19a0500650cde2288b8d574a81aea4cdf4bd8b4208fc87a9c985a70d58a extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"common-home\">
\t";
        // line 3
        echo ($context["content_top"] ?? null);
        echo "
\t<div class=\"container\">
\t  <div class=\"row\">";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
\t    ";
        // line 6
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 7
            echo "\t    ";
            $context["class"] = "col-sm-6";
            // line 8
            echo "\t    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 9
            echo "\t    ";
            $context["class"] = "col-sm-9";
            // line 10
            echo "\t    ";
        } else {
            // line 11
            echo "\t    ";
            $context["class"] = "col-sm-12";
            // line 12
            echo "\t    ";
        }
        // line 13
        echo "\t    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
\t    ";
        // line 14
        echo ($context["column_right"] ?? null);
        echo "</div>
\t</div>
</div>
";
        // line 17
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  78 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/home.twig", "");
    }
}
