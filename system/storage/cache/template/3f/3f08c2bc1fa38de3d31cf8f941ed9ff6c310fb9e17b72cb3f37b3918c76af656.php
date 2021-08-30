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

/* admin/view/template/marketplace/installer_extension.twig */
class __TwigTemplate_1403aa9cee157d65b5612b0f1afb086429c84a1e769e380ef1eb1c971421c1f5 extends Template
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
        echo "<div class=\"table-responsive\">
\t<table class=\"table table-bordered table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 5
        echo ($context["sort_name"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "name")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_name"] ?? null);
        echo "</a></td>
\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 6
        echo ($context["sort_version"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "version")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_version"] ?? null);
        echo "</a></td>
\t\t\t\t<td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
\t\t\t\t<td class=\"text-end\" style=\"min-width: 105px;\">";
        // line 8
        echo ($context["column_action"] ?? null);
        echo "</td>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 12
        if (($context["extensions"] ?? null)) {
            // line 13
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 14
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"text-start\">
\t\t\t\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", [], "any", false, false, false, 17);
                    echo "\" target=\"_blank\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 19);
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"text-start align-text-top\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "version", [], "any", false, false, false, 22);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-start align-text-top\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "date_added", [], "any", false, false, false, 23);
                echo "</td>
\t\t\t\t\t\t<td class=\"text-end align-text-top\">
\t\t\t\t\t\t\t";
                // line 25
                if ( !twig_get_attribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 26);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_install"] ?? null);
                    echo "\" class=\"btn btn-success\"><i class=\"fas fa-plus-circle\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "delete", [], "any", false, false, false, 27);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></a>
\t\t\t\t\t\t\t";
                } else {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 29);
                    echo "\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_uninstall"] ?? null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fas fa-minus-circle\"></i></a>
\t\t\t\t\t\t\t\t<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 30
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger\" disabled><i class=\"far fa-trash-alt\"></i></button>
\t\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"text-center\" colspan=\"4\">";
            // line 37
            echo ($context["text_no_results"] ?? null);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 40
        echo "\t\t</tbody>
\t</table>
</div>
<div class=\"row\">
\t<div class=\"col-sm-6 text-start\">";
        // line 44
        echo ($context["pagination"] ?? null);
        echo "</div>
\t<div class=\"col-sm-6 text-end\">";
        // line 45
        echo ($context["results"] ?? null);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/installer_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 45,  179 => 44,  173 => 40,  167 => 37,  164 => 36,  161 => 35,  153 => 32,  148 => 30,  141 => 29,  134 => 27,  127 => 26,  125 => 25,  120 => 23,  116 => 22,  113 => 21,  107 => 19,  99 => 17,  97 => 16,  93 => 14,  88 => 13,  86 => 12,  79 => 8,  67 => 7,  55 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/installer_extension.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/marketplace/installer_extension.twig");
    }
}
