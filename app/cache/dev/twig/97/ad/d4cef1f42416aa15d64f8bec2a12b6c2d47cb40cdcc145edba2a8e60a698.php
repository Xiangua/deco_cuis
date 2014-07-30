<?php

/* CebAutreBundle:Default:index.html.twig */
class __TwigTemplate_97add4cef1f42416aa15d64f8bec2a12b6c2d47cb40cdcc145edba2a8e60a698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebAutreBundle::layout.html.twig");

        $this->blocks = array(
            'autre' => array($this, 'block_autre'),
            'cebautre_body' => array($this, 'block_cebautre_body'),
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
    public function block_autre($context, array $blocks = array())
    {
        // line 4
        echo "<h2>Contact</h2>
";
    }

    // line 7
    public function block_cebautre_body($context, array $blocks = array())
    {
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
        return array (  37 => 7,  32 => 4,  29 => 3,);
    }
}
