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

/* mahardhi/template/common/header.twig */
class __TwigTemplate_b52942466ba33db44e70d9bc016bdd8c4b6d414afa91ee4afde46e19644ec0bb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 17
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 20
        echo "\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\"></script>
\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\"></script>
\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
\t
\t";
        // line 27
        echo "\t<script src=\"catalog/view/javascript/mahardhi/jquery.elevateZoom.min.js\"></script>
\t<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\"></script>
\t<script src=\"catalog/view/javascript/mahardhi/owl.carousel.min.js\"></script>
\t<script type=\"text/javascript\" src=\"catalog/view/javascript/mahardhi/quickview.js\"></script>\t
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/mahardhi-font.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/animate.min.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/owl.carousel.min.css\" rel=\"stylesheet\">
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/owl.theme.default.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\">
\t";
        // line 37
        echo "
\t<script type=\"text/javascript\" src=\"catalog/view/javascript/mahardhi/slick.js\"></script>\t
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/slick.css\" rel=\"stylesheet\">

\t";
        // line 41
        if (($context["advanceSearch"] ?? null)) {
            // line 42
            echo "\t  <script src=\"catalog/view/javascript/mahardhi/mahardhi_search.js\"></script>
\t";
        }
        // line 44
        echo "\t";
        echo ($context["inline_style"] ?? null);
        echo "
\t<link href=\"catalog/view/theme/mahardhi/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 47
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 47);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 47);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 47);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t";
        // line 50
        echo "\t";
        if ((($context["direction"] ?? null) == "rtl")) {
            // line 51
            echo "\t\t<link href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/rtl.css\" rel=\"stylesheet\">
\t";
        }
        // line 53
        echo "\t";
        // line 54
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 55
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t<script src=\"catalog/view/javascript/common.js\"></script>
\t";
        // line 59
        echo "\t<script src=\"catalog/view/javascript/mahardhi/jquery-ui.min.js\"></script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"catalog/view/theme/mahardhi/stylesheet/mahardhi/jquery-ui.min.css\">
\t<script src=\"catalog/view/javascript/mahardhi/custom.js\"></script>\t
\t";
        // line 63
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 64
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 64);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 64);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 67
            echo "\t\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</head>
<body class=\"";
        // line 70
        echo ($context["class"] ?? null);
        echo "\">
\t<div class=\"loader\"></div>
\t<div class=\"header-main\">
\t\t<header>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header-top\">
\t\t\t\t\t\t<div class=\"header-left col-lg-4 hidden-xs hidden-sm\">\t
\t\t\t\t\t\t\t<!-- start menu -->\t\t\t
\t\t\t\t\t\t\t";
        // line 79
        echo ($context["menu"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"header-center col-lg-4\">
\t\t\t\t\t\t\t<!-- start logo -->
\t\t\t\t\t        <div id=\"logo\">
\t\t\t\t\t\t\t\t";
        // line 85
        if (($context["logo"] ?? null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"header-right header-links col-lg-4\">\t
\t\t\t\t\t\t\t<!-- start search -->
\t\t\t\t\t\t\t<div class=\"btn_search\">
\t\t\t\t\t\t\t\t<a class=\"search-btn\">
\t\t\t\t\t\t\t        <i class=\"search-icon icon-search\"></i>
\t\t\t\t\t\t\t    </a>\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- start account -->\t
\t\t\t\t\t\t\t<div id=\"header_ac\" class=\"dropdown\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t<span class=\"hidden\">";
        // line 104
        echo ($context["text_account"] ?? null);
        echo "</span><i class=\"icon-user\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right account-link-toggle\">
\t\t\t\t\t\t\t\t\t";
        // line 107
        if (($context["logged"] ?? null)) {
            // line 108
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 109
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 110
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 111
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 112
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 115
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t
\t\t\t\t\t\t\t\t\t<li> <a href=\"";
        // line 117
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t        <li class=\"language\">";
        // line 118
        echo ($context["language"] ?? null);
        echo "</li>    
\t\t\t        \t\t\t\t<li class=\"currency\">";
        // line 119
        echo ($context["currency"] ?? null);
        echo "</li>\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- start cart -->\t\t\t
\t\t\t\t\t\t\t<div class=\"header_cart\">";
        // line 124
        echo ($context["cart"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"header-search\">
\t\t\t\t";
        // line 130
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t<i class=\"serach-close icon-close\"></i>
\t\t\t</div>
\t\t</header>
\t</div>

<script><!--
\t\$(document).ready(function(){
\t\tvar headerfixed = ";
        // line 138
        echo ($context["header"] ?? null);
        echo ";
\t\tif (headerfixed == 1) {
\t\t\t\$(window).scroll(function () {
\t\t\t\tif (\$(window).width() > 991) {
\t\t\t\t\tif (\$(this).scrollTop() > 110) {
\t\t\t\t\t\t\$('header').addClass('header-fixed');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\$('header').removeClass('header-fixed');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse{
\t\t\t\t\t\$('header').removeClass('header-fixed');
\t\t\t\t}
\t\t\t});
\t\t}
\t\telse{\t\t
\t\t\t\$('header').removeClass('header-fixed');
\t\t}
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 138,  360 => 130,  351 => 124,  343 => 119,  339 => 118,  331 => 117,  328 => 116,  321 => 115,  314 => 114,  307 => 112,  301 => 111,  295 => 110,  289 => 109,  282 => 108,  280 => 107,  274 => 104,  268 => 103,  253 => 90,  245 => 88,  233 => 86,  231 => 85,  222 => 79,  210 => 70,  207 => 69,  198 => 67,  193 => 66,  182 => 64,  177 => 63,  172 => 59,  169 => 57,  160 => 55,  155 => 54,  153 => 53,  149 => 51,  146 => 50,  144 => 49,  131 => 47,  127 => 46,  121 => 44,  117 => 42,  115 => 41,  109 => 37,  98 => 27,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/header.twig", "");
    }
}
