<?php

/* CebGoldbookBundle::layout.html.twig */
class __TwigTemplate_cdf1b4b54280c52cda3e4984fbe43a49758305ad7912a3f818cb7f0797997c9d extends Twig_Template
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
        echo " - Livre d'or
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h1>Golden Book</h1>

  ";
        // line 11
        $this->displayBlock('cebphoto_body', $context, $blocks);
        // line 13
        echo "
";
    }

    // line 11
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 12
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
        return array (  58 => 12,  55 => 11,  50 => 13,  48 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  31 => 6,  28 => 5,);
    }
}
