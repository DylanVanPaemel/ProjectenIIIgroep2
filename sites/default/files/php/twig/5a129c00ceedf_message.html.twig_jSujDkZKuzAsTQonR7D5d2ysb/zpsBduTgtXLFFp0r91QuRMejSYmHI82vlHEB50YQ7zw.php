<?php

/* themes/gavias_organiz/templates/page/parts/message.html.twig */
class __TwigTemplate_93ccb25c166a58a8d38b33f4312e5e4a6a786a452ad09ace8d313c2433e73447 extends Twig_Template
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
        $tags = array("if" => 1);
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "drupal_message", array())) {
            // line 2
            echo "   <div class=\"drupal-message\">
      <div class=\"content-inner\">
         <a class=\"_close\">x</a>
            ";
            // line 5
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "drupal_message", array()), "html", null, true));
            echo "
         </div>
   </div>
";
        }
        // line 8
        echo " ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/page/parts/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if page.drupal_message %}
   <div class=\"drupal-message\">
      <div class=\"content-inner\">
         <a class=\"_close\">x</a>
            {{ page.drupal_message }}
         </div>
   </div>
{% endif %} ";
    }
}
