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

/* mahardhi/template/extension/module/mahardhi_product_tab.twig */
class __TwigTemplate_8b569d03e6b836c388f43a83930fdf6160a7fdf8a50482559ea2cadfcaac036e extends \Twig\Template
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
        echo "<div class=\"product-tab-block mt-100 box\">
\t<div class=\"col-center\">
\t\t<div class=\"main-tab\">
\t\t\t<div class=\"product-tabs box-content clearfix\">
\t\t\t\t<div class=\"page-title toggled\">
\t\t\t\t\t<h3>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h3>
\t\t\t\t\t<div id=\"tabs\" class=\"mahardhi-tabs section\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t";
        // line 9
        if (($context["featured_products"] ?? null)) {
            // line 10
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-featured\" data-toggle=\"tab\" class=\"selected\"><span>";
            // line 11
            echo ($context["tab_featured"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t\t\t";
        if (($context["special_products"] ?? null)) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-special\" data-toggle=\"tab\"><span>";
            // line 16
            echo ($context["tab_special"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t\t\t\t\t\t\t";
        if (($context["bestseller_products"] ?? null)) {
            // line 20
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-bestseller\" data-toggle=\"tab\"><span>";
            // line 21
            echo ($context["tab_bestseller"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t\t\t\t";
        if (($context["latest_products"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#tab-latest\" data-toggle=\"tab\"><span>";
            // line 26
            echo ($context["tab_latest"] ?? null);
            echo "</span></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"all-content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 35
        $context["productForSlider"] = 1;
        // line 36
        echo "\t\t\t\t\t\t<div class=\"tab-content block_box\">
\t\t\t\t\t\t\t";
        // line 37
        if (($context["featured_products"] ?? null)) {
            // line 38
            echo "\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 39
            echo "\t\t\t\t\t\t\t\t";
            $context["productCount_f"] = twig_length_filter($this->env, ($context["featured_products"] ?? null));
            // line 40
            echo "\t\t\t\t\t\t\t\t<div id=\"tab-featured\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div id=\"featuredTabCarousel\" class=\"box-product ";
            // line 41
            if ((($context["productCount_f"] ?? null) > ($context["productForSlider"] ?? null))) {
                echo " product-carousel ";
            }
            echo " clearfix\" data-items=\"4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 42
            if ((($context["productCount_f"] ?? null) > ($context["productForSlider"] ?? null))) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = "col-xs-12";
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = " col-lg-3 col-md-4 col-sm-4 col-xs-4";
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["featured_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["productCount_f"] ?? null) >= 8)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 51
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class='single-column'>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 58);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-img\" src=\"";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 60);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 63);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 63);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 63);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 65)) {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sale-text\"><span class=\"section-sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 66);
                    echo "%</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 69
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 69);
                echo "');\"><i class=\"icon-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"quickview-button\" title=\"";
                // line 70
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"quickView.ajaxView('?route=product/quickview&product_id=";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 70);
                echo "');\"><i class=\"icon-eye\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 71
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                echo "');\"><i class=\"icon-change\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart-btn\" data-toggle=\"tooltip\" title=\"";
                // line 72
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 72);
                echo "')\"><i class=\"icon-shopping-cart-1\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart\" title=\"";
                // line 74
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 74);
                echo "')\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb-description clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 81
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 81) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-title\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 91);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 91);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92)) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 94
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 94)) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 97);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 97);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 105
                if ((($context["productCount_f"] ?? null) >= 8)) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($context["productCount_f"] ?? null) >= 8)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((0 == ($context["productCount_f"] ?? null) % 2)) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo " 
\t\t\t\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 122
        echo "
\t\t\t\t\t\t\t";
        // line 123
        if (($context["special_products"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 125
            echo "\t\t\t\t\t\t\t\t";
            $context["productCount_s"] = twig_length_filter($this->env, ($context["special_products"] ?? null));
            // line 126
            echo "\t\t\t\t\t\t\t\t<div id=\"tab-special\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div id=\"specialTabCarousel\" class=\"box-product ";
            // line 127
            if ((($context["productCount_s"] ?? null) > ($context["productForSlider"] ?? null))) {
                echo " product-carousel ";
            }
            echo " clearfix\" data-items=\"4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 128
            if ((($context["productCount_s"] ?? null) > ($context["productForSlider"] ?? null))) {
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = "col-xs-12";
                // line 130
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = " col-lg-3 col-md-4 col-sm-4 col-xs-4";
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 133
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["special_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["productCount_s"] ?? null) >= 8)) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 137
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class='single-column'>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 143)) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 144);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 145);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-img\" src=\"";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 146);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 149
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 149);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 149);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 149);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 151)) {
                    // line 152
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sale-text\"><span class=\"section-sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 152);
                    echo "%</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 155
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 155);
                echo "');\"><i class=\"icon-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"quickview-button\" title=\"";
                // line 156
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"quickView.ajaxView('?route=product/quickview&product_id=";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 156);
                echo "');\"><i class=\"icon-eye\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 157
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 157);
                echo "');\"><i class=\"icon-change\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart-btn\" data-toggle=\"tooltip\" title=\"";
                // line 158
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 158);
                echo "')\"><i class=\"icon-shopping-cart-1\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart\" title=\"";
                // line 160
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                echo "')\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb-description clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 164
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 164)) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 167) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 168
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-title\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 177);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 177);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 178
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 178)) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 180
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 180)) {
                        // line 181
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 181);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 183
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 183);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 183);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 191
                if ((($context["productCount_s"] ?? null) >= 8)) {
                    // line 192
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 193
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 195
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 197
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($context["productCount_s"] ?? null) >= 8)) {
                // line 200
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((0 == ($context["productCount_s"] ?? null) % 2)) {
                    // line 201
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 202
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo " 
\t\t\t\t\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 208
        echo "
\t\t\t\t\t\t\t";
        // line 209
        if (($context["bestseller_products"] ?? null)) {
            // line 210
            echo "\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 211
            echo "\t\t\t\t\t\t\t\t";
            $context["productCount_b"] = twig_length_filter($this->env, ($context["bestseller_products"] ?? null));
            // line 212
            echo "\t\t\t\t\t\t\t\t<div id=\"tab-bestseller\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div id=\"bestsellerTabCarousel\" class=\"box-product ";
            // line 213
            if ((($context["productCount_b"] ?? null) > ($context["productForSlider"] ?? null))) {
                echo " product-carousel ";
            }
            echo " clearfix\" data-items=\"4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 214
            if ((($context["productCount_b"] ?? null) > ($context["productForSlider"] ?? null))) {
                // line 215
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = "col-xs-12";
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 217
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = " col-lg-3 col-md-4 col-sm-4 col-xs-4";
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bestseller_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["productCount_b"] ?? null) >= 8)) {
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 222
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 223
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class='single-column'>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 229
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 230);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 231
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 231);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 231);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 231);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-img\" src=\"";
                    // line 232
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 232);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 232);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 232);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 235);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 235);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 235);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 235);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 237)) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sale-text\"><span class=\"section-sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 238);
                    echo "%</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 241
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 241);
                echo "');\"><i class=\"icon-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"quickview-button\" title=\"";
                // line 242
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"quickView.ajaxView('?route=product/quickview&product_id=";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 242);
                echo "');\"><i class=\"icon-eye\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 243
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 243);
                echo "');\"><i class=\"icon-change\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart-btn\" data-toggle=\"tooltip\" title=\"";
                // line 244
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 244);
                echo "')\"><i class=\"icon-shopping-cart-1\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart\" title=\"";
                // line 246
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 246);
                echo "')\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb-description clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 250
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 250)) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 252
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 253
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 253) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 254
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 258
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 259
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-title\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 263);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 263);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 264
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 264)) {
                    // line 265
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 266
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 266)) {
                        // line 267
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 267);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 269
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 269);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 269);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 271
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 273
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 277
                if ((($context["productCount_b"] ?? null) >= 8)) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 279
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 281
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 282
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 283
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 285
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($context["productCount_b"] ?? null) >= 8)) {
                // line 286
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((0 == ($context["productCount_b"] ?? null) % 2)) {
                    // line 287
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 288
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 289
                echo " 
\t\t\t\t\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 294
        echo "
\t\t\t\t\t\t\t";
        // line 295
        if (($context["latest_products"] ?? null)) {
            // line 296
            echo "\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 297
            echo "\t\t\t\t\t\t\t\t";
            $context["productCount_l"] = twig_length_filter($this->env, ($context["latest_products"] ?? null));
            // line 298
            echo "\t\t\t\t\t\t\t\t<div id=\"tab-latest\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div id=\"latestTabCarousel\" class=\"box-product ";
            // line 299
            if ((($context["productCount_l"] ?? null) > ($context["productForSlider"] ?? null))) {
                echo " product-carousel ";
            }
            echo " clearfix\" data-items=\"4\">
\t\t\t\t\t\t\t\t\t\t";
            // line 300
            if ((($context["productCount_l"] ?? null) > ($context["productForSlider"] ?? null))) {
                // line 301
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = "col-xs-12";
                // line 302
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["class"] = " col-lg-3 col-md-4 col-sm-4 col-xs-4";
                // line 304
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latest_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 306
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((($context["productCount_l"] ?? null) >= 8)) {
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 308
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 309
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class='single-column'>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 311
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-layout ";
                echo ($context["class"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 315
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 315)) {
                    // line 316
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 316);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 317
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 317);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 317);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 317);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive hover-img\" src=\"";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb_swap", [], "any", false, false, false, 318);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 321
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 321);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 321);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 321);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 321);
                    echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 323
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 323)) {
                    // line 324
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sale-text\"><span class=\"section-sale\">-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "percent", [], "any", false, false, false, 324);
                    echo "%</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"wishlist\" data-toggle=\"tooltip\" title=\"";
                // line 327
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 327);
                echo "');\"><i class=\"icon-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" class=\"quickview-button\" title=\"";
                // line 328
                echo ($context["button_quickview"] ?? null);
                echo "\" onclick=\"quickView.ajaxView('?route=product/quickview&product_id=";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 328);
                echo "');\"><i class=\"icon-eye\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"compare\" data-toggle=\"tooltip\" title=\"";
                // line 329
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 329);
                echo "');\"><i class=\"icon-change\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart-btn\" data-toggle=\"tooltip\" title=\"";
                // line 330
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 330);
                echo "')\"><i class=\"icon-shopping-cart-1\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"addcart\" title=\"";
                // line 332
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 332);
                echo "')\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb-description clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 336
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 336)) {
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 338
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 339
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 339) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 340
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 341
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 343
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 344
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 345
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 349
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"product-title\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 349);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 349);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 350
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 350)) {
                    // line 351
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 352
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 352)) {
                        // line 353
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 353);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 355
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 355);
                        echo "</span><span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 355);
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 359
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 363
                if ((($context["productCount_l"] ?? null) >= 8)) {
                    // line 364
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((0 == ($context["count"] ?? null) % 2)) {
                        // line 365
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 368
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 369
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 370
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["count"] = 1;
            // line 371
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((($context["productCount_l"] ?? null) >= 8)) {
                // line 372
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((0 == ($context["productCount_l"] ?? null) % 2)) {
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 374
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 375
                echo " 
\t\t\t\t\t\t\t\t\t";
            }
            // line 377
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 380
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script type=\"text/javascript\">
\$('#tabs a').tabs();
</script>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_product_tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1207 => 380,  1202 => 377,  1198 => 375,  1194 => 374,  1191 => 373,  1188 => 372,  1185 => 371,  1182 => 370,  1176 => 369,  1173 => 368,  1170 => 367,  1166 => 365,  1163 => 364,  1161 => 363,  1155 => 359,  1151 => 357,  1143 => 355,  1137 => 353,  1135 => 352,  1132 => 351,  1130 => 350,  1123 => 349,  1119 => 347,  1112 => 345,  1108 => 344,  1105 => 343,  1101 => 341,  1095 => 340,  1088 => 339,  1084 => 338,  1081 => 337,  1079 => 336,  1068 => 332,  1061 => 330,  1055 => 329,  1049 => 328,  1043 => 327,  1040 => 326,  1034 => 324,  1031 => 323,  1019 => 321,  1009 => 318,  1001 => 317,  996 => 316,  994 => 315,  987 => 312,  984 => 311,  980 => 309,  977 => 308,  974 => 307,  971 => 306,  966 => 305,  963 => 304,  960 => 303,  957 => 302,  954 => 301,  952 => 300,  946 => 299,  943 => 298,  940 => 297,  937 => 296,  935 => 295,  932 => 294,  927 => 291,  923 => 289,  919 => 288,  916 => 287,  913 => 286,  910 => 285,  907 => 284,  901 => 283,  898 => 282,  895 => 281,  891 => 279,  888 => 278,  886 => 277,  880 => 273,  876 => 271,  868 => 269,  862 => 267,  860 => 266,  857 => 265,  855 => 264,  848 => 263,  844 => 261,  837 => 259,  833 => 258,  830 => 257,  826 => 255,  820 => 254,  813 => 253,  809 => 252,  806 => 251,  804 => 250,  793 => 246,  786 => 244,  780 => 243,  774 => 242,  768 => 241,  765 => 240,  759 => 238,  756 => 237,  744 => 235,  734 => 232,  726 => 231,  721 => 230,  719 => 229,  712 => 226,  709 => 225,  705 => 223,  702 => 222,  699 => 221,  696 => 220,  691 => 219,  688 => 218,  685 => 217,  682 => 216,  679 => 215,  677 => 214,  671 => 213,  668 => 212,  665 => 211,  662 => 210,  660 => 209,  657 => 208,  652 => 205,  648 => 203,  644 => 202,  641 => 201,  638 => 200,  635 => 199,  632 => 198,  626 => 197,  623 => 196,  620 => 195,  616 => 193,  613 => 192,  611 => 191,  605 => 187,  601 => 185,  593 => 183,  587 => 181,  585 => 180,  582 => 179,  580 => 178,  573 => 177,  569 => 175,  562 => 173,  558 => 172,  555 => 171,  551 => 169,  545 => 168,  538 => 167,  534 => 166,  531 => 165,  529 => 164,  518 => 160,  511 => 158,  505 => 157,  499 => 156,  493 => 155,  490 => 154,  484 => 152,  481 => 151,  469 => 149,  459 => 146,  451 => 145,  446 => 144,  444 => 143,  437 => 140,  434 => 139,  430 => 137,  427 => 136,  424 => 135,  421 => 134,  416 => 133,  413 => 132,  410 => 131,  407 => 130,  404 => 129,  402 => 128,  396 => 127,  393 => 126,  390 => 125,  387 => 124,  385 => 123,  382 => 122,  377 => 119,  373 => 117,  369 => 116,  366 => 115,  363 => 114,  360 => 113,  357 => 112,  351 => 111,  348 => 110,  345 => 109,  341 => 107,  338 => 106,  336 => 105,  330 => 101,  326 => 99,  318 => 97,  312 => 95,  310 => 94,  307 => 93,  305 => 92,  298 => 91,  294 => 89,  287 => 87,  283 => 86,  280 => 85,  276 => 83,  270 => 82,  263 => 81,  259 => 80,  256 => 79,  254 => 78,  243 => 74,  236 => 72,  230 => 71,  224 => 70,  218 => 69,  215 => 68,  209 => 66,  206 => 65,  194 => 63,  184 => 60,  176 => 59,  171 => 58,  169 => 57,  162 => 54,  159 => 53,  155 => 51,  152 => 50,  149 => 49,  146 => 48,  141 => 47,  138 => 46,  135 => 45,  132 => 44,  129 => 43,  127 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  110 => 37,  107 => 36,  105 => 35,  97 => 29,  91 => 26,  88 => 25,  85 => 24,  79 => 21,  76 => 20,  73 => 19,  67 => 16,  64 => 15,  61 => 14,  55 => 11,  52 => 10,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_product_tab.twig", "");
    }
}
