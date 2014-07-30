<?php

/* CebAutreBundle:Default:partenaire.html.twig */
class __TwigTemplate_aa85f620a0f6b82c2426e8a99a007178ace7368a5a311c9c355180d2992ddddb extends Twig_Template
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
        echo " - Partenaire
";
    }

    // line 8
    public function block_autre($context, array $blocks = array())
    {
        // line 9
        echo "\t
\t<h2>Partenaire</h2>

";
    }

    public function getTemplateName()
    {
        return "CebAutreBundle:Default:partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
