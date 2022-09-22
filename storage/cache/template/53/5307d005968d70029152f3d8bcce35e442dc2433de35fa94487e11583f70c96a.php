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

/* mahardhi/template/common/cart.twig */
class __TwigTemplate_37459ab1faff4ca4da007baf3d54767c4c4b7046684c56c7a99037988bbf4b23 extends \Twig\Template
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
        echo "<div id=\"cart\" class=\"btn-group btn-block\">
  <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"";
        // line 2
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\">
      <span id=\"cart-total\">";
        // line 3
        echo ($context["text_items"] ?? null);
        echo "</span>
  </button>
  <ul class=\"dropdown-menu header-cart-toggle pull-right \">
  ";
        // line 6
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 7
            echo "    <li class=\"cart-content-product\">
      <table class=\"table table-striped\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "          <tr>
            <td class=\"text-center product-cart-thumb\">
            ";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "              <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 13);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 13);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 13);
                    echo "\" class=\"img-thumbnail\" />
              </a> 
            ";
                }
                // line 16
                echo "            </td>
            <td class=\"text-left product-cart-details\">
              <a href=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                echo "\" class=\"product-item-name\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                echo "</a>
              <div class=\"product-cart-info\">
                <span class=\"product-cart-qty\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 20);
                echo " x </span>
                <span class=\"product-cart-price\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 21);
                echo "</span>
              </div>
            </td>
            <td class=\"text-center product-cart-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 24);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 28
                echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left voucher-details\">
              <a class=\"product-item-name\" href=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 31);
                echo "</a>
            <div class=\"voucher-info\">
              <span class=\"voucher-qty\">1 x&nbsp;</span>
              <span class=\"voucher-price\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 34);
                echo "</span>
            </div>
            </td>
            <td class=\"text-center  voucher-close\"><button type=\"button\" onclick=\"cart.remove('";
                // line 37
                echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cart_id", [], "any", false, false, false, 37);
                echo "');\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "      </table>
    </li>
    <li>
      <div>
        <table class=\"table table-bordered\">
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 46
                echo "          <tr>
            <td class=\"text-left\"><strong>";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 47);
                echo "</strong></td>
            <td class=\"text-right\">";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 48);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </table>
        <p class=\"text-right product-cart-button\"><a href=\"";
            // line 52
            echo ($context["cart"] ?? null);
            echo "\" class=\"btn cart-btn addtocart-btn\">";
            echo ($context["text_cart"] ?? null);
            echo "</a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn cart-btn checkout-btn\">";
            echo ($context["text_checkout"] ?? null);
            echo "</a></p>
      </div>
    </li>
  ";
        } else {
            // line 56
            echo "    <li>
      <p class=\"text-center product-cart-empty\">";
            // line 57
            echo ($context["text_empty"] ?? null);
            echo "</p>
    </li>
  ";
        }
        // line 60
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "mahardhi/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 60,  192 => 57,  189 => 56,  176 => 52,  173 => 51,  164 => 48,  160 => 47,  157 => 46,  153 => 45,  146 => 40,  135 => 37,  129 => 34,  121 => 31,  116 => 28,  111 => 27,  100 => 24,  94 => 21,  90 => 20,  83 => 18,  79 => 16,  66 => 13,  64 => 12,  60 => 10,  56 => 9,  52 => 7,  50 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mahardhi/template/common/cart.twig", "");
    }
}
