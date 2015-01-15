<?php

/* core/modules/filter/templates/filter-guidelines.html.twig */
class __TwigTemplate_a8be331ff7b6b672fbe511f8303ebaaf182fa47a0b88bcea34297feedfd3de5a extends Twig_Template
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
        // line 23
        $context["classes"] = array(0 => "filter-guidelines-item", 1 => ("filter-guidelines-" . $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "format")));
        // line 28
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  <h4 class=\"label\">";
        // line 29
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["format"]) ? $context["format"] : null), "name"), "html", null, true);
        echo "</h4>
  ";
        // line 30
        echo twig_drupal_escape_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-guidelines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 34,  49 => 33,  39 => 29,  36 => 28,  30 => 30,  28 => 25,  21 => 28,  64 => 38,  59 => 36,  52 => 35,  50 => 34,  45 => 31,  42 => 31,  37 => 29,  31 => 28,  26 => 29,  24 => 24,  19 => 23,);
    }
}
