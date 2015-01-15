<?php

/* core/modules/system/templates/container.html.twig */
class __TwigTemplate_8fdb8c7c6ba25ccba0236fa1690e70b4693f56c4b9df4407cdb28d32a96561f2 extends Twig_Template
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
        // line 20
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (((isset($context["has_parent"]) ? $context["has_parent"] : null)) ? ("form-wrapper") : (""))), "method"), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 17,  91 => 68,  85 => 65,  80 => 64,  77 => 63,  71 => 61,  68 => 60,  62 => 58,  60 => 57,  55 => 56,  49 => 53,  44 => 52,  35 => 49,  26 => 46,  24 => 45,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 24,  34 => 23,  32 => 48,  25 => 20,  23 => 19,  19 => 20,);
    }
}
