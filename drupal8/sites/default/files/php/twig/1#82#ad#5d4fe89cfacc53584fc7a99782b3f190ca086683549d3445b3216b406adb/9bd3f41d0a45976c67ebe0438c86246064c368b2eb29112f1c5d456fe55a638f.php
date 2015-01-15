<?php

/* core/modules/system/templates/status-messages.html.twig */
class __TwigTemplate_82ad5d4fe89cfacc53584fc7a99782b3f190ca086683549d3445b3216b406adb extends Twig_Template
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
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "  ";
            // line 28
            $context["classes"] = array(0 => "messages", 1 => ("messages--" . (isset($context["type"]) ? $context["type"] : null)));
            // line 33
            echo "  <div class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class"), "html", null, true);
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
            echo "\">
    ";
            // line 34
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 35
                echo "      <div role=\"alert\">
    ";
            }
            // line 37
            echo "      ";
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array")) {
                // line 38
                echo "        <h2 class=\"visually-hidden\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), (isset($context["type"]) ? $context["type"] : null), array(), "array"), "html", null, true);
                echo "</h2>
      ";
            }
            // line 40
            echo "      ";
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 1)) {
                // line 41
                echo "        <ul class=\"messages__list\">
          ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 43
                    echo "            <li class=\"messages__item\">";
                    echo twig_drupal_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "        </ul>
      ";
            } else {
                // line 47
                echo "        ";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), 0), "html", null, true);
                echo "
      ";
            }
            // line 49
            echo "    ";
            if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
                // line 50
                echo "      </div>
    ";
            }
            // line 52
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 41,  38 => 19,  33 => 17,  45 => 28,  39 => 26,  37 => 25,  116 => 103,  110 => 100,  107 => 99,  105 => 98,  99 => 96,  93 => 93,  90 => 92,  87 => 91,  81 => 50,  76 => 86,  72 => 47,  65 => 81,  56 => 78,  42 => 71,  40 => 37,  29 => 16,  27 => 33,  86 => 45,  78 => 49,  74 => 39,  69 => 37,  64 => 36,  57 => 34,  54 => 77,  28 => 25,  92 => 46,  79 => 38,  73 => 36,  63 => 34,  59 => 43,  53 => 30,  50 => 32,  47 => 31,  31 => 22,  21 => 13,  91 => 68,  85 => 52,  80 => 64,  77 => 37,  71 => 61,  68 => 45,  62 => 80,  60 => 57,  55 => 42,  49 => 40,  44 => 27,  35 => 69,  26 => 46,  24 => 14,  51 => 32,  48 => 73,  46 => 21,  43 => 38,  41 => 51,  36 => 35,  34 => 34,  32 => 28,  25 => 28,  23 => 27,  19 => 26,);
    }
}
