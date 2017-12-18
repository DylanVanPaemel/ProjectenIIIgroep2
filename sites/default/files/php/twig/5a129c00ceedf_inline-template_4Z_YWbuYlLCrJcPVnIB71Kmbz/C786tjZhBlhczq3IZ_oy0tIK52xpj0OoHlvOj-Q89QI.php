<?php

/* {# inline_template_start #}<code>/entity/page_access/{page_access}</code>: GET, PATCH, DELETE</br><code>/entity/page_access</code>: POST */
class __TwigTemplate_ace5385fa8cf7d7b814c54021ba5570cd06217374e48397e98aabb1f99e28e04 extends Twig_Template
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
        echo "<code>/entity/page_access/{page_access}</code>: GET, PATCH, DELETE</br><code>/entity/page_access</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/entity/page_access/{page_access}</code>: GET, PATCH, DELETE</br><code>/entity/page_access</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/entity/page_access/{page_access}</code>: GET, PATCH, DELETE</br><code>/entity/page_access</code>: POST";
    }
}
