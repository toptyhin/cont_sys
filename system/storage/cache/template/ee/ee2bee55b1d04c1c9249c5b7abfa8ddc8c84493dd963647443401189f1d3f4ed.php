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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_3c9ecd10a2b885b290fba0abce46eb909042c970791a666d5886a873d2b0a0db extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  ";
        // line 16
        echo "  ";
        // line 17
        echo "  ";
        // line 18
        echo "  <link href=\"";
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 19
        echo ($context["fonts"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 20
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 22
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 22);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 22);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 22);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 25
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        // line 28
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 29
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 29);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 29);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 32
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</head>
<body>
<div id=\"toast-container\">
  <div class=\"container\">
    <div id=\"toast\"></div>
  </div>
</div>
<nav class=\"relative flex flex-wrap items-center justify-between px-2 py-3 bg-coolGray-900 mb-3\">
  <div class=\"container px-4 mx-auto flex flex-wrap items-center justify-between\">
    <div class=\"w-full relative flex justify-between lg:w-auto  px-4 lg:static lg:block lg:justify-start\">
      <a class=\"text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white\" href=\"#pablo\">
        pink Color
      </a>
      <button class=\"cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none\" type=\"button\">
        <span class=\"block relative w-6 h-px rounded-sm bg-white\"></span>
        <span class=\"block relative w-6 h-px rounded-sm bg-white mt-1\"></span>
        <span class=\"block relative w-6 h-px rounded-sm bg-white mt-1\"></span>
      </button>
    </div>
    <div class=\"lg:flex flex-grow items-center\" id=\"example-navbar-warning\">
      <ul class=\"flex flex-col lg:flex-row list-none ml-auto\">
          <li class=\"nav-item\">
            <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
              Discover
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
              Profile
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
              Setting
            </a>
          </li>
      </ul>
    </div>
  </div>
</nav>
<header class=\"md:container md:mx-auto\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          ";
        // line 79
        if (($context["logo"] ?? null)) {
            // line 80
            echo "            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></a>
          ";
        } else {
            // line 82
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 84
        echo "        </div>
      </div>
      <div class=\"col-md-5\">";
        // line 86
        echo ($context["search"] ?? null);
        echo "</div>
      <div class=\"col-md-4 col-lg-3\">";
        // line 87
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>
<div class=\"flex flex-wrap py-2\">
  <div class=\"w-full px-4\">
    <nav class=\"relative flex flex-wrap items-center justify-between px-2 py-3 bg-coolGray-800 rounded\">
      <div class=\"container px-4 mx-auto flex flex-wrap items-center justify-between\">
        <div class=\"w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start\">
          <a class=\"text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white\" href=\"#pablo\">
            blueGray Starter Menu
          </a>
          <button class=\"text-white cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none\" type=\"button\" onclick=\"toggleNavbar('example-collapse-navbar')\">
            <i class=\"fas fa-bars\"></i>
          </button>
        </div>
        <div class=\"lg:flex lg:flex-grow items-center hidden\" id=\"example-collapse-navbar\">
          <ul class=\"flex flex-col lg:flex-row list-none lg:ml-auto\">
            <li class=\"nav-item\">
              <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
                Discover
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
                Profile
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"px-3 py-2 flex items-center text-xs uppercase font-bold leading-snug text-white hover:opacity-75\" href=\"#pablo\">
                Settings
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</div>
<script>
  function toggleNavbar(collapseID){
    document.getElementById(collapseID).classList.toggle(\"hidden\");
    document.getElementById(collapseID).classList.toggle(\"flex\");
  }
</script>
<main class=\"md:container md:mx-auto\">
";
        // line 134
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 134,  234 => 87,  230 => 86,  226 => 84,  218 => 82,  206 => 80,  204 => 79,  157 => 34,  148 => 32,  143 => 31,  132 => 29,  127 => 28,  125 => 27,  116 => 25,  111 => 24,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  81 => 18,  79 => 17,  77 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "/home/alk/Work/cms/opencart/upload/catalog/view/template/common/header.twig");
    }
}
