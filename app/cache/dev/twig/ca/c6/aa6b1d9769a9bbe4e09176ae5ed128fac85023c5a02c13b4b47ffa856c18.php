<?php

/* CebPhotoBundle:Default:deleteBain.html.twig */
class __TwigTemplate_cac6aa6b1d9769a9bbe4e09176ae5ed128fac85023c5a02c13b4b47ffa856c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
\t<div class=\"admin\">
\t\t<div class=\"menu-photo\">
\t\t\t<ul id=\"nav\">
\t\t\t\t<li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("uploadtravaux_fini");
        echo "\">Ajouts photos</a></li>
\t\t\t\t<li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ceb_goldbook_homepage");
        echo "\">Mod. livre d'or</a></li>
\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Deconnexion</a></li>
\t\t\t</ul>
\t\t</div>

\t\t<br />
\t\t<table class=\"supp\">
\t\t\t<tr>
\t\t\t\t<td>Travaux Fini</td>
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Travaus"]) ? $context["Travaus"] : $this->getContext($context, "Travaus")));
        foreach ($context['_seq'] as $context["_key"] => $context["Travau"]) {
            // line 22
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyTravau", array("id" => $this->getAttribute((isset($context["Travau"]) ? $context["Travau"] : $this->getContext($context, "Travau")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t    <p>Supprimer</p>
\t\t\t\t\t    <img class=\"test\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/travaux_fini/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Travau"]) ? $context["Travau"] : $this->getContext($context, "Travau")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Travau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Bain</td>
\t\t\t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Bains"]) ? $context["Bains"] : $this->getContext($context, "Bains")));
        foreach ($context['_seq'] as $context["_key"] => $context["Bain"]) {
            // line 32
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyBain", array("id" => $this->getAttribute((isset($context["Bain"]) ? $context["Bain"] : $this->getContext($context, "Bain")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t    <p>Supprimer</p>
\t\t\t\t\t    <img class=\"test\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/bain/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Bain"]) ? $context["Bain"] : $this->getContext($context, "Bain")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Bain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Cuisine</td>
\t\t\t\t";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cuisines"]) ? $context["Cuisines"] : $this->getContext($context, "Cuisines")));
        foreach ($context['_seq'] as $context["_key"] => $context["Cuisine"]) {
            // line 42
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyCuisine", array("id" => $this->getAttribute((isset($context["Cuisine"]) ? $context["Cuisine"] : $this->getContext($context, "Cuisine")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t    <p>Supprimer</p>
\t\t\t\t\t    <img class=\"test\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/Cuisine/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Cuisine"]) ? $context["Cuisine"] : $this->getContext($context, "Cuisine")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Cuisine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Finition</td>
\t\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Finitions"]) ? $context["Finitions"] : $this->getContext($context, "Finitions")));
        foreach ($context['_seq'] as $context["_key"] => $context["Finition"]) {
            // line 52
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyFinition", array("id" => $this->getAttribute((isset($context["Finition"]) ? $context["Finition"] : $this->getContext($context, "Finition")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t\t\t\t    <p>Supprimer</p>
\t\t\t\t\t    <img class=\"test\" src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/finition/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Finition"]) ? $context["Finition"] : $this->getContext($context, "Finition")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
\t\t\t\t\t</td>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Finition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t</tr>

\t\t</table>

\t</div>

";
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
        return array (  155 => 58,  146 => 55,  134 => 51,  129 => 48,  53 => 13,  65 => 21,  77 => 28,  148 => 43,  127 => 10,  113 => 52,  97 => 48,  81 => 25,  70 => 27,  23 => 2,  58 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 12,  119 => 42,  102 => 32,  71 => 24,  67 => 15,  63 => 23,  59 => 14,  38 => 10,  94 => 35,  89 => 33,  85 => 25,  75 => 17,  68 => 25,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 11,  27 => 4,  44 => 12,  31 => 7,  28 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 44,  142 => 59,  138 => 52,  136 => 56,  121 => 8,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 16,  69 => 25,  47 => 14,  40 => 9,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 41,  101 => 49,  98 => 31,  96 => 31,  83 => 33,  74 => 14,  66 => 26,  55 => 15,  52 => 21,  50 => 15,  43 => 10,  41 => 12,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 34,  141 => 53,  133 => 55,  130 => 11,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 38,  99 => 31,  95 => 28,  92 => 21,  86 => 32,  82 => 31,  80 => 19,  73 => 26,  64 => 20,  60 => 22,  57 => 16,  54 => 23,  51 => 16,  48 => 13,  45 => 13,  42 => 11,  39 => 10,  36 => 10,  33 => 6,  30 => 5,);
    }
}
