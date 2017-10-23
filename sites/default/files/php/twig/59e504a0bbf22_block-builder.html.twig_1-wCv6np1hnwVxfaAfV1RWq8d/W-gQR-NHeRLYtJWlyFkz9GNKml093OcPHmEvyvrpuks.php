<?php

/* modules/gva_blockbuilder/templates/frontend/block-builder.html.twig */
class __TwigTemplate_419cbce597454f2bf73aa1e2acd887f9e54106e2d63c7f02d66c926dd188b257 extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array("raw" => 5);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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
        echo "<div class=\"gavias-blockbuilder-content\">
  ";
        // line 2
        if ( !twig_test_empty((isset($context["edit_url"]) ? $context["edit_url"] : null))) {
            // line 3
            echo "   <a class=\"link-edit-blockbuider\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["edit_url"]) ? $context["edit_url"] : null), "html", null, true));
            echo "\"> Config block builder </a>
  ";
        }
        // line 4
        echo " 
  ";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["content"]) ? $context["content"] : null)));
        echo "  
 </div> 
";
    }

    public function getTemplateName()
    {
        return "modules/gva_blockbuilder/templates/frontend/block-builder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  54 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"gavias-blockbuilder-content\">
  {% if edit_url is not empty %}
   <a class=\"link-edit-blockbuider\" href=\"{{ edit_url }}\"> Config block builder </a>
  {% endif %} 
  {{ content|raw }}  
 </div> 
";
    }
}
