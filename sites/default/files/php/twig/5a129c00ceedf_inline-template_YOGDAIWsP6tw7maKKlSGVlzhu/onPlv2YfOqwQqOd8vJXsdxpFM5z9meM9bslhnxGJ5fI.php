<?php

/* {# inline_template_start #}<code>/admin/config/development/backup_migrate/settings/source/{backup_migrate_source}</code>: GET */
class __TwigTemplate_38b76ddbdeaa7ebfd47e15a55279ba41f46200612f3bb9fe90d9706ab846a762 extends Twig_Template
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
        echo "<code>/admin/config/development/backup_migrate/settings/source/{backup_migrate_source}</code>: GET";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/config/development/backup_migrate/settings/source/{backup_migrate_source}</code>: GET";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<code>/admin/config/development/backup_migrate/settings/source/{backup_migrate_source}</code>: GET";
    }
}