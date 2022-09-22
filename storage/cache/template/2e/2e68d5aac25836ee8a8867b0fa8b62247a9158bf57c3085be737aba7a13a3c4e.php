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

/* extension/module/mahardhi_blog.twig */
class __TwigTemplate_81806b044e1108d3ab53c4875bf19d582e67507285356bd8c18be65f1d858d39 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
        <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
        <ul class=\"breadcrumb\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>
  </div>
   <div class=\"container-fluid\">
     <div class=\"panel panel-default\">
    <div class=\"panel-body\">
       <div class=\"form-group\">
        
            <div class=\"col-lg-4 col-md-4 col-sm-6\">
              <a href=\"";
        // line 22
        echo ($context["addarticle"] ?? null);
        echo "\">
                  <div class=\"tile tile-primary clearfix\">
                      <div class=\"tile-body\"><i class=\"fa fa-file-text-o\"></i>
                          <h3 class=\"pull-right\">";
        // line 25
        echo ($context["text_Article"] ?? null);
        echo "</h3>
                      </div>
                  </div>
              </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-6\">
            <a href=\"";
        // line 31
        echo ($context["comment"] ?? null);
        echo "\">
                <div class=\"tile tile-primary clearfix\">
                    <div class=\"tile-body\"><i class=\"fa fa-commenting-o\"></i>
                        <h3 class=\"pull-right\">";
        // line 34
        echo ($context["text_comment"] ?? null);
        echo "</h3>
                    </div>
                </div>
            </a>
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-6\">
            <a href=\"";
        // line 40
        echo ($context["mahardhi_blog_setting"] ?? null);
        echo "\">
                <div class=\"tile tile-primary clearfix\">
                    <div class=\"tile-body\"><i class=\"fa fa-cogs\"></i>
                        <h3 class=\"pull-right\">";
        // line 43
        echo ($context["text_setting"] ?? null);
        echo "</h3>
                    </div>
                </div>
            </a>
          </div>
          </div>
          </div>
      </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 53
        if (($context["error_warning"] ?? null)) {
            // line 54
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 58
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 60
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 63
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-news\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 65
        echo ($context["entry_module_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 67
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_module_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_name"] ?? null)) {
            // line 69
            echo "                <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
          </div>
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\" id=\"language\">
             ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 76
            echo "              <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 76);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 76);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 76);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 76);
            echo "</a></li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </ul>
            <div class=\"tab-content\">
           ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 81
            echo "              <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\">
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-title";
            // line 83
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 83);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"module_description[";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "][title]\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-heading";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            echo "\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85)] ?? null) : null), "title", [], "any", false, false, false, 85)) : (""));
            echo "\" class=\"form-control\" />
                    ";
            // line 86
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86)] ?? null) : null)) {
                // line 87
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_title"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null);
                echo "</div>
                    ";
            }
            // line 89
            echo "                  </div>
                </div>
              </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 97
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 99
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" class=\"form-control\" />
              ";
        // line 100
        if (($context["error_width"] ?? null)) {
            // line 101
            echo "                <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 103
        echo "            </div>
          </div>

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 107
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 109
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
              ";
        // line 110
        if (($context["error_height"] ?? null)) {
            // line 111
            echo "                <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 113
        echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 117
        echo ($context["entry_date_format"] ?? null);
        echo "<span data-toggle=\"tooltip\" title=\"";
        echo ($context["help_date_format"] ?? null);
        echo "\">";
        echo ($context["entry_mahardhi_blog_limit"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"date_format\" value=\"";
        // line 119
        echo ($context["date_format"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_date_format"] ?? null);
        echo "\" class=\"form-control\" />
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 124
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 127
        if (($context["status"] ?? null)) {
            // line 128
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 129
            echo ($context["text_disabled"] ?? null);
            echo "</option>
              ";
        } else {
            // line 131
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 132
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 134
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-auto\">";
        // line 138
        echo ($context["entry_auto"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"auto\" id=\"input-auto\" class=\"form-control\">
                    ";
        // line 141
        if (($context["auto"] ?? null)) {
            // line 142
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 143
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 145
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 146
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 148
        echo "                </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-items\">";
        // line 152
        echo ($context["entry_items"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"items\" value=\"";
        // line 154
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_items"] ?? null);
        echo "\" id=\"input-items\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-speed\">";
        // line 158
        echo ($context["entry_speed"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"speed\" value=\"";
        // line 160
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rows\">";
        // line 164
        echo ($context["entry_rows"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"rows\" value=\"";
        // line 166
        echo ($context["rows"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rows"] ?? null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-navigation\">";
        // line 170
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
                <select name=\"navigation\" id=\"input-navigation\" class=\"form-control\">
                    ";
        // line 173
        if (($context["navigation"] ?? null)) {
            // line 174
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 175
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 177
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 178
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 180
        echo "                </select>
            </div>
          </div>

          <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-pagination\">";
        // line 185
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                  <select name=\"pagination\" id=\"input-pagination\" class=\"form-control\">
                      ";
        // line 188
        if (($context["pagination"] ?? null)) {
            // line 189
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 190
            echo ($context["text_no"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 192
            echo "                      <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 193
            echo ($context["text_no"] ?? null);
            echo "</option>
                      ";
        }
        // line 195
        echo "                  </select>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
";
        // line 207
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/mahardhi_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  517 => 207,  503 => 195,  498 => 193,  493 => 192,  488 => 190,  483 => 189,  481 => 188,  475 => 185,  468 => 180,  463 => 178,  458 => 177,  453 => 175,  448 => 174,  446 => 173,  440 => 170,  431 => 166,  426 => 164,  417 => 160,  412 => 158,  403 => 154,  398 => 152,  392 => 148,  387 => 146,  382 => 145,  377 => 143,  372 => 142,  370 => 141,  364 => 138,  358 => 134,  353 => 132,  348 => 131,  343 => 129,  338 => 128,  336 => 127,  330 => 124,  320 => 119,  311 => 117,  305 => 113,  299 => 111,  297 => 110,  291 => 109,  286 => 107,  280 => 103,  274 => 101,  272 => 100,  266 => 99,  261 => 97,  255 => 93,  246 => 89,  240 => 87,  238 => 86,  228 => 85,  221 => 83,  215 => 81,  211 => 80,  207 => 78,  190 => 76,  186 => 75,  180 => 71,  174 => 69,  172 => 68,  166 => 67,  161 => 65,  156 => 63,  150 => 60,  146 => 58,  138 => 54,  136 => 53,  123 => 43,  117 => 40,  108 => 34,  102 => 31,  93 => 25,  87 => 22,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/mahardhi_blog.twig", "");
    }
}
