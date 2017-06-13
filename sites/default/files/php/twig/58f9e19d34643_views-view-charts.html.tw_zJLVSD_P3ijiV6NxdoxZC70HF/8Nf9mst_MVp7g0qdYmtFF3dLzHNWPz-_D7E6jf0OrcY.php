<?php

/* modules/contrib/charts/templates/views-view-charts.html.twig */
class __TwigTemplate_aa40def978465600f6073fc4df12ea542dcebcd82d9e6d13cef36284d8d52500 extends Twig_Template
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
        $tags = array("set" => 1);
        $filters = array();
        $functions = array("attach_library" => 2);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array(),
                array('attach_library')
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
        $context["library"] = ((("charts_" . (isset($context["chart_type"]) ? $context["chart_type"] : null)) . "/") . (isset($context["chart_type"]) ? $context["chart_type"] : null));
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary((isset($context["library"]) ? $context["library"] : null)), "html", null, true));
        echo "
<div ";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true));
        echo " style=\"width:100%; height:400px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/charts/templates/views-view-charts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% set library = 'charts_' ~ chart_type ~ '/' ~ chart_type %}
{{ attach_library(\"#{ library }\") }}
<div {{ attributes }} {{ content_attributes }} style=\"width:100%; height:400px;\"></div>
";
    }
}
