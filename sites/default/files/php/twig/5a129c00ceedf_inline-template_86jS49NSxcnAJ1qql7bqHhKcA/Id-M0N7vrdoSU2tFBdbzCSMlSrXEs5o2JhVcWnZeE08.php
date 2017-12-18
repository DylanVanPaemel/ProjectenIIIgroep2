<?php

/* {# inline_template_start #}<code>/entity/uc_cart_item/{uc_cart_item}</code>: GET, PATCH, DELETE</br><code>/entity/uc_cart_item</code>: POST */
class __TwigTemplate_3d3a0d3825f4971b8670c6630e7b648dc7018b410f6c02322dac34c07770b2c6 extends Twig_Template
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
        echo "<code>/entity/uc_cart_item/{uc_cart_item}</code>: GET, PATCH, DELETE</br><code>/entity/uc_cart_item</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/uc_cart_item/{uc_cart_item}</code>: GET, PATCH, DELETE</br><code>/entity/uc_cart_item</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/entity/uc_cart_item/{uc_cart_item}</code>: GET, PATCH, DELETE</br><code>/entity/uc_cart_item</code>: POST";
    }
}
