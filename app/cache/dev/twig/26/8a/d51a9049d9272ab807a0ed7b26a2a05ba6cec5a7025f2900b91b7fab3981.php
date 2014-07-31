<?php

/* ::layout.html.twig */
class __TwigTemplate_268ad51a9049d9272ab807a0ed7b26a2a05ba6cec5a7025f2900b91b7fab3981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>

  <body>
    <div class=\"win\">
      <div class=\"head\">
      <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("ceb_photo_homepage");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/titre.png"), "html", null, true);
        echo "\" alt=\"test00\" /></a>

          <div class=\"menu-fix\">
            <ul id=\"menu\">
              <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ceb_photo_homepage");
        echo "\">Galerie</a></li>
              <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ceb_present_homepage");
        echo "\">Presentation</a></li>
              <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ceb_goldbook_homepage");
        echo "\">Livre d'or</a></li>
              <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ceb_contact_contact");
        echo "\">Contact</a></li>
              <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ceb_partenaire_homepage");
        echo "\">partenaire</a></li>
            </ul>
          </div>  
      </div>  

      <div class=\"body\">
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "      </div>
      <div class=\"footage\">

        <footer>
          <p>site en construction</p>
        </footer>
      </div>

        ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </div>
   
    <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/eye.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/utils.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/spacegallery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Deco cuisine";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" media=\"screen\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/spacegallery.css"), "html", null, true);
        echo "\" />
    ";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "        ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 44,  147 => 43,  143 => 34,  140 => 33,  134 => 12,  129 => 11,  126 => 10,  120 => 8,  113 => 52,  109 => 51,  105 => 50,  101 => 49,  97 => 48,  93 => 46,  91 => 43,  81 => 35,  79 => 33,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  54 => 23,  45 => 19,  38 => 14,  36 => 10,  31 => 8,  23 => 2,  46 => 7,  43 => 6,  37 => 8,  35 => 6,  42 => 8,  39 => 7,  32 => 5,  29 => 4,);
    }
}
