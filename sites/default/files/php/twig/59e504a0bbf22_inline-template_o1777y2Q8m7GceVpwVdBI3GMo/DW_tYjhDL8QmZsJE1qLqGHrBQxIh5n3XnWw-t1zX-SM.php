<?php

/* {# inline_template_start #}<div class="post-block">
      <div class="post-image">
            {{ field_image }}
      </div>
      <div class="post-content text-left">
            <div class="post-title"> {{ title }} </div>            
            <div class="post-meta">
                    <span class="post-categories">{{ field_post_category }}, &nbsp;</span><span class="post-created">{{ created }}, &nbsp;</span> <span class="post-comment">{{ comment_count }} </span>
	     </div>
             <div class="post-body">
                  {{ body }}
             </div>
       </div>
</div> */
class __TwigTemplate_ec9f8288bc1d53c6227bf37a43e13f0bd38bb061123bfb574e624b3c4ed6cb9c extends Twig_Template
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
      <div class=\"post-content text-left\">
            <div class=\"post-title\"> ";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo " </div>            
            <div class=\"post-meta\">
                    <span class=\"post-categories\">";
        // line 8
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_post_category"]) ? $context["field_post_category"] : null), "html", null, true));
        echo ", &nbsp;</span><span class=\"post-created\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo ", &nbsp;</span> <span class=\"post-comment\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_count"]) ? $context["comment_count"] : null), "html", null, true));
        echo " </span>
\t     </div>
             <div class=\"post-body\">
                  ";
        // line 11
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
             </div>
       </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content text-left\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
                    <span class=\"post-categories\">{{ field_post_category }}, &nbsp;</span><span class=\"post-created\">{{ created }}, &nbsp;</span> <span class=\"post-comment\">{{ comment_count }} </span>
\t     </div>
             <div class=\"post-body\">
                  {{ body }}
             </div>
       </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  71 => 8,  66 => 6,  60 => 3,  56 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"post-block\">
      <div class=\"post-image\">
            {{ field_image }}
      </div>
      <div class=\"post-content text-left\">
            <div class=\"post-title\"> {{ title }} </div>            
            <div class=\"post-meta\">
                    <span class=\"post-categories\">{{ field_post_category }}, &nbsp;</span><span class=\"post-created\">{{ created }}, &nbsp;</span> <span class=\"post-comment\">{{ comment_count }} </span>
\t     </div>
             <div class=\"post-body\">
                  {{ body }}
             </div>
       </div>
</div>";
    }
}
