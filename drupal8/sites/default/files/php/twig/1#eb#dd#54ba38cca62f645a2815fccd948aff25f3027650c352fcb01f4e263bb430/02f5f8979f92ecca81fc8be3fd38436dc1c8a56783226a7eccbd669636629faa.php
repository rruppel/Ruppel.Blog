<?php

/* core/modules/system/templates/vertical-tabs.html.twig */
class __TwigTemplate_ebdd54ba38cca62f645a2815fccd948aff25f3027650c352fcb01f4e263bb430 extends Twig_Template
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
        echo "<div data-vertical-tabs-panes";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/vertical-tabs.html.twig";
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
