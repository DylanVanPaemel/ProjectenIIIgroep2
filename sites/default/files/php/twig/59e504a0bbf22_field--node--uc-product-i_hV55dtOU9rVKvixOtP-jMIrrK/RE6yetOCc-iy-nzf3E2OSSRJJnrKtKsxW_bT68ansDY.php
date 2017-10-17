<?php

/* themes/gavias_organiz/templates/fields/field--node--uc-product-image.html.twig */
class __TwigTemplate_f6bf13f977f5a16d6ebc77d1741cea31ac228d3f64e4e3551e942221c86dfe24 extends Twig_Template
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
        $tags = array("if" => 25, "for" => 26);
        $filters = array("length" => 25, "image_style" => 35);
        $functions = array("file_url" => 33);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('length', 'image_style'),
                array('file_url')
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

        // line 23
        echo "
<div";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
   ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) < 2)) {
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "<div class=\"item\"> ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 29
            echo "  
    <div class=\"owl-carousel init-carousel-owl single-product-images lightGallery\" data-items=\"1\" data-pagination=\"0\" data-navigation=\"1\" data-loop=\"0\">";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "<div class=\"item\">
          <a href=\"";
                // line 33
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
                echo "\" itemprop=\"image\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\">
            <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
            <img src=\"";
                // line 35
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('twig_tweak')->imageStyle($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()), "thumbnail"))), "html", null, true));
                echo "\"  class=\"hidden\" />
          </a>
          <img src=\"";
                // line 37
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()))), "html", null, true));
                echo "\" />
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</div>
    <div class=\"owl-carousel init-carousel-owl single-product-images-thumbnail\" data-items=\"4\" data-pagination=\"0\" data-navigation=\"1\" data-loop=\"0\">";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "<div class=\"item\">
          <a href=\"javascript:void(0);\">
            <img src=\"";
                // line 45
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->env->getExtension('twig_tweak')->imageStyle($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "entity", array()), "uri", array()), "value", array()), "thumbnail"))), "html", null, true));
                echo "\" />
          </a>
        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "</div>
    
";
        }
        // line 52
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/fields/field--node--uc-product-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 52,  113 => 49,  104 => 45,  100 => 43,  96 => 42,  93 => 40,  85 => 37,  80 => 35,  75 => 33,  72 => 32,  68 => 31,  65 => 29,  56 => 27,  52 => 26,  50 => 25,  46 => 24,  43 => 23,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a single field in a view.
 *
 * Available variables:
 * - view: The view that the field belongs to.
 * - field: The field handler that can process the input.
 * - row: The raw result of the database query that generated this field.
 * - output: The processed output that will normally be used.
 *
 * When fetching output from the row this construct should be used:
 * data = row[field.field_alias]
 *
 * The above will guarantee that you'll always get the correct data, regardless
 * of any changes in the aliasing that might happen if the view is modified.
 *
 * @see template_preprocess_views_view_field()
 *
 * @ingroup themeable
 */
#}

<div{{ attributes }}>
   {% if items|length < 2 %}
      {%- for item in items -%}
         <div class=\"item\"> {{ item.content }}</div>
      {%- endfor -%}
   {% else %}  
    <div class=\"owl-carousel init-carousel-owl single-product-images lightGallery\" data-items=\"1\" data-pagination=\"0\" data-navigation=\"1\" data-loop=\"0\">
      {%- for item in items -%}
        <div class=\"item\">
          <a href=\"{{file_url(item.content['#item'].entity.uri.value)}}\" itemprop=\"image\" class=\"zoomGallery\" title=\"\" data-rel=\"lightGallery\">
            <span class=\"icon-expand\"><i class=\"fa fa-expand\"></i></span>
            <img src=\"{{file_url(item.content['#item'].entity.uri.value|image_style('thumbnail'))}}\"  class=\"hidden\" />
          </a>
          <img src=\"{{file_url(item.content['#item'].entity.uri.value)}}\" />
        </div>  
      {%- endfor -%}
    </div>
    <div class=\"owl-carousel init-carousel-owl single-product-images-thumbnail\" data-items=\"4\" data-pagination=\"0\" data-navigation=\"1\" data-loop=\"0\">
      {%- for item in items -%}
        <div class=\"item\">
          <a href=\"javascript:void(0);\">
            <img src=\"{{file_url(item.content['#item'].entity.uri.value|image_style('thumbnail'))}}\" />
          </a>
        </div>  
      {%- endfor -%}
    </div>
    
{% endif %}
</div>

";
    }
}
