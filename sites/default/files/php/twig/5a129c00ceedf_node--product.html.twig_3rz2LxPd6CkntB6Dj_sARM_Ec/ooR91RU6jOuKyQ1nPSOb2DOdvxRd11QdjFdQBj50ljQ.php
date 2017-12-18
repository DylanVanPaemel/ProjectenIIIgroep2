<?php

/* themes/gavias_organiz/templates/node/node--product.html.twig */
class __TwigTemplate_50ba35a02afe458bb4a4871e17476134b9da12648598a53e445b316f11e7d7cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "if" => 16);
        $filters = array("clean_class" => 5, "t" => 24, "raw" => 25, "without" => 110);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't', 'raw', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        $context["classes"] = array(0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 5
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 3 => (($this->getAttribute(        // line 6
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 7
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 8
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 9
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 7 => "clearfix");
        // line 13
        echo "
<!-- Start Display article for teaser page -->

";
        // line 16
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser")) {
            // line 17
            echo "  
  <div class=\"product-block\">      
    <div class=\"content-inner\">
      <div class=\"image-inner\">
        ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
            echo "
        <div class=\"action-hover\">
          <div class=\"add-to-cart-block-teaser\">
            <a class=\"btn-link-select-option\" href=\"";
            // line 24
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Options")));
            echo "</a>
            ";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "add_to_cart", array())));
            echo "
          </div>
          <div class=\"quickview\"><a class=\"link-quickview\" href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("QuickView")));
            echo "</a></div>
        </div>
      </div>
      <div class=\"product-content\">
        <h4 class=\"title\"><a href=\"";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a> </h4> 
        <div class=\"content-inner\">
          <div class=\"price\"><div class=\"regular-price\">";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "price", array()), "html", null, true));
            echo "</div></div>
        </div> 
      </div>
    </div>
  </div>

";
        } elseif ((        // line 39
(isset($context["view_mode"]) ? $context["view_mode"] : null) == "teaser_2")) {
            // line 40
            echo "
  <div class=\"product-block-v2\">      
    <div class=\"content-inner\">
      <div class=\"image-inner\">
        ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
            echo "
      </div>
      <div class=\"product-content\">
        <div class=\"post-categories\">";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy_catalog", array()), "html", null, true));
            echo "</div>
        <h4 class=\"title\"><a href=\"";
            // line 48
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a> </h4> 
        <div class=\"content-inner\">
          <div class=\"product-summary\">";
            // line 50
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "summary", array()), "html", null, true));
            echo "</div>
          <div class=\"price\"><div class=\"regular-price\">";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "price", array()), "html", null, true));
            echo "</div></div>
        </div>
        <div class=\"action-hover\">
          <div class=\"add-to-cart-block-teaser\">
            <a class=\"btn-link-select-option\" href=\"";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Options")));
            echo "</a>
            ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "add_to_cart", array())));
            echo "
          </div>
          <div class=\"quickview\"><a class=\"link-quickview\" href=\"";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("QuickView")));
            echo "</a></div>
        </div> 
      </div>
    </div>
  </div>

";
        } else {
            // line 65
            echo "
<!-- Start Display article for detail page -->
<article";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"product-single\">
    <div id=\"product-content-top\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">
          <div class=\"product-thumbnail\">
            ";
            // line 73
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array())) {
                // line 74
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "uc_product_image", array()), "html", null, true));
                echo " 
            ";
            }
            // line 76
            echo "          </div>
        </div>
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">  
          <div class=\"product-content-inner\">
            ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
               <h1";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "post-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h1>
            ";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "         
            <div class=\"product-info\">
              ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "price", array()), "html", null, true));
            echo "
              ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "model", array()), "html", null, true));
            echo "
              <div class=\"post-categories\">";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "taxonomy_catalog", array()), "html", null, true));
            echo "</div>
              <div class=\"product-summary\">";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "body", array()), "summary", array()), "html", null, true));
            echo "</div>
              <div class=\"add-to-cart-content-inner\">
                ";
            // line 89
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "add_to_cart", array())));
            echo "
              </div>
            </div>  
          </div>
        </div>  
      </div>  
    </div>
    
    <div class=\"product-content-bottom\">  
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"tab-product\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-8a52b-1\">";
            // line 102
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Description")));
            echo "</a></li>
              ";
            // line 103
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array())) {
                // line 104
                echo "                <li><a data-toggle=\"tab\" href=\"#tab-8a52b-2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Reviews")));
                echo "</a></li>
              ";
            }
            // line 105
            echo "  
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-8a52b-1\" class=\"tab-pane fade in active\">
                <div";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
                  ";
            // line 110
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "taxonomy_catalog", "uc_product_image", "display_price", "price", "comment", "add_to_cart", "model", "field_product_type"), "html", null, true));
            echo "
                </div>
              </div>
              ";
            // line 113
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array())) {
                // line 114
                echo "                <div id=\"tab-8a52b-2\" class=\"tab-pane fade\">
                  <div id=\"node-single-comment\">
                    ";
                // line 116
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
                echo "
                  </div>
                </div>  
              ";
            }
            // line 120
            echo "            </div>  
          </div>  
        </div>
      </div>      
    </div>  

  </div>
</article>
<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/node/node--product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 120,  273 => 116,  269 => 114,  267 => 113,  261 => 110,  257 => 109,  251 => 105,  245 => 104,  243 => 103,  239 => 102,  223 => 89,  218 => 87,  214 => 86,  210 => 85,  206 => 84,  201 => 82,  195 => 81,  191 => 80,  185 => 76,  179 => 74,  177 => 73,  168 => 67,  164 => 65,  152 => 58,  147 => 56,  141 => 55,  134 => 51,  130 => 50,  123 => 48,  119 => 47,  113 => 44,  107 => 40,  105 => 39,  96 => 33,  89 => 31,  80 => 27,  75 => 25,  69 => 24,  63 => 21,  57 => 17,  55 => 16,  50 => 13,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 2,);
    }

    public function getSource()
    {
        return "{%
  set classes = [
    'node',
    'node-detail',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
    'clearfix',
  ]
%}

<!-- Start Display article for teaser page -->

{% if view_mode == 'teaser' %}
  
  <div class=\"product-block\">      
    <div class=\"content-inner\">
      <div class=\"image-inner\">
        {{ content.uc_product_image }}
        <div class=\"action-hover\">
          <div class=\"add-to-cart-block-teaser\">
            <a class=\"btn-link-select-option\" href=\"{{ url }}\">{{ 'Options'|t }}</a>
            {{ content.add_to_cart|raw }}
          </div>
          <div class=\"quickview\"><a class=\"link-quickview\" href=\"{{ url }}\">{{ 'QuickView'|t }}</a></div>
        </div>
      </div>
      <div class=\"product-content\">
        <h4 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h4> 
        <div class=\"content-inner\">
          <div class=\"price\"><div class=\"regular-price\">{{ content.price }}</div></div>
        </div> 
      </div>
    </div>
  </div>

{% elseif view_mode == 'teaser_2' %}

  <div class=\"product-block-v2\">      
    <div class=\"content-inner\">
      <div class=\"image-inner\">
        {{ content.uc_product_image }}
      </div>
      <div class=\"product-content\">
        <div class=\"post-categories\">{{ content.taxonomy_catalog }}</div>
        <h4 class=\"title\"><a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </h4> 
        <div class=\"content-inner\">
          <div class=\"product-summary\">{{ node.body.summary }}</div>
          <div class=\"price\"><div class=\"regular-price\">{{ content.price }}</div></div>
        </div>
        <div class=\"action-hover\">
          <div class=\"add-to-cart-block-teaser\">
            <a class=\"btn-link-select-option\" href=\"{{ url }}\">{{ 'Options'|t }}</a>
            {{ content.add_to_cart|raw }}
          </div>
          <div class=\"quickview\"><a class=\"link-quickview\" href=\"{{ url }}\">{{ 'QuickView'|t }}</a></div>
        </div> 
      </div>
    </div>
  </div>

{% else %}

<!-- Start Display article for detail page -->
<article{{ attributes.addClass(classes) }}>
  <div class=\"product-single\">
    <div id=\"product-content-top\">
      <div class=\"row\">
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">
          <div class=\"product-thumbnail\">
            {% if content.uc_product_image %}
              {{ content.uc_product_image }} 
            {% endif %}
          </div>
        </div>
        <div class=\"col-lg-6 col-sm-6 col-xs-12\">  
          <div class=\"product-content-inner\">
            {{ title_prefix }}
               <h1{{ title_attributes.addClass('post-title') }}>{{ label }}</h1>
            {{ title_suffix }}         
            <div class=\"product-info\">
              {{ content.price }}
              {{ content.model }}
              <div class=\"post-categories\">{{ content.taxonomy_catalog }}</div>
              <div class=\"product-summary\">{{ node.body.summary }}</div>
              <div class=\"add-to-cart-content-inner\">
                {{content.add_to_cart|raw}}
              </div>
            </div>  
          </div>
        </div>  
      </div>  
    </div>
    
    <div class=\"product-content-bottom\">  
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"tab-product\">
            <ul class=\"nav nav-tabs\">
              <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-8a52b-1\">{{'Description'|t}}</a></li>
              {% if content.comment %}
                <li><a data-toggle=\"tab\" href=\"#tab-8a52b-2\">{{'Reviews'|t}}</a></li>
              {% endif %}  
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-8a52b-1\" class=\"tab-pane fade in active\">
                <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
                  {{ content|without('taxonomy_catalog', 'uc_product_image', 'display_price', 'price', 'comment', 'add_to_cart', 'model', 'field_product_type') }}
                </div>
              </div>
              {% if content.comment %}
                <div id=\"tab-8a52b-2\" class=\"tab-pane fade\">
                  <div id=\"node-single-comment\">
                    {{ content.comment }}
                  </div>
                </div>  
              {% endif %}
            </div>  
          </div>  
        </div>
      </div>      
    </div>  

  </div>
</article>
<!-- End Display article for detail page -->
{% endif %}";
    }
}
