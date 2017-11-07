<?php

/* themes/gavias_organiz/templates/views/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_66c0bd84d5cf91ab30846c9c31e2b29f1a8bd7f6b4850bf91aee58ba0beda446 extends Twig_Template
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
        $tags = array("if" => 20, "set" => 24, "for" => 26);
        $filters = array("length" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
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

        // line 20
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 21
            echo "  <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
";
        }
        // line 23
        echo "
";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "    
    ";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 29
            echo "    
    ";
            // line 30
            if ((((isset($context["i"]) ? $context["i"] : null) % 2) == 1)) {
                echo " 
      <div class=\"row\">
    ";
            }
            // line 32
            echo " 
    
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
            echo "
      </div>
   
    ";
            // line 38
            if (((((isset($context["i"]) ? $context["i"] : null) % 2) == 0) || ((isset($context["i"]) ? $context["i"] : null) == twig_length_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null))))) {
                echo " 
      </div>
    ";
            }
            // line 40
            echo " 

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/views/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 43,  94 => 40,  88 => 38,  82 => 35,  77 => 32,  71 => 30,  68 => 29,  66 => 28,  63 => 27,  59 => 26,  56 => 25,  54 => 24,  51 => 23,  45 => 21,  43 => 20,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}

{% set i = 0 %}
<div class=\"categories-view-content view-content-wrap post-style-grid box\">
  {% for row in rows %}
    
    {% set i = i + 1 %}
    
    {% if i % 2 == 1 %} 
      <div class=\"row\">
    {% endif %} 
    
      <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
        {{ row.content }}
      </div>
   
    {% if (i % 2 == 0 or i == rows|length)  %} 
      </div>
    {% endif %} 

  {% endfor %}
</div>
";
    }
}
