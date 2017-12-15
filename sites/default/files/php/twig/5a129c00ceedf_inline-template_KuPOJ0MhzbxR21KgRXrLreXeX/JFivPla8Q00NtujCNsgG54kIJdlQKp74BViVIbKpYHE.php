<?php

/* {# inline_template_start #}<code>/admin/store/orders/{uc_order}</code>: GET, PATCH, DELETE</br><code>/entity/uc_order</code>: POST */
class __TwigTemplate_629649824ee408adb3436cfb5924e1cc037c9f295591fca955be7bbbbacedacd extends Twig_Template
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
        echo "<code>/admin/store/orders/{uc_order}</code>: GET, PATCH, DELETE</br><code>/entity/uc_order</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/store/orders/{uc_order}</code>: GET, PATCH, DELETE</br><code>/entity/uc_order</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/admin/store/orders/{uc_order}</code>: GET, PATCH, DELETE</br><code>/entity/uc_order</code>: POST";
    }
}
