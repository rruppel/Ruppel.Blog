<?php

/* core/modules/node/templates/field--node--uid.html.twig */
class __TwigTemplate_d5fc6f48ffcc7b8f450983d548eb5bed54dc763102c044708b8f24064ca1e8ec extends Twig_Template
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
        echo "<span";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["items"]) ? $context["items"] : null), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "core/modules/node/templates/field--node--uid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  27 => 20,  21 => 18,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 42,  24 => 41,  19 => 18,);
    }
}
