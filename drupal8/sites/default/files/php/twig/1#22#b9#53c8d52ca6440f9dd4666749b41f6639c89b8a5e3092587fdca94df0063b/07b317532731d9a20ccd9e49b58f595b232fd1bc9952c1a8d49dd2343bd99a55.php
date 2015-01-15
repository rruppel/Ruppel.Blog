<?php

/* core/themes/seven/templates/menu-local-tasks.html.twig */
class __TwigTemplate_22b953c8d52ca6440f9dd4666749b41f6639c89b8a5e3092587fdca94df0063b extends Twig_Template
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
        // line 18
        if ((isset($context["primary"]) ? $context["primary"] : null)) {
            // line 19
            echo "  <h2 id=\"primary-tabs-title\" class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal is-collapsible\" aria-labelledby=\"primary-tabs-title\" data-drupal-nav-tabs>
    <button class=\"reset-appearance tabs__tab tabs__trigger\" aria-label=\"";
            // line 21
            echo twig_render_var(t("Primary tabs display toggle"));
            echo "\" data-drupal-nav-tabs-trigger>&bull;&bull;&bull;</button>
    <ul class=\"tabs primary clearfix\" data-drupal-nav-tabs-target>";
            // line 22
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
  </nav>
";
        }
        // line 25
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 26
            echo "  <h2 id=\"secondary-tabs-title\" class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <nav role=\"navigation\" class=\"is-horizontal\" aria-labelledby=\"secondary-tabs-title\" data-drupal-nav-tabs>
    <ul class=\"tabs secondary clearfix\">";
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  39 => 26,  37 => 25,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 88,  76 => 86,  72 => 85,  65 => 81,  56 => 78,  42 => 71,  40 => 70,  29 => 67,  27 => 21,  86 => 45,  78 => 87,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 77,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 32,  53 => 30,  50 => 32,  47 => 31,  31 => 22,  21 => 19,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 80,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 69,  26 => 46,  24 => 26,  51 => 32,  48 => 73,  46 => 29,  43 => 27,  41 => 51,  36 => 29,  34 => 23,  32 => 28,  25 => 20,  23 => 65,  19 => 18,);
    }
}
