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
        $__internal_7ffd590af9546a91b128c112bb56cd9f25e55074ef9492be3f4df6735ebdae4a = $this->env->getExtension("native_profiler");
        $__internal_7ffd590af9546a91b128c112bb56cd9f25e55074ef9492be3f4df6735ebdae4a->enter($__internal_7ffd590af9546a91b128c112bb56cd9f25e55074ef9492be3f4df6735ebdae4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docente-base.html.twig"));

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
        
        $__internal_7ffd590af9546a91b128c112bb56cd9f25e55074ef9492be3f4df6735ebdae4a->leave($__internal_7ffd590af9546a91b128c112bb56cd9f25e55074ef9492be3f4df6735ebdae4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6c0f0c748a39759e68609c3515671106a264511518b5e5b43afad2103a9971 = $this->env->getExtension("native_profiler");
        $__internal_7f6c0f0c748a39759e68609c3515671106a264511518b5e5b43afad2103a9971->enter($__internal_7f6c0f0c748a39759e68609c3515671106a264511518b5e5b43afad2103a9971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_7f6c0f0c748a39759e68609c3515671106a264511518b5e5b43afad2103a9971->leave($__internal_7f6c0f0c748a39759e68609c3515671106a264511518b5e5b43afad2103a9971_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bef9ce87ca16b4f25949a1a3462341d9e24353a4722eb25f145205a27642c94d = $this->env->getExtension("native_profiler");
        $__internal_bef9ce87ca16b4f25949a1a3462341d9e24353a4722eb25f145205a27642c94d->enter($__internal_bef9ce87ca16b4f25949a1a3462341d9e24353a4722eb25f145205a27642c94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bef9ce87ca16b4f25949a1a3462341d9e24353a4722eb25f145205a27642c94d->leave($__internal_bef9ce87ca16b4f25949a1a3462341d9e24353a4722eb25f145205a27642c94d_prof);

    }

    // line 15
    public function block_stylescustom($context, array $blocks = array())
    {
        $__internal_cde6622c02124e4f4be1d4bca3d2108f4f6a598ef7d871cb20aca5f0f327f9c3 = $this->env->getExtension("native_profiler");
        $__internal_cde6622c02124e4f4be1d4bca3d2108f4f6a598ef7d871cb20aca5f0f327f9c3->enter($__internal_cde6622c02124e4f4be1d4bca3d2108f4f6a598ef7d871cb20aca5f0f327f9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylescustom"));

        // line 16
        echo "  ";
        
        $__internal_cde6622c02124e4f4be1d4bca3d2108f4f6a598ef7d871cb20aca5f0f327f9c3->leave($__internal_cde6622c02124e4f4be1d4bca3d2108f4f6a598ef7d871cb20aca5f0f327f9c3_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9ebdff4ece12cc088dccbec4cc48d19b19f9d9e04b6c96a55f5e84a06337fa4 = $this->env->getExtension("native_profiler");
        $__internal_d9ebdff4ece12cc088dccbec4cc48d19b19f9d9e04b6c96a55f5e84a06337fa4->enter($__internal_d9ebdff4ece12cc088dccbec4cc48d19b19f9d9e04b6c96a55f5e84a06337fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d9ebdff4ece12cc088dccbec4cc48d19b19f9d9e04b6c96a55f5e84a06337fa4->leave($__internal_d9ebdff4ece12cc088dccbec4cc48d19b19f9d9e04b6c96a55f5e84a06337fa4_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f542808d76fda3b8f577fd54173b3ea13aa88cf2b9e406b8304c2761b350797 = $this->env->getExtension("native_profiler");
        $__internal_8f542808d76fda3b8f577fd54173b3ea13aa88cf2b9e406b8304c2761b350797->enter($__internal_8f542808d76fda3b8f577fd54173b3ea13aa88cf2b9e406b8304c2761b350797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
    ";
        
        $__internal_8f542808d76fda3b8f577fd54173b3ea13aa88cf2b9e406b8304c2761b350797->leave($__internal_8f542808d76fda3b8f577fd54173b3ea13aa88cf2b9e406b8304c2761b350797_prof);

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
