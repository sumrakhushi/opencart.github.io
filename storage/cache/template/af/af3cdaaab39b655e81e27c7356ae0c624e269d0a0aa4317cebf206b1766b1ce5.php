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

/* extension/payment/paytm.twig */
class __TwigTemplate_79307b272fce57a6382cc2f47c737df344fa4c0fe165884b4c97636ec03cc0a6 extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-paytm\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t\t\t<h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "\t\t\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if (($context["warning"] ?? null)) {
            // line 23
            echo "\t\t<div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-paytm\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_merchant_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 32
        echo ($context["entry_merchant_id_help"] ?? null);
        echo "\">";
        echo ($context["entry_merchant_id"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_merchant_id\" id=\"payment_paytm_merchant_id\" value=\"";
        // line 35
        echo ($context["payment_paytm_merchant_id"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 36
        if (($context["error_merchant_id"] ?? null)) {
            // line 37
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_merchant_id"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_merchant_key\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 43
        echo ($context["entry_merchant_key_help"] ?? null);
        echo "\">";
        echo ($context["entry_merchant_key"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_merchant_key\" id=\"payment_paytm_merchant_key\" value=\"";
        // line 46
        echo ($context["payment_paytm_merchant_key"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 47
        if (($context["error_merchant_key"] ?? null)) {
            // line 48
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_merchant_key"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_website\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 54
        echo ($context["entry_website_help"] ?? null);
        echo "\">";
        echo ($context["entry_website"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_website\" id=\"payment_paytm_website\" value=\"";
        // line 57
        echo ($context["payment_paytm_website"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 58
        if (($context["error_website"] ?? null)) {
            // line 59
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_website"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_industry_type\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 65
        echo ($context["entry_industry_type_help"] ?? null);
        echo "\">";
        echo ($context["entry_industry_type"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_industry_type\" id=\"payment_paytm_industry_type\" value=\"";
        // line 68
        echo ($context["payment_paytm_industry_type"] ?? null);
        echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t";
        // line 69
        if (($context["error_industry_type"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_industry_type"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_environment\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 76
        echo ($context["entry_environment_help"] ?? null);
        echo "\">";
        echo ($context["entry_environment"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_environment\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 80
        if ((($context["payment_paytm_environment"] ?? null) == 1)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_staging"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 82
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_staging"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 85
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_order_success_status_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 92
        echo ($context["entry_order_success_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_order_success_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_order_success_status_id\" id=\"payment_paytm_order_success_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 97
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["order_status"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["order_status_id"] ?? null) : null) == ($context["payment_paytm_order_success_status_id"] ?? null))) {
                // line 98
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["order_status"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["order_status"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["order_status"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["order_status"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 102
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_order_pending_status_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 108
        echo ($context["entry_order_pending_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_order_pending_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_order_pending_status_id\" id=\"payment_paytm_order_pending_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 113
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["order_status"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["order_status_id"] ?? null) : null) == ($context["payment_paytm_order_pending_status_id"] ?? null))) {
                // line 114
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["order_status"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["order_status"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["order_status"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["order_status"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_order_failed_status_id\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["entry_order_failed_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_order_failed_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_order_failed_status_id\" id=\"payment_paytm_order_failed_status_id\" class=\"form-control\">
\t\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 129
            echo "\t\t\t\t\t\t\t\t";
            if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["order_status"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["order_status_id"] ?? null) : null) == ($context["payment_paytm_order_failed_status_id"] ?? null))) {
                // line 130
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["order_status"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["order_status_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["order_status"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 132
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["order_status"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["order_status_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["order_status"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 139
        echo ($context["entry_total_help"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_total\" value=\"";
        // line 141
        echo ($context["payment_paytm_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-geo-zone\">";
        // line 145
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 148
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 150
            echo "\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 150) == ($context["payment_paytm_geo_zone_id"] ?? null))) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 151);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 151);
                echo "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 153
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 153);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 153);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 155
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-sm-3\" for=\"payment_paytm_status\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 161
        echo ($context["entry_status_help"] ?? null);
        echo "\">";
        echo ($context["entry_status"] ?? null);
        echo "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<select name=\"payment_paytm_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
        // line 165
        if (($context["payment_paytm_status"] ?? null)) {
            // line 166
            echo "\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 167
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        } else {
            // line 169
            echo "\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 170
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        // line 172
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
        // line 176
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paytm_sort_order\" value=\"";
        // line 178
        echo ($context["payment_paytm_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<span><b>";
        // line 185
        echo ($context["text_php_version"] ?? null);
        echo "</b> ";
        echo ($context["php_version"] ?? null);
        echo "</span>
\t\t\t\t\t<span> | </span>
\t\t\t\t\t<span><b>";
        // line 187
        echo ($context["text_curl_version"] ?? null);
        echo "</b> ";
        echo ($context["curl_version"] ?? null);
        echo "</span>
\t\t\t\t\t<span> | </span>
\t\t\t\t\t<span><b>";
        // line 189
        echo ($context["text_opencart_version"] ?? null);
        echo "</b> ";
        echo ($context["opencart_version"] ?? null);
        echo "</span>
\t\t\t\t\t<span> | </span>
\t\t\t\t\t<span><b>";
        // line 191
        echo ($context["text_last_updated"] ?? null);
        echo "</b> ";
        echo ($context["last_updated"] ?? null);
        echo "</span>
\t\t\t\t\t<span> | </span>
\t\t\t\t\t<span><b><a target=\"_blank\" href=\"https://developer.paytm.com/docs/eCommerce-plugin/opencart/#oc3-x\">";
        // line 193
        echo ($context["text_developer_docs"] ?? null);
        echo "</a></b></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 199
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/paytm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 199,  533 => 193,  526 => 191,  519 => 189,  512 => 187,  505 => 185,  493 => 178,  488 => 176,  482 => 172,  477 => 170,  472 => 169,  467 => 167,  462 => 166,  460 => 165,  451 => 161,  444 => 156,  438 => 155,  430 => 153,  422 => 151,  419 => 150,  415 => 149,  411 => 148,  405 => 145,  396 => 141,  389 => 139,  383 => 135,  377 => 134,  369 => 132,  361 => 130,  358 => 129,  354 => 128,  345 => 124,  338 => 119,  332 => 118,  324 => 116,  316 => 114,  313 => 113,  309 => 112,  300 => 108,  293 => 103,  287 => 102,  279 => 100,  271 => 98,  268 => 97,  264 => 96,  255 => 92,  248 => 87,  243 => 85,  238 => 84,  233 => 82,  228 => 81,  226 => 80,  217 => 76,  211 => 72,  205 => 70,  203 => 69,  199 => 68,  191 => 65,  185 => 61,  179 => 59,  177 => 58,  173 => 57,  165 => 54,  159 => 50,  153 => 48,  151 => 47,  147 => 46,  139 => 43,  133 => 39,  127 => 37,  125 => 36,  121 => 35,  113 => 32,  107 => 29,  103 => 27,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paytm.twig", "");
    }
}
