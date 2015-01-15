<?php

/* core/themes/seven/templates/page.html.twig */
class __TwigTemplate_311d7459c2d7899adba2561425afd7f0ed4cc0514d4ad8fc684070fa175fecbe extends Twig_Template
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
        // line 63
        echo "  <header id=\"branding\" class=\"clearfix\">
    <div class=\"layout-container\">
      ";
        // line 65
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
      ";
        // line 66
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 67
            echo "        <h1 class=\"page-title\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h1>
      ";
        }
        // line 69
        echo "      ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
      ";
        // line 70
        if ((isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null)) {
            // line 71
            echo "        ";
            echo twig_drupal_escape_filter($this->env, (isset($context["primary_local_tasks"]) ? $context["primary_local_tasks"] : null), "html", null, true);
            echo "
      ";
        }
        // line 73
        echo "    </div>
  </header>

  <div class=\"layout-container\">
    ";
        // line 77
        if ((isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null)) {
            // line 78
            echo "      <div class=\"tabs-secondary clearfix\" role=\"navigation\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["secondary_local_tasks"]) ? $context["secondary_local_tasks"] : null), "html", null, true);
            echo "</div>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        echo twig_drupal_escape_filter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true);
        echo "

    <main id=\"content\" class=\"clearfix\" role=\"main\">
      <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
      ";
        // line 85
        echo twig_drupal_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true);
        echo "
      ";
        // line 86
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help")) {
            // line 87
            echo "        <div id=\"help\">
          ";
            // line 88
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help"), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 91
        echo "      ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 92
            echo "        <ul class=\"action-links\">
          ";
            // line 93
            echo twig_drupal_escape_filter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "
        </ul>
      ";
        }
        // line 96
        echo "      ";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content"), "html", null, true);
        echo "
    </main>
    ";
        // line 98
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 99
            echo "      <footer id=\"footer\" role=\"contentinfo\" class=\"layout-column\">
          ";
            // line 100
            echo twig_drupal_escape_filter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true);
            echo "
      </footer>
    ";
        }
        // line 103
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 88,  76 => 86,  72 => 85,  65 => 81,  56 => 78,  42 => 71,  40 => 70,  29 => 67,  27 => 66,  86 => 45,  78 => 87,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 77,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 32,  53 => 30,  50 => 32,  47 => 31,  31 => 26,  21 => 23,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 80,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 69,  26 => 46,  24 => 26,  51 => 32,  48 => 73,  46 => 29,  43 => 27,  41 => 51,  36 => 29,  34 => 23,  32 => 28,  25 => 20,  23 => 65,  19 => 63,);
    }
}
