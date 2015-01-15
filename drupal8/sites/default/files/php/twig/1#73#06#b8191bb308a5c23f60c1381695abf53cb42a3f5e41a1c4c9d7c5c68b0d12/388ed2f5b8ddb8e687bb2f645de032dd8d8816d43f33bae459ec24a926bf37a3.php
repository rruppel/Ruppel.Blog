<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_7306b8191bb308a5c23f60c1381695abf53cb42a3f5e41a1c4c9d7c5c68b0d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 42
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 45
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 47
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 42,  20 => 37,  52 => 41,  38 => 19,  33 => 45,  45 => 28,  39 => 26,  37 => 25,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 50,  76 => 86,  72 => 47,  65 => 81,  56 => 49,  42 => 71,  40 => 37,  29 => 16,  27 => 43,  86 => 45,  78 => 49,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 77,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 43,  53 => 48,  50 => 32,  47 => 31,  31 => 44,  21 => 13,  91 => 68,  85 => 52,  80 => 64,  77 => 37,  71 => 61,  68 => 45,  62 => 80,  60 => 57,  55 => 42,  49 => 40,  44 => 27,  35 => 69,  26 => 46,  24 => 14,  51 => 32,  48 => 51,  46 => 48,  43 => 38,  41 => 47,  36 => 35,  34 => 34,  32 => 28,  25 => 28,  23 => 27,  19 => 26,);
    }
}
