<?php

/* themes/gavias_organiz/templates/addon/skins.html.twig */
class __TwigTemplate_7bc01b21d708bb4277907679876679c6283310153185fec4ec3d38eeb4f7c825 extends Twig_Template
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
        $tags = array("include" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('include'),
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
        echo "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-eyedropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
\t   ";
        // line 4
        $this->loadTemplate("themes/gavias_organiz/customize/form.php", "themes/gavias_organiz/templates/addon/skins.html.twig", 4)->display($context);
        // line 5
        echo "\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"//";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas\"></a>
\t\t\t<a class=\"item-color blue\" href=\"//";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=blue\"></a>
\t\t\t<a class=\"item-color brown\" href=\"//";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=brown\"></a>
\t\t\t<a class=\"item-color green\" href=\"//";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=lilac\"></a>
\t\t\t<a class=\"item-color lime_green\" href=\"//";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=lime_green\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=orange\"></a>
\t\t\t<a class=\"item-color pink\" href=\"//";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=pink\"></a>
\t\t\t<a class=\"item-color purple\" href=\"//";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=purple\"></a>
\t\t\t<a class=\"item-color red\" href=\"//";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=red\"></a>
\t\t\t<a class=\"item-color turquoise\" href=\"//";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=turquoise\"></a>
\t\t\t<a class=\"item-color turquoise2\" href=\"//";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=turquoise2\"></a>
\t\t\t<a class=\"item-color violet_red\" href=\"//";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=violet_red\"></a>
\t\t\t<a class=\"item-color violet_red2\" href=\"//";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=violet_red2\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["current_url"]) ? $context["current_url"] : null), "html", null, true));
        echo "gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/addon/skins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"gavias-skins-panel hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-eyedropper\"></i></div>
\t<div class=\"gavias-skins-panel-inner\">
\t   {% include 'themes/gavias_organiz/customize/form.php' %}
\t</div>   
</div>

<div class=\"gavias-skins-panel gavias-skin-demo hidden-xs hidden-sm\">
\t<div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Color skins</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"item-color default\" href=\"//{{ current_url }}gvas\"></a>
\t\t\t<a class=\"item-color blue\" href=\"//{{ current_url }}gvas=blue\"></a>
\t\t\t<a class=\"item-color brown\" href=\"//{{ current_url }}gvas=brown\"></a>
\t\t\t<a class=\"item-color green\" href=\"//{{ current_url }}gvas=green\"></a>
\t\t\t<a class=\"item-color lilac\" href=\"//{{ current_url }}gvas=lilac\"></a>
\t\t\t<a class=\"item-color lime_green\" href=\"//{{ current_url }}gvas=lime_green\"></a>
\t\t\t<a class=\"item-color orange\" href=\"//{{ current_url }}gvas=orange\"></a>
\t\t\t<a class=\"item-color pink\" href=\"//{{ current_url }}gvas=pink\"></a>
\t\t\t<a class=\"item-color purple\" href=\"//{{ current_url }}gvas=purple\"></a>
\t\t\t<a class=\"item-color red\" href=\"//{{ current_url }}gvas=red\"></a>
\t\t\t<a class=\"item-color turquoise\" href=\"//{{ current_url }}gvas=turquoise\"></a>
\t\t\t<a class=\"item-color turquoise2\" href=\"//{{ current_url }}gvas=turquoise2\"></a>
\t\t\t<a class=\"item-color violet_red\" href=\"//{{ current_url }}gvas=violet_red\"></a>
\t\t\t<a class=\"item-color violet_red2\" href=\"//{{ current_url }}gvas=violet_red2\"></a>
\t\t\t<a class=\"item-color yellow\" href=\"//{{ current_url }}gvas=yellow\"></a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>

\t<div class=\"panel-skins-content\">
\t\t<div class=\"title\">Body layout</div>
\t\t<div class=\"text-center\">
\t\t\t<a class=\"layout\" data-layout=\"boxed\">Boxed</a>
\t\t\t<a class=\"layout\" data-layout=\"wide\">Wide</a>
\t\t</div>
\t</div>
</div>

";
    }
}
