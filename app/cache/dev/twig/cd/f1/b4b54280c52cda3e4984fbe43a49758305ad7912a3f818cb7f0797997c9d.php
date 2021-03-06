<?php

/* CebGoldbookBundle::layout.html.twig */
class __TwigTemplate_cdf1b4b54280c52cda3e4984fbe43a49758305ad7912a3f818cb7f0797997c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Livre d'or
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h1>Golden Book</h1>

  ";
        // line 11
        $this->displayBlock('cebphoto_body', $context, $blocks);
        // line 13
        echo "
";
    }

    // line 11
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "CebGoldbookBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  146 => 55,  134 => 51,  129 => 48,  53 => 15,  65 => 21,  77 => 28,  148 => 43,  127 => 10,  113 => 52,  97 => 48,  81 => 25,  70 => 27,  23 => 2,  58 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 12,  119 => 42,  102 => 32,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  38 => 12,  94 => 35,  89 => 33,  85 => 25,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 11,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 44,  142 => 59,  138 => 52,  136 => 56,  121 => 8,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 14,  40 => 7,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 41,  101 => 49,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 11,  52 => 21,  50 => 13,  43 => 8,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 34,  141 => 53,  133 => 55,  130 => 11,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 19,  73 => 26,  64 => 20,  60 => 22,  57 => 16,  54 => 18,  51 => 16,  48 => 11,  45 => 13,  42 => 13,  39 => 10,  36 => 10,  33 => 4,  30 => 3,);
    }
}
