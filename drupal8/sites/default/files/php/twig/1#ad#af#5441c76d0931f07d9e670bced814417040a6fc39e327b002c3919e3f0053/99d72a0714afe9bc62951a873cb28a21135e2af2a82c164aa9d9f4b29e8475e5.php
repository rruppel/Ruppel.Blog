<?php

/* core/themes/bartik/templates/block.html.twig */
class __TwigTemplate_adaf5441c76d0931f07d9e670bced814417040a6fc39e327b002c3919e3f0053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 42
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 45
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 47
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    <div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
        echo ">
      ";
        // line 50
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 49,  41 => 47,  69 => 63,  66 => 62,  61 => 50,  58 => 62,  45 => 58,  34 => 55,  31 => 44,  24 => 52,  22 => 42,  20 => 37,  77 => 25,  70 => 23,  63 => 21,  57 => 20,  48 => 53,  46 => 48,  40 => 57,  37 => 56,  32 => 12,  27 => 43,  25 => 10,  339 => 199,  333 => 196,  330 => 195,  328 => 194,  325 => 193,  319 => 190,  315 => 189,  311 => 188,  307 => 187,  304 => 186,  302 => 185,  297 => 182,  291 => 179,  287 => 178,  283 => 177,  280 => 176,  278 => 175,  273 => 172,  267 => 169,  264 => 168,  262 => 167,  259 => 166,  253 => 163,  250 => 162,  248 => 161,  242 => 158,  237 => 157,  231 => 154,  228 => 153,  226 => 152,  221 => 151,  215 => 148,  210 => 147,  208 => 146,  203 => 145,  197 => 142,  194 => 141,  192 => 140,  188 => 139,  185 => 138,  179 => 137,  173 => 134,  169 => 132,  163 => 129,  160 => 128,  158 => 127,  155 => 126,  149 => 123,  146 => 122,  144 => 121,  137 => 117,  133 => 116,  130 => 115,  126 => 113,  120 => 110,  113 => 109,  111 => 108,  108 => 107,  105 => 106,  95 => 103,  88 => 102,  85 => 101,  75 => 24,  67 => 95,  64 => 94,  62 => 93,  55 => 92,  53 => 48,  50 => 90,  42 => 87,  35 => 13,  33 => 45,  28 => 83,  23 => 81,  19 => 79,);
    }
}
