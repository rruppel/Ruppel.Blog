<?php

/* core/modules/node/templates/field--node--title.html.twig */
class __TwigTemplate_c79d751d330d9c29e589780a6f86c922708f80642b440b63ce9b76711ddb9e1a extends Twig_Template
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
        return "core/modules/node/templates/field--node--title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 103,  96 => 99,  91 => 97,  85 => 94,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  53 => 82,  47 => 80,  39 => 77,  34 => 76,  32 => 75,  23 => 21,  29 => 24,  31 => 21,  27 => 20,  21 => 71,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 102,  99 => 71,  93 => 98,  90 => 67,  84 => 64,  81 => 93,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 84,  55 => 83,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 74,  24 => 41,  19 => 18,);
    }
}
