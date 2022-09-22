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

/* mahardhi/template/common/footer.twig */
class __TwigTemplate_588b7b1a02c6e45538f85bba0d8a1ae6829f546cbc001b26c4d650a3cd39d392 extends \Twig\Template
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
        echo "<footer class=\"mt-100\">
\t<div class=\"container\">
\t\t<div class=\"footer-top clearfix\">
\t\t\t";
        // line 4
        echo ($context["footer_top"] ?? null);
        echo "
\t\t</div>
\t\t<div class=\"footer-inner clearfix\">
\t\t\t<div class=\"footer-left col-md-9\">
\t\t\t\t<div class=\"footer-left-inner clearfix\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t";
        // line 10
        echo ($context["footer_left"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 12
        if (($context["informations"] ?? null)) {
            // line 13
            echo "\t\t\t      \t<div class=\"col-sm-3\">
\t\t\t      \t\t<div class=\"footer-content\">
\t\t\t\t\t\t\t<h5>";
            // line 15
            echo ($context["text_information"] ?? null);
            echo "</h5>
\t\t\t\t\t        <ul class=\"list-unstyled\">
\t\t\t\t\t         \t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 18
                echo "\t\t\t\t\t          \t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 18);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 18);
                echo "</a></li>
\t\t\t\t\t          \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t          \t<li><a href=\"";
            echo ($context["contact"] ?? null);
            echo "\">";
            echo ($context["text_contact"] ?? null);
            echo "</a></li>
\t\t\t\t\t        </ul>
\t\t\t\t        </div>
\t\t\t      \t</div>
\t\t\t      \t";
        }
        // line 25
        echo "\t\t\t      \t<div class=\"col-sm-3\">
\t\t\t\t      \t<div class=\"footer-content\">
\t\t\t\t      \t\t<h5>";
        // line 27
        echo ($context["text_account"] ?? null);
        echo "</h5>
\t\t\t\t\t        <ul class=\"list-unstyled\">
\t\t\t\t\t          <li><a href=\"";
        // line 29
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 30
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 31
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 32
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
\t\t\t\t\t           <li><a href=\"";
        // line 33
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t        </ul>
\t\t\t\t        </div>
\t\t\t      \t</div>
\t\t\t      \t<div class=\"col-sm-2\">
\t\t\t      \t\t<div class=\"footer-content\">
\t\t\t\t      \t\t<h5>";
        // line 39
        echo ($context["text_extra"] ?? null);
        echo "</h5>
\t\t\t\t\t        <ul class=\"list-unstyled\">
\t\t\t\t\t          <li><a href=\"";
        // line 41
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 42
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 43
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 44
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t          <li><a href=\"";
        // line 45
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t        </ul>
\t\t\t\t\t    </div>
\t\t\t      \t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-bottom\">
\t\t\t\t\t<div class=\"footer-bottom-inner\">
\t\t\t\t\t\t<p class=\"powered\">";
        // line 52
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t\t\t";
        // line 53
        echo ($context["footer_bottom"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t    </div>
\t\t    <div class=\"footer-right col-md-3\">
\t\t    \t<div class=\"footer-right-inner\">
\t\t\t\t\t";
        // line 59
        echo ($context["footer_right"] ?? null);
        echo "
\t\t\t\t</div>
\t\t    </div>
\t\t</div>
\t</div>
\t\t\t
\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 66
            echo "\t\t<script src=\"";
            echo $context["script"];
            echo "\"></script>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</footer>
<!-- top scroll -->
\t<a href=\"#\" class=\"scrollToTop back-to-top\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo ($context["text_backtop"] ?? null);
        echo "\"><i class=\"fa fa-angle-double-up\"></i></a>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  213 => 68,  204 => 66,  200 => 65,  191 => 59,  182 => 53,  178 => 52,  166 => 45,  160 => 44,  154 => 43,  148 => 42,  142 => 41,  137 => 39,  126 => 33,  120 => 32,  114 => 31,  108 => 30,  102 => 29,  97 => 27,  93 => 25,  82 => 20,  71 => 18,  67 => 17,  62 => 15,  58 => 13,  56 => 12,  51 => 10,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/footer.twig", "");
    }
}
