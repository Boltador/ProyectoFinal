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
        $__internal_6332f12c2d5b7d4bc747efbbe6cd185ee5d45e8132807bfe0b706c046ab62efd = $this->env->getExtension("native_profiler");
        $__internal_6332f12c2d5b7d4bc747efbbe6cd185ee5d45e8132807bfe0b706c046ab62efd->enter($__internal_6332f12c2d5b7d4bc747efbbe6cd185ee5d45e8132807bfe0b706c046ab62efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::docente-base.html.twig"));

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
        
        $__internal_6332f12c2d5b7d4bc747efbbe6cd185ee5d45e8132807bfe0b706c046ab62efd->leave($__internal_6332f12c2d5b7d4bc747efbbe6cd185ee5d45e8132807bfe0b706c046ab62efd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7e16540401ac63f36348e7160c6189b16a5daff9fe523c94fe4261c780e7e04 = $this->env->getExtension("native_profiler");
        $__internal_f7e16540401ac63f36348e7160c6189b16a5daff9fe523c94fe4261c780e7e04->enter($__internal_f7e16540401ac63f36348e7160c6189b16a5daff9fe523c94fe4261c780e7e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_f7e16540401ac63f36348e7160c6189b16a5daff9fe523c94fe4261c780e7e04->leave($__internal_f7e16540401ac63f36348e7160c6189b16a5daff9fe523c94fe4261c780e7e04_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_161953fa7996b9fc5893630c7e43d8e09121fbc6f4fdc6487f8de5356108f90c = $this->env->getExtension("native_profiler");
        $__internal_161953fa7996b9fc5893630c7e43d8e09121fbc6f4fdc6487f8de5356108f90c->enter($__internal_161953fa7996b9fc5893630c7e43d8e09121fbc6f4fdc6487f8de5356108f90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_161953fa7996b9fc5893630c7e43d8e09121fbc6f4fdc6487f8de5356108f90c->leave($__internal_161953fa7996b9fc5893630c7e43d8e09121fbc6f4fdc6487f8de5356108f90c_prof);

    }

    // line 15
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_df540e5f2421c4d5046f61988d563677ca520af91df3b3658119978dc59ccfa4 = $this->env->getExtension("native_profiler");
        $__internal_df540e5f2421c4d5046f61988d563677ca520af91df3b3658119978dc59ccfa4->enter($__internal_df540e5f2421c4d5046f61988d563677ca520af91df3b3658119978dc59ccfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 16
        echo "  ";
        
        $__internal_df540e5f2421c4d5046f61988d563677ca520af91df3b3658119978dc59ccfa4->leave($__internal_df540e5f2421c4d5046f61988d563677ca520af91df3b3658119978dc59ccfa4_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efdd789246720dd11d31d54f66365c089a8bc653f48ac18344d96f61bb033b77 = $this->env->getExtension("native_profiler");
        $__internal_efdd789246720dd11d31d54f66365c089a8bc653f48ac18344d96f61bb033b77->enter($__internal_efdd789246720dd11d31d54f66365c089a8bc653f48ac18344d96f61bb033b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_efdd789246720dd11d31d54f66365c089a8bc653f48ac18344d96f61bb033b77->leave($__internal_efdd789246720dd11d31d54f66365c089a8bc653f48ac18344d96f61bb033b77_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b697a8f43dd03d286cb7b3e0321111de7f44103b3bc06178a8297050378781 = $this->env->getExtension("native_profiler");
        $__internal_90b697a8f43dd03d286cb7b3e0321111de7f44103b3bc06178a8297050378781->enter($__internal_90b697a8f43dd03d286cb7b3e0321111de7f44103b3bc06178a8297050378781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "
    ";
        
        $__internal_90b697a8f43dd03d286cb7b3e0321111de7f44103b3bc06178a8297050378781->leave($__internal_90b697a8f43dd03d286cb7b3e0321111de7f44103b3bc06178a8297050378781_prof);

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
