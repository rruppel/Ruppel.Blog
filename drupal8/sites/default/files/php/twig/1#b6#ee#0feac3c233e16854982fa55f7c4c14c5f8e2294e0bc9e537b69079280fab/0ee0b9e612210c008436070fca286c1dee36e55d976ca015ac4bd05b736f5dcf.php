<?php

/* core/modules/block/templates/block-list.html.twig */
class __TwigTemplate_b6ee0feac3c233e16854982fa55f7c4c14c5f8e2294e0bc9e537b69079280fab extends Twig_Template
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
        echo "<div class=\"layout-block-list clearfix\">
  <div class=\"layout-region block-list-primary\">
    ";
        // line 18
        echo twig_drupal_escape_filter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "place_blocks"), "html", null, true);
        echo "
  </div>
  <div class=\"layout-region block-list-secondary\">
    ";
        // line 21
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "place_blocks"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 21,  23 => 18,  19 => 16,);
    }
}
