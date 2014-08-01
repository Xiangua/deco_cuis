<?php

/* CebPhotoBundle:Default:succes.html.twig */
class __TwigTemplate_5dc268f72ddf378ffc26bc92416cf344d537017398b0423f73cce46756719dd7 extends Twig_Template
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
        echo "Votre photos à été ajouté avec succès!
<br>
<br>
";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "name"), "html", null, true);
        echo "
<br>
<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/bain/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "path")))), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("ceb_photo_homepage");
        echo "\">Travaux fini</a></li>
\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("ceb_photo_cuisine");
        echo "\">Cuisine</a></li>
\t\t    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("ceb_photo_bain");
        echo "\">Bain</a></li>
\t\t    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("ceb_photo_finition");
        echo "\">finition</a></li>
\t\t    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "  \t\t\t\t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("uploadbain");
            echo "\">Ajouter une photo dans : bains</a></li>
\t\t\t";
        }
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  150 => 44,  134 => 12,  129 => 11,  126 => 10,  113 => 52,  97 => 48,  70 => 27,  58 => 24,  23 => 2,  81 => 35,  53 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 33,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 34,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 15,  63 => 15,  59 => 14,  38 => 12,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 14,  27 => 4,  44 => 12,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 33,  72 => 16,  69 => 25,  47 => 9,  40 => 11,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 8,  115 => 43,  111 => 37,  108 => 36,  101 => 49,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 26,  55 => 15,  52 => 21,  50 => 15,  43 => 10,  41 => 9,  35 => 5,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 15,  54 => 16,  51 => 12,  48 => 13,  45 => 10,  42 => 13,  39 => 9,  36 => 10,  33 => 7,  30 => 5,);
    }
}
