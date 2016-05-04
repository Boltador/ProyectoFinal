<?php

/* docente-base.html.twig */
class __TwigTemplate_2532e34f116d56b522c34113f5b7d6528b320a05695fef56c713e3606f38bbf5 extends Twig_Template
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
        $__internal_a4a20f4d28e4621f83b5033d92815ce4b74b07d474501bd76beb8787b71819d0 = $this->env->getExtension("native_profiler");
        $__internal_a4a20f4d28e4621f83b5033d92815ce4b74b07d474501bd76beb8787b71819d0->enter($__internal_a4a20f4d28e4621f83b5033d92815ce4b74b07d474501bd76beb8787b71819d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docente-base.html.twig"));

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
        // line 26
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
        // line 44
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        // line 45
        echo "              <span class=\"caret\"></span></a>
              <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
                <li><a href=\"";
        // line 48
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
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "  </body>
  </html>
";
        
        $__internal_a4a20f4d28e4621f83b5033d92815ce4b74b07d474501bd76beb8787b71819d0->leave($__internal_a4a20f4d28e4621f83b5033d92815ce4b74b07d474501bd76beb8787b71819d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_48579f82c823ae45b0e5ffa28e1995692f422f5328d41a573bd4fe0ec3e8821a = $this->env->getExtension("native_profiler");
        $__internal_48579f82c823ae45b0e5ffa28e1995692f422f5328d41a573bd4fe0ec3e8821a->enter($__internal_48579f82c823ae45b0e5ffa28e1995692f422f5328d41a573bd4fe0ec3e8821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_48579f82c823ae45b0e5ffa28e1995692f422f5328d41a573bd4fe0ec3e8821a->leave($__internal_48579f82c823ae45b0e5ffa28e1995692f422f5328d41a573bd4fe0ec3e8821a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7702247cdb43a9710d3d52510929729974b09cb3b462dbf7f7f45a46c099a412 = $this->env->getExtension("native_profiler");
        $__internal_7702247cdb43a9710d3d52510929729974b09cb3b462dbf7f7f45a46c099a412->enter($__internal_7702247cdb43a9710d3d52510929729974b09cb3b462dbf7f7f45a46c099a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7702247cdb43a9710d3d52510929729974b09cb3b462dbf7f7f45a46c099a412->leave($__internal_7702247cdb43a9710d3d52510929729974b09cb3b462dbf7f7f45a46c099a412_prof);

    }

    // line 15
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_3b0a53e2b526ab49736adf33686ec7bf7e7a507da44f9812a02713e5e88cc135 = $this->env->getExtension("native_profiler");
        $__internal_3b0a53e2b526ab49736adf33686ec7bf7e7a507da44f9812a02713e5e88cc135->enter($__internal_3b0a53e2b526ab49736adf33686ec7bf7e7a507da44f9812a02713e5e88cc135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 16
        echo "  ";
        
        $__internal_3b0a53e2b526ab49736adf33686ec7bf7e7a507da44f9812a02713e5e88cc135->leave($__internal_3b0a53e2b526ab49736adf33686ec7bf7e7a507da44f9812a02713e5e88cc135_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec081153f160702ace89bab164f056e94803bb6aaa75fad0cc1d0e9a004b117b = $this->env->getExtension("native_profiler");
        $__internal_ec081153f160702ace89bab164f056e94803bb6aaa75fad0cc1d0e9a004b117b->enter($__internal_ec081153f160702ace89bab164f056e94803bb6aaa75fad0cc1d0e9a004b117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/mensajes_es.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
        
        $__internal_ec081153f160702ace89bab164f056e94803bb6aaa75fad0cc1d0e9a004b117b->leave($__internal_ec081153f160702ace89bab164f056e94803bb6aaa75fad0cc1d0e9a004b117b_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_ccdb6b932d67c3a75ff94a83c763e10d4a29143866a9a9b60a9f42e954ef6a7f = $this->env->getExtension("native_profiler");
        $__internal_ccdb6b932d67c3a75ff94a83c763e10d4a29143866a9a9b60a9f42e954ef6a7f->enter($__internal_ccdb6b932d67c3a75ff94a83c763e10d4a29143866a9a9b60a9f42e954ef6a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "
    ";
        
        $__internal_ccdb6b932d67c3a75ff94a83c763e10d4a29143866a9a9b60a9f42e954ef6a7f->leave($__internal_ccdb6b932d67c3a75ff94a83c763e10d4a29143866a9a9b60a9f42e954ef6a7f_prof);

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
        return array (  196 => 57,  190 => 56,  181 => 24,  177 => 23,  173 => 22,  169 => 21,  165 => 20,  160 => 19,  154 => 18,  147 => 16,  141 => 15,  132 => 12,  128 => 11,  123 => 10,  117 => 9,  105 => 7,  96 => 59,  94 => 56,  83 => 48,  78 => 45,  74 => 44,  52 => 26,  50 => 18,  47 => 17,  45 => 15,  42 => 14,  40 => 9,  35 => 7,  27 => 1,);
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
/*   <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*   <script src="{{ asset('public/js/jquery.validate.min.js') }}"></script>*/
/*   <script src="{{ asset('public/js/mensajes_es.js') }}"></script>*/
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
