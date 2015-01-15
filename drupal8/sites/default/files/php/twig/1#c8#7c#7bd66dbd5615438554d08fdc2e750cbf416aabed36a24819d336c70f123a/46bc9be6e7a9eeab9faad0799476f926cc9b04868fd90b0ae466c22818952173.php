<?php

/* core/modules/system/templates/select.html.twig */
class __TwigTemplate_c87c7bd66dbd5615438554d08fdc2e750cbf416aabed36a24819d336c70f123a extends Twig_Template
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
        // line 15
        echo "<select";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["options"]) ? $context["options"] : null), "html", null, true);
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 26,  36 => 24,  34 => 23,  32 => 22,  25 => 20,  23 => 19,  19 => 15,);
    }
}
