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

/* mahardhi_blog/article_list.twig */
class __TwigTemplate_22857e0eb25b49c38fbb79341f72ed425578a3ec3da18a11987bd7a6107ca70d extends \Twig\Template
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
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-article').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" data-toggle=\"tooltip\" title=\"";
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
            echo "        <li><a href=\"";
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
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
      ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
      ";
        }
        // line 23
        echo "      ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
     ";
        }
        // line 28
        echo "     <div class=\"row\">
        <div class=\"filter-article col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo "</label>
                  <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-status\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"*\"></option>
                      ";
        // line 43
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 44
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 46
            echo "                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 48
        echo "                      ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 49
            echo "                        <option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 51
            echo "                        <option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 53
        echo "                  </select>
                </div>
                <div class=\"form-group text-right\">                  
                  <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 56
        echo ($context["text_filter"] ?? null);
        echo "</button>                  
                </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
          <div class=\"panel panel-default\">      
            <div class=\"panel-body\">              
              <form action=\"";
        // line 64
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-article\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                        
                        <td class=\"text-left\">
                          ";
        // line 72
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 73
            echo "                            <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                          ";
        } else {
            // line 75
            echo "                            <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                          ";
        }
        // line 77
        echo "                        </td>
                        <td class=\"text-left\">";
        // line 78
        echo ($context["column_author"] ?? null);
        echo "</td>
                        <td class=\"text-center\">
                          ";
        // line 80
        if ((($context["sort"] ?? null) == "pd.status")) {
            // line 81
            echo "                            <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                          ";
        } else {
            // line 83
            echo "                            <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                          ";
        }
        // line 85
        echo "                        </td>
                        <td class=\"text-center\">";
        // line 86
        echo ($context["column_action"] ?? null);
        echo "</td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 90
        if (($context["articles"] ?? null)) {
            // line 91
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 92
                echo "                          <tr>
                            <td class=\"text-center\">
                              ";
                // line 94
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, false, 94), ($context["selected"] ?? null))) {
                    // line 95
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, false, 95);
                    echo "\" checked=\"checked\" />
                              ";
                } else {
                    // line 97
                    echo "                                <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["article"], "article_id", [], "any", false, false, false, 97);
                    echo "\" />
                              ";
                }
                // line 99
                echo "                            </td>                        
                            <td class=\"text-left\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 100);
                echo "</td>
                            <td class=\"text-left\">";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 101);
                echo "</td>
                            <td class=\"text-center\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["article"], "status", [], "any", false, false, false, 102);
                echo "</td>                        
                            <td class=\"text-center\">
                                <a href=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["article"], "edit", [], "any", false, false, false, 104);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                            </td>
                          </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                      ";
        } else {
            // line 109
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 110
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                      ";
        }
        // line 113
        echo "                    </tbody>
                  </table>
                </div>
              </form>              
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">";
        // line 118
        echo ($context["pagination"] ?? null);
        echo "</div>
                <div class=\"col-sm-6 text-right\">";
        // line 119
        echo ($context["results"] ?? null);
        echo "</div>
              </div>              
            </div>
          </div>
        </div>
     </div>    
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=mahardhi_blog/article&user_token=";
        // line 128
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({  
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=mahardhi_blog/article/autocomplete&user_token=";
        // line 149
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=mahardhi_blog/article/autocomplete&user_token=";
        // line 169
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 186
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mahardhi_blog/article_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 186,  391 => 169,  368 => 149,  344 => 128,  332 => 119,  328 => 118,  321 => 113,  315 => 110,  312 => 109,  309 => 108,  297 => 104,  292 => 102,  288 => 101,  284 => 100,  281 => 99,  275 => 97,  269 => 95,  267 => 94,  263 => 92,  258 => 91,  256 => 90,  249 => 86,  246 => 85,  238 => 83,  228 => 81,  226 => 80,  221 => 78,  218 => 77,  210 => 75,  200 => 73,  198 => 72,  187 => 64,  176 => 56,  171 => 53,  165 => 51,  159 => 49,  156 => 48,  150 => 46,  144 => 44,  142 => 43,  136 => 40,  128 => 37,  124 => 36,  117 => 32,  111 => 28,  103 => 24,  100 => 23,  92 => 19,  90 => 18,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi_blog/article_list.twig", "");
    }
}
