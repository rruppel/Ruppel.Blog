<?php

/* core/modules/toolbar/templates/toolbar.html.twig */
class __TwigTemplate_a0e2c412193dee2115d83a76b8b6b79e16da934b08caf9f66ce1b77fdb269446 extends Twig_Template
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
        // line 25
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "toolbar"), "method"), "html", null, true);
        echo ">
  <nav";
        // line 26
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["toolbar_attributes"]) ? $context["toolbar_attributes"] : null), "addClass", array(0 => "toolbar-bar", 1 => "clearfix"), "method"), "html", null, true);
        echo ">
    <h2 class=\"visually-hidden\">";
        // line 27
        echo twig_drupal_escape_filter($this->env, (isset($context["toolbar_heading"]) ? $context["toolbar_heading"] : null), "html", null, true);
        echo "</h2>
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 29
            echo "      <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "attributes"), "addClass", array(0 => "toolbar-tab"), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "link"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </nav>
  ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trays"]) ? $context["trays"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tray"]) {
            // line 33
            echo "    ";
            ob_start();
            // line 34
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "attributes"), "html", null, true);
            echo ">
    ";
            // line 35
            if ($this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label")) {
                // line 36
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"), "html", null, true);
                echo "\">
          <h3 class=\"toolbar-tray-name visually-hidden\">";
                // line 37
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "label"), "html", null, true);
                echo "</h3>
    ";
            } else {
                // line 39
                echo "      <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
    ";
            }
            // line 41
            echo "        ";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tray"]) ? $context["tray"] : null), "links"), "html", null, true);
            echo "
      </nav>
    </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 45
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tray'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["remainder"]) ? $context["remainder"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/toolbar/templates/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  78 => 41,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 33,  28 => 27,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 32,  53 => 30,  50 => 32,  47 => 31,  31 => 26,  21 => 19,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 35,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 49,  26 => 46,  24 => 26,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 29,  34 => 23,  32 => 28,  25 => 20,  23 => 19,  19 => 25,);
    }
}
