<?php

/* docente-base.html.twig */
class __TwigTemplate_828b26f1c39a0c6a7a214e62d9e9b9a2981ef25057faaa4c172c2bdc1abcc448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
  <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
  ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/icono.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  <!-- Header -->
  <div id=\"top-nav\" class=\"navbar navbar-inverse navbar-static-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-toggle\"></span>
        </button>

        <a style=\"color: white;\" class=\"navbar-brand\" href=\"#\">Sistema de Gestión Académica - ADONAI</a>
      </div>

      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"dropdown\">
            <a style=\"color: white;\"  class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
              <i class=\"glyphicon glyphicon-user\"></i>  ";
        // line 42
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        }
        // line 43
        echo "              <span class=\"caret\"></span></a>
              <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> Desconectarse</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- /container -->
    </div>
    <!-- /Header -->
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "  </body>
  </html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Sistema de Gestión Académica";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/panel/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "docente-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 55,  151 => 54,  145 => 22,  141 => 21,  137 => 20,  133 => 19,  129 => 18,  124 => 17,  121 => 16,  115 => 13,  111 => 12,  107 => 11,  102 => 10,  99 => 9,  93 => 7,  87 => 57,  85 => 54,  74 => 46,  69 => 43,  65 => 42,  43 => 24,  41 => 16,  38 => 15,  36 => 9,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*   <title>{% block title %}Sistema de Gestión Académica{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*   <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/panel/styles.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}*/
/*   <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*   <script src="{{ asset('public/js/jquery.maskedinput.js') }}"></script>*/
/*   <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*   <script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*   <script src="{{ path('fos_js_routing_js', {"callback": "fos.Router.setData"}) }}"></script>*/
/*   {% endblock %}*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('public/img/icono.ico') }}" />*/
/* </head>*/
/* <body>*/
/*   <!-- Header -->*/
/*   <div id="top-nav" class="navbar navbar-inverse navbar-static-top">*/
/*     <div class="container">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*           <span class="icon-toggle"></span>*/
/*         </button>*/
/* */
/*         <a style="color: white;" class="navbar-brand" href="#">Sistema de Gestión Académica - ADONAI</a>*/
/*       </div>*/
/* */
/*       <div class="navbar-collapse collapse">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*           <li class="dropdown">*/
/*             <a style="color: white;"  class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">*/
/*               <i class="glyphicon glyphicon-user"></i>  {% if app.user %}{{ app.user.username }}{% endif %}*/
/*               <span class="caret"></span></a>*/
/*               <ul id="g-account-menu" class="dropdown-menu" role="menu">*/
/*                 <li><a href="#"><i class="glyphicon glyphicon-home"></i>  Ir al Inicio</a></li>*/
/*                 <li><a href="{{ path('logout') }}"><i class="glyphicon glyphicon-lock"></i> Desconectarse</a></li>*/
/*               </ul>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div><!-- /container -->*/
/*     </div>*/
/*     <!-- /Header -->*/
/*     {% block body %}*/
/* */
/*     {% endblock %}*/
/*   </body>*/
/*   </html>*/
/* */
