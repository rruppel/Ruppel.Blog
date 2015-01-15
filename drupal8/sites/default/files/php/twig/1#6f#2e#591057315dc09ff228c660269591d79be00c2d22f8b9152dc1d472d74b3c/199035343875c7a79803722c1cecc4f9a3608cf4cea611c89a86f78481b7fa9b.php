<?php

/* core/modules/filter/templates/filter-tips.html.twig */
class __TwigTemplate_6f2e591057315dc09ff228c660269591d79be00c2d22f8b9152dc1d472d74b3c extends Twig_Template
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
        // line 21
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 22
            echo "  <h2>";
            echo twig_render_var(t("Text Formats"));
            echo "</h2>
";
        }
        // line 24
        echo "
";
        // line 25
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 26
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 27
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 29
            echo "
  ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 31
                echo "    ";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 32
                    echo "      ";
                    // line 33
                    $context["tip_classes"] = array(0 => "filter-type", 1 => ("filter-" . drupal_html_class((isset($context["name"]) ? $context["name"] : null))));
                    // line 38
                    echo "      <div";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "attributes"), "addClass", array(0 => (isset($context["tip_classes"]) ? $context["tip_classes"] : null)), "method"), "html", null, true);
                    echo ">
      <h3>";
                    // line 39
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "name"), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 41
                echo "
    ";
                // line 42
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "list"))) {
                    // line 43
                    echo "      <ul class=\"tips\">
      ";
                    // line 44
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tip"]) ? $context["tip"] : null), "list"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 45
                        echo "        ";
                        // line 46
                        $context["item_classes"] = array(0 => (((isset($context["long"]) ? $context["long"] : null)) ? (("filter-" . strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), array("/" => "-")))) : ("")));
                        // line 50
                        echo "        <li";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true);
                        echo ">";
                        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "tip"), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "      </ul>
    ";
                }
                // line 54
                echo "
    ";
                // line 55
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 56
                    echo "      </div>
    ";
                }
                // line 58
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
  ";
            // line 60
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 61
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  35 => 27,  32 => 26,  27 => 24,  54 => 34,  49 => 32,  39 => 29,  36 => 28,  30 => 25,  28 => 25,  21 => 22,  64 => 38,  59 => 36,  52 => 35,  50 => 34,  45 => 31,  42 => 30,  37 => 29,  31 => 28,  26 => 29,  24 => 24,  19 => 21,);
    }
}
