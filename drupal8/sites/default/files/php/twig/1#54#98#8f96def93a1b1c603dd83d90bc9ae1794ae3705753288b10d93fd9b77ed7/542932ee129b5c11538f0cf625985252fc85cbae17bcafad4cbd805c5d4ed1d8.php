<?php

/* core/modules/system/templates/form.html.twig */
class __TwigTemplate_54988f96def93a1b1c603dd83d90bc9ae1794ae3705753288b10d93fd9b77ed7 extends Twig_Template
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
        echo "<form";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 17,  91 => 68,  85 => 65,  80 => 64,  77 => 63,  71 => 61,  68 => 60,  62 => 58,  60 => 57,  55 => 56,  49 => 53,  44 => 52,  35 => 49,  26 => 46,  24 => 16,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 24,  34 => 23,  32 => 48,  25 => 20,  23 => 19,  19 => 15,);
    }
}
