<?php

/* CebPhotoBundle:Default:finition.html.twig */
class __TwigTemplate_1dfe23d7c3233845165caf99a4ccf4f798b03eb502864855f0701c619333099d extends Twig_Template
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
<h1 id=\"titre\">finition</h1>

\t<div id=\"myGallery\" class=\"spacegallery\">

\t\t<img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle00.jpg"), "html", null, true);
        echo "\" alt=\"test00\" />
\t\t<img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle01.jpg"), "html", null, true);
        echo "\" alt=\"test01\" />
\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle02.jpg"), "html", null, true);
        echo "\" alt=\"test02\" />
\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle03.jpg"), "html", null, true);
        echo "\" alt=\"test03\" />
\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/salle04.jpg"), "html", null, true);
        echo "\" alt=\"test04\" />
\t\t

\t</div>

";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:finition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  31 => 5,  28 => 4,);
    }
}
