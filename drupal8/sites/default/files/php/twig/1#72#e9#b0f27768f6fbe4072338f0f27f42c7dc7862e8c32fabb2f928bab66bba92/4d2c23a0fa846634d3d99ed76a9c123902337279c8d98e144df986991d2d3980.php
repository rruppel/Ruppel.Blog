<?php

/* core/modules/views/templates/views-view-unformatted.html.twig */
class __TwigTemplate_72e9b0f27768f6fbe4072338f0f27f42c7dc7862e8c32fabb2f928bab66bba92 extends Twig_Template
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
        // line 17
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 18
            echo "  <h3>";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h3>
";
        }
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 21
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"), "html", null, true);
            echo ">
    ";
            // line 22
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"), "html", null, true);
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 21,  27 => 20,  21 => 18,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 72,  99 => 71,  93 => 68,  90 => 67,  84 => 64,  81 => 63,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 53,  55 => 52,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 42,  24 => 41,  19 => 17,);
    }
}
