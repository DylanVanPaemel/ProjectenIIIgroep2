<?php

/* themes/gavias_organiz/templates/fields/field--uc-product-image--teaser-2.html.twig */
class __TwigTemplate_2d67e8efecb1e3bc6c309faddd73eb76fb57c0e6a18b896bfce29d022d1d4ba9 extends Twig_Template
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
        $tags = array("set" => 23, "if" => 25, "for" => 29);
        $filters = array("length" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('length'),
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

        // line 23
        $context["classes"] = array(0 => "image-product");
        // line 24
        $context["i"] = 1;
        // line 25
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : null)) > 1)) {
            // line 26
            echo "   ";
            $context["classes"] = array(0 => "images-swap");
        }
        // line 28
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                // line 31
                echo "      <div class=\"image-first\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 33
            echo "    ";
            if (((isset($context["i"]) ? $context["i"] : null) == 2)) {
                // line 34
                echo "      <div class=\"image-second\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 35
            echo " 
    ";
            // line 36
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>


";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/fields/field--uc-product-image--teaser-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  81 => 36,  78 => 35,  72 => 34,  69 => 33,  63 => 31,  61 => 30,  57 => 29,  53 => 28,  49 => 26,  47 => 25,  45 => 24,  43 => 23,);
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
{% set classes = [ 'image-product'] %}
{% set i = 1 %}
{% if items|length > 1 %}
   {% set classes = [ 'images-swap'] %}
{% endif %}
<div{{ attributes.addClass(classes) }}>
  {%- for item in items -%}
    {% if i == 1 %}
      <div class=\"image-first\">{{ item.content }}</div>
    {% endif %}
    {% if i == 2 %}
      <div class=\"image-second\">{{ item.content }}</div>
    {% endif %} 
    {% set i = i + 1 %} 
  {%- endfor -%}
</div>


";
    }
}
