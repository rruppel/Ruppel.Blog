<?php

/* core/themes/bartik/templates/node.html.twig */
class __TwigTemplate_2cac431e8a029e3a7671d5400d78d6987f667f96f29dc38e92f107e52832452d extends Twig_Template
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
        // line 61
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . drupal_html_class($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "bundle"))), 2 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (((!$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) ? ("node--unpublished") : ("")), 5 => (((isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . drupal_html_class((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 71
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">

  <header>
    ";
        // line 74
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
    ";
        // line 75
        if ((!(isset($context["page"]) ? $context["page"] : null))) {
            // line 76
            echo "      <h2";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true);
            echo ">
        <a href=\"";
            // line 77
            echo twig_drupal_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</a>
      </h2>
    ";
        }
        // line 80
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "

    ";
        // line 82
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 83
            echo "      <div class=\"node__meta\">
        ";
            // line 84
            echo twig_drupal_escape_filter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true);
            echo "
        <span";
            // line 85
            echo twig_drupal_escape_filter($this->env, (isset($context["author_attributes"]) ? $context["author_attributes"] : null), "html", null, true);
            echo ">
          ";
            // line 86
            echo t("Submitted by !author_name on !date", array("!author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "!date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 87
            echo "        </span>
        ";
            // line 88
            echo twig_drupal_escape_filter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 91
        echo "  </header>

  <div";
        // line 93
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true);
        echo ">
    ";
        // line 94
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links"), "html", null, true);
        echo "
  </div>

  ";
        // line 97
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links")) {
            // line 98
            echo "    <div class=\"node__links\">
      ";
            // line 99
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment"), "html", null, true);
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 103,  96 => 99,  91 => 97,  85 => 94,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  53 => 82,  47 => 80,  39 => 77,  34 => 76,  32 => 75,  23 => 21,  29 => 24,  31 => 21,  27 => 20,  21 => 71,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 102,  99 => 71,  93 => 98,  90 => 67,  84 => 64,  81 => 93,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 84,  55 => 83,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 74,  24 => 41,  19 => 61,);
    }
}
