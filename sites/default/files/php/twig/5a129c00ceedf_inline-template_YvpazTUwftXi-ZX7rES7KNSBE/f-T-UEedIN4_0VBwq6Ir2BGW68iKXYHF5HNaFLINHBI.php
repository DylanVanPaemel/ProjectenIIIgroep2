<?php

/* {# inline_template_start #}<code>/entity/uc_fulfillment_method/{uc_fulfillment_method}</code>: GET */
class __TwigTemplate_bc5e1f44863e20cf71a1fd3a4fba50e16c2f6f3cd7c6230cf623f101096b75f0 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<code>/entity/uc_fulfillment_method/{uc_fulfillment_method}</code>: GET";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/uc_fulfillment_method/{uc_fulfillment_method}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/entity/uc_fulfillment_method/{uc_fulfillment_method}</code>: GET";
    }
}
