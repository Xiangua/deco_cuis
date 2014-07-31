<?php

/* CebAutreBundle:Default:present.html.twig */
class __TwigTemplate_da119f641aa09a9130b37e9180227aff9e5c5c31df837a2b2cf1fe2fe36f861b extends Twig_Template
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
        echo " - Presentation
";
    }

    // line 8
    public function block_autre($context, array $blocks = array())
    {
        // line 9
        echo "
\t<div class=\"present\"><font>
\t\tpresentation de l'entreprise 
\t\ttexte a placer ici!
\t</font></div>

";
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
        return array (  42 => 9,  39 => 8,  32 => 4,  29 => 3,);
    }
}
