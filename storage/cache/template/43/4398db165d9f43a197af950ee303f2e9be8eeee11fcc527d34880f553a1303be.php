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

/* mahardhi/template/extension/module/mahardhi_blog.twig */
class __TwigTemplate_9831d1c27ce3724a4ef95cf4d39d9ae51912d8898eb42a3351d57b26716c74ce extends \Twig\Template
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
        echo "<div class=\"box mblog section\">
\t<div class=\"box-content\">
\t";
        // line 3
        if (($context["heading_title"] ?? null)) {
            // line 4
            echo "\t\t<div class=\"page-title section\"><h3>";
            echo ($context["heading_title"] ?? null);
            echo "</h3></div>
\t";
        }
        // line 6
        echo "\t";
        if (($context["html"] ?? null)) {
            // line 7
            echo "\t\t";
            echo ($context["html"] ?? null);
            echo "
\t";
        }
        // line 9
        echo "\t\t<div class=\"block_box row\">
\t\t";
        // line 10
        $context["articleForSlider"] = 1;
        // line 11
        echo "\t\t";
        $context["articleCount"] = twig_length_filter($this->env, ($context["articles"] ?? null));
        // line 12
        echo "\t\t\t<div id=\"blogcarousel\" class=\"blogs-block ";
        if ((($context["articleCount"] ?? null) > ($context["articleForSlider"] ?? null))) {
            echo " blog-carousel ";
        }
        echo " clearfix\" data-items=\"1\">
\t\t\t\t";
        // line 13
        if ((($context["articleCount"] ?? null) > ($context["articleForSlider"] ?? null))) {
            // line 14
            echo "\t\t\t\t\t";
            $context["class"] = " col-xs-12";
            // line 15
            echo "\t\t\t\t";
        } else {
            // line 16
            echo "\t\t\t\t\t";
            $context["class"] = " col-lg-4 col-md-4 col-sm-6 col-xs-12";
            // line 17
            echo "\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "\t\t\t\t<div  class=\"product-layout ";
            echo ($context["class"] ?? null);
            echo "\">
\t\t\t\t\t<div class=\"item clearfix\">
\t\t\t\t\t\t<div class=\"product-block blog-block transition\">
\t\t\t\t\t\t\t<div class=\"blog-info\">
\t\t\t\t\t\t\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 25);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 25);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 25);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 25);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"zoom-post\">
\t\t\t\t\t\t\t\t\t\t<a class=\"hover-zoom\" href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 27);
                echo "\" data-lightbox=\"example-set\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 27);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"hover-post\" href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 28);
                echo "\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t                <img src=\"image/catalog/blogs/no.jpg\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 32);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 32);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t        ";
            }
            // line 34
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"caption blog-description\">
\t\t\t\t\t\t\t\t";
            // line 37
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"link_info\">
\t\t\t\t\t\t\t\t\t";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 39)) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t<span class=\"block-date\">";
                // line 40
                echo twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 40);
                echo "</span>\t
\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<h4 class=\"blog-title\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 42);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 42);
            echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
            // line 47
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>


<script><!--
\$(document).ready(function() {\t
\tconst direc = \$('html').attr('dir');

\t\$('.blog-carousel').each(function () {
\t\tif (\$(this).closest('#column-left').length == 0 && \$(this).closest('#column-right').length == 0) {
\t\t\t\$(this).addClass('owl-carousel owl-theme');
\t\t\t\tconst items = \$(this).data('items') || 1;
\t\t\t\tconst sliderOptions = {
\t\t\t\t\tloop: false,
\t\t\t\t\tnav: true,
\t\t\t\t\tnavText: ['<i class=\"fa fa-angle-double-left\"></i>','<i class=\"fa fa-angle-double-right\"></i>'],
\t\t\t\t\tdots: false,
\t\t\t\t\titems: items,
\t\t\t\t\tresponsiveRefreshRate: 200,
\t\t\t\t\tresponsive: {
\t\t\t\t\t0: { items: 1 },
\t\t\t\t\t425: { items: 2 },
\t\t\t\t\t601: { items: 3 },\t\t\t\t
\t\t\t\t\t992: { items: items }
\t\t\t\t}
\t\t\t};
\t\t\tif (direc == 'rtl') sliderOptions['rtl'] = true;
\t\t\t\$(this).owlCarousel(sliderOptions);
\t\t}
\t});
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  161 => 47,  154 => 42,  149 => 40,  145 => 39,  141 => 37,  137 => 34,  129 => 32,  122 => 28,  116 => 27,  105 => 25,  102 => 24,  100 => 23,  92 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  73 => 13,  66 => 12,  63 => 11,  61 => 10,  58 => 9,  52 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_blog.twig", "");
    }
}
