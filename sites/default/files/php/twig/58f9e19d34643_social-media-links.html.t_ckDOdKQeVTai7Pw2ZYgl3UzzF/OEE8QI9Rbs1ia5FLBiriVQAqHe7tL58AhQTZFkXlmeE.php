<?php

/* modules/contrib/social_media/templates/social-media-links.html.twig */
class __TwigTemplate_fc30cc9a1e2a928616c08696cb08dbcfa9c5a8c3a79c3ab075a2208383528d02 extends Twig_Template
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
        $tags = array("set" => 11, "for" => 15, "if" => 18);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
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

        // line 8
        echo "<div class=\"social-media-sharing\">
  <ul class=\"\">
    ";
        // line 11
        $context["classes"] = array(0 => "share");
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 16
            echo "      <li>              
        <a ";
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["element"], "attr", array()), "target", array()), "html", null, true));
            echo " ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["element"], "attr", array()), "class", array()), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["element"], "api", array()), "html", null, true));
            echo "  alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
            echo "\" title =\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
            echo "\" >       
            ";
            // line 18
            if ($this->getAttribute($context["element"], "img", array())) {
                // line 19
                echo "              <img src =\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["element"], "img", array()), "html", null, true));
                echo "\">
            ";
            } else {
                // line 21
                echo "              ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true));
                echo "
            ";
            }
            // line 23
            echo "          </a>

      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/contrib/social_media/templates/social-media-links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  83 => 23,  77 => 21,  71 => 19,  69 => 18,  57 => 17,  54 => 16,  49 => 15,  47 => 11,  43 => 8,);
    }

    public function getSource()
    {
        return "{#
/**
 * Available variables
 * - elements: array of element contains social media link.
 *
 */
#}
<div class=\"social-media-sharing\">
  <ul class=\"\">
    {%
  set classes = [
    'share',
  ]
    %}
    {% for element in elements %}
      <li>              
        <a {{ element.attr.target }} {{ element.attr.class.addClass(classes) }}  {{ element.api }}  alt=\"{{ element.text }}\" title =\"{{ element.text }}\" >       
            {% if element.img   %}
              <img src =\"{{ element.img }}\">
            {% else %}
              {{ element.text }}
            {% endif %}
          </a>

      </li>
    {% endfor %}
  </ul>
</div>

";
    }
}
