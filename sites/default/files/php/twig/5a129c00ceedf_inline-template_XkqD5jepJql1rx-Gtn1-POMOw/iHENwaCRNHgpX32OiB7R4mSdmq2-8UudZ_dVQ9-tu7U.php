<?php

/* {# inline_template_start #}<code>/user/{user}</code>: <del>GET</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/user</code>: POST */
class __TwigTemplate_bc2149c66a6f4e3e71307871829a09e47170cc7c1c3f0b789e8194f4eeb422c3 extends Twig_Template
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
        echo "<code>/user/{user}</code>: <del>GET</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/user</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/user/{user}</code>: <del>GET</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/user</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/user/{user}</code>: <del>GET</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/user</code>: POST";
    }
}
