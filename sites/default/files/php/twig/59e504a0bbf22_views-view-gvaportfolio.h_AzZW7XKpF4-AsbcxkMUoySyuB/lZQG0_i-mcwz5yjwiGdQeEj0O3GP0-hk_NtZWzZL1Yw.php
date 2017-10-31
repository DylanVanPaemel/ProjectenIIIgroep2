<?php

/* modules/gavias_view/templates/views-view-gvaportfolio.html.twig */
class __TwigTemplate_c41b0c6028d8c4c7ef2dce53011fbd515761242646ec00f5ff9f563dfd2dd403 extends Twig_Template
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
        $tags = array("if" => 1, "for" => 15);
        $filters = array("t" => 12, "raw" => 25);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('t', 'raw'),
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
            echo "      <h3>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h3>
   ";
        }
        // line 8
        echo "  
  <nav class=\"portfolio-filter\">
    <ul class=\"nav nav-tabs\">
      ";
        // line 11
        if ((isset($context["show_all"]) ? $context["show_all"] : null)) {
            // line 12
            echo "        <li><a class=\"btn-filter all active ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pid"]) ? $context["pid"] : null), "html", null, true));
            echo "\" href=\"#\" data-filter=\"*\"><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("All")));
            echo "</span></a></li>
      ";
        }
        // line 14
        echo "
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terms"]) ? $context["terms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "        <li class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["term"], "tid", array()), "html", null, true));
            echo "\"><a href=\"#\" class=\"btn-filter ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pid"]) ? $context["pid"] : null), "html", null, true));
            echo "\" data-filter=\".";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["term"], "tid", array()), "html", null, true));
            echo "\"><span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["term"], "name", array()), "html", null, true));
            echo "</span></a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul> 
  </nav> 

  <div class=\"gva-portfolio-items clearfix\">
    <div class=\"row\">
      <div class=\"isotope-items view-portfolio\" data-pid=\"";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["pid"]) ? $context["pid"] : null), "html", null, true));
        echo "\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($context["row"], "content", array())));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </div>
    </div>
  </div>  
   
";
        // line 31
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 32
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_view/templates/views-view-gvaportfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  129 => 31,  123 => 27,  114 => 25,  110 => 24,  106 => 23,  99 => 18,  84 => 16,  80 => 15,  77 => 14,  69 => 12,  67 => 11,  62 => 8,  56 => 6,  54 => 5,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if attributes -%}
   <div{{ attributes }}>
{% endif %}
   
   {% if title %}
      <h3>{{ title }}</h3>
   {% endif %}
  
  <nav class=\"portfolio-filter\">
    <ul class=\"nav nav-tabs\">
      {% if show_all %}
        <li><a class=\"btn-filter all active {{pid}}\" href=\"#\" data-filter=\"*\"><span>{{'All'|t}}</span></a></li>
      {% endif %}

      {% for term in terms %}
        <li class=\"{{term.tid}}\"><a href=\"#\" class=\"btn-filter {{pid}}\" data-filter=\".{{term.tid}}\"><span>{{term.name}}</span></a></li>
      {% endfor %}
    </ul> 
  </nav> 

  <div class=\"gva-portfolio-items clearfix\">
    <div class=\"row\">
      <div class=\"isotope-items view-portfolio\" data-pid=\"{{pid}}\">
        {% for row in rows %}
          {{ row.content|raw }}
        {% endfor %}
      </div>
    </div>
  </div>  
   
{% if attributes -%}
    </div>
{% endif %}
";
    }
}
