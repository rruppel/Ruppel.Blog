<?php

/* core/modules/system/templates/html.html.twig */
class __TwigTemplate_20b32eec258aa70d46078581aef7ffd32fdd9e866aff6f740a019b8bdc7d1297 extends Twig_Template
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
        // line 29
        echo "<!DOCTYPE html>
<html";
        // line 30
        echo twig_drupal_escape_filter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true);
        echo ">
  <head>
    ";
        // line 32
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "head"), "html", null, true);
        echo "
    <title>";
        // line 33
        echo twig_drupal_escape_filter($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), "html", null, true);
        echo "</title>
    ";
        // line 34
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "styles"), "html", null, true);
        echo "
    ";
        // line 35
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts"), "html", null, true);
        echo "
  </head>
  <body";
        // line 37
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 39
        echo twig_render_var(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 41
        echo twig_drupal_escape_filter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true);
        echo "
    ";
        // line 42
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true);
        echo "
    ";
        // line 44
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "scripts", array(0 => "footer"), "method"), "html", null, true);
        echo "
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 44,  58 => 42,  22 => 30,  20 => 37,  52 => 41,  38 => 19,  33 => 45,  45 => 28,  39 => 35,  37 => 25,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 50,  76 => 86,  72 => 47,  65 => 81,  56 => 49,  42 => 71,  40 => 37,  29 => 16,  27 => 32,  86 => 45,  78 => 49,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 41,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 43,  53 => 48,  50 => 32,  47 => 31,  31 => 33,  21 => 13,  91 => 68,  85 => 52,  80 => 64,  77 => 37,  71 => 61,  68 => 45,  62 => 43,  60 => 57,  55 => 42,  49 => 39,  44 => 37,  35 => 34,  26 => 46,  24 => 14,  51 => 32,  48 => 51,  46 => 48,  43 => 38,  41 => 47,  36 => 35,  34 => 34,  32 => 28,  25 => 28,  23 => 27,  19 => 29,);
    }
}
