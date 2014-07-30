<?php

/* CebGoldbookBundle::layout.html.twig */
class __TwigTemplate_6543b6028f73a9ea3e0318a80db27fd3c3beb3f6a152497441d5b610b79ba4db extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Photos
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 10
        echo "  <h1>Golden Book</h1>


  ";
        // line 14
        echo "  ";
        $this->displayBlock('cebphoto_body', $context, $blocks);
        // line 16
        echo "
";
    }

    // line 14
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 15
        echo "  ";
    }

    public function getTemplateName()
    {
        return "CebGoldbookBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  54 => 16,  51 => 14,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  31 => 6,  28 => 5,);
    }
}
