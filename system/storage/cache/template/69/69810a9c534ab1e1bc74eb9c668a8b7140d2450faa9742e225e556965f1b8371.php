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

/* admin/view/template/common/dashboard.twig */
class __TwigTemplate_f83f3c3b869fdaf22b8c000f4ab899c641c3b83aea437f7fbb01ed85eb7e0278 extends Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      ";
        // line 5
        if (($context["developer_status"] ?? null)) {
            // line 6
            echo "        <div class=\"float-end\">
          <button type=\"button\" id=\"button-setting\" data-bs-toggle=\"tooltip\" title=\"";
            // line 7
            echo ($context["button_developer"] ?? null);
            echo "\" data-oc-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        </div>
      ";
        }
        // line 10
        echo "      <h1>";
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 20
            echo "      <div class=\"row\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 22
                echo "          ";
                $context["class"] = sprintf("col-lg-%s %s", twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 22), "col-md-3 col-sm-6");
                // line 23
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 24
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["dashboard_2"], "width", [], "any", false, false, false, 24) > 3)) {
                        // line 25
                        echo "              ";
                        $context["class"] = sprintf("col-lg-%s %s", twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "width", [], "any", false, false, false, 25), "col-md-12 col-sm-12");
                        // line 26
                        echo "            ";
                    }
                    // line 27
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "          <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["dashboard_1"], "output", [], "any", false, false, false, 28);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>
  ";
        // line 33
        echo ($context["security"] ?? null);
        echo "
</div>
<script type=\"text/javascript\"><!--
\$('#button-setting').on('click', function() {
    \$.ajax({
        url: 'index.php?route=common/developer&user_token=";
        // line 38
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-setting').button('loading');
        },
        complete: function() {
            \$('#button-setting').button('reset');
        },
        success: function(html) {
            \$('#modal-developer').remove();

            \$('body').prepend(html);

            \$('#modal-developer').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('input[name=\\'developer_sass\\']').on('change', function() {
    \$.ajax({
        url: 'index.php?route=common/developer|edit&user_token=";
        // line 62
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: \$('input[name=\\'developer_sass\\']:checked'),
        dataType: 'json',
        beforeSend: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', true);
        },
        complete: function() {
            \$('input[name=\\'developer_sass\\']').prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();
            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#modal-developer table button').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=common/developer|' + \$(element).attr('value') + '&user_token=";
        // line 92
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-developer .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 118
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "admin/view/template/common/dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 118,  208 => 92,  175 => 62,  148 => 38,  140 => 33,  137 => 32,  130 => 30,  119 => 28,  113 => 27,  110 => 26,  107 => 25,  104 => 24,  99 => 23,  96 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 15,  68 => 13,  64 => 12,  58 => 10,  50 => 7,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/common/dashboard.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/common/dashboard.twig");
    }
}
