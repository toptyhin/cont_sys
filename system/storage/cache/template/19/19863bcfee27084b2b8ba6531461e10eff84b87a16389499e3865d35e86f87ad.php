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

/* admin/view/template/marketplace/installer.twig */
class __TwigTemplate_906f6a4f974eb2e16f72968a5c867f7722258561529488795786837eae7cb106 extends Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_upload"] ?? null);
        echo "\" data-oc-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i></button></div>
\t\t\t<h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 19
        echo ($context["text_progress"] ?? null);
        echo "</legend>
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 21
        echo ($context["entry_progress"] ?? null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10 mt-2\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div id=\"progress-bar\" class=\"progress-bar\" style=\"width: 0%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"progress-text\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>";
        // line 31
        echo ($context["text_installed"] ?? null);
        echo "</legend>
\t\t\t\t\t<div id=\"extension\">";
        // line 32
        echo ($context["list"] ?? null);
        echo "</div>
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#extension').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#extension').load(this.href);
});

\$('#extension').load('index.php?route=marketplace/installer|extension&user_token=";
        // line 45
        echo ($context["user_token"] ?? null);
        echo "');

// Upload
\$('#button-upload').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    \$('#form-upload input[name=\\'file\\']').on('change', function() {
        if (this.files[0].size > ";
        // line 56
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
            \$(this).val('');

            alert('";
        // line 59
        echo ($context["error_upload_size"] ?? null);
        echo "');
        }
    });

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'file\\']').val() != '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=marketplace/installer|upload&user_token=";
        // line 72
        echo ($context["user_token"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('#button-upload').button('loading');
                },
                complete: function() {
                    \$('#button-upload').button('reset');
                },
                success: function(json) {
                    if (json['error']) {
                        alert(json['error']);
                    }

                    if (json['success']) {
                        alert(json['success']);

                        \$('#extension').load('index.php?route=marketplace/installer|extension&user_token=";
        // line 93
        echo ($context["user_token"] ?? null);
        echo "');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

// Install
\$('#extension').on('click', '.btn-success, .btn-warning', function(e) {
    e.preventDefault();

    var element = this;

    \$('#progress-bar').removeClass('progress-bar-danger progress-bar-success').css('width', '0%');
    \$('#progress-text').html('');

    \$.ajax({
        url: \$(element).attr('href'),
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
                \$('#progress-bar').addClass('progress-bar-danger');
                \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
                \$('#progress-bar').addClass('progress-bar-success').css('width', '100%');
                \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                \$('#extension').load('index.php?route=marketplace/installer|extension&user_token=";
        // line 135
        echo ($context["user_token"] ?? null);
        echo "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Delete
\$('#extension').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    if (confirm('";
        // line 151
        echo ($context["text_confirm"] ?? null);
        echo "')) {
        \$.ajax({
            url: \$(element).attr('href'),
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
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#extension').load('index.php?route=marketplace/installer|extension&user_token=";
        // line 171
        echo ($context["user_token"] ?? null);
        echo "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 182
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 182,  269 => 171,  246 => 151,  227 => 135,  182 => 93,  158 => 72,  142 => 59,  136 => 56,  122 => 45,  106 => 32,  102 => 31,  89 => 21,  84 => 19,  78 => 16,  71 => 11,  60 => 9,  56 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/installer.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/marketplace/installer.twig");
    }
}
