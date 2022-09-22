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

/* mahardhi/template/extension/module/mahardhi_newsletterpopup.twig */
class __TwigTemplate_f6200e5e3fcccc9248de5b6352c567776c0d824a379fdd927be806de97001b0a extends \Twig\Template
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
        echo "<div class=\"modal fade newsletter-popup\" id=\"newsletter-popup\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
        \t<div class=\"modal-body\">\t
\t        \t<div class=\"newsletter-wrap clearfix\"> 
\t        \t\t<div class=\"newsletter-popup-image\"></div>    \t\t\t\t        \t\t\t
\t    \t\t\t<div class=\"newsletter-content\">
\t\t\t\t\t\t<div class=\"newsletter-content-innner\">
\t\t\t\t\t\t\t<h3>";
        // line 9
        echo ($context["newsletter_title_popup"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t<p class=\"newsletter-popup-text\">";
        // line 10
        echo ($context["newsletter_description_popup"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t<form name=\"frmnewsletterpopup\" id=\"frmnewsletterpopup\" onsubmit=\"subscribe_popup();return false\" method=\"post\">
\t\t                        <input type=\"email\" class=\"newsletter_usr_popup_email\" name=\"newsletter_usr_popup_email\" id=\"newsletter_usr_popup_email\" placeholder=\"";
        // line 12
        echo ($context["entry_user_email"] ?? null);
        echo "\" required>                            
\t\t                        <button class=\"btn btn-default subscribe-btn\" type=\"submit\">";
        // line 13
        echo ($context["entry_subscribe"] ?? null);
        echo "</button>
\t\t                    </form> 
\t\t                    <!-- newsletter notofication -->
\t\t\t\t\t\t\t<div class=\"newsletter-popup-message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- newsletter notofication -->
\t\t                    <div class=\"newsletter-content-bottom\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"popup_dont_show_again\">
\t\t\t\t\t\t\t\t<label for=\"popup_dont_show_again\">";
        // line 21
        echo ($context["entry_show_again"] ?? null);
        echo "</label>
\t\t\t\t\t\t  \t</div>
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t                <button type=\"button\" class=\"newsletter-btn-close close\" data-dismiss=\"modal\" aria-label=\"Close\"><i class=\"icon-close\"></i></button>
\t        \t</div>\t   
        \t</div>          
        </div>
    </div>
</div>

<script><!--
function subscribe_popup(){
\t\$.ajax({
\t\t\ttype: 'post',
\t\t\turl: 'index.php?route=extension/module/mahardhi_newsletter/subscribepopup',
\t\t\tdataType: 'html',
            data:\$(\"#frmnewsletterpopup\").serialize(),
\t\t\tsuccess: function (html) {\t\t\t\t
\t\t\t\ttry {
\t\t\t\t\teval(html);
\t\t\t\t} 
\t\t\t\tcatch (e) {
\t\t\t\t}
\t\t\t}}); 
}
//--></script>
<script><!--
// check for validation
\$(document).ready(function() {
\t\$('#newsletter_usr_popup_email').keypress(function(e) {
\t\tif(e.which == 13) {
\t\t\te.preventDefault();
\t\t\tsubscribe_popup();
\t\t}\t
\t});

\t//transition effect
        if(\$.cookie(\"showpopup\") != 1){
\t\t\t\$('#newsletter-popup').modal('show');
        }
\t\t\$('#popup_dont_show_again').on('change', function(){\t\t\t
\t\t\tif(\$.cookie(\"showpopup\") != 1){   
\t\t\t\t\$.cookie(\"showpopup\",'1')
\t\t\t}else{
\t\t\t\t\$.cookie(\"showpopup\",'0')
\t\t\t}
\t\t}); 
});\t
//--></script>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/extension/module/mahardhi_newsletterpopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  60 => 13,  56 => 12,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/extension/module/mahardhi_newsletterpopup.twig", "");
    }
}
