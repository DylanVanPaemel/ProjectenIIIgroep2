<?php

/* themes/gavias_organiz/templates/node/node--article.html.twig */
class __TwigTemplate_1df6e04f3f455a5f637a180291a36115f36355dd0ea46338d5b670110ee12567 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 15, "trans" => 71);
        $filters = array("clean_class" => 5, "raw" => 19, "without" => 78);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'raw', 'without'),
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
        // line 15
        if (((isset($context["teaser"]) ? $context["teaser"] : null) == true)) {
            echo " 
  <div class=\"post-block\">
    <div class=\"post-image\">
      ";
            // line 18
            if ((((isset($context["post_format"]) ? $context["post_format"] : null) == "video") || (((isset($context["post_format"]) ? $context["post_format"] : null) == "audio") && (isset($context["gva_iframe"]) ? $context["gva_iframe"] : null)))) {
                // line 19
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["gva_iframe"]) ? $context["gva_iframe"] : null)));
                echo "
      ";
            } elseif (((            // line 20
(isset($context["post_format"]) ? $context["post_format"] : null) == "gallery") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_gallery", array()))) {
                // line 21
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_gallery", array()), "html", null, true));
                echo "
      ";
            } else {
                // line 23
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
                echo "
      ";
            }
            // line 24
            echo " 
    </div>
    <div class=\"post-content text-left\">
      <div class=\"post-title\"> <a href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a> </div>            
        <div class=\"post-meta\">
          <span class=\"post-categories\">";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_category", array()), "html", null, true));
            echo "</span> -
          <span class=\"post-created\">";
            // line 30
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo " </span>
        </div>
       <div class=\"post-body\">
          ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
            echo "
       </div>
    </div>
  </div>

<!-- End Display article for teaser page -->
";
        } else {
            // line 40
            echo "<!-- Start Display article for detail page -->

<article";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["post_format"]) ? $context["post_format"] : null), "html", null, true));
            echo "\">
      ";
            // line 46
            if ((((isset($context["post_format"]) ? $context["post_format"] : null) == "video") || (((isset($context["post_format"]) ? $context["post_format"] : null) == "audio") && (isset($context["gva_iframe"]) ? $context["gva_iframe"] : null)))) {
                // line 47
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["gva_iframe"]) ? $context["gva_iframe"] : null)));
                echo "
      ";
            } elseif (((            // line 48
(isset($context["post_format"]) ? $context["post_format"] : null) == "gallery") && $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_gallery", array()))) {
                // line 49
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_gallery", array()), "html", null, true));
                echo "
      ";
            } else {
                // line 51
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
                echo "
      ";
            }
            // line 52
            echo "  
    </div>

    <div class=\"post-content\">
      ";
            // line 56
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
         <h1";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "post-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h1>
      ";
            // line 58
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "         
      <div class=\"post-meta\">
        <span class=\"post-categories\">";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_post_category", array()), "html", null, true));
            echo "</span> /
        <span class=\"post-created\"> ";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo " </span> /
        <span class=\"post-comment\"> 
          <a href=\"";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "/#comments\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_count"]) ? $context["comment_count"] : null), "html", null, true));
            echo " Comments</a>
        </span>
      </div>
      
      ";
            // line 67
            if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                // line 68
                echo "        <div class=\"node__meta hidden\">
          ";
                // line 69
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
                echo "
          <span";
                // line 70
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true));
                echo ">
            ";
                // line 71
                echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
                // line 72
                echo "          </span>
          ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
                echo "
        </div>
      ";
            }
            // line 76
            echo "
      <div";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
        ";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_image", "field_post_category", "field_post_format", "field_post_type", "field_post_embed", "field_post_gallery", "comment"), "html", null, true));
            echo "
      </div>
      <div id=\"node-single-comment\">
        ";
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
            echo "
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
        return "themes/gavias_organiz/templates/node/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 81,  218 => 78,  214 => 77,  211 => 76,  205 => 73,  202 => 72,  200 => 71,  196 => 70,  192 => 69,  189 => 68,  187 => 67,  178 => 63,  173 => 61,  169 => 60,  164 => 58,  158 => 57,  154 => 56,  148 => 52,  142 => 51,  136 => 49,  134 => 48,  129 => 47,  127 => 46,  123 => 45,  117 => 42,  113 => 40,  103 => 33,  97 => 30,  93 => 29,  86 => 27,  81 => 24,  75 => 23,  69 => 21,  67 => 20,  62 => 19,  60 => 18,  54 => 15,  50 => 13,  48 => 9,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 2,);
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
{% if teaser == true %} 
  <div class=\"post-block\">
    <div class=\"post-image\">
      {% if post_format == 'video' or post_format == 'audio' and gva_iframe %}
        {{ gva_iframe|raw }}
      {% elseif post_format == 'gallery' and content.field_post_gallery %}
        {{ content.field_post_gallery }}
      {% else %}
        {{ content.field_image }}
      {% endif %} 
    </div>
    <div class=\"post-content text-left\">
      <div class=\"post-title\"> <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a> </div>            
        <div class=\"post-meta\">
          <span class=\"post-categories\">{{ content.field_post_category }}</span> -
          <span class=\"post-created\">{{ date }} </span>
        </div>
       <div class=\"post-body\">
          {{ content.body }}
       </div>
    </div>
  </div>

<!-- End Display article for teaser page -->
{% else %}
<!-- Start Display article for detail page -->

<article{{ attributes.addClass(classes) }}>
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail post-{{ post_format }}\">
      {% if post_format == 'video' or post_format == 'audio' and gva_iframe %}
        {{ gva_iframe|raw }}
      {% elseif post_format == 'gallery' and content.field_post_gallery %}
        {{ content.field_post_gallery }}
      {% else %}
        {{ content.field_image }}
      {% endif %}  
    </div>

    <div class=\"post-content\">
      {{ title_prefix }}
         <h1{{ title_attributes.addClass('post-title') }}>{{ label }}</h1>
      {{ title_suffix }}         
      <div class=\"post-meta\">
        <span class=\"post-categories\">{{ content.field_post_category }}</span> /
        <span class=\"post-created\"> {{date }} </span> /
        <span class=\"post-comment\"> 
          <a href=\"{{url}}/#comments\">{{ comment_count }} Comments</a>
        </span>
      </div>
      
      {% if display_submitted %}
        <div class=\"node__meta hidden\">
          {{ author_picture }}
          <span{{ author_attributes }}>
            {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
          </span>
          {{ metadata }}
        </div>
      {% endif %}

      <div{{ content_attributes.addClass('node__content', 'clearfix') }}>
        {{ content|without('field_image','field_post_category', 'field_post_format', 'field_post_type', 'field_post_embed', 'field_post_gallery', 'comment') }}
      </div>
      <div id=\"node-single-comment\">
        {{ content.comment }}
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
{% endif %}";
    }
}
