<?php

/* {# inline_template_start #}<div class="post-block">
        <div class="post-image"> {{ field_image }}</div>
        <div class="post-content text-left">
                <div class="post-title"> {{ title }} </div>
                <div class="post-meta"><span class="post-categories">{{ field_post_category }} </span>&nbsp;/&nbsp;<span class="post-created">{{ created }} </span></div>
	 </div>	 
</div> */
class __TwigTemplate_ae27feb4a53e7a26bf4da309c5b9ebf424630fd5d1f81d8f39ff2a83c82603e8 extends Twig_Template
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
        echo "<div class=\"post-block\">
        <div class=\"post-image\"> ";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>
                <div class=\"post-meta\"><span class=\"post-categories\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_post_category"]) ? $context["field_post_category"] : null), "html", null, true));
        echo " </span>&nbsp;/&nbsp;<span class=\"post-created\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo " </span></div>
\t </div>\t 
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
        <div class=\"post-image\"> {{ field_image }}</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> {{ title }} </div>
                <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>&nbsp;/&nbsp;<span class=\"post-created\">{{ created }} </span></div>
\t </div>\t 
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 5,  57 => 4,  52 => 2,  49 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
        <div class=\"post-image\"> {{ field_image }}</div>
        <div class=\"post-content text-left\">
                <div class=\"post-title\"> {{ title }} </div>
                <div class=\"post-meta\"><span class=\"post-categories\">{{ field_post_category }} </span>&nbsp;/&nbsp;<span class=\"post-created\">{{ created }} </span></div>
\t </div>\t 
</div>";
    }
}
