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

/* mahardhi/template/extension/module/account.twig */
class __TwigTemplate_f32ca2c83e186dd279f43ecf0370fbe373adf15a5fe427663be22396ebb3d484 extends \Twig\Template
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
        echo "<div class=\"account-content\">
\t<div class=\"box-content\">
\t\t<div class=\"list-group\">
\t\t\t<h3 class=\"toggled\">";
        // line 4
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t";
        // line 6
        if ( !($context["logged"] ?? null)) {
            // line 7
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["login"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 8
            echo ($context["register"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 9
            echo ($context["forgotten"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_forgotten"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t<li><a href=\"";
        echo ($context["account"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t";
        // line 12
        if (($context["logged"] ?? null)) {
            // line 13
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["edit"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_edit"] ?? null);
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 14
            echo ($context["password"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_password"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t<li><a href=\"";
        echo ($context["address"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_address"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 17
        echo ($context["wishlist"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 18
        echo ($context["order"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 19
        echo ($context["download"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_download"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 20
        echo ($context["recurring"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_recurring"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 21
        echo ($context["reward"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_reward"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 22
        echo ($context["return"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 23
        echo ($context["transaction"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_transaction"] ?? null);
        echo "</a></li>
\t\t\t\t<li><a href=\"";
        // line 24
        echo ($context["newsletter"] ?? null);
        echo "\" class=\"list-group-item\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t";
        // line 25
        if (($context["logged"] ?? null)) {
            // line 26
            echo "\t\t\t\t\t<li><a href=\"";
            echo ($context["logout"] ?? null);
            echo "\" class=\"list-group-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 28,  149 => 26,  147 => 25,  141 => 24,  135 => 23,  129 => 22,  123 => 21,  117 => 20,  111 => 19,  105 => 18,  99 => 17,  92 => 16,  85 => 14,  78 => 13,  76 => 12,  69 => 11,  62 => 9,  56 => 8,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/account.twig", "");
    }
}
