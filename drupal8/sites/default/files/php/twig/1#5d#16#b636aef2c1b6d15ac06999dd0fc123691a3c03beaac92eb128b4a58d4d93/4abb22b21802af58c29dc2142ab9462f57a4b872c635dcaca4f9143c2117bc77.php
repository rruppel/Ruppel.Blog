<?php

/* core/modules/user/templates/user.html.twig */
class __TwigTemplate_5d16b636aef2c1b6d15ac06999dd0fc123691a3c03beaac92eb128b4a58d4d93 extends Twig_Template
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
        // line 26
        echo "<article";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "profile"), "method"), "html", null, true);
        echo ">
  ";
        // line 27
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 28
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        }
        // line 30
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "core/modules/user/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 28,  105 => 103,  96 => 99,  91 => 97,  85 => 94,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  53 => 82,  47 => 80,  39 => 77,  34 => 76,  32 => 75,  23 => 21,  29 => 30,  31 => 21,  27 => 20,  21 => 71,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 102,  99 => 71,  93 => 98,  90 => 67,  84 => 64,  81 => 93,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 84,  55 => 83,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 74,  24 => 27,  19 => 26,);
    }
}
