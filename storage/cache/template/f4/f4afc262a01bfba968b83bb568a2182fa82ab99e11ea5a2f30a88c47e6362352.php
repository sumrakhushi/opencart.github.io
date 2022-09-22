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

/* mahardhi/template/extension/module/slideshow.twig */
class __TwigTemplate_43db5a1fe892dc4ffc20bbd2b3cd94a73fa77a8670150b79497ea3ba1408e79e extends \Twig\Template
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
        echo "<div class=\"slideshow\">
\t<div class=\"swiper-viewport\">
\t\t<div id=\"slideshow";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "\t\t\t\t\t<div class=\"swiper-slide text-center ";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
            echo "\">
\t\t\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t";
            } else {
                // line 10
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t";
            }
            // line 12
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"container pagination-inner clearfix\">
\t\t\t<div class=\"swiper-pagination slideshow";
        // line 17
        echo ($context["module"] ?? null);
        echo "\"></div>
\t\t</div>
\t\t<div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t\t<div class=\"swiper-button-next\"></div>
\t\t</div>
\t</div>
</div>

<script>

var swiper = new Swiper(\"#slideshow";
        // line 28
        echo ($context["module"] ?? null);
        echo "\", {
\tmode: 'horizontal',
\tslidesPerView: 1,
\tspaceBetween: 0,
\tloop: true,
\tpaginationClickable: true, 
\tautoplayDisableOnInteraction: true,
\teffect: \"fade\",
\tautoplay: {
\t    delay: 4000,
\t},
\tnavigation: {
      nextEl: \".swiper-button-next\",
      prevEl: \".swiper-button-prev\",
    },
    pagination: {
      \tel: \".swiper-pagination\",
      \tclickable: true,
     \trenderBullet: function (index, className) {
        \treturn '<span class=\"' + className + '\">' + (index + 1) + \"</span>\";
      \t},
    },
});

</script>
";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 28,  87 => 17,  82 => 14,  75 => 12,  67 => 10,  57 => 8,  55 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/slideshow.twig", "");
    }
}
