<?php

/* CebAutreBundle:Default:present.html.twig */
class __TwigTemplate_da119f641aa09a9130b37e9180227aff9e5c5c31df837a2b2cf1fe2fe36f861b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebAutreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'autre' => array($this, 'block_autre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebAutreBundle::layout.html.twig";
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
        echo " - Presentation
";
    }

    // line 8
    public function block_autre($context, array $blocks = array())
    {
        // line 9
        echo "
\t<div class=\"present\"><font>
\t\tpresentation de l'entreprise 
\t\ttexte a placer ici!
\t</font></div>

";
    }

    public function getTemplateName()
    {
        return "CebAutreBundle:Default:present.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  150 => 44,  134 => 12,  129 => 11,  126 => 10,  113 => 52,  97 => 48,  70 => 27,  58 => 12,  23 => 2,  81 => 35,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 33,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 34,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 33,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 8,  115 => 43,  111 => 37,  108 => 36,  101 => 49,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 26,  55 => 11,  52 => 21,  50 => 13,  43 => 6,  41 => 9,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 15,  54 => 16,  51 => 14,  48 => 11,  45 => 12,  42 => 9,  39 => 8,  36 => 10,  33 => 4,  30 => 3,);
    }
}
