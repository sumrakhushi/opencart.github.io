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

/* default/template/extension/payment/paytm_response.twig */
class __TwigTemplate_d6ed8bbc42b2a8cce97b2fd7aebae0f86f1b55ba5d34e3dde92bda3485022005 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["language"] ?? null);
        echo "\" xml:lang=\"";
        echo ($context["language"] ?? null);
        echo "\">
\t<head>
\t\t<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
\t</head>
\t<body>
\t\t<div style=\"text-align: center;\">
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<p>";
        // line 10
        echo ($context["text_response"] ?? null);
        echo "</p>
\t\t\t<div style=\"border: 1px solid #DDDDDD; margin-bottom: 20px; width: 350px; margin-left: auto; margin-right: auto;\">
\t\t\t\t<WPDISPLAY ITEM=banner>
\t\t\t</div>
\t\t\t<p>";
        // line 14
        echo ($context["text_message"] ?? null);
        echo "</p>
\t\t\t<p>";
        // line 15
        echo ($context["text_message_wait"] ?? null);
        echo "</p>
\t\t</div>
\t\t<script type=\"text/javascript\">
\t\t\tsetTimeout('location = \\'";
        // line 18
        echo ($context["continue"] ?? null);
        echo "\\';', 2500);
\t\t</script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/paytm_response.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  72 => 15,  68 => 14,  61 => 10,  57 => 9,  50 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/paytm_response.twig", "");
    }
}
