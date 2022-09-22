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

/* mahardhi/template/extension/module/mahardhi_search.twig */
class __TwigTemplate_5c011966b97fa751ab5c4acd4a63f0b91a6c4467367143b547a1a96b1a9aaf68 extends \Twig\Template
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
        echo "<div id=\"mahardhiSearch\" class=\"input-group mahardhi-search\">
\t";
        // line 2
        if (($context["categorySearch"] ?? null)) {
            // line 3
            echo "\t<div class=\"category-search\">
\t\t<select name=\"category_id\" class=\"form-control input-lg\">
\t\t\t<option value=\"0\">";
            // line 5
            echo ($context["text_category"] ?? null);
            echo "</option>
\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
                // line 7
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 7) == ($context["category_id"] ?? null))) {
                    // line 8
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 8);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 8);
                    echo "</option>
\t\t\t\t";
                } else {
                    // line 10
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 10);
                    echo "</option>
\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 13
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 13) == ($context["category_id"] ?? null))) {
                        // line 14
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 14);
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 14);
                        echo "</option>
\t\t\t\t\t";
                    } else {
                        // line 16
                        echo "\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 16);
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 16);
                        echo "</option>
\t\t\t\t\t";
                    }
                    // line 18
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 18));
                    foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                        // line 19
                        echo "\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 19) == ($context["category_id"] ?? null))) {
                            // line 20
                            echo "\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 20);
                            echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 20);
                            echo "</option>
\t\t\t\t\t\t";
                        } else {
                            // line 22
                            echo "\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 22);
                            echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                            echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 22);
                            echo "</option>
\t\t\t\t\t\t";
                        }
                        // line 24
                        echo "\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t</select>
\t</div>
\t";
        }
        // line 29
        echo "\t
\t<input type=\"text\" name=\"search\" value=\"\" placeholder=\"";
        // line 30
        echo ($context["text_search"] ?? null);
        echo "\" class=\"form-control input-lg ui-autocomplete-input\" />
\t<span class=\"btn-search input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default btn-lg\"><i class=\"search-icon icon-search\"></i></button>
\t</span>
</div>

<script type=\"text/javascript\">
\$('#mahardhiSearch .btn-search button').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#mahardhiSearch input[name=\\'search\\']').prop('value');
\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#mahardhiSearch select[name=\\'category_id\\']').prop('value');
\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t\t// url += '&sub_category=true';
\t\t// url += '&description=true';
\t}

\tlocation = url;
});

\$('#mahardhiSearch input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#mahardhiSearch .btn-search button').trigger('click');
\t}
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 30,  144 => 29,  139 => 27,  133 => 26,  127 => 25,  121 => 24,  113 => 22,  105 => 20,  102 => 19,  97 => 18,  89 => 16,  81 => 14,  78 => 13,  73 => 12,  65 => 10,  57 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_search.twig", "");
    }
}
