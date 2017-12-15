<?php

/* themes/gavias_organiz/templates/page/main-no-sidebar.html.twig */
class __TwigTemplate_01eef488fcc7e7c47d792842d5b4c46c6431c0fff91c332c97ba912e54c2a5ca extends Twig_Template
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
        $tags = array("if" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
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
        echo "<div class=\"content-main-inner\">
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">
\t\t\t";
        // line 4
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array())) {
            // line 5
            echo "\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t";
            // line 6
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 9
        echo "
\t\t\t";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 11
            echo "\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t";
            // line 12
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo "
\t\t\t";
        // line 16
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 17
            echo "\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 21
        echo "\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/page/main-no-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  81 => 18,  78 => 17,  76 => 16,  73 => 15,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"content-main-inner\">
\t<div id=\"page-main-content\" class=\"main-content\">
\t\t<div class=\"main-content-inner\">
\t\t\t{% if page.content_top %}
\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t{{ page.content_top }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.content %}
\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.content_bottom %}
\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t{{ page.content_bottom }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div>

";
    }
}
