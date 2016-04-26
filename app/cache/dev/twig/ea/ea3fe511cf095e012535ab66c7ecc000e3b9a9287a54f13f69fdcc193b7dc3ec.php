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
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2482da9280254e1f48db904d5887b94cb899b82be5f70cec402259c410caf0ba = $this->env->getExtension("native_profiler");
        $__internal_2482da9280254e1f48db904d5887b94cb899b82be5f70cec402259c410caf0ba->enter($__internal_2482da9280254e1f48db904d5887b94cb899b82be5f70cec402259c410caf0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docente-base.html.twig"));

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
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
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
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        }
        // line 40
        echo "              <span class=\"caret\"></span></a>
              <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
                <li><a href=\"";
        // line 43
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
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "  </body>
  </html>
";
        
        $__internal_2482da9280254e1f48db904d5887b94cb899b82be5f70cec402259c410caf0ba->leave($__internal_2482da9280254e1f48db904d5887b94cb899b82be5f70cec402259c410caf0ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0197616e2c54c4bfeb430ec32f696aa1228415c966a682704f172d1afdc58b98 = $this->env->getExtension("native_profiler");
        $__internal_0197616e2c54c4bfeb430ec32f696aa1228415c966a682704f172d1afdc58b98->enter($__internal_0197616e2c54c4bfeb430ec32f696aa1228415c966a682704f172d1afdc58b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_0197616e2c54c4bfeb430ec32f696aa1228415c966a682704f172d1afdc58b98->leave($__internal_0197616e2c54c4bfeb430ec32f696aa1228415c966a682704f172d1afdc58b98_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00d4d6bf295f1acfbcafc680fcd7dbdcda14323b20238e07c30b79684f0d2379 = $this->env->getExtension("native_profiler");
        $__internal_00d4d6bf295f1acfbcafc680fcd7dbdcda14323b20238e07c30b79684f0d2379->enter($__internal_00d4d6bf295f1acfbcafc680fcd7dbdcda14323b20238e07c30b79684f0d2379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_00d4d6bf295f1acfbcafc680fcd7dbdcda14323b20238e07c30b79684f0d2379->leave($__internal_00d4d6bf295f1acfbcafc680fcd7dbdcda14323b20238e07c30b79684f0d2379_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_637d1def2de555ae3b388eef1764e7c6f5bfa67f27291c15bd7212ef29e68af3 = $this->env->getExtension("native_profiler");
        $__internal_637d1def2de555ae3b388eef1764e7c6f5bfa67f27291c15bd7212ef29e68af3->enter($__internal_637d1def2de555ae3b388eef1764e7c6f5bfa67f27291c15bd7212ef29e68af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.maskedinput.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  ";
        
        $__internal_637d1def2de555ae3b388eef1764e7c6f5bfa67f27291c15bd7212ef29e68af3->leave($__internal_637d1def2de555ae3b388eef1764e7c6f5bfa67f27291c15bd7212ef29e68af3_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f08bc78d250b32707fd70736499f32873f8361c650d0750817c8c79bf32a18b = $this->env->getExtension("native_profiler");
        $__internal_4f08bc78d250b32707fd70736499f32873f8361c650d0750817c8c79bf32a18b->enter($__internal_4f08bc78d250b32707fd70736499f32873f8361c650d0750817c8c79bf32a18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "
    ";
        
        $__internal_4f08bc78d250b32707fd70736499f32873f8361c650d0750817c8c79bf32a18b->leave($__internal_4f08bc78d250b32707fd70736499f32873f8361c650d0750817c8c79bf32a18b_prof);

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
        return array (  171 => 52,  165 => 51,  156 => 19,  152 => 18,  148 => 17,  144 => 16,  139 => 15,  133 => 14,  124 => 12,  120 => 11,  115 => 10,  109 => 9,  97 => 7,  88 => 54,  86 => 51,  75 => 43,  70 => 40,  66 => 39,  44 => 21,  41 => 14,  39 => 9,  34 => 7,  26 => 1,);
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
