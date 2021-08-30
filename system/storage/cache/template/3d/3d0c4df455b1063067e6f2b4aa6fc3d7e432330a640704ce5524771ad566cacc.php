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

/* admin/view/template/common/login.twig */
class __TwigTemplate_9994e41e127fbfb22b39875ba248823b7da5e2e2117188dda3d9ed0ac6a0b2ad extends Template
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
        echo "
<div id=\"content\">
  <div class=\"container-fluid\">
    <br/>
    <br/>
    <div class=\"row justify-content-sm-center\">
      <div class=\"col-sm-4 col-md-6\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-lock\"></i> ";
        // line 9
        echo ($context["text_login"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form id=\"form-login\">
              ";
        // line 12
        if (($context["error_warning"] ?? null)) {
            // line 13
            echo "                <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
              ";
        }
        // line 15
        echo "              ";
        if (($context["success"] ?? null)) {
            // line 16
            echo "                <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
              ";
        }
        // line 18
        echo "              <div class=\"row mb-3\">
                <label for=\"input-username\" class=\"form-label\">";
        // line 19
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><i class=\"fas fa-user\"></i></div>
                  <input type=\"text\" name=\"username\" value=\"\" placeholder=\"";
        // line 22
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-password\" class=\"form-label\">";
        // line 26
        echo ($context["entry_password"] ?? null);
        echo "</label>
                <div class=\"input-group mb-2\">
                  <div class=\"input-group-text\"><i class=\"fas fa-lock\"></i></div>
                  <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 29
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                </div>
                <div class=\"mb-3\"><a href=\"";
        // line 31
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" data-oc-action=\"";
        // line 34
        echo ($context["login"] ?? null);
        echo "\" data-oc-form=\"#form-login\" class=\"btn btn-primary\"><i class=\"fas fa-key\"></i> ";
        echo ($context["button_login"] ?? null);
        echo "</button>
              </div>
              ";
        // line 36
        if (($context["redirect"] ?? null)) {
            // line 37
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
              ";
        }
        // line 39
        echo "            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 46
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  121 => 39,  115 => 37,  113 => 36,  106 => 34,  98 => 31,  93 => 29,  87 => 26,  80 => 22,  74 => 19,  71 => 18,  65 => 16,  62 => 15,  56 => 13,  54 => 12,  48 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/login.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/common/login.twig");
    }
}
