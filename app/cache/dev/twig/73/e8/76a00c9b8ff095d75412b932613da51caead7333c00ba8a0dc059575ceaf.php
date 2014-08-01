<?php

/* CebPhotoBundle:Default:upload.html.twig */
class __TwigTemplate_73e876a00c9b8ff095d75412b932613da51caead7333c00ba8a0dc059575ceaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CebPhotoBundle::layout.html.twig");

        $this->blocks = array(
            'cebphoto_body' => array($this, 'block_cebphoto_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CebPhotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_cebphoto_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"present\">
\t\t<p>met tes photos sur le site</p>

\t\t<form action=\"#\" method=\"post\" ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

\t    <input type=\"submit\" value=\"Upload Document\" />
\t\t</form>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "CebPhotoBundle:Default:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
