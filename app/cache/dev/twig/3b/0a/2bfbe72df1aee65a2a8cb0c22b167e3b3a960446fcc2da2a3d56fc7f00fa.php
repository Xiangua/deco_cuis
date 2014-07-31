<?php

/* CebPhotoBundle:Default:index.html.twig */
class __TwigTemplate_3b0a2bfbe72df1aee65a2a8cb0c22b167e3b3a960446fcc2da2a3d56fc7f00fa extends Twig_Template
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
<h1 id=\"titre\">Travaux fini</h1>

\t<div id=\"myGallery\" class=\"spacegallery\">

\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle00.jpg"), "html", null, true);
        echo "\" alt=\"test00\" />
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle01.jpg"), "html", null, true);
        echo "\" alt=\"test01\" />
\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle02.jpg"), "html", null, true);
        echo "\" alt=\"test02\" />
\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle03.jpg"), "html", null, true);
        echo "\" alt=\"test03\" />
\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle04.jpg"), "html", null, true);
        echo "\" alt=\"test04\" />\t

\t</div>

";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  46 => 14,  42 => 13,  38 => 12,  31 => 7,  28 => 6,);
    }
}
