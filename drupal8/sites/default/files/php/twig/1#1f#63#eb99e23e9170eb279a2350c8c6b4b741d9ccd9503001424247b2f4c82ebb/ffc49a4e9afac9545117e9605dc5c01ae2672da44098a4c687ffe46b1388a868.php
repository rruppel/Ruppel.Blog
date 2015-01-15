<?php

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_1f63eb99e23e9170eb279a2350c8c6b4b741d9ccd9503001424247b2f4c82ebb extends Twig_Template
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
        // line 44
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 45
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 46
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        if ((!twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null)))) {
            // line 49
            echo "    <span class=\"field-prefix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 51
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"))) {
            // line 52
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "html", null, true);
            echo ">
      ";
            // line 53
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 57
        if ((!twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null)))) {
            // line 58
            echo "    <span class=\"field-suffix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 60
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 61
            echo "    ";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 63
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"))) {
            // line 64
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "html", null, true);
            echo ">
      ";
            // line 65
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 68
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 68,  85 => 65,  80 => 64,  77 => 63,  71 => 61,  68 => 60,  62 => 58,  60 => 57,  55 => 56,  49 => 53,  44 => 52,  35 => 49,  26 => 46,  24 => 45,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 24,  34 => 23,  32 => 48,  25 => 20,  23 => 19,  19 => 44,);
    }
}
