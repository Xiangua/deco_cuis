<?php

/* CebPhotoBundle:Default:deleteBain.html.twig */
class __TwigTemplate_cac6aa6b1d9769a9bbe4e09176ae5ed128fac85023c5a02c13b4b47ffa856c18 extends Twig_Template
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
        // line 1
        echo "<h1> Selectionner une photo à supprimer <h1\\>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Objets"]) ? $context["Objets"] : $this->getContext($context, "Objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["Objet"]) {
            // line 3
            echo "\t";
            echo "<br><br>";
            echo "
\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyBain", array("id" => $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "name"), "html", null, true);
            echo "
    ";
            // line 6
            echo "<br>";
            echo "
    <img src=";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/bain/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Objet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:deleteBain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  134 => 12,  129 => 11,  126 => 10,  113 => 52,  97 => 48,  70 => 27,  58 => 24,  23 => 2,  81 => 35,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 33,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 34,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 15,  63 => 15,  59 => 14,  38 => 10,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 3,  93 => 46,  88 => 6,  78 => 24,  46 => 12,  27 => 4,  44 => 12,  31 => 4,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 33,  72 => 16,  69 => 25,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 8,  115 => 43,  111 => 37,  108 => 36,  101 => 49,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 26,  55 => 15,  52 => 21,  50 => 13,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 16,  54 => 14,  51 => 14,  48 => 13,  45 => 19,  42 => 11,  39 => 6,  36 => 10,  33 => 6,  30 => 5,);
    }
}
