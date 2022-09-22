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

/* mahardhi/template/common/menu.twig */
class __TwigTemplate_1ff86db1812fca9132073ff9479c6bce4ff2ef797284e5cd256433e51d4549fd extends \Twig\Template
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
        echo "<nav id=\"menu\" class=\"navbar navbar_menu\">
\t<div class=\"navbar-header\">
\t\t<button type=\"button\" class=\"btn btn-navbar navbar-toggle\" id=\"btnMenuBar\"><span class=\"addcart-icon\"></span></button>
\t</div>
\t<div id=\"topCategoryList\" class=\"main-menu menu-navbar clearfix\" data-more=";
        // line 5
        echo ($context["text_more"] ?? null);
        echo "> 
\t\t<div class=\"menu-close hidden-lg hidden-md\"><span id=\"category\" class=\"\">";
        // line 6
        echo ($context["text_menu"] ?? null);
        echo "</span><i class=\"icon-close\"></i></div> 
\t\t<ul class=\"nav navbar-nav\">
\t\t\t<li class=\"menulist home\"><a id=\"home\" href=\"";
        // line 8
        echo ($context["home"] ?? null);
        echo "\" >";
        echo ($context["text_home"] ?? null);
        echo "</a></li>
\t\t\t";
        // line 9
        if (($context["categories"] ?? null)) {
            // line 10
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 11
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "\t\t\t\t\t\t<li class=\"dropdown menulist\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 13);
                    echo "\" class=\"dropdown-toggle\" aria-expanded=\"false\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13);
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 14
                    if ((twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 14) > 1)) {
                        // line 15
                        echo "\t\t\t\t\t\t\t\t<div class=\"dropdown-menu navcol-menu item-column column-";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 15);
                        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 17
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 17)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 17), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 18
                            echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 19
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 20
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu ";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 20)) {
                                    echo "sub-menu-item";
                                }
                                echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 21
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 21);
                                echo "\" class=\"dropdown-toggle\" aria-expanded=\"false\">";
                                echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 21);
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 22
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 22)) {
                                    // line 23
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled sub-menu \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 24
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 24));
                                    foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                        // line 25
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 26
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 26);
                                        echo "\" >";
                                        echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 26);
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 29
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 31
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 33
                            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        // line 36
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 36)) {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 image-menu\"><img  src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 37);
                            echo "\" alt=\"shop\"  class=\"img-responsive\"/></div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    } else {
                        // line 41
                        echo "\t\t\t\t\t\t\t\t<div class=\"dropdown-menu navcol-menu column-1 \">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-inner\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 43
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 43)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 43), 1, "ceil"))));
                        foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled childs_1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 45
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["children"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 46
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 46)) {
                                    // line 47
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-submenu ";
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 47)) {
                                        echo "sub-menu-item";
                                    }
                                    echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 48
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 48);
                                    echo "\" class=\"dropdown-toggle\" aria-expanded=\"false\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 48);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 50
                                    if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 50)) {
                                        // line 51
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled sub-menu \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 52
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 52));
                                        foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                            // line 53
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                            // line 54
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 54);
                                            echo "\" >";
                                            echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 54);
                                            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 57
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 59
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 61
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    // line 62
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 62);
                                    echo "\" class=\"dropdown-toggle\" aria-expanded=\"false\">";
                                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 62);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 65
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 66
                            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 68
                        echo "\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t</li>
\t\t\t\t\t";
                } else {
                    // line 73
                    echo "\t\t\t\t\t\t<li class=\"menulist\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 73);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                    echo "</a></li>
\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t\t\t\t
\t\t\t";
        }
        // line 77
        echo "\t\t\t";
        if (($context["enableBlog"] ?? null)) {
            // line 78
            echo "\t\t\t\t<li class=\"blog\"><a href=\"";
            echo ($context["blogs_link"] ?? null);
            echo "\">";
            echo ($context["text_blog"] ?? null);
            echo "</a></li>
\t\t\t";
        }
        // line 80
        echo "\t\t</ul>
\t</div>
</nav>

";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 80,  281 => 78,  278 => 77,  269 => 75,  261 => 73,  257 => 71,  252 => 68,  245 => 66,  239 => 65,  231 => 62,  228 => 61,  224 => 59,  220 => 57,  209 => 54,  206 => 53,  202 => 52,  199 => 51,  197 => 50,  190 => 48,  183 => 47,  180 => 46,  176 => 45,  173 => 44,  169 => 43,  165 => 41,  161 => 39,  155 => 37,  153 => 36,  150 => 35,  143 => 33,  136 => 31,  132 => 29,  121 => 26,  118 => 25,  114 => 24,  111 => 23,  109 => 22,  103 => 21,  96 => 20,  92 => 19,  89 => 18,  85 => 17,  79 => 15,  77 => 14,  71 => 13,  68 => 12,  65 => 11,  60 => 10,  58 => 9,  52 => 8,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/menu.twig", "");
    }
}
