<?php

/* {# inline_template_start #}<code>/feed/{feeds_feed}</code>: GET, PATCH, DELETE</br><code>/entity/feeds_feed</code>: POST */
class __TwigTemplate_926a0d7c5be154fb92b3226e2a625ec82b347ecfa2c056b353985e10b8d61a52 extends Twig_Template
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
        echo "<code>/feed/{feeds_feed}</code>: GET, PATCH, DELETE</br><code>/entity/feeds_feed</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/feed/{feeds_feed}</code>: GET, PATCH, DELETE</br><code>/entity/feeds_feed</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/feed/{feeds_feed}</code>: GET, PATCH, DELETE</br><code>/entity/feeds_feed</code>: POST";
    }
}
