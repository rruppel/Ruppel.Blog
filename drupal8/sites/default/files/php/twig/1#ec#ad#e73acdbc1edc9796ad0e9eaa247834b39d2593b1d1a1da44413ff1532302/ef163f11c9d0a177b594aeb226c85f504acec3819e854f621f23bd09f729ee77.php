<?php

/* core/modules/system/templates/radios.html.twig */
class __TwigTemplate_ecade73acdbc1edc9796ad0e9eaa247834b39d2593b1d1a1da44413ff1532302 extends Twig_Template
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
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/radios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 41,  63 => 39,  60 => 38,  54 => 36,  52 => 35,  47 => 34,  41 => 32,  39 => 31,  36 => 30,  26 => 28,  24 => 26,  19 => 15,);
    }
}
