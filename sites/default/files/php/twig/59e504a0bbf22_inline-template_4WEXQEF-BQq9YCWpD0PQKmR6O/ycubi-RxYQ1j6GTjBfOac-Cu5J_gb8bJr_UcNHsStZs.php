<?php

/* {# inline_template_start #}<div class="post-block">
      <div class="post-image">
            {{ field_image }}
      </div>
      <div class="post-content">
            <div class="post-title"> {{ title }} </div>            
            <div class="post-meta">
                   <span class="post-created">{{ created }} </span>
	     </div>
       </div>
</div> */
class __TwigTemplate_7647522f990063031f3ff705c2dab2615365a68050708833eb79aaca8e0b5770 extends Twig_Template
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
      <div class=\"post-image\">
            ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>            
            <div class=\"post-meta\">
                   <span class=\"post-created\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo " </span>
\t     </div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
                   <span class=\"post-created\">{{ created }} </span>
\t     </div>
       </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 8,  63 => 6,  57 => 3,  53 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
                   <span class=\"post-created\">{{ created }} </span>
\t     </div>
       </div>
</div>";
    }
}
