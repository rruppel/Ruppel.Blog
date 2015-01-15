<?php

/* core/modules/system/templates/menu-local-tasks.html.twig */
class __TwigTemplate_58b2e7ba5fc5140e7cb100de9ccb8ede2a36ff4cb4b5aeba21a70556f1006367 extends Twig_Template
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
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Primary tabs"));
            echo "</h2>
  <ul class=\"tabs primary\">";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["primary"]) ? $context["primary"] : null), "html", null, true);
            echo "</ul>
";
        }
        // line 22
        if ((isset($context["secondary"]) ? $context["secondary"] : null)) {
            // line 23
            echo "  <h2 class=\"visually-hidden\">";
            echo twig_render_var(t("Secondary tabs"));
            echo "</h2>
  <ul class=\"tabs secondary\">";
            // line 24
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary"]) ? $context["secondary"] : null), "html", null, true);
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 24,  33 => 23,  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  35 => 27,  32 => 26,  27 => 24,  54 => 34,  49 => 32,  39 => 29,  36 => 28,  30 => 22,  28 => 21,  21 => 19,  64 => 38,  59 => 36,  52 => 35,  50 => 34,  45 => 31,  42 => 30,  37 => 29,  31 => 22,  26 => 20,  24 => 24,  19 => 18,);
    }
}
