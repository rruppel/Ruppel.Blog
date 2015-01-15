<?php

/* core/modules/system/templates/menu.html.twig */
class __TwigTemplate_aeb7b2cfcf2169fcbee40b19855cb1ac2c208ca4030b148dc61adbe6d55088aa extends Twig_Template
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
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo twig_render_var($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0));
        echo "

";
    }

    // line 26
    public function getmenu_links($_items = null, $_attributes = null, $_menu_level = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $_items,
            "attributes" => $_attributes,
            "menu_level" => $_menu_level,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "menu"), "method"), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 34
                echo "      ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "        <li";
                    echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attributes"), "html", null, true);
                    echo ">
          ";
                    // line 36
                    echo twig_drupal_escape_filter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "url")), "html", null, true);
                    echo "
          ";
                    // line 37
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "below")) {
                        // line 38
                        echo "            ";
                        echo twig_render_var($context["menus"]->getmenu_links($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "below"), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)));
                        echo "
          ";
                    }
                    // line 40
                    echo "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  79 => 38,  73 => 36,  63 => 34,  59 => 32,  53 => 30,  50 => 29,  47 => 28,  31 => 26,  21 => 19,  91 => 68,  85 => 40,  80 => 64,  77 => 37,  71 => 61,  68 => 35,  62 => 58,  60 => 57,  55 => 56,  49 => 53,  44 => 27,  35 => 49,  26 => 46,  24 => 24,  51 => 32,  48 => 30,  46 => 29,  43 => 27,  41 => 51,  36 => 24,  34 => 23,  32 => 48,  25 => 20,  23 => 19,  19 => 18,);
    }
}
