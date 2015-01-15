<?php

/* core/modules/system/templates/textarea.html.twig */
class __TwigTemplate_f951beb1ec6f11831a81c18b88f50fef359ae782a4bb3ee59cacfee6a4456382 extends Twig_Template
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
        // line 16
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["wrapper_attributes"]) ? $context["wrapper_attributes"] : null), "html", null, true);
        echo "><textarea";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea></div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 41,  63 => 39,  60 => 38,  54 => 36,  52 => 35,  47 => 34,  41 => 32,  39 => 31,  36 => 30,  26 => 28,  24 => 26,  19 => 16,);
    }
}
