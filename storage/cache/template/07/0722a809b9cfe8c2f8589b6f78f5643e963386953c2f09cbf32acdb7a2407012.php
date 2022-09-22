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

/* mahardhi_blog/setting.twig */
class __TwigTemplate_3ca2462563a30e086055ccc4b97f8f66559eb6d33f32f82987a679f12f90fbcf extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-blog2\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 23
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo ($context["text_edit"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 33
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog2\" class=\"form-horizontal\">
                    <fieldset>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-blog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["help_mahardhi_blog_limit"] ?? null);
        echo "\">";
        echo ($context["entry_mahardhi_blog_limit"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"module_mahardhi_blog_limit\" value=\"";
        // line 38
        echo ($context["module_mahardhi_blog_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mahardhi_blog_limit"] ?? null);
        echo "\" id=\"input-blog-limit\" class=\"form-control\" />
                                ";
        // line 39
        if (($context["error_mahardhi_blog_limit"] ?? null)) {
            // line 40
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_limit"] ?? null);
            echo "</div>
                                ";
        }
        // line 42
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-blog-meta-title\">";
        // line 46
        echo ($context["entry_mahardhi_blog_meta_title"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"module_mahardhi_blog_meta_title\" value=\"";
        // line 48
        echo ($context["module_mahardhi_blog_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mahardhi_blog_meta_title"] ?? null);
        echo "\" id=\"input-blog-meta-title\" class=\"form-control\" />
                                ";
        // line 49
        if (($context["error_mahardhi_blog_meta_title"] ?? null)) {
            // line 50
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_meta_title"] ?? null);
            echo "</div>
                                ";
        }
        // line 52
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-blog-meta-description\">";
        // line 56
        echo ($context["entry_mahardhi_blog_meta_description"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"module_mahardhi_blog_meta_description\" value=\"";
        // line 58
        echo ($context["module_mahardhi_blog_meta_description"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mahardhi_blog_meta_description"] ?? null);
        echo "\" id=\"input-blog-meta-description\" class=\"form-control\" />
                                ";
        // line 59
        if (($context["error_mahardhi_blog_meta_description"] ?? null)) {
            // line 60
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_meta_description"] ?? null);
            echo "</div>
                                ";
        }
        // line 62
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-blog-meta-keyword\">";
        // line 66
        echo ($context["entry_mahardhi_blog_meta_keyword"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"module_mahardhi_blog_meta_keyword\" value=\"";
        // line 68
        echo ($context["module_mahardhi_blog_meta_keyword"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mahardhi_blog_meta_keyword"] ?? null);
        echo "\" id=\"input-blog-meta-keyword\" class=\"form-control\" />
                                ";
        // line 69
        if (($context["error_mahardhi_blog_meta_keyword"] ?? null)) {
            // line 70
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_meta_keyword"] ?? null);
            echo "</div>
                                ";
        }
        // line 72
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 76
        echo ($context["entry_mahardhi_blog_image_size"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 80
        echo ($context["entry_mahardhi_blog_width"] ?? null);
        echo "\" name=\"module_mahardhi_blog_width\" value=\"";
        echo ($context["module_mahardhi_blog_width"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 83
        echo ($context["entry_mahardhi_blog_height"] ?? null);
        echo "\" name=\"module_mahardhi_blog_height\" value=\"";
        echo ($context["module_mahardhi_blog_height"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                ";
        // line 86
        if (($context["error_mahardhi_blog_width"] ?? null)) {
            // line 87
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_width"] ?? null);
            echo "</div>
                                ";
        } elseif (        // line 88
($context["error_mahardhi_blog_height"] ?? null)) {
            // line 89
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_height"] ?? null);
            echo "</div>
                                ";
        }
        // line 91
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\">";
        // line 95
        echo ($context["entry_mahardhi_blog_detail_image_size"] ?? null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 99
        echo ($context["entry_mahardhi_blog_width"] ?? null);
        echo "\" name=\"module_mahardhi_blog_detail_width\" value=\"";
        echo ($context["module_mahardhi_blog_detail_width"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 102
        echo ($context["entry_mahardhi_blog_height"] ?? null);
        echo "\" name=\"module_mahardhi_blog_detail_height\" value=\"";
        echo ($context["module_mahardhi_blog_detail_height"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                ";
        // line 105
        if (($context["error_mahardhi_blog_detail_width"] ?? null)) {
            // line 106
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_detail_width"] ?? null);
            echo "</div>
                                ";
        } elseif (        // line 107
($context["error_mahardhi_blog_detail_height"] ?? null)) {
            // line 108
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_mahardhi_blog_detail_height"] ?? null);
            echo "</div>
                                ";
        }
        // line 110
        echo "                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"date_format\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_date_format"] ?? null);
        echo "\">";
        echo ($context["entry_date_format"] ?? null);
        echo "</span></label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"module_mahardhi_blog_date_format\" value=\"";
        // line 116
        echo ($context["module_mahardhi_blog_date_format"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_date_format"] ?? null);
        echo "\" class=\"form-control\" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 125
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "mahardhi_blog/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 125,  317 => 116,  310 => 114,  304 => 110,  298 => 108,  296 => 107,  291 => 106,  289 => 105,  281 => 102,  273 => 99,  266 => 95,  260 => 91,  254 => 89,  252 => 88,  247 => 87,  245 => 86,  237 => 83,  229 => 80,  222 => 76,  216 => 72,  210 => 70,  208 => 69,  202 => 68,  197 => 66,  191 => 62,  185 => 60,  183 => 59,  177 => 58,  172 => 56,  166 => 52,  160 => 50,  158 => 49,  152 => 48,  147 => 46,  141 => 42,  135 => 40,  133 => 39,  127 => 38,  120 => 36,  114 => 33,  108 => 30,  104 => 28,  96 => 24,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi_blog/setting.twig", "");
    }
}
