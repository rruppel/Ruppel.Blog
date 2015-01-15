<?php

/* core/modules/file/templates/file-upload-help.html.twig */
class __TwigTemplate_f7c726b4895d5aa0a61f4bdf99cec904c66bc64f494657c6fa5496b7a5d08ec2 extends Twig_Template
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
        // line 14
        echo twig_render_var(twig_drupal_join_filter((isset($context["descriptions"]) ? $context["descriptions"] : null), "<br />"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/modules/file/templates/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 14,);
    }
}
