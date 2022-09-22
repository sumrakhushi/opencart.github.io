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

/* mahardhi/template/product/quickview/quickviewcontainer.twig */
class __TwigTemplate_414f1b8bfb75ab558fc0bae22dc313c1ffd45150946c2e9f9e3672b394c945c2 extends \Twig\Template
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
        if (($context["quickview_status"] ?? null)) {
            // line 2
            echo "<!-- QuickView Wrapper -->\t
<div class=\"quickview-wrapper\"></div>
<!-- QuickView Wrapper -->
<!-- QuickView Loader -->
<div class=\"quickview-loader\">
\t<div class=\"quickview-loader-inner\">";
            // line 7
            echo ($context["text_loading"] ?? null);
            echo "</div>
</div>
<!-- QuickView Loader -->
<!-- QuickView Overlay -->
<div class=\"quickview-overlay\"></div>
<!-- QuickView Overlay -->

<!-- QuickView Overlay Click-->
<script type=\"text/javascript\">
    \$('.quickview-overlay').on('click',function () {
        quickView.closeButton();
    })
</script>
<!-- QuickView Overlay Click -->
";
        }
    }

    public function getTemplateName()
    {
        return "mahardhi/template/product/quickview/quickviewcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/product/quickview/quickviewcontainer.twig", "");
    }
}
