<?php

/* CebAutreBundle:Default:index.html.twig */
class __TwigTemplate_688a6f7b0da73390f2521a7ebd58c90af3732f7a186e9067aef6675f51ec62d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebAutreBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'autre' => array($this, 'block_autre'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebAutreBundle::layout.html.twig";
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
        echo " - Contact
";
    }

    // line 7
    public function block_autre($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h2>Contact</h2>

";
    }

    public function getTemplateName()
    {
        return "CebAutreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
