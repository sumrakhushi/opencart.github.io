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

/* mahardhi/template/extension/module/mahardhi_feature_category.twig */
class __TwigTemplate_c0e78231c27f142809d8f0b475cf2e4d3fbc7334cf4db609692f0c8b4ac59a9d extends \Twig\Template
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
        echo "<div class=\"category-featured mt-100\">
\t<div class=\"container\">
\t\t<div class=\"box-heading\">
\t\t<div class=\"category-title\">
\t\t\t<h3 class=\"page-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t<div class=\"cat-sub-title\">";
        // line 6
        echo ($context["text_sub_title"] ?? null);
        echo "</div>
\t\t</div>
\t\t\t<div class=\"category-box\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"category-feature-list\">
\t\t\t\t\t\t";
        // line 11
        $context["categoryForSlider"] = 1;
        // line 12
        echo "\t\t\t\t\t\t";
        $context["categoryCount"] = twig_length_filter($this->env, ($context["categories"] ?? null));
        // line 13
        echo "\t\t\t\t\t\t<div id=\"category-carousel\" class=\"box-category ";
        if ((($context["categoryCount"] ?? null) > ($context["categoryForSlider"] ?? null))) {
            echo " category-carousel ";
        }
        echo " clearfix\" data-items=\"3\">\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 14
        $context["categoryCount"] = twig_length_filter($this->env, ($context["categories"] ?? null));
        // line 15
        echo "\t\t\t\t\t\t\t";
        if ((($context["categoryCount"] ?? null) > ($context["categoryForSlider"] ?? null))) {
            // line 16
            echo "\t\t\t\t\t\t\t";
            $context["class"] = " col-xs-12";
            // line 17
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t\t";
            $context["class"] = " col-lg-4  col-md-4  col-sm-4  col-xs-4";
            // line 19
            echo "\t\t\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "\t\t\t\t\t\t\t<div class=\"category-layout ";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"category-thumb\">
\t\t\t\t\t\t\t\t\t<h4 class=\"cat-title\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
            echo "\" class=\"category-name\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
            echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t<div class=\"images-hover image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 27);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 28);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t<div class=\"category-description\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"number-product\">";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["category"], "count", [], "any", false, false, false, 33);
            echo " ";
            echo ($context["text_cat_item"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t  \t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
 <script>
// set slider
const dirCategory = \$('html').attr('dir');

\$('.category-carousel').each(function () {
\tif (\$(this).closest('#column-left').length == 0 && \$(this).closest('#column-right').length == 0) {
\t\t\$(this).addClass('owl-carousel owl-theme');
\t\t\tconst items = \$(this).data('items') || 3;
\t\t\tconst sliderOptions = {
\t\t\t\tloop: false,
\t\t\t\trewind: true,
\t\t\t\tnav: true,
\t\t\t\tnavText: ['<i class=\"fa fa-angle-double-left\"></i> Prev','Next <i class=\"fa fa-angle-double-right\"></i>'],
\t\t\t\tdots: false,
\t\t\t\titems: items,
\t\t\t\tautoplay: false,
\t\t\t\tautoplayTimeout: 3000,
\t\t\t\tresponsiveRefreshRate: 200,
\t\t\t\tresponsive: {
\t\t\t\t0: { items: 1 },
\t\t\t\t320: { items: 2 },
\t\t\t\t541: { items: 2 },
\t\t\t\t992: { items: items }
\t\t\t}
\t\t};
\t\tif (dirCategory == 'rtl') sliderOptions['rtl'] = true;
\t\t\$(this).owlCarousel(sliderOptions);
\t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_feature_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  120 => 33,  108 => 28,  104 => 27,  96 => 24,  89 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  67 => 14,  60 => 13,  57 => 12,  55 => 11,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_feature_category.twig", "");
    }
}
