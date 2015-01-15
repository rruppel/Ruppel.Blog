<?php

/* core/modules/system/templates/details.html.twig */
class __TwigTemplate_3381dc4352a3633c9a29e8899be5c7269b678b9ce917c7da5ef0800b12b7a58c extends Twig_Template
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
        echo "<details";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        // line 19
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 20
            echo "<summary";
            echo twig_drupal_escape_filter($this->env, (isset($context["summary_attributes"]) ? $context["summary_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "</summary>";
        }
        // line 22
        echo "<div class=\"details-wrapper\">";
        // line 23
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 24
            echo "<div class=\"details-description\">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>";
        }
        // line 26
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 27
            echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        }
        // line 29
        if ((isset($context["value"]) ? $context["value"] : null)) {
            // line 30
            echo twig_drupal_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        }
        // line 32
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 26,  36 => 24,  34 => 23,  32 => 22,  25 => 20,  23 => 19,  19 => 18,);
    }
}
