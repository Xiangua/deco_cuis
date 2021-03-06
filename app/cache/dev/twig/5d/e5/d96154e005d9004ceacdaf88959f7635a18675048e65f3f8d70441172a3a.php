<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_5de5d96154e005d9004ceacdaf88959f7635a18675048e65f3f8d70441172a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  155 => 58,  146 => 55,  134 => 51,  129 => 48,  53 => 16,  65 => 21,  77 => 28,  148 => 43,  127 => 10,  113 => 52,  97 => 48,  81 => 25,  70 => 27,  23 => 2,  58 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 12,  119 => 42,  102 => 32,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  38 => 6,  94 => 35,  89 => 33,  85 => 25,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 44,  142 => 59,  138 => 52,  136 => 56,  121 => 8,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 25,  47 => 14,  40 => 7,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 41,  101 => 49,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 11,  52 => 10,  50 => 13,  43 => 7,  41 => 11,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 34,  141 => 53,  133 => 55,  130 => 11,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 19,  73 => 26,  64 => 20,  60 => 22,  57 => 12,  54 => 18,  51 => 16,  48 => 9,  45 => 13,  42 => 10,  39 => 8,  36 => 8,  33 => 4,  30 => 3,);
    }
}
