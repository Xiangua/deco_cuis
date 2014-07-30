<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
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
        // line 13
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Deco cuisines et bains</h1>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span12\">
          <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ceb_photo_homepage");
        echo "\">Galerie</a>
          <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ceb_present_homepage");
        echo "\">Presentation</a>
          <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ceb_goldbook_homepage");
        echo "\">Livre d'or</a>
          <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("ceb_contact_contact");
        echo "\">Contact</a>
          <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ceb_partenaire_homepage");
        echo "\">partenaire</a>
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>site en construction</p>
      </footer>
    </div>

  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
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
    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "          ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        // line 44
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
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
        return array (  125 => 45,  122 => 44,  120 => 43,  117 => 42,  113 => 31,  110 => 30,  103 => 11,  100 => 10,  94 => 8,  88 => 47,  86 => 42,  74 => 32,  72 => 30,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  50 => 23,  38 => 13,  36 => 10,  31 => 8,  23 => 2,);
    }
}
