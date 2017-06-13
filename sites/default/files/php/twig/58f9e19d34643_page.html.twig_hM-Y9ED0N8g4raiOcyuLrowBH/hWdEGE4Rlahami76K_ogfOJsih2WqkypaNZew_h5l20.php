<?php

/* themes/bill_theme/templates/page.html.twig */
class __TwigTemplate_cd7bb8b9e6496927dd3f2f18d0d01d7e5ba08f7c6b5751b77b20c1cbb52670c9 extends Twig_Template
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
        $tags = array("if" => 45);
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

        // line 37
        echo " <div class=\"page-wrapper\">
  <header class=\"header\">
    <div class=\"social-menu\">
      ";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top", array()), "html", null, true));
        echo "
    </div>
    <div class=\"header-menu\">
      ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </div>
    ";
        // line 45
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_bottom", array())) {
            // line 46
            echo "    <div class=\"banner\">
    ";
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_bottom", array()), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 50
        echo "  </header>
  <div class=\"main-wrapper\">
    <main class=\"content\">
      ";
        // line 53
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 54
            echo "      <div class=\"main-content\">
        ";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 58
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array())) {
            // line 59
            echo "      <div class=\"bottom-content\">
        ";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
      ";
        }
        // line 63
        echo "    </main>
  </div>
  <footer class=\"footer\">
    ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_top", array()), "html", null, true));
        echo "
    ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
        echo "
  </footer>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/bill_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 67,  103 => 66,  98 => 63,  92 => 60,  89 => 59,  86 => 58,  80 => 55,  77 => 54,  75 => 53,  70 => 50,  64 => 47,  61 => 46,  59 => 45,  54 => 43,  48 => 40,  43 => 37,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
 #}
 <div class=\"page-wrapper\">
  <header class=\"header\">
    <div class=\"social-menu\">
      {{page.header_top}}
    </div>
    <div class=\"header-menu\">
      {{page.header}}
    </div>
    {% if page.header_bottom %}
    <div class=\"banner\">
    {{ page.header_bottom }}
    </div>
    {% endif %}
  </header>
  <div class=\"main-wrapper\">
    <main class=\"content\">
      {% if page.content %}
      <div class=\"main-content\">
        {{page.content}}
      </div>
      {% endif %}
      {% if page.content_bottom %}
      <div class=\"bottom-content\">
        {{page.content_bottom}}
      </div>
      {% endif %}
    </main>
  </div>
  <footer class=\"footer\">
    {{page.footer_top}}
    {{page.footer}}
  </footer>
</div>{# /.layout-container #}
";
    }
}
