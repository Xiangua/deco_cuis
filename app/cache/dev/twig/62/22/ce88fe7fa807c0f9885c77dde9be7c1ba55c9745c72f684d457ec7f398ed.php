<?php

/* CebPhotoBundle::layout.html.twig */
class __TwigTemplate_6222ce88fe7fa807c0f9885c77dde9be7c1ba55c9745c72f684d457ec7f398ed extends Twig_Template
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
  ";
        // line 12
        echo "  <h1>Galerie</h1>


  ";
        // line 16
        echo "  ";
        $this->displayBlock('cebphoto_body', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 16
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 17
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
        return array (  62 => 17,  59 => 16,  54 => 18,  51 => 16,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,);
    }
}
