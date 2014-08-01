<?php

/* CebPhotoBundle::layout.html.twig */
class __TwigTemplate_639bce2f2bdb0dec83d11a5cf014023fa3eba60b36e0bcee70a5c4a0a774400a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Photos
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
\t<div class=\"menu-photo\">
    \t<ul id=\"nav\">

\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ceb_photo_homepage");
        echo "\">Travaux fini</a></li>
\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("ceb_photo_cuisine");
        echo "\">Cuisine</a></li>
\t\t    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ceb_photo_bain");
        echo "\">Bain</a></li>
\t\t    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("ceb_photo_finition");
        echo "\">finition</a></li>

\t\t</ul>
\t</div>

\t<br />

  ";
        // line 24
        $this->displayBlock('cebphoto_body', $context, $blocks);
        // line 26
        echo "
";
    }

    // line 24
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 25
        echo "  ";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  78 => 24,  73 => 26,  71 => 24,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
