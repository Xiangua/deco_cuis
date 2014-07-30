<?php

/* CebAutreBundle::layout.html.twig */
class __TwigTemplate_fab52c58beea930d34dfd9f971b7bdea8258e5b8dd9748ed195b3dd3c178b024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'autre' => array($this, 'block_autre'),
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
\t";
        // line 6
        $this->displayBlock('autre', $context, $blocks);
        // line 8
        echo "

";
    }

    // line 6
    public function block_autre($context, array $blocks = array())
    {
        // line 7
        echo "\t";
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
        return array (  46 => 7,  43 => 6,  37 => 8,  35 => 6,  42 => 8,  39 => 7,  32 => 5,  29 => 4,);
    }
}
