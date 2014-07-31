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
<<<<<<< HEAD
        return array (  150 => 44,  147 => 43,  143 => 34,  140 => 33,  134 => 12,  129 => 11,  126 => 10,  120 => 8,  113 => 52,  109 => 51,  105 => 50,  101 => 49,  97 => 48,  93 => 46,  91 => 43,  79 => 33,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  45 => 19,  36 => 10,  23 => 2,  81 => 35,  78 => 24,  73 => 26,  71 => 24,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  54 => 23,  50 => 15,  46 => 14,  42 => 13,  38 => 14,  31 => 8,  28 => 6,);
=======
        return array (  150 => 44,  134 => 12,  129 => 11,  126 => 10,  113 => 52,  97 => 48,  70 => 27,  58 => 24,  23 => 2,  81 => 35,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 33,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 34,  135 => 53,  119 => 42,  102 => 32,  71 => 24,  67 => 15,  63 => 15,  59 => 14,  38 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 46,  88 => 6,  78 => 24,  46 => 12,  27 => 4,  44 => 12,  31 => 8,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 50,  91 => 43,  62 => 25,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 33,  72 => 16,  69 => 25,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 8,  115 => 43,  111 => 37,  108 => 36,  101 => 49,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 26,  55 => 15,  52 => 21,  50 => 13,  43 => 10,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 51,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 26,  64 => 17,  60 => 6,  57 => 16,  54 => 23,  51 => 14,  48 => 13,  45 => 19,  42 => 11,  39 => 9,  36 => 10,  33 => 6,  30 => 5,);
>>>>>>> 62c70b87f5944e71988bc8a6acfedb1eef339310
    }
}
