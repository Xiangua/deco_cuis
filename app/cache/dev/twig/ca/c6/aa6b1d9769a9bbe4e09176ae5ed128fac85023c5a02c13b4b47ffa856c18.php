<?php

/* CebPhotoBundle:Default:deleteBain.html.twig */
class __TwigTemplate_cac6aa6b1d9769a9bbe4e09176ae5ed128fac85023c5a02c13b4b47ffa856c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebPhotoBundle::layout.html.twig");

        $this->blocks = array(
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebPhotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 7
        echo "
\t<div class=\"present\">
\t\t<p>Selectionner une photo à supprimer </p>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Objets"]) ? $context["Objets"] : $this->getContext($context, "Objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["Objet"]) {
            // line 11
            echo "\t\t\t";
            echo "<br><br>";
            echo "
\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("destroyBain", array("id" => $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "id"))), "html", null, true);
            echo "\" class=\"btn\">
\t\t    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "name"), "html", null, true);
            echo "
\t\t    ";
            // line 14
            echo "<br>";
            echo "
\t\t    <img class=\"test\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/bain/" . twig_escape_filter($this->env, $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "path")))), "html", null, true);
            echo "\" alt=\"\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Objet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
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
        return array (  65 => 17,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  40 => 11,  36 => 10,  31 => 7,  28 => 6,);
    }
}
