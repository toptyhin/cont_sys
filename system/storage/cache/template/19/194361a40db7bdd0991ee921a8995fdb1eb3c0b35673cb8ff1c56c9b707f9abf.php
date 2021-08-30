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

/* admin/view/template/marketplace/marketplace_list.twig */
class __TwigTemplate_326ae55b4a8867dc7748cad12278f149e86d561e16c14003f68b89437e24b7cd extends Template
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
      <div class=\"float-end\">";
        // line 5
        if ( !($context["error_signature"] ?? null)) {
            // line 6
            echo "          <button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["button_opencart"] ?? null);
            echo "\" class=\"btn btn-info\"><i class=\"fas fa-cog\"></i></button>
        ";
        } else {
            // line 8
            echo "          <button type=\"button\" id=\"button-opencart\" data-bs-toggle=\"tooltip\" title=\"";
            echo ($context["error_signature"] ?? null);
            echo "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fas fa-exclamation-triangle\"></i></button>
        ";
        }
        // line 9
        echo "</div>
      <h1>";
        // line 10
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-puzzle-piece\"></i> ";
        // line 20
        echo ($context["text_list"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group dropdown\">
              <input type=\"text\" name=\"filter_search\" value=\"";
        // line 25
        echo ($context["filter_search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_search"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
              ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 27) == ($context["filter_category"] ?? null))) {
                // line 28
                echo "                  <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\">";
                echo ($context["text_category"] ?? null);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 28);
                echo ") <i class=\"fas fa-caret-down\"></i></button>
                ";
            }
            // line 30
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              <div class=\"dropdown-menu dropdown-menu-right\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "                  <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 33);
            echo "\" class=\"dropdown-item\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 33);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </div>
              <button type=\"button\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"";
        // line 36
        echo ($context["button_filter"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-filter\"></i></button>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 38
        echo ($context["filter_category_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        echo ($context["filter_download_id"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"";
        echo ($context["filter_rating"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"";
        echo ($context["filter_license"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"";
        echo ($context["filter_partner"] ?? null);
        echo "\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"";
        echo ($context["sort"] ?? null);
        echo "\" class=\"form-control\"/>
          </div>
        </div>
        <br/>
        <div class=\"row mb-4\">
          <div class=\"col-sm-auto mr-sm-auto mb-2 mb-lg-0\">
            <div class=\"btn-group\">";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 45
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 45) == ($context["filter_license"] ?? null))) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"btn btn-light active\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 45);
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 45);
                echo "\" class=\"btn btn-light\">";
                echo twig_get_attribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 45);
                echo "</a>";
            }
            // line 46
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
            <div class=\"input-group float-end\">
              <div class=\"input-group-text\"><i class=\"fas fa-sort-amount-down\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-select\">
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 53
            echo "                  <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 53);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 53) == ($context["sort"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 53);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "              </select>
            </div>
          </div>
        </div>
        <div id=\"extension-list\">
          ";
        // line 60
        if (($context["promotions"] ?? null)) {
            // line 61
            echo "            <h3>";
            echo ($context["text_featured"] ?? null);
            echo "</h3>
            <div class=\"row\">
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 64
                echo "                ";
                if ($context["extension"]) {
                    // line 65
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 67);
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 69);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 69);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 69);
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 71);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 71);
                    echo "</a></h4>
                        ";
                    // line 72
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 72);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 76
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 76) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"far fa-star\"></i>";
                        }
                        // line 77
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 79);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 86
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            </div>
            <hr/>
          ";
        }
        // line 90
        echo "          ";
        if (($context["extensions"] ?? null)) {
            // line 91
            echo "            <div class=\"row\">
              ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 93
                echo "                ";
                if ($context["extension"]) {
                    // line 94
                    echo "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 96);
                    echo "\">
                          <div class=\"extension-description\"></div>
                          <img src=\"";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 98);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 98);
                    echo "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 100);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 100);
                    echo "</a></h4>
                        ";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 101);
                    echo "</div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 105
                        echo "                              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 105) >= $context["i"])) {
                            echo "<i class=\"fas fa-star\"></i>";
                        } else {
                            echo "<i class=\"fas fa-star-o\"></i>";
                        }
                        // line 106
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 108);
                    echo " ";
                    echo ($context["text_reviews"] ?? null);
                    echo "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 115
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          ";
        } else {
            // line 117
            echo "            <p class=\"text-center\">";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
          ";
        }
        // line 119
        echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 121
        echo ($context["pagination"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-opencart').on('click', function(e) {
    \$('#modal-opencart').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 132
        echo ($context["user_token"] ?? null);
        echo "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-opencart').button('loading');
        },
        complete: function() {
            \$('#button-opencart').button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            \$('#modal-opencart').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
    var url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 154
        echo ($context["user_token"] ?? null);
        echo "';

    var input = \$('#extension-filter :input');

    for (i = 0; i < input.length; i++) {
        if (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
            url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
        }
    }

    location = url;
});

\$('#input-search').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();

        \$('#button-filter').trigger('click');
    }
});
//--></script>
";
        // line 175
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/marketplace/marketplace_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 175,  448 => 154,  423 => 132,  409 => 121,  405 => 119,  399 => 117,  390 => 115,  378 => 108,  369 => 106,  362 => 105,  358 => 104,  352 => 101,  346 => 100,  337 => 98,  332 => 96,  328 => 94,  325 => 93,  321 => 92,  318 => 91,  315 => 90,  310 => 87,  304 => 86,  292 => 79,  283 => 77,  276 => 76,  272 => 75,  266 => 72,  260 => 71,  251 => 69,  246 => 67,  242 => 65,  239 => 64,  235 => 63,  229 => 61,  227 => 60,  220 => 55,  205 => 53,  201 => 52,  188 => 46,  173 => 45,  169 => 44,  150 => 38,  145 => 36,  142 => 35,  131 => 33,  127 => 32,  124 => 31,  118 => 30,  110 => 28,  107 => 27,  103 => 26,  97 => 25,  89 => 20,  82 => 15,  71 => 13,  67 => 12,  62 => 10,  59 => 9,  53 => 8,  47 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/marketplace/marketplace_list.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/marketplace/marketplace_list.twig");
    }
}
