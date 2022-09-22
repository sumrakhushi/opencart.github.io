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

/* mahardhi/template/extension/module/mahardhi_newsletter.twig */
class __TwigTemplate_969b8a3b602531924dd77bda48d1247b16fcb94d0111ae815c572eda983b4870 extends \Twig\Template
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
        echo "<div class=\"news col-md-9\">
\t<div class=\"newsletterblock\">
\t\t<div class=\"newsletter-form block-content\">
\t\t\t<div class=\"news-info\">
\t\t\t\t<div class=\"news-dec\">
\t\t\t\t\t<i class=\"icon-mail1\"></i>
\t\t\t\t\t<div class=\"title-text\">";
        // line 7
        echo ($context["newsletter_title"] ?? null);
        echo "</div>
\t\t\t\t\t<div class=\"news-description hidden\">";
        // line 8
        echo ($context["newsletter_description"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- newsletter box -->
\t\t\t<form name=\"frmnewsletter\" id=\"frmnewsletter\" onsubmit=\"subscribe();return false\" method=\"post\">
\t\t\t\t<div class=\"subscribe-form\">
\t\t\t\t\t<input type=\"email\" name=\"newsletter_usr_email\" id=\"newsletter_usr_email\" placeholder=\"";
        // line 14
        echo ($context["entry_user_email"] ?? null);
        echo "\" class=\"form-control input-lg inputNew txtemail\" required>
\t\t\t\t\t<button type=\"submit\" class=\"subscribe-btn btn\">";
        // line 15
        echo ($context["entry_subscribe"] ?? null);
        echo "</button>
\t\t\t\t</div>
\t\t\t\t<!-- newsletter notofication -->
\t\t\t\t<div class=\"newsletter-message\"></div>
\t\t\t\t<!-- newsletter notofication -->
\t\t\t</form>
\t\t\t<!-- newsletter box -->
\t\t</div>
\t</div>
</div>
<script><!--
//add 
function subscribe(){
\t\$.ajax({
\t\ttype: 'post',
\t\turl: 'index.php?route=extension/module/mahardhi_newsletter/subscribe',
\t\tdataType: 'html',
\t\tdata:\$(\"#frmnewsletter\").serialize(),
\t\tsuccess: function (html) {
\t\t\ttry {
\t\t\t\teval(html);
\t\t\t}
\t\t\tcatch (e) {
\t\t\t}\t\t\t\t
\t\t}
\t});
}

// check for validation
\$(document).ready(function() {
\t\$('#newsletter_usr_email').keypress(function(e) {
\t\tif(e.which == 13) {
\t\t\te.preventDefault();
\t\t\tsubscribe();
\t\t}\t
\t});
});\t
//--></script>





";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 14,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_newsletter.twig", "");
    }
}
