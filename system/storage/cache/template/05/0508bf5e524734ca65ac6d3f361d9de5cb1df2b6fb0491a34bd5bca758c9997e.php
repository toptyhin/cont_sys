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

/* catalog/view/template/common/currency.twig */
class __TwigTemplate_9a0ab0f1b19e4c11ef28d4089abfe0100730bef9e3cf0025872fbdd71c4dbd57 extends Template
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
        if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
            // line 2
            echo "\t<form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
\t\t<div class=\"dropdown\">
\t\t\t<div class=\"dropdown-toggle\" data-bs-toggle=\"tooltip\">
\t\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 6) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null)))) {
                    // line 7
                    echo "\t\t\t\t\t\t<strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 7);
                    echo "</strong>
\t\t\t\t\t";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 8
$context["currency"], "symbol_right", [], "any", false, false, false, 8) && (twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)))) {
                    // line 9
                    echo "\t\t\t\t\t\t<strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 9);
                    echo "</strong>
\t\t\t\t\t";
                }
                // line 11
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t\t<span class=\"d-none d-md-inline\">";
            echo ($context["text_currency"] ?? null);
            echo "</span> <i class=\"fas fa-caret-down\"></i>
\t\t\t</div>
\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 16
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 17);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 17);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 19);
                    echo "\" class=\"dropdown-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 19);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 19);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"code\" value=\"\"/> <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 24
            echo ($context["redirect"] ?? null);
            echo "\"/>
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  112 => 22,  106 => 21,  96 => 19,  86 => 17,  83 => 16,  79 => 15,  72 => 12,  66 => 11,  60 => 9,  58 => 8,  53 => 7,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/currency.twig", "/home/alk/Work/cms/opencart/upload/catalog/view/template/common/currency.twig");
    }
}
