<?php

/* base.html.twig */
class __TwigTemplate_23b3576cccc4c935ca7dc55b64786e23368edce5fc63d852939f39a11fd2890f extends Twig_Template
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
        $__internal_d823a856720e6e2caf26626b24ed48fb40a58cdb90be6d4f4390f89092ff1027 = $this->env->getExtension("native_profiler");
        $__internal_d823a856720e6e2caf26626b24ed48fb40a58cdb90be6d4f4390f89092ff1027->enter($__internal_d823a856720e6e2caf26626b24ed48fb40a58cdb90be6d4f4390f89092ff1027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
  ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "</body>
</html>
";
        
        $__internal_d823a856720e6e2caf26626b24ed48fb40a58cdb90be6d4f4390f89092ff1027->leave($__internal_d823a856720e6e2caf26626b24ed48fb40a58cdb90be6d4f4390f89092ff1027_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff8c62e63f620fb6acdbc081bd633a9626c2dc48ecef6ff2edcaa4c4cb1b9fc8 = $this->env->getExtension("native_profiler");
        $__internal_ff8c62e63f620fb6acdbc081bd633a9626c2dc48ecef6ff2edcaa4c4cb1b9fc8->enter($__internal_ff8c62e63f620fb6acdbc081bd633a9626c2dc48ecef6ff2edcaa4c4cb1b9fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_ff8c62e63f620fb6acdbc081bd633a9626c2dc48ecef6ff2edcaa4c4cb1b9fc8->leave($__internal_ff8c62e63f620fb6acdbc081bd633a9626c2dc48ecef6ff2edcaa4c4cb1b9fc8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_438de0de3758449a1c65ef3734d567ab07eb7c2e395ea5977677edd5fdfb1b54 = $this->env->getExtension("native_profiler");
        $__internal_438de0de3758449a1c65ef3734d567ab07eb7c2e395ea5977677edd5fdfb1b54->enter($__internal_438de0de3758449a1c65ef3734d567ab07eb7c2e395ea5977677edd5fdfb1b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_438de0de3758449a1c65ef3734d567ab07eb7c2e395ea5977677edd5fdfb1b54->leave($__internal_438de0de3758449a1c65ef3734d567ab07eb7c2e395ea5977677edd5fdfb1b54_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a085731b3a066df42b5fc7b358c049497a1b7453c653cd42799737dc47cc973 = $this->env->getExtension("native_profiler");
        $__internal_0a085731b3a066df42b5fc7b358c049497a1b7453c653cd42799737dc47cc973->enter($__internal_0a085731b3a066df42b5fc7b358c049497a1b7453c653cd42799737dc47cc973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0a085731b3a066df42b5fc7b358c049497a1b7453c653cd42799737dc47cc973->leave($__internal_0a085731b3a066df42b5fc7b358c049497a1b7453c653cd42799737dc47cc973_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f392b7a83ce7f7744cb9242cee6c3c3aba38571ab43de98fb410848ca5fc2b8 = $this->env->getExtension("native_profiler");
        $__internal_8f392b7a83ce7f7744cb9242cee6c3c3aba38571ab43de98fb410848ca5fc2b8->enter($__internal_8f392b7a83ce7f7744cb9242cee6c3c3aba38571ab43de98fb410848ca5fc2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_8f392b7a83ce7f7744cb9242cee6c3c3aba38571ab43de98fb410848ca5fc2b8->leave($__internal_8f392b7a83ce7f7744cb9242cee6c3c3aba38571ab43de98fb410848ca5fc2b8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  130 => 24,  121 => 19,  117 => 18,  113 => 17,  109 => 16,  104 => 15,  98 => 14,  89 => 12,  85 => 11,  80 => 10,  74 => 9,  62 => 7,  53 => 27,  51 => 24,  44 => 21,  41 => 14,  39 => 9,  34 => 7,  26 => 1,);
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
/*   {% block body %}*/
/* */
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
