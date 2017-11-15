<?php

/* themes/gavias_organiz/templates/page/footer.html.twig */
class __TwigTemplate_afca2e5ca109257c735d5349d8494bdec14be98b9d085a074c1d0294f8391c87 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array())) {
            // line 2
            echo "  <div class=\"gva-drupal-message-status\">
    ";
            // line 3
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "message", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 6
        echo "  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array())) {
            // line 11
            echo "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "before_footer", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 23
        echo "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
            // line 28
            echo "                <div class=\"footer-first col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_first_size"]) ? $context["footer_first_size"] : null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_first_size"]) ? $context["footer_first_size"] : null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 29
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 32
        echo "
              ";
        // line 33
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
            // line 34
            echo "               <div class=\"footer-second col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_second_size"]) ? $context["footer_second_size"] : null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_second_size"]) ? $context["footer_second_size"] : null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 35
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 38
        echo "
              ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
            // line 40
            echo "                <div class=\"footer-third col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_size"]) ? $context["footer_third_size"] : null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_third_size"]) ? $context["footer_third_size"] : null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 44
        echo "
              ";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array())) {
            // line 46
            echo "                 <div class=\"footer-four col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_four_size"]) ? $context["footer_four_size"] : null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_four_size"]) ? $context["footer_four_size"] : null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_four", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 50
        echo "           </div>   
        </div>
    </div>  
  </div>   

  ";
        // line 55
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "copyright", array())) {
            // line 56
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
           <label>Copyright- Projecten Groep 2 </label> 
        </div>   
      </div>   
    </div>
  ";
        }
        // line 64
        echo "  <div id=\"gva-popup-ajax\" class=\"clearfix\"><div class=\"pajax-content product-single\"><a href=\"javascript:void(0);\" class=\"btn-close\"><i class=\"fa fa-times\"></i></a><div class=\"gva-popup-ajax-content clearfix\"></div></div></div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 64,  163 => 56,  161 => 55,  154 => 50,  148 => 47,  141 => 46,  139 => 45,  136 => 44,  130 => 41,  123 => 40,  121 => 39,  118 => 38,  112 => 35,  105 => 34,  103 => 33,  100 => 32,  94 => 29,  87 => 28,  85 => 27,  79 => 23,  69 => 16,  62 => 11,  60 => 10,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if page.message %}
  <div class=\"gva-drupal-message-status\">
    {{ page.message }}
  </div>
{% endif %}
  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    {% if page.before_footer %}
     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  {{ page.before_footer }}
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     {% endif %}
     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              {% if page.footer_first %}
                <div class=\"footer-first col-lg-{{ footer_first_size }} col-md-{{ footer_first_size }} col-sm-12 col-xs-12 column\">
                  {{ page.footer_first }}
                </div> 
              {% endif %}

              {% if page.footer_second %}
               <div class=\"footer-second col-lg-{{ footer_second_size }} col-md-{{ footer_second_size }} col-sm-12 col-xs-12 column\">
                  {{ page.footer_second }}
                </div> 
              {% endif %}

              {% if page.footer_third %}
                <div class=\"footer-third col-lg-{{ footer_third_size }} col-md-{{ footer_third_size }} col-sm-12 col-xs-12 column\">
                  {{ page.footer_third }}
                </div> 
              {% endif %}

              {% if page.footer_four %}
                 <div class=\"footer-four col-lg-{{ footer_four_size }} col-md-{{ footer_four_size }} col-sm-12 col-xs-12 column\">
                  {{ page.footer_four }}
                </div> 
              {% endif %}
           </div>   
        </div>
    </div>  
  </div>   

  {% if page.copyright %}
    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
           <label>Copyright- Projecten Groep 2 </label> 
        </div>   
      </div>   
    </div>
  {% endif %}
  <div id=\"gva-popup-ajax\" class=\"clearfix\"><div class=\"pajax-content product-single\"><a href=\"javascript:void(0);\" class=\"btn-close\"><i class=\"fa fa-times\"></i></a><div class=\"gva-popup-ajax-content clearfix\"></div></div></div>
</footer>

";
    }
}
