<?php

/* core/modules/system/templates/field.html.twig */
class __TwigTemplate_bf057b634beca47392ee85f18d8f72668c3621ad46674940af50d4c9e0410505 extends Twig_Template
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
        // line 32
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 33
        if ((!(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 34
            echo "    <div class=\"field-label";
            if ($this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class")) {
                echo " ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class"), "html", null, true);
            }
            echo "\"";
            echo twig_drupal_escape_filter($this->env, twig_without((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "class"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo ":&nbsp;</div>
  ";
        }
        // line 36
        echo "  <div class=\"field-items\"";
        echo twig_drupal_escape_filter($this->env, (isset($context["content_attributes"]) ? $context["content_attributes"] : null), "html", null, true);
        echo ">
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 38
            echo "      <div class=\"field-item\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item_attributes"]) ? $context["item_attributes"] : null), (isset($context["delta"]) ? $context["delta"] : null), array(), "array"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["item"]) ? $context["item"] : null), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 40,  48 => 38,  44 => 37,  26 => 34,  105 => 103,  96 => 99,  91 => 97,  85 => 94,  77 => 91,  71 => 88,  68 => 87,  66 => 86,  62 => 85,  53 => 82,  47 => 80,  39 => 36,  34 => 76,  32 => 75,  23 => 21,  29 => 30,  31 => 21,  27 => 20,  21 => 71,  155 => 93,  149 => 90,  146 => 89,  143 => 88,  137 => 85,  134 => 84,  131 => 83,  125 => 81,  122 => 80,  116 => 77,  113 => 76,  110 => 75,  104 => 73,  102 => 102,  99 => 71,  93 => 98,  90 => 67,  84 => 64,  81 => 93,  79 => 62,  76 => 61,  70 => 58,  67 => 57,  64 => 56,  58 => 84,  55 => 83,  52 => 51,  46 => 48,  43 => 47,  41 => 46,  36 => 22,  30 => 43,  28 => 74,  24 => 33,  19 => 32,);
    }
}
