<?php

/* CebAutreBundle::layout.html.twig */
class __TwigTemplate_7f9ec8dec5134660462e6e784f5c87d0b6d95c33c7546532120c19354ea8d0b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'autre' => array($this, 'block_autre'),
            'cebautre_body' => array($this, 'block_cebautre_body'),
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
        echo "  ";
        $this->displayBlock('autre', $context, $blocks);
        // line 12
        echo "


  ";
        // line 16
        echo "  ";
        $this->displayBlock('cebautre_body', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 10
    public function block_autre($context, array $blocks = array())
    {
        // line 11
        echo "  ";
    }

    // line 16
    public function block_cebautre_body($context, array $blocks = array())
    {
        // line 17
        echo "  ";
    }

    public function getTemplateName()
    {
        return "CebAutreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  66 => 11,  63 => 10,  58 => 18,  55 => 16,  50 => 12,  47 => 10,  44 => 8,  41 => 7,  34 => 4,  31 => 3,  37 => 7,  32 => 4,  29 => 3,);
    }
}
