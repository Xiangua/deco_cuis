<?php

/* CebPhotoBundle:Default:cuisine.html.twig */
class __TwigTemplate_617faf30604f68b0397197720339e5bd345dce4be8b1fa6c8d5b7066c5b20b89 extends Twig_Template
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

    // line 4
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 5
        echo "
<h2 id=\"titre\">Nos cuisines</h2>

\t<div id=\"myGallery\" class=\"spacegallery\">

\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Objets"]) ? $context["Objets"] : $this->getContext($context, "Objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["Objet"]) {
            // line 11
            echo "\t\t    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("images/cuisine/" . $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "path"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Objet"]) ? $context["Objet"] : $this->getContext($context, "Objet")), "name"), "html", null, true);
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Objet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t

\t</div>

";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:cuisine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  42 => 11,  38 => 10,  31 => 5,  28 => 4,);
    }
}
