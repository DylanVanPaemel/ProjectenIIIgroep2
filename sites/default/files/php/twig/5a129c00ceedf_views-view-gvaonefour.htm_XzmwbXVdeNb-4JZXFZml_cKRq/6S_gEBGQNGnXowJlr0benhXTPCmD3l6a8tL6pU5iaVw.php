<?php

/* modules/gavias_view/templates/views-view-gvaonefour.html.twig */
class __TwigTemplate_b49dbd7262f4c39660083d05c25f4f7a93a60481b9ae15c2a5bc1d13be9470d8 extends Twig_Template
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
        $tags = array("if" => 1, "set" => 9, "for" => 11);
        $filters = array("raw" => 17, "length" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('raw', 'length'),
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

        // line 1
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 2
            echo "<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
            echo ">
";
        }
        // line 4
        echo "   
  ";
        // line 5
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 6
            echo "    <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
  ";
        }
        // line 8
        echo "
  ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "    ";
        $context["j"] = 0;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 13
            echo "    ";
            $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
            // line 14
            echo "    ";
            if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                echo "<div class=\"big-row row\">";
            }
            // line 15
            echo "      ";
            if (((isset($context["i"]) ? $context["i"] : null) == 1)) {
                // line 16
                echo "        <div class=\"item index-";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true));
                echo " first-item col-md-6 col-sm-12 col-xs-12\">
          <div";
                // line 17
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
        </div>
      ";
            } else {
                // line 20
                echo "        ";
                if (((isset($context["i"]) ? $context["i"] : null) == 2)) {
                    echo " <div class=\"small-items col-md-6 col-sm-12 col-xs-12\">";
                }
                // line 21
                echo "          ";
                if ((((isset($context["i"]) ? $context["i"] : null) % 2) == 0)) {
                    echo "<div class=\"row\">";
                }
                // line 22
                echo "            <div class=\"item index-";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true));
                echo " col-sm-6 col-xs-12\">
              <div";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["row"], "content", array())));
                echo "</div>
            </div>
          ";
                // line 25
                if (((((isset($context["i"]) ? $context["i"] : null) % 2) == 1) || ((isset($context["j"]) ? $context["j"] : null) == twig_length_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null))))) {
                    echo " </div> ";
                }
                // line 26
                echo "        ";
                if ((((isset($context["i"]) ? $context["i"] : null) == 5) || ((isset($context["j"]) ? $context["j"] : null) == twig_length_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null))))) {
                    echo " </div>";
                }
                echo "    
      ";
            }
            // line 28
            echo "    ";
            if ((((isset($context["i"]) ? $context["i"] : null) == 5) || ((isset($context["j"]) ? $context["j"] : null) == twig_length_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null))))) {
                echo "</div>";
            }
            // line 29
            echo "    ";
            if (((isset($context["i"]) ? $context["i"] : null) == 5)) {
                $context["i"] = 0;
            }
            // line 30
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_view/templates/views-view-gvaonefour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 33,  155 => 32,  152 => 31,  146 => 30,  141 => 29,  136 => 28,  128 => 26,  124 => 25,  117 => 23,  112 => 22,  107 => 21,  102 => 20,  94 => 17,  89 => 16,  86 => 15,  81 => 14,  78 => 13,  75 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if attributes -%}
   <div{{ attributes }}>
{% endif %}
   
  {% if title %}
    <h3>{{ title }}</h3>
  {% endif %}

  {% set i = 0 %}
    {% set j = 0 %}
  {% for row in rows %}
    {% set i = i + 1 %}
    {% set j = j + 1 %}
    {% if i == 1 %}<div class=\"big-row row\">{% endif %}
      {% if i == 1 %}
        <div class=\"item index-{{i}} first-item col-md-6 col-sm-12 col-xs-12\">
          <div{{ row.attributes }}>{{ row.content|raw }}</div>
        </div>
      {% else %}
        {% if i == 2 %} <div class=\"small-items col-md-6 col-sm-12 col-xs-12\">{% endif %}
          {% if i % 2 == 0 %}<div class=\"row\">{% endif %}
            <div class=\"item index-{{i}} col-sm-6 col-xs-12\">
              <div{{ row.attributes }}>{{ row.content|raw }}</div>
            </div>
          {% if i % 2 == 1 or j == rows|length %} </div> {% endif %}
        {% if i == 5 or j == rows|length %} </div>{% endif %}    
      {% endif %}
    {% if i == 5 or j == rows|length %}</div>{% endif %}
    {% if i == 5 %}{% set i = 0 %}{% endif %}
  {% endfor %}

{% if attributes -%}
    </div>
{% endif %}
";
    }
}
