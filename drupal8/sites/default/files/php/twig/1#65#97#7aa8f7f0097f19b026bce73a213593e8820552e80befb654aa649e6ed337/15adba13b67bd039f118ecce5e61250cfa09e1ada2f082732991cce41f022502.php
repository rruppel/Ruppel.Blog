<?php

/* core/modules/system/templates/datetime-wrapper.html.twig */
class __TwigTemplate_65977aa8f7f0097f19b026bce73a213593e8820552e80befb654aa649e6ed337 extends Twig_Template
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
        // line 19
        $context["title_classes"] = array(0 => "label", 1 => (((isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 24
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 25
            echo "  <h4";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</h4>
";
        }
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
";
        // line 28
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 29
            echo "  <div class=\"description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/datetime-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 29,  31 => 27,  21 => 24,  24 => 16,  35 => 28,  29 => 25,  23 => 25,  19 => 19,);
    }
}
