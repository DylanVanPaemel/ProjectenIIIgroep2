<?php

/* themes/gavias_organiz/templates/ubercart/uc-cart-block-title.html.twig */
class __TwigTemplate_161a03adfba2fef06c5250018f3b9cf99c3914605e9b0a9732c3b77db65b764f extends Twig_Template
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
        $filters = array("t" => 2);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        if (((isset($context["show_icon"]) ? $context["show_icon"] : null) && (isset($context["cart_empty"]) ? $context["cart_empty"] : null))) {
            // line 2
            echo "  <a class=\"link-open-cart\"><span class=\"gv-icon-938 empty\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("View your shopping cart.")));
            echo "\"><span class=\"item-count\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_count"]) ? $context["item_count"] : null), "html", null, true));
            echo "</span><span class=\"count-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("items")));
            echo "</span></span></a>
";
        } elseif (        // line 3
(isset($context["show_icon"]) ? $context["show_icon"] : null)) {
            // line 4
            echo "  <a class=\"link-open-cart\"><span class=\"gv-icon-938\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("View your shopping cart.")));
            echo "\"><span class=\"item-count\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["item_count"]) ? $context["item_count"] : null), "html", null, true));
            echo "</span><span class=\"count-title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("items")));
            echo "</span></span></a>
";
        }
        // line 6
        echo "
";
        // line 7
        if (((isset($context["collapsible"]) ? $context["collapsible"] : null) && (isset($context["collapsed"]) ? $context["collapsed"] : null))) {
            // line 8
            echo "  <span class=\"cart-block-arrow collapsed\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Show/hide shopping cart contents.")));
            echo "\"><span class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</span></span>
";
        } elseif (        // line 9
(isset($context["collapsible"]) ? $context["collapsible"] : null)) {
            // line 10
            echo "  <span class=\"cart-block-arrow\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Show/hide shopping cart contents.")));
            echo "\"><span class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</span></span>
";
        } else {
            // line 12
            echo "  <span class=\"title\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_organiz/templates/ubercart/uc-cart-block-title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  80 => 10,  78 => 9,  71 => 8,  69 => 7,  66 => 6,  56 => 4,  54 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if show_icon and cart_empty %}
  <a class=\"link-open-cart\"><span class=\"gv-icon-938 empty\" title=\"{{ 'View your shopping cart.'|t }}\"><span class=\"item-count\">{{ item_count }}</span><span class=\"count-title\">{{ 'items'|t }}</span></span></a>
{% elseif show_icon %}
  <a class=\"link-open-cart\"><span class=\"gv-icon-938\" title=\"{{ 'View your shopping cart.'|t }}\"><span class=\"item-count\">{{ item_count }}</span><span class=\"count-title\">{{ 'items'|t }}</span></span></a>
{% endif %}

{% if collapsible and collapsed %}
  <span class=\"cart-block-arrow collapsed\" title=\"{{ 'Show/hide shopping cart contents.'|t }}\"><span class=\"title\">{{ title }}</span></span>
{% elseif collapsible %}
  <span class=\"cart-block-arrow\" title=\"{{ 'Show/hide shopping cart contents.'|t }}\"><span class=\"title\">{{ title }}</span></span>
{% else %}
  <span class=\"title\">{{ title }}</span>
{% endif %}
";
    }
}
