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

/* default/template/extension/payment/paytm.twig */
class __TwigTemplate_b90e1270080d984736993951ce4a63e23ca1e4bc03223fd37745f8ec9f27487b extends \Twig\Template
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
        echo "<form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"POST\" class=\"form-horizontal\" id=\"paytm_form_redirect\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paytm_fields"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 3
            echo "\t<input type=\"hidden\" name=\"";
            echo $context["k"];
            echo "\" value=\"";
            echo $context["v"];
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "\t<div class=\"buttons\">
\t\t<div class=\"pull-right\">
\t\t\t<input type=\"submit\" value=\"";
        // line 7
        echo ($context["button_confirm"] ?? null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" />
\t\t</div>
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/paytm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  57 => 5,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/paytm.twig", "");
    }
}
