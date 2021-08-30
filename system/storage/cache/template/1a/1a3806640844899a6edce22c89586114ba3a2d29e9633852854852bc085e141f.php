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

/* admin/view/template/setting/setting.twig */
class __TwigTemplate_f917c68180235c1df4af485630638d38b59123f2e01ea535bc2e21b9fce1eaf1 extends Template
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
      <div class=\"float-end\">
        <button type=\"button\" data-oc-action=\"";
        // line 6
        echo ($context["save"] ?? null);
        echo "\" data-oc-form=\"#form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_back"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 19
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        echo ($context["tab_store"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        echo ($context["tab_local"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        echo ($context["tab_option"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        echo ($context["tab_mail"] ?? null);
        echo "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        echo ($context["tab_server"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <div class=\"row mb-3 required\">
                <label for=\"input-meta-title\" class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_meta_title"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 36
        echo ($context["config_meta_title"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meta_title"] ?? null);
        echo "\" id=\"input-meta-title\" class=\"form-control\"/>
                  <div id=\"error-meta-title\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-description\" class=\"col-sm-2 col-form-label\">";
        // line 41
        echo ($context["entry_meta_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 43
        echo ($context["entry_meta_description"] ?? null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo ($context["config_meta_description"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-meta-keyword\" class=\"col-sm-2 col-form-label\">";
        // line 47
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 49
        echo ($context["entry_meta_keyword"] ?? null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo ($context["config_meta_keyword"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 53
        echo ($context["entry_logo"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 56
        echo ($context["logo"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        echo ($context["config_logo"] ?? null);
        echo "\" id=\"input-logo\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 58
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 59
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 65
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 69
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 69) == ($context["config_theme"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 69);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 77
        echo ($context["entry_layout"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 81
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 81) == ($context["config_layout_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 81);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 89
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 91
        echo ($context["config_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\"/>
                  <div id=\"error-name\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 96
        echo ($context["entry_owner"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 98
        echo ($context["config_owner"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_owner"] ?? null);
        echo "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 103
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 105
        echo ($context["entry_address"] ?? null);
        echo "\" id=\"input-address\" class=\"form-control\">";
        echo ($context["config_address"] ?? null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 109
        echo ($context["entry_geocode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 111
        echo ($context["config_geocode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_geocode"] ?? null);
        echo "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text text-muted\">";
        // line 112
        echo ($context["help_geocode"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 116
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 118
        echo ($context["config_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 123
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 125
        echo ($context["config_telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 130
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"card image\">
                    <img src=\"";
        // line 133
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        echo ($context["config_image"] ?? null);
        echo "\" id=\"input-image\"/>
                    <div class=\"card-body\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 135
        echo ($context["button_edit"] ?? null);
        echo "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 136
        echo ($context["button_clear"] ?? null);
        echo "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 142
        echo ($context["entry_open"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 144
        echo ($context["entry_open"] ?? null);
        echo "\" id=\"input-open\" class=\"form-control\">";
        echo ($context["config_open"] ?? null);
        echo "</textarea>
                  <div class=\"form-text text-muted\">";
        // line 145
        echo ($context["help_open"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 149
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 151
        echo ($context["entry_comment"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["config_comment"] ?? null);
        echo "</textarea>
                  <div class=\"form-text text-muted\">";
        // line 152
        echo ($context["help_comment"] ?? null);
        echo "</div>
                </div>
              </div>
              ";
        // line 155
        if (($context["locations"] ?? null)) {
            // line 156
            echo "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 157
            echo ($context["entry_location"] ?? null);
            echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 161
                echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" id=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-input\"";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162), ($context["config_location"] ?? null))) {
                    echo " checked";
                }
                echo "/> <label for=\"input-location-";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 162);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 162);
                echo "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                    </div>
                    <div class=\"form-text text-muted\">";
            // line 166
            echo ($context["help_location"] ?? null);
            echo "</div>
                  </div>
                </div>
              ";
        }
        // line 170
        echo "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 173
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                    ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 177
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 177) == ($context["config_country_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 177);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 183
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 189
        echo ($context["entry_timezone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 193
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 193) == ($context["config_timezone"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 193);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 199
        echo ($context["entry_language"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-select\">
                    ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 203
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 203) == ($context["config_language"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 203);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 209
        echo ($context["entry_language_admin"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 213
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 213) == ($context["config_language_admin"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 213);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 219
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 223
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 223) == ($context["config_currency"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 223);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                  </select>
                  <div class=\"form-text text-muted\">";
        // line 226
        echo ($context["help_currency"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 230
        echo ($context["entry_currency_engine"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 234
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 234) == ($context["config_currency_engine"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 234);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency_engine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 240
        echo ($context["entry_currency_auto"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"btn-group\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto-yes\" class=\"btn-check\"";
        // line 244
        if (($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-currency-auto-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" id=\"input-currency-auto-no\" class=\"btn-check\"";
        if ( !($context["config_currency_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-currency-auto-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                  <div class=\"form-text text-muted\">";
        // line 247
        echo ($context["help_currency_auto"] ?? null);
        echo "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 251
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                    ";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 255
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 255);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 255) == ($context["config_length_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 255);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "                  </select>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 261
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                    ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 265
            echo "                      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 265);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 265) == ($context["config_weight_class_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 265);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                  </select>
                </div>
              </div>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <fieldset>
                <legend><a href=\"#collapse-product\" data-bs-toggle=\"collapse\">";
        // line 273
        echo ($context["text_product"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-product\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3 required\">
                    <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 276
        echo ($context["entry_product_description_length"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 278
        echo ($context["config_product_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product_description_length"] ?? null);
        echo "\" id=\"input-product-description-length\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 279
        echo ($context["help_product_description_length"] ?? null);
        echo "</div>
                      <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 284
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 286
        echo ($context["config_pagination"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination"] ?? null);
        echo "\" id=\"input-pagination\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 287
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                      <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 292
        echo ($context["entry_product_count"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_product_count\" value=\"1\" id=\"input-product-count-yes\" class=\"btn-check\"";
        // line 295
        if (($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-count-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_product_count\" value=\"0\" id=\"input-product-count-no\" class=\"btn-check\"";
        if ( !($context["config_product_count"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-product-count-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 297
        echo ($context["help_product_count"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 301
        echo ($context["entry_pagination_admin"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 303
        echo ($context["config_pagination_admin"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_pagination_admin"] ?? null);
        echo "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 304
        echo ($context["help_pagination"] ?? null);
        echo "</div>
                      <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-review\" data-bs-toggle=\"collapse\">";
        // line 311
        echo ($context["text_review"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-review\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 314
        echo ($context["entry_review_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_review_status\" value=\"1\" id=\"input-review-status-yes\" class=\"btn-check\"";
        // line 317
        if (($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-status-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_review_status\" value=\"0\" id=\"input-review-status-no\" class=\"btn-check\"";
        if ( !($context["config_review_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-status-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 319
        echo ($context["help_review"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 323
        echo ($context["entry_review_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest-yes\" class=\"btn-check\"";
        // line 326
        if (($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-guest-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_review_guest\" value=\"0\" id=\"input-review-guest-no\" class=\"btn-check\"";
        if ( !($context["config_review_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-review-guest-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 328
        echo ($context["help_review_guest"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-voucher\" data-bs-toggle=\"collapse\">";
        // line 334
        echo ($context["text_voucher"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-voucher\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3 required\">
                    <label for=\"input-voucher-min\" class=\"col-sm-2 col-form-label\">";
        // line 337
        echo ($context["entry_voucher_min"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 339
        echo ($context["config_voucher_min"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_min"] ?? null);
        echo "\" id=\"input-voucher-min\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 340
        echo ($context["help_voucher_min"] ?? null);
        echo "</div>
                      <div id=\"error-voucher-min\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3 required\">
                    <label for=\"input-voucher-max\" class=\"col-sm-2 col-form-label\">";
        // line 345
        echo ($context["entry_voucher_max"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 347
        echo ($context["config_voucher_max"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher_max"] ?? null);
        echo "\" id=\"input-voucher-max\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 348
        echo ($context["help_voucher_max"] ?? null);
        echo "</div>
                      <div id=\"error-voucher-max\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-legal\" data-bs-toggle=\"collapse\">";
        // line 355
        echo ($context["text_legal"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-legal\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 358
        echo ($context["entry_cookie"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                        <option value=\"0\">";
        // line 361
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 363
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 363);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 363) == ($context["config_cookie_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 363);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 366
        echo ($context["help_cookie"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 370
        echo ($context["entry_gdpr"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                        <option value=\"0\">";
        // line 373
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 375
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 375);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 375) == ($context["config_gdpr_id"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 375);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 378
        echo ($context["help_gdpr"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 382
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 384
        echo ($context["config_gdpr_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_gdpr_limit"] ?? null);
        echo "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 385
        echo ($context["help_gdpr_limit"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-tax\" data-bs-toggle=\"collapse\">";
        // line 391
        echo ($context["text_tax"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-tax\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 394
        echo ($context["entry_tax"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_tax\" value=\"1\" id=\"input-tax-yes\" class=\"btn-check\"";
        // line 397
        if (($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-tax-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_tax\" value=\"0\" id=\"input-tax-no\" class=\"btn-check\"";
        if ( !($context["config_tax"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-tax-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 402
        echo ($context["entry_tax_default"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                        <option value=\"\">";
        // line 405
        echo ($context["text_none"] ?? null);
        echo "</option>
                        <option value=\"shipping\"";
        // line 406
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                        <option value=\"payment\"";
        // line 407
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                      </select>
                      <div class=\"form-text text-muted\">";
        // line 409
        echo ($context["help_tax_default"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 413
        echo ($context["entry_tax_customer"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                        <option value=\"\">";
        // line 416
        echo ($context["text_none"] ?? null);
        echo "</option>
                        <option value=\"shipping\"";
        // line 417
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_shipping"] ?? null);
        echo "</option>
                        <option value=\"payment\"";
        // line 418
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            echo " selected";
        }
        echo ">";
        echo ($context["text_payment"] ?? null);
        echo "</option>
                      </select>
                      <div class=\"form-text text-muted\">";
        // line 420
        echo ($context["help_tax_customer"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-account\" data-bs-toggle=\"collapse\">";
        // line 426
        echo ($context["text_account"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-account\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 429
        echo ($context["entry_customer_online"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online-yes\" class=\"btn-check\"";
        // line 432
        if (($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-online-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_online\" value=\"0\" id=\"input-customer-online-no\" class=\"btn-check\"";
        if ( !($context["config_customer_online"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-online-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 434
        echo ($context["help_customer_online"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 438
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"input-group\">
                        <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 441
        echo ($context["config_customer_online_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer_online_expire"] ?? null);
        echo "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        echo ($context["text_hour"] ?? null);
        echo "</span>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 443
        echo ($context["help_customer_online_expire"] ?? null);
        echo "</div>
                      <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 448
        echo ($context["entry_customer_activity"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity-yes\" class=\"btn-check\"";
        // line 451
        if (($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-activity-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" id=\"input-customer-activity-no\" class=\"btn-check\"";
        if ( !($context["config_customer_activity"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-activity-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 453
        echo ($context["help_customer_activity"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 457
        echo ($context["entry_customer_search"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search-yes\" class=\"btn-check\"";
        // line 460
        if (($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-search-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_search\" value=\"0\" id=\"input-customer-search-no\" class=\"btn-check\"";
        if ( !($context["config_customer_search"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-search-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 465
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                        ";
        // line 468
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 469
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 469);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 469) == ($context["config_customer_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 469);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 471
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 472
        echo ($context["help_customer_group"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 476
        echo ($context["entry_customer_group_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 479
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 480
            echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 481
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 481);
            echo "\" id=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 481);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 481), ($context["config_customer_group_display"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-customer-group-";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 481);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 481);
            echo "</label>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 484
        echo "                      </div>
                      <div class=\"form-text text-muted\">";
        // line 485
        echo ($context["help_customer_group_display"] ?? null);
        echo "</div>
                      <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 490
        echo ($context["entry_customer_price"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price-yes\" class=\"btn-check\"";
        // line 493
        if (($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-price-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_customer_price\" value=\"0\" id=\"input-customer-price-no\" class=\"btn-check\"";
        if ( !($context["config_customer_price"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-customer-price-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 495
        echo ($context["help_customer_price"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 499
        echo ($context["entry_login_attempts"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 501
        echo ($context["config_login_attempts"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_login_attempts"] ?? null);
        echo "\" id=\"input-login-attempts\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 502
        echo ($context["help_login_attempts"] ?? null);
        echo "</div>
                      <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 507
        echo ($context["entry_account"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                        <option value=\"0\">";
        // line 510
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 512
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 512);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 512) == ($context["config_account_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 512);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 515
        echo ($context["help_account"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-checkout\" data-bs-toggle=\"collapse\">";
        // line 521
        echo ($context["text_checkout"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-checkout\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 524
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 526
        echo ($context["config_invoice_prefix"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_invoice_prefix"] ?? null);
        echo "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 527
        echo ($context["help_invoice_prefix"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 531
        echo ($context["entry_cart_weight"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight-yes\" class=\"btn-check\"";
        // line 534
        if (($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-cart-weight-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" id=\"input-cart-weight-no\" class=\"btn-check\"";
        if ( !($context["config_cart_weight"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-cart-weight-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 536
        echo ($context["help_cart_weight"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 540
        echo ($context["entry_checkout_guest"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest-yes\" class=\"btn-check\"";
        // line 543
        if (($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-guest-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" id=\"input-checkout-guest-no\" class=\"btn-check\"";
        if ( !($context["config_checkout_guest"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-guest-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 545
        echo ($context["help_checkout_guest"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 549
        echo ($context["entry_checkout_address"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_checkout_address\" value=\"1\" id=\"input-checkout-address-yes\" class=\"btn-check\"";
        // line 552
        if (($context["config_checkout_address"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-address-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_checkout_address\" value=\"0\" id=\"input-checkout-address-no\" class=\"btn-check\"";
        if ( !($context["config_checkout_address"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-checkout-address-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 554
        echo ($context["help_checkout_address"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 558
        echo ($context["entry_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                        <option value=\"0\">";
        // line 561
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 562
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 563
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 563);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 563) == ($context["config_checkout_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 563);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 565
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 566
        echo ($context["help_checkout"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 570
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                        ";
        // line 573
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 574
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 574);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 574) == ($context["config_order_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 574);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 576
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 577
        echo ($context["help_order_status"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 581
        echo ($context["entry_processing_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 584
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 585
            echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 586
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 586);
            echo "\" id=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 586);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 586), ($context["config_processing_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-processing-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 586);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 586);
            echo "</label>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 589
        echo "                      </div>
                      <div class=\"form-text text-muted\">";
        // line 590
        echo ($context["help_processing_status"] ?? null);
        echo "</div>
                      <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 595
        echo ($context["entry_complete_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 599
            echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 600
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 600);
            echo "\" id=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 600);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 600), ($context["config_complete_status"] ?? null))) {
                echo " checked";
            }
            echo "/> <label id=\"input-complete-status-";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 600);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 600);
            echo "</label>
                          </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        echo "                      </div>
                      <div class=\"form-text text-muted\">";
        // line 604
        echo ($context["help_complete_status"] ?? null);
        echo "</div>
                      <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 609
        echo ($context["entry_fraud_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                        ";
        // line 612
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 613
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 613);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 613) == ($context["config_fraud_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 613);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 615
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 616
        echo ($context["help_fraud_status"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 620
        echo ($context["entry_api"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                        <option value=\"0\">";
        // line 623
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 624
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 625
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 625);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 625) == ($context["config_api_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 625);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 628
        echo ($context["help_api"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-stock\" data-bs-toggle=\"collapse\">";
        // line 634
        echo ($context["text_stock"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-stock\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 637
        echo ($context["entry_stock_display"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display-yes\" class=\"btn-check\"";
        // line 640
        if (($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-display-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_display\" value=\"0\" id=\"input-stock-display-no\" class=\"btn-check\"";
        if ( !($context["config_stock_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-display-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 642
        echo ($context["help_stock_display"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 646
        echo ($context["entry_stock_warning"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning-yes\" class=\"btn-check\"";
        // line 649
        if (($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-warning-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" id=\"input-stock-warning-no\" class=\"btn-check\"";
        if ( !($context["config_stock_warning"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-warning-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 651
        echo ($context["help_stock_warning"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 655
        echo ($context["entry_stock_checkout"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout-yes\" class=\"btn-check\"";
        // line 658
        if (($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-checkout-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" id=\"input-stock-checkout-no\" class=\"btn-check\"";
        if ( !($context["config_stock_checkout"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-stock-checkout-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 660
        echo ($context["help_stock_checkout"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-affiliate\" data-bs-toggle=\"collapse\">";
        // line 666
        echo ($context["text_affiliate"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-affiliate\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 669
        echo ($context["entry_affiliate_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status-yes\" class=\"btn-check\"";
        // line 672
        if (($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-status-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_status\" value=\"0\" id=\"input-affiliate-status-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_status"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-status-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 674
        echo ($context["help_affiliate_status"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 678
        echo ($context["entry_affiliate_group"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                        ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 682
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 682);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 682) == ($context["config_affiliate_group_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 682);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 688
        echo ($context["entry_affiliate_approval"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval-yes\" class=\"btn-check\"";
        // line 691
        if (($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-approval-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" id=\"input-affiliate-approval-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_approval"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-approval-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 693
        echo ($context["help_affiliate_approval"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 697
        echo ($context["entry_affiliate_auto"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"btn-group\">
                        <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto-yes\" class=\"btn-check\"";
        // line 700
        if (($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-auto-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" id=\"input-affiliate-auto-no\" class=\"btn-check\"";
        if ( !($context["config_affiliate_auto"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-affiliate-auto-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                      </div>
                      <div class=\"form-text text-muted\">";
        // line 702
        echo ($context["help_affiliate_auto"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 706
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 708
        echo ($context["config_affiliate_commission"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_affiliate_commission"] ?? null);
        echo "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                      <div class=\"form-text text-muted\">";
        // line 709
        echo ($context["help_affiliate_commission"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 713
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                        <option value=\"0\">";
        // line 716
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 717
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 718
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 718);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 718) == ($context["config_affiliate_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 718);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 720
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 721
        echo ($context["help_affiliate"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-return\" data-bs-toggle=\"collapse\">";
        // line 727
        echo ($context["text_return"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-return\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 730
        echo ($context["entry_return"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                        <option value=\"0\">";
        // line 733
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 734
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 735
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 735);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 735) == ($context["config_return_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 735);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 737
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 738
        echo ($context["help_return"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 742
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                        ";
        // line 745
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 746
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 746);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 746) == ($context["config_return_status_id"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 746);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 748
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 749
        echo ($context["help_return_status"] ?? null);
        echo "</div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend><a href=\"#collapse-captcha\" data-bs-toggle=\"collapse\">";
        // line 755
        echo ($context["text_captcha"] ?? null);
        echo "</a></legend>
                <div id=\"collapse-captcha\" class=\"collapse\" data-bs-parent=\"#tab-option\">
                  <div class=\"row mb-3\">
                    <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 758
        echo ($context["entry_captcha"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                        <option value=\"\">";
        // line 761
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 762
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 763
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 763);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 763) == ($context["config_captcha"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 763);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 765
        echo "                      </select>
                      <div class=\"form-text text-muted\">";
        // line 766
        echo ($context["help_captcha"] ?? null);
        echo "</div>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-2 col-form-label\">";
        // line 770
        echo ($context["entry_captcha_page"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                        ";
        // line 773
        $context["captcha_page_row"] = 0;
        // line 774
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 775
            echo "                          <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 776
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 776);
            echo "\" id=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 776), ($context["config_captcha_page"] ?? null))) {
                echo " checked";
            }
            echo "/> <label for=\"input-captcha-";
            echo ($context["captcha_page_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 776);
            echo "</label>
                          </div>
                          ";
            // line 778
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 779
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 780
        echo "                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 788
        echo ($context["text_image_size"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 790
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 794
        echo ($context["config_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 797
        echo ($context["config_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 804
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 808
        echo ($context["config_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 811
        echo ($context["config_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 818
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 822
        echo ($context["config_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 825
        echo ($context["config_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 832
        echo ($context["entry_image_product"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 836
        echo ($context["config_image_product_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 839
        echo ($context["config_image_product_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 846
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 850
        echo ($context["config_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 853
        echo ($context["config_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related\" class=\"col-sm-2 col-form-label\">";
        // line 860
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 864
        echo ($context["config_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 867
        echo ($context["config_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare\" class=\"col-sm-2 col-form-label\">";
        // line 874
        echo ($context["entry_image_compare"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 878
        echo ($context["config_image_compare_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 881
        echo ($context["config_image_compare_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist\" class=\"col-sm-2 col-form-label\">";
        // line 888
        echo ($context["entry_image_wishlist"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 892
        echo ($context["config_image_wishlist_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 895
        echo ($context["config_image_wishlist_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart\" class=\"col-sm-2 col-form-label\">";
        // line 902
        echo ($context["entry_image_cart"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 906
        echo ($context["config_image_cart_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 909
        echo ($context["config_image_cart_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location\" class=\"col-sm-2 col-form-label\">";
        // line 916
        echo ($context["entry_image_location"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 920
        echo ($context["config_image_location_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 923
        echo ($context["config_image_location_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 933
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 935
        echo ($context["entry_mail_engine"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"mail\"";
        // line 938
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_mail"] ?? null);
        echo "</option>
                      <option value=\"smtp\"";
        // line 939
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_smtp"] ?? null);
        echo "</option>
                    </select>
                    <div class=\"form-text text-muted\">";
        // line 941
        echo ($context["help_mail_engine"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 945
        echo ($context["entry_mail_parameter"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 947
        echo ($context["config_mail_parameter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_parameter"] ?? null);
        echo "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 948
        echo ($context["help_mail_parameter"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 954
        echo ($context["text_smtp"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 956
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 958
        echo ($context["config_mail_smtp_hostname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_hostname"] ?? null);
        echo "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 959
        echo ($context["help_mail_smtp_hostname"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 963
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 965
        echo ($context["config_mail_smtp_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_username"] ?? null);
        echo "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 969
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 971
        echo ($context["config_mail_smtp_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_password"] ?? null);
        echo "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 972
        echo ($context["help_mail_smtp_password"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 976
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 978
        echo ($context["config_mail_smtp_port"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_port"] ?? null);
        echo "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 982
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 984
        echo ($context["config_mail_smtp_timeout"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_mail_smtp_timeout"] ?? null);
        echo "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 989
        echo ($context["text_mail_alert"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 991
        echo ($context["entry_mail_alert"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 994
        $context["mail_alert_row"] = 0;
        // line 995
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 996
            echo "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 997
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 997);
            echo "\" id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-input\"";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 997), ($context["config_mail_alert"] ?? null))) {
                echo " checked";
            }
            echo "/> <label id=\"input-mail-alert-";
            echo ($context["mail_alert_row"] ?? null);
            echo "\" class=\"form-check-label\">";
            echo twig_get_attribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 997);
            echo "</label>
                        </div>
                        ";
            // line 999
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1000
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail_alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1001
        echo "                    </div>
                    <div class=\"form-text text-muted\">";
        // line 1002
        echo ($context["help_mail_alert"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1006
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1008
        echo ($context["entry_mail_alert_email"] ?? null);
        echo "\" id=\"input-alert-email\" class=\"form-control\">";
        echo ($context["config_mail_alert_email"] ?? null);
        echo "</textarea>
                    <div class=\"form-text text-muted\">";
        // line 1009
        echo ($context["help_mail_alert_email"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1016
        echo ($context["text_general"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1018
        echo ($context["entry_maintenance"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance-yes\" class=\"btn-check\"";
        // line 1021
        if (($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-maintenance-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_maintenance\" value=\"0\" id=\"input-maintenance-no\" class=\"btn-check\"";
        if ( !($context["config_maintenance"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-maintenance-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text text-muted\">";
        // line 1023
        echo ($context["help_maintenance"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1027
        echo ($context["entry_session_expire"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1029
        echo ($context["config_session_expire"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_session_expire"] ?? null);
        echo "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 1030
        echo ($context["help_session_expire"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1034
        echo ($context["entry_seo_url"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url-yes\" class=\"btn-check\"";
        // line 1037
        if (($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-seo-url-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_seo_url\" value=\"0\" id=\"input-seo-url-no\" class=\"btn-check\"";
        if ( !($context["config_seo_url"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-seo-url-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text text-muted\">";
        // line 1039
        echo ($context["help_seo_url"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-robots\" class=\"col-sm-2 col-form-label\">";
        // line 1043
        echo ($context["entry_robots"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1045
        echo ($context["entry_robots"] ?? null);
        echo "\" id=\"input-robots\" class=\"form-control\">";
        echo ($context["config_robots"] ?? null);
        echo "</textarea>
                    <div class=\"form-text text-muted\">";
        // line 1046
        echo ($context["help_robots"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1050
        echo ($context["entry_compression"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1052
        echo ($context["config_compression"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_compression"] ?? null);
        echo "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 1053
        echo ($context["help_compression"] ?? null);
        echo "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1058
        echo ($context["text_security"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1060
        echo ($context["entry_shared"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_shared\" value=\"1\" id=\"input-shared-yes\" class=\"btn-check\"";
        // line 1063
        if (($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shared-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_shared\" value=\"0\" id=\"input-shared-no\" class=\"btn-check\"";
        if ( !($context["config_shared"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-shared-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                    <div class=\"form-text text-muted\">";
        // line 1065
        echo ($context["help_shared"] ?? null);
        echo "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-encryption\" class=\"col-sm-2 col-form-label\">";
        // line 1069
        echo ($context["entry_encryption"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1071
        echo ($context["entry_encryption"] ?? null);
        echo "\" id=\"input-encryption\" class=\"form-control\">";
        echo ($context["config_encryption"] ?? null);
        echo "</textarea>
                    <div class=\"form-text text-muted\">";
        // line 1072
        echo ($context["help_encryption"] ?? null);
        echo "</div>
                    <div id=\"error-encryption\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1078
        echo ($context["text_upload"] ?? null);
        echo "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1080
        echo ($context["entry_file_max_size"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1082
        echo ($context["config_file_max_size"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_file_max_size"] ?? null);
        echo "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text text-muted\">";
        // line 1083
        echo ($context["help_file_max_size"] ?? null);
        echo "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1088
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1090
        echo ($context["entry_file_ext_allowed"] ?? null);
        echo "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        echo ($context["config_file_ext_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text text-muted\">";
        // line 1091
        echo ($context["help_file_ext_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1096
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1098
        echo ($context["entry_file_mime_allowed"] ?? null);
        echo "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        echo ($context["config_file_mime_allowed"] ?? null);
        echo "</textarea>
                    <div class=\"form-text text-muted\">";
        // line 1099
        echo ($context["help_file_mime_allowed"] ?? null);
        echo "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1105
        echo ($context["text_error"] ?? null);
        echo "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1107
        echo ($context["entry_error_display"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" id=\"input-error-display-yes\" class=\"btn-check\"";
        // line 1110
        if (($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-display-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_error_display\" value=\"0\" id=\"input-error-display-no\" class=\"btn-check\"";
        if ( !($context["config_error_display"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-display-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1115
        echo ($context["entry_error_log"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\">
                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" id=\"input-error-log-yes\" class=\"btn-check\"";
        // line 1118
        if (($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-log-yes\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_yes"] ?? null);
        echo "</label> <input type=\"radio\" name=\"config_error_log\" value=\"0\" id=\"input-error-log-no\" class=\"btn-check\"";
        if ( !($context["config_error_log"] ?? null)) {
            echo " checked";
        }
        echo "/> <label for=\"input-error-log-no\" class=\"btn btn-outline-secondary\">";
        echo ($context["text_no"] ?? null);
        echo "</label>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1123
        echo ($context["entry_error_filename"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1125
        echo ($context["config_error_filename"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_error_filename"] ?? null);
        echo "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting|theme&user_token=";
        // line 1142
        echo ($context["user_token"] ?? null);
        echo "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country|country&user_token=";
        // line 1166
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">";
        // line 1175
        echo ($context["text_select"] ?? null);
        echo "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1181
        echo ($context["config_zone_id"] ?? null);
        echo "') {
                        html += ' selected=\"selected\"';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected=\"selected\">";
        // line 1188
        echo ($context["text_none"] ?? null);
        echo "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            oc.alert('danger', thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1204
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/view/template/setting/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3117 => 1204,  3098 => 1188,  3088 => 1181,  3079 => 1175,  3067 => 1166,  3040 => 1142,  3018 => 1125,  3013 => 1123,  2995 => 1118,  2989 => 1115,  2971 => 1110,  2965 => 1107,  2960 => 1105,  2951 => 1099,  2945 => 1098,  2940 => 1096,  2932 => 1091,  2926 => 1090,  2921 => 1088,  2913 => 1083,  2907 => 1082,  2902 => 1080,  2897 => 1078,  2888 => 1072,  2882 => 1071,  2877 => 1069,  2870 => 1065,  2855 => 1063,  2849 => 1060,  2844 => 1058,  2836 => 1053,  2830 => 1052,  2825 => 1050,  2818 => 1046,  2812 => 1045,  2807 => 1043,  2800 => 1039,  2785 => 1037,  2779 => 1034,  2772 => 1030,  2766 => 1029,  2761 => 1027,  2754 => 1023,  2739 => 1021,  2733 => 1018,  2728 => 1016,  2718 => 1009,  2712 => 1008,  2707 => 1006,  2700 => 1002,  2697 => 1001,  2691 => 1000,  2689 => 999,  2674 => 997,  2671 => 996,  2666 => 995,  2664 => 994,  2658 => 991,  2653 => 989,  2643 => 984,  2638 => 982,  2629 => 978,  2624 => 976,  2617 => 972,  2611 => 971,  2606 => 969,  2597 => 965,  2592 => 963,  2585 => 959,  2579 => 958,  2574 => 956,  2569 => 954,  2560 => 948,  2554 => 947,  2549 => 945,  2542 => 941,  2533 => 939,  2525 => 938,  2519 => 935,  2514 => 933,  2499 => 923,  2491 => 920,  2484 => 916,  2472 => 909,  2464 => 906,  2457 => 902,  2445 => 895,  2437 => 892,  2430 => 888,  2418 => 881,  2410 => 878,  2403 => 874,  2391 => 867,  2383 => 864,  2376 => 860,  2364 => 853,  2356 => 850,  2349 => 846,  2337 => 839,  2329 => 836,  2322 => 832,  2310 => 825,  2302 => 822,  2295 => 818,  2283 => 811,  2275 => 808,  2268 => 804,  2256 => 797,  2248 => 794,  2241 => 790,  2236 => 788,  2226 => 780,  2220 => 779,  2218 => 778,  2203 => 776,  2200 => 775,  2195 => 774,  2193 => 773,  2187 => 770,  2180 => 766,  2177 => 765,  2162 => 763,  2158 => 762,  2154 => 761,  2148 => 758,  2142 => 755,  2133 => 749,  2130 => 748,  2115 => 746,  2111 => 745,  2105 => 742,  2098 => 738,  2095 => 737,  2080 => 735,  2076 => 734,  2072 => 733,  2066 => 730,  2060 => 727,  2051 => 721,  2048 => 720,  2033 => 718,  2029 => 717,  2025 => 716,  2019 => 713,  2012 => 709,  2006 => 708,  2001 => 706,  1994 => 702,  1979 => 700,  1973 => 697,  1966 => 693,  1951 => 691,  1945 => 688,  1939 => 684,  1924 => 682,  1920 => 681,  1914 => 678,  1907 => 674,  1892 => 672,  1886 => 669,  1880 => 666,  1871 => 660,  1856 => 658,  1850 => 655,  1843 => 651,  1828 => 649,  1822 => 646,  1815 => 642,  1800 => 640,  1794 => 637,  1788 => 634,  1779 => 628,  1776 => 627,  1761 => 625,  1757 => 624,  1753 => 623,  1747 => 620,  1740 => 616,  1737 => 615,  1722 => 613,  1718 => 612,  1712 => 609,  1704 => 604,  1701 => 603,  1682 => 600,  1679 => 599,  1675 => 598,  1669 => 595,  1661 => 590,  1658 => 589,  1639 => 586,  1636 => 585,  1632 => 584,  1626 => 581,  1619 => 577,  1616 => 576,  1601 => 574,  1597 => 573,  1591 => 570,  1584 => 566,  1581 => 565,  1566 => 563,  1562 => 562,  1558 => 561,  1552 => 558,  1545 => 554,  1530 => 552,  1524 => 549,  1517 => 545,  1502 => 543,  1496 => 540,  1489 => 536,  1474 => 534,  1468 => 531,  1461 => 527,  1455 => 526,  1450 => 524,  1444 => 521,  1435 => 515,  1432 => 514,  1417 => 512,  1413 => 511,  1409 => 510,  1403 => 507,  1395 => 502,  1389 => 501,  1384 => 499,  1377 => 495,  1362 => 493,  1356 => 490,  1348 => 485,  1345 => 484,  1326 => 481,  1323 => 480,  1319 => 479,  1313 => 476,  1306 => 472,  1303 => 471,  1288 => 469,  1284 => 468,  1278 => 465,  1260 => 460,  1254 => 457,  1247 => 453,  1232 => 451,  1226 => 448,  1218 => 443,  1209 => 441,  1203 => 438,  1196 => 434,  1181 => 432,  1175 => 429,  1169 => 426,  1160 => 420,  1151 => 418,  1143 => 417,  1139 => 416,  1133 => 413,  1126 => 409,  1117 => 407,  1109 => 406,  1105 => 405,  1099 => 402,  1081 => 397,  1075 => 394,  1069 => 391,  1060 => 385,  1054 => 384,  1049 => 382,  1042 => 378,  1039 => 377,  1024 => 375,  1020 => 374,  1016 => 373,  1010 => 370,  1003 => 366,  1000 => 365,  985 => 363,  981 => 362,  977 => 361,  971 => 358,  965 => 355,  955 => 348,  949 => 347,  944 => 345,  936 => 340,  930 => 339,  925 => 337,  919 => 334,  910 => 328,  895 => 326,  889 => 323,  882 => 319,  867 => 317,  861 => 314,  855 => 311,  845 => 304,  839 => 303,  834 => 301,  827 => 297,  812 => 295,  806 => 292,  798 => 287,  792 => 286,  787 => 284,  779 => 279,  773 => 278,  768 => 276,  762 => 273,  754 => 267,  739 => 265,  735 => 264,  729 => 261,  723 => 257,  708 => 255,  704 => 254,  698 => 251,  691 => 247,  675 => 244,  668 => 240,  662 => 236,  647 => 234,  643 => 233,  637 => 230,  630 => 226,  627 => 225,  612 => 223,  608 => 222,  602 => 219,  596 => 215,  581 => 213,  577 => 212,  571 => 209,  565 => 205,  550 => 203,  546 => 202,  540 => 199,  534 => 195,  519 => 193,  515 => 192,  509 => 189,  500 => 183,  494 => 179,  479 => 177,  475 => 176,  469 => 173,  464 => 170,  457 => 166,  454 => 165,  435 => 162,  432 => 161,  428 => 160,  422 => 157,  419 => 156,  417 => 155,  411 => 152,  405 => 151,  400 => 149,  393 => 145,  387 => 144,  382 => 142,  373 => 136,  369 => 135,  360 => 133,  354 => 130,  344 => 125,  339 => 123,  329 => 118,  324 => 116,  317 => 112,  311 => 111,  306 => 109,  297 => 105,  292 => 103,  282 => 98,  277 => 96,  267 => 91,  262 => 89,  254 => 83,  239 => 81,  235 => 80,  229 => 77,  221 => 71,  206 => 69,  202 => 68,  196 => 65,  187 => 59,  183 => 58,  174 => 56,  168 => 53,  159 => 49,  154 => 47,  145 => 43,  140 => 41,  130 => 36,  125 => 34,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  86 => 19,  79 => 14,  68 => 12,  64 => 11,  59 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/setting/setting.twig", "/home/alk/Work/cms/opencart/upload/admin/view/template/setting/setting.twig");
    }
}
