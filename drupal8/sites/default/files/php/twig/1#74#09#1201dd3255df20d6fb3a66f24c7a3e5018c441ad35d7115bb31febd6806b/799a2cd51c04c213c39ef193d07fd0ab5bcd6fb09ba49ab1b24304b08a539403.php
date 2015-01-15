<?php

/* core/modules/system/templates/fieldset.html.twig */
class __TwigTemplate_74091201dd3255df20d6fb3a66f24c7a3e5018c441ad35d7115bb31febd6806b extends Twig_Template
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
        // line 25
        echo "<fieldset";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 26
        if (((!twig_test_empty($this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title"))) || (isset($context["required"]) ? $context["required"] : null))) {
            // line 28
            echo "    <legend";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "attributes"), "html", null, true);
            echo "><span class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["legend_span"]) ? $context["legend_span"] : null), "attributes"), "class"), "html", null, true);
            echo "\">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["legend"]) ? $context["legend"] : null), "title"), "html", null, true);
            echo twig_drupal_escape_filter($this->env, (isset($context["required"]) ? $context["required"] : null), "html", null, true);
            echo "</span></legend>";
        }
        // line 30
        echo "  <div class=\"fieldset-wrapper\">
    ";
        // line 31
        if ((isset($context["prefix"]) ? $context["prefix"] : null)) {
            // line 32
            echo "      <span class=\"field-prefix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 34
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
    ";
        // line 35
        if ((isset($context["suffix"]) ? $context["suffix"] : null)) {
            // line 36
            echo "      <span class=\"field-suffix\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
    ";
        }
        // line 38
        echo "    ";
        if ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content")) {
            // line 39
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content"), "html", null, true);
            echo "</div>
    ";
        }
        // line 41
        echo "  </div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/fieldset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 41,  63 => 39,  60 => 38,  54 => 36,  52 => 35,  47 => 34,  41 => 32,  39 => 31,  36 => 30,  26 => 28,  24 => 26,  19 => 25,);
    }
}
