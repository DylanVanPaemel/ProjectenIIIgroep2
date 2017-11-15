<?php

/* themes/gavias_organiz/templates/page/header.html.twig */
class __TwigTemplate_488a0ab0e5e70908e77cbd3fa334c09a547a328cbd7e6cd206836398e5d69615 extends Twig_Template
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
        $tags = array("if" => 3, "set" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set'),
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
        echo "<header id=\"header\" class=\"header-v1\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array())) {
            // line 4
            echo "    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12\">
              <div class=\"topbar-content\">";
            // line 9
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topbar", array()), "html", null, true));
            echo "</div> 
            </div>
          </div>   
        </div>
      </div>
    </div>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        $context["class_sticky"] = "";
        // line 18
        echo "  ";
        if (((isset($context["sticky_menu"]) ? $context["sticky_menu"] : null) == 1)) {
            // line 19
            echo "    ";
            $context["class_sticky"] = "gv-sticky-menu";
            // line 20
            echo "  ";
        }
        echo "  

   <div class=\"header-main ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["class_sticky"]) ? $context["class_sticky"] : null), "html", null, true));
        echo "\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                ";
        // line 27
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array())) {
            // line 28
            echo "                  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
            echo "
                ";
        }
        // line 30
        echo "              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            ";
        // line 39
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 40
            echo "                              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
                            
                            ";
        }
        // line 42
        echo "  
                            ";
        // line 43
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array())) {
            // line 44
            echo "                              <div class=\"after-offcanvas hidden\">
                                ";
            // line 45
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "offcanvas", array()), "html", null, true));
            echo "
                              </div>
                           ";
        }
        // line 48
        echo "                           
                          </div>
                          
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                        ";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array())) {
            // line 58
            echo "                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              ";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "search", array()), "html", null, true));
            echo "
                            </div>  
                          </div>
                        ";
        }
        // line 65
        echo "                        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cart", array())) {
            // line 66
            echo "                          <div class=\"gva-cart\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "cart", array()), "html", null, true));
            echo "</div>
                        ";
        }
        // line 68
        echo "                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/page/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 68,  161 => 66,  158 => 65,  151 => 61,  146 => 58,  144 => 57,  133 => 48,  127 => 45,  124 => 44,  122 => 43,  119 => 42,  112 => 40,  110 => 39,  99 => 30,  93 => 28,  91 => 27,  83 => 22,  77 => 20,  74 => 19,  71 => 18,  69 => 17,  66 => 16,  56 => 9,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSource()
    {
        return "<header id=\"header\" class=\"header-v1\">
  
  {% if page.topbar %}
    <div class=\"topbar\">
      <div class=\"topbar-inner\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12\">
              <div class=\"topbar-content\">{{ page.topbar }}</div> 
            </div>
          </div>   
        </div>
      </div>
    </div>
  {% endif %}

  {% set class_sticky = '' %}
  {% if sticky_menu == 1 %}
    {% set class_sticky = 'gv-sticky-menu' %}
  {% endif %}  

   <div class=\"header-main {{ class_sticky }}\">
      <div class=\"container header-content-layout\">
         <div class=\"header-main-inner p-relative\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6 col-xs-8 branding\">
                {% if page.branding %}
                  {{ page.branding }}
                {% endif %}
              </div>

              <div class=\"col-md-9 col-sm-6 col-xs-4 p-static\">
                <div class=\"header-inner clearfix\">
                  <div class=\"main-menu\">
                    <div class=\"area-main-menu\">
                      <div class=\"area-inner\">
                          <div class=\"gva-offcanvas-mobile\">
                            <div class=\"close-offcanvas hidden\"><i class=\"fa fa-times\"></i></div>
                            {% if page.main_menu %}
                              {{ page.main_menu }}
                            
                            {% endif %}  
                            {% if page.offcanvas %}
                              <div class=\"after-offcanvas hidden\">
                                {{ page.offcanvas }}
                              </div>
                           {% endif %}
                           
                          </div>
                          
                          <div id=\"menu-bar\" class=\"menu-bar hidden-lg hidden-md\">
                            <span class=\"one\"></span>
                            <span class=\"two\"></span>
                            <span class=\"three\"></span>
                          </div>
                        
                        {% if page.search %}
                          <div class=\"gva-search-region search-region\">
                            <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                            <div class=\"search-content\">  
                              {{ page.search }}
                            </div>  
                          </div>
                        {% endif %}
                        {% if page.cart %}
                          <div class=\"gva-cart\">{{ page.cart }}</div>
                        {% endif %}
                      </div>
                    </div>
                  </div>  
                </div> 
              </div>

            </div>
         </div>
      </div>
   </div>

</header>
";
    }
}
