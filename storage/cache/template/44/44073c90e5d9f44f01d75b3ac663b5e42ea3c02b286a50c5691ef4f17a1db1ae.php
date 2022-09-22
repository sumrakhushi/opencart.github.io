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

/* mahardhi/template/common/currency.twig */
class __TwigTemplate_8e23a4b26273c71ffee336ae4e8d153e1e995a002588a58bfa901b63634f2ab2 extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "\t<div class=\"currency-box\">
\t\t<form action=\"";
            // line 3
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t\t\t";
            // line 5
            echo "\t\t\t\t<button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t";
            // line 7
            echo "\t\t            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 8
                echo "\t\t\t            ";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 8) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)))) {
                    // line 9
                    echo "\t\t\t            \t<span>";
                    echo ($context["text_currency"] ?? null);
                    echo "</span>
\t\t\t            ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 10
$context["currency"], "symbol_right", [], "any", false, false, false, 10) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 10) == ($context["code"] ?? null)))) {
                    // line 11
                    echo "\t\t\t            \t<span>";
                    echo ($context["text_currency"] ?? null);
                    echo "</span>
\t\t\t            ";
                }
                // line 13
                echo "\t\t            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t            
\t\t            ";
            // line 15
            echo "       \t\t\t</button>
\t\t\t\t<ul class=\"currency-dropdown curr\">
\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 18
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 18)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 20
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 20);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 20);
                    echo "</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 24);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 24);
                    echo "</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</ul>
\t\t\t";
            // line 30
            echo "\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 31
            echo ($context["redirect"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
";
        }
        // line 34
        echo " ";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  127 => 31,  124 => 30,  121 => 28,  115 => 27,  105 => 24,  102 => 23,  92 => 20,  89 => 19,  86 => 18,  82 => 17,  78 => 15,  70 => 13,  64 => 11,  62 => 10,  57 => 9,  54 => 8,  49 => 7,  46 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/currency.twig", "");
    }
}
