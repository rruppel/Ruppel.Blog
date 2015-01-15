<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_25338bf2bf69e02db54d9106422c5fb7801a707843adeb4a8f81039c19943b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@system/block--system-menu-block.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@system/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["show_anchor"] = ("show-" . drupal_clean_id_identifier($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id")));
        // line 11
        $context["hide_anchor"] = ("hide-" . drupal_clean_id_identifier($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id")));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display")) {
            // line 15
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
            echo ">
  ";
        } else {
            // line 17
            echo "    ";
            // line 18
            echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
            echo twig_drupal_escape_filter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
            // line 20
            echo twig_drupal_escape_filter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\">";
            echo twig_render_var(t("Menu"));
            echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
            // line 21
            echo twig_drupal_escape_filter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\">";
            echo twig_render_var(t("Menu"));
            echo "</a>
  ";
        }
        // line 23
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
        // line 24
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display")) {
            // line 25
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  70 => 23,  63 => 21,  57 => 20,  48 => 18,  46 => 17,  40 => 15,  37 => 14,  32 => 12,  27 => 11,  25 => 10,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  203 => 145,  197 => 142,  194 => 141,  192 => 140,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  169 => 132,  163 => 129,  160 => 128,  158 => 127,  155 => 126,  149 => 123,  146 => 122,  144 => 121,  137 => 117,  133 => 116,  130 => 115,  126 => 113,  120 => 110,  113 => 109,  111 => 108,  108 => 107,  105 => 106,  95 => 103,  88 => 102,  85 => 101,  75 => 24,  67 => 95,  64 => 94,  62 => 93,  55 => 92,  53 => 19,  50 => 90,  42 => 87,  35 => 13,  33 => 85,  28 => 83,  23 => 81,  19 => 79,);
    }
}
