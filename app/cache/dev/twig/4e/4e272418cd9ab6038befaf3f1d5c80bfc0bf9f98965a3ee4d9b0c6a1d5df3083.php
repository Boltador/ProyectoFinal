<?php

/* ::docente-base.html.twig */
class __TwigTemplate_8e7cedcc8749afa66732f93bfbcea6eb0f79c8022b86ba8cdba79e0a7c8c7a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylescustom' => array($this, 'block_stylescustom'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a43081adce80d0e84cff763bcca1da2f13a8c62393b59390301b34a7a9726f6b = $this->env->getExtension("native_profiler");
        $__internal_a43081adce80d0e84cff763bcca1da2f13a8c62393b59390301b34a7a9726f6b->enter($__internal_a43081adce80d0e84cff763bcca1da2f13a8c62393b59390301b34a7a9726f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::docente-base.html.twig"));

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
        // line 14
        echo "  
  ";
        // line 15
        $this->displayBlock('stylescustom', $context, $blocks);
        // line 17
        echo "
  ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
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
        // line 43
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        // line 44
        echo "              <span class=\"caret\"></span></a>
              <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
                <li><a href=\"";
        // line 47
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
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "  </body>
  </html>
";
        
        $__internal_a43081adce80d0e84cff763bcca1da2f13a8c62393b59390301b34a7a9726f6b->leave($__internal_a43081adce80d0e84cff763bcca1da2f13a8c62393b59390301b34a7a9726f6b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4d415065a9e2d8b8f683eff03b8dfa3df9b4e940c7329f73487a854c6722996 = $this->env->getExtension("native_profiler");
        $__internal_e4d415065a9e2d8b8f683eff03b8dfa3df9b4e940c7329f73487a854c6722996->enter($__internal_e4d415065a9e2d8b8f683eff03b8dfa3df9b4e940c7329f73487a854c6722996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_e4d415065a9e2d8b8f683eff03b8dfa3df9b4e940c7329f73487a854c6722996->leave($__internal_e4d415065a9e2d8b8f683eff03b8dfa3df9b4e940c7329f73487a854c6722996_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f3ab754b81be1e826f9ee5d90e5b3614d52481ed7e5766613c77b07771f6953 = $this->env->getExtension("native_profiler");
        $__internal_4f3ab754b81be1e826f9ee5d90e5b3614d52481ed7e5766613c77b07771f6953->enter($__internal_4f3ab754b81be1e826f9ee5d90e5b3614d52481ed7e5766613c77b07771f6953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
  ";
        
        $__internal_4f3ab754b81be1e826f9ee5d90e5b3614d52481ed7e5766613c77b07771f6953->leave($__internal_4f3ab754b81be1e826f9ee5d90e5b3614d52481ed7e5766613c77b07771f6953_prof);

    }

    // line 15
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_890720367cc895b7633184c25525faa03fcc234a4f5e7ff55f0976d85d4c171c = $this->env->getExtension("native_profiler");
        $__internal_890720367cc895b7633184c25525faa03fcc234a4f5e7ff55f0976d85d4c171c->enter($__internal_890720367cc895b7633184c25525faa03fcc234a4f5e7ff55f0976d85d4c171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 16
        echo "  ";
        
        $__internal_890720367cc895b7633184c25525faa03fcc234a4f5e7ff55f0976d85d4c171c->leave($__internal_890720367cc895b7633184c25525faa03fcc234a4f5e7ff55f0976d85d4c171c_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a592956ce6151963317c726a32116395ad73b98ebd348d7725fed03e83f2071 = $this->env->getExtension("native_profiler");
        $__internal_0a592956ce6151963317c726a32116395ad73b98ebd348d7725fed03e83f2071->enter($__internal_0a592956ce6151963317c726a32116395ad73b98ebd348d7725fed03e83f2071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
        
        $__internal_0a592956ce6151963317c726a32116395ad73b98ebd348d7725fed03e83f2071->leave($__internal_0a592956ce6151963317c726a32116395ad73b98ebd348d7725fed03e83f2071_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_6253465f78c8024105185ad832ea7793f7923d41f139d1773552b7770355fe53 = $this->env->getExtension("native_profiler");
        $__internal_6253465f78c8024105185ad832ea7793f7923d41f139d1773552b7770355fe53->enter($__internal_6253465f78c8024105185ad832ea7793f7923d41f139d1773552b7770355fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_6253465f78c8024105185ad832ea7793f7923d41f139d1773552b7770355fe53->leave($__internal_6253465f78c8024105185ad832ea7793f7923d41f139d1773552b7770355fe53_prof);

    }

    public function getTemplateName()
    {
        return "::docente-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 56,  186 => 55,  177 => 23,  173 => 22,  169 => 21,  165 => 20,  160 => 19,  154 => 18,  147 => 16,  141 => 15,  132 => 12,  128 => 11,  123 => 10,  117 => 9,  105 => 7,  96 => 58,  94 => 55,  83 => 47,  78 => 44,  74 => 43,  52 => 25,  50 => 18,  47 => 17,  45 => 15,  42 => 14,  40 => 9,  35 => 7,  27 => 1,);
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
/*   {% endblock %}*/
/*   */
/*   {% block stylescustom %}*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}*/
/*   <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*   <script src="{{ asset('public/js/jquery.maskedinput.js') }}"></script>*/
/*   <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
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
