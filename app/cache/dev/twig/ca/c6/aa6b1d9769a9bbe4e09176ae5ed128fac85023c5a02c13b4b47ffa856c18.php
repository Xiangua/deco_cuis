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
        return array (  155 => 58,  146 => 55,  141 => 53,  138 => 52,  134 => 51,  129 => 48,  120 => 45,  115 => 43,  112 => 42,  108 => 41,  103 => 38,  94 => 35,  89 => 33,  86 => 32,  82 => 31,  77 => 28,  68 => 25,  63 => 23,  60 => 22,  56 => 21,  45 => 13,  41 => 12,  37 => 11,  31 => 7,  28 => 6,);
    }
}
