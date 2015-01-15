<?php

/* core/modules/system/templates/breadcrumb.html.twig */
class __TwigTemplate_0de319b1bdcbb5a5eff9826402ec0fb98e8929d8e64f99ff56d93d2d578f6281 extends Twig_Template
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
        // line 12
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 13
            echo "  <nav class=\"breadcrumb\" role=\"navigation\" aria-labelledby=\"system-breadcrumb\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 14
            echo twig_render_var(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "      <li>
        ";
                // line 18
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")) {
                    // line 19
                    echo "          <a href=\"";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 21
                    echo "          ";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), "html", null, true);
                    echo "
        ";
                }
                // line 23
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  38 => 19,  33 => 17,  45 => 28,  39 => 26,  37 => 25,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 88,  76 => 86,  72 => 85,  65 => 81,  56 => 78,  42 => 71,  40 => 70,  29 => 16,  27 => 21,  86 => 45,  78 => 87,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 77,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 25,  53 => 30,  50 => 32,  47 => 31,  31 => 22,  21 => 13,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 80,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 69,  26 => 46,  24 => 14,  51 => 32,  48 => 73,  46 => 21,  43 => 27,  41 => 51,  36 => 18,  34 => 23,  32 => 28,  25 => 20,  23 => 65,  19 => 12,);
    }
}
