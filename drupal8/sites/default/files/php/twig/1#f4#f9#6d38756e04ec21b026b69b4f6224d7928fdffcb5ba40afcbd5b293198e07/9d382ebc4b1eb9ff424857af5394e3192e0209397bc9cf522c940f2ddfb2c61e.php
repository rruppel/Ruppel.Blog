<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_f4f96d38756e04ec21b026b69b4f6224d7928fdffcb5ba40afcbd5b293198e07 extends Twig_Template
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
        // line 18
        $context["classes"] = array(0 => "region", 1 => ("region-" . drupal_html_class((isset($context["region"]) ? $context["region"] : null))));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 25
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 33,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 32,  53 => 30,  50 => 32,  47 => 31,  31 => 26,  21 => 23,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 35,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 49,  26 => 46,  24 => 26,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 29,  34 => 23,  32 => 28,  25 => 20,  23 => 24,  19 => 18,);
    }
}
