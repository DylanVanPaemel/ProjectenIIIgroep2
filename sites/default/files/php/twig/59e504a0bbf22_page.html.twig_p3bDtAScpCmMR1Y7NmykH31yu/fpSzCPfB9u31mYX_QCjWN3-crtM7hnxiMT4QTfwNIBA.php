<?php

/* themes/gavias_organiz/templates/page/page.html.twig */
class __TwigTemplate_2b80c0499b85e54499cf6315943f66b3b3059c6effb06bc72e78aaf3bfe5c5ec extends Twig_Template
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
        $tags = array("include" => 8, "if" => 14);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include', 'if'),
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

        // line 7
        echo "
";
        // line 8
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/message.html.twig"), "themes/gavias_organiz/templates/page/page.html.twig", 8)->display($context);
        // line 9
        echo "<div class=\"body-page-content\">
\t<div class=\"body-page gva-body-page\">
\t\t";
        // line 11
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/parts/preloader.html.twig"), "themes/gavias_organiz/templates/page/page.html.twig", 11)->display($context);
        // line 12
        echo "\t   ";
        $this->loadTemplate((isset($context["header_skin"]) ? $context["header_skin"] : null), "themes/gavias_organiz/templates/page/page.html.twig", 12)->display($context);
        // line 13
        echo "\t\t
\t   ";
        // line 14
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array())) {
            // line 15
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 19
        echo "\t\t
\t\t<div role=\"main\" class=\"main main-page\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 23
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_content", array())) {
            // line 24
            echo "\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t";
            // line 25
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t

\t\t\t";
        // line 29
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 30
            echo "\t\t\t\t<div class=\"help show\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 38
        echo "
\t\t\t";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array())) {
            // line 40
            echo "\t\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t\t";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 44
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array())) {
            // line 47
            echo "\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 57
        echo "\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 62
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/main.html.twig"), "themes/gavias_organiz/templates/page/page.html.twig", 62)->display($context);
        // line 63
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 66
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 67
            echo "\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t";
            // line 69
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 73
        echo "
\t\t\t";
        // line 74
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array())) {
            // line 75
            echo "\t\t\t\t<div class=\"area after_content\">
\t\t\t\t\t<div class=\"container-fw\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t ";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "after_content", array()), "html", null, true));
            echo "
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 83
        echo "\t\t\t
\t\t\t";
        // line 84
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array())) {
            // line 85
            echo "\t\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t\t";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 89
        echo "
\t\t</div>
\t</div>\t

";
        // line 93
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/templates/page/footer.html.twig"), "themes/gavias_organiz/templates/page/page.html.twig", 93)->display($context);
        // line 94
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 94,  207 => 93,  201 => 89,  195 => 86,  192 => 85,  190 => 84,  187 => 83,  179 => 78,  174 => 75,  172 => 74,  169 => 73,  162 => 69,  158 => 67,  156 => 66,  151 => 63,  149 => 62,  142 => 57,  133 => 51,  127 => 47,  125 => 46,  121 => 44,  115 => 41,  112 => 40,  110 => 39,  107 => 38,  99 => 33,  94 => 30,  92 => 29,  88 => 27,  82 => 25,  79 => 24,  77 => 23,  71 => 19,  65 => 16,  62 => 15,  60 => 14,  57 => 13,  54 => 12,  52 => 11,  48 => 9,  46 => 8,  43 => 7,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Gavias's theme implementation to display a single Drupal page.
 */
#}

{% include directory ~ '/templates/page/parts/message.html.twig' %}
<div class=\"body-page-content\">
\t<div class=\"body-page gva-body-page\">
\t\t{% include directory ~ '/templates/page/parts/preloader.html.twig' %}
\t   {% include header_skin %}
\t\t
\t   {% if page.breadcrumbs %}
\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t{{ page.breadcrumbs }}
\t\t\t</div>
\t\t{% endif %}
\t\t
\t\t<div role=\"main\" class=\"main main-page\">
\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t{% if page.slideshow_content %}
\t\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t\t{{ page.slideshow_content }}
\t\t\t\t</div>
\t\t\t{% endif %}\t

\t\t\t{% if page.help %}
\t\t\t\t<div class=\"help show\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t{{ page.help }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.fw_before_content %}
\t\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t\t{{ page.fw_before_content }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t{% if page.before_content %}
\t\t\t\t<div class=\"before_content area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t{{ page.before_content }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t<div class=\"clearfix\"></div>
\t\t\t
\t\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{% include directory ~ '/templates/page/main.html.twig' %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if page.highlighted %}
\t\t\t\t<div class=\"highlighted area\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t{{ page.highlighted }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if page.after_content %}
\t\t\t\t<div class=\"area after_content\">
\t\t\t\t\t<div class=\"container-fw\">
\t\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t\t {{ page.after_content }}
\t\t          \t</div>
\t        \t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.fw_after_content %}
\t\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t\t{{ page.fw_after_content }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t</div>
\t</div>\t

{% include directory ~ '/templates/page/footer.html.twig' %}
</div>
";
    }
}
