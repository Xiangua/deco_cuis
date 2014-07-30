<?php

/* CebAutreBundle:Default:present.html.twig */
class __TwigTemplate_de43fe2d80c843d4d8a526f8d1450139fa00adbaa1b0e72c1774cbf35e1238c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebAutreBundle::layout.html.twig");

        $this->blocks = array(
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
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

    // line 4
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('autre', $context, $blocks);
        // line 6
        echo "


";
    }

    // line 5
    public function block_autre($context, array $blocks = array())
    {
        echo "<h2>Present</h2>";
    }

    public function getTemplateName()
    {
        return "CebAutreBundle:Default:present.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  34 => 6,  32 => 5,  29 => 4,);
    }
}
