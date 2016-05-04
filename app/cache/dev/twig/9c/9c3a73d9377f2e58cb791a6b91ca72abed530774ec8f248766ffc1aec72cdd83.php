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
        $__internal_d060a733fa903a9821dec406e123e64b489230f63f2b1e4d6aee6d5e0f304e2a = $this->env->getExtension("native_profiler");
        $__internal_d060a733fa903a9821dec406e123e64b489230f63f2b1e4d6aee6d5e0f304e2a->enter($__internal_d060a733fa903a9821dec406e123e64b489230f63f2b1e4d6aee6d5e0f304e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d060a733fa903a9821dec406e123e64b489230f63f2b1e4d6aee6d5e0f304e2a->leave($__internal_d060a733fa903a9821dec406e123e64b489230f63f2b1e4d6aee6d5e0f304e2a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bed3e834c3e5dd354d17538eef37725a1d7b82ffe6c035e0df3171a21a4ba5bf = $this->env->getExtension("native_profiler");
        $__internal_bed3e834c3e5dd354d17538eef37725a1d7b82ffe6c035e0df3171a21a4ba5bf->enter($__internal_bed3e834c3e5dd354d17538eef37725a1d7b82ffe6c035e0df3171a21a4ba5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_bed3e834c3e5dd354d17538eef37725a1d7b82ffe6c035e0df3171a21a4ba5bf->leave($__internal_bed3e834c3e5dd354d17538eef37725a1d7b82ffe6c035e0df3171a21a4ba5bf_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a43f0c791ff419d219a78196d2666bd59add8d9edf212b961d95b73969a95a5c = $this->env->getExtension("native_profiler");
        $__internal_a43f0c791ff419d219a78196d2666bd59add8d9edf212b961d95b73969a95a5c->enter($__internal_a43f0c791ff419d219a78196d2666bd59add8d9edf212b961d95b73969a95a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a43f0c791ff419d219a78196d2666bd59add8d9edf212b961d95b73969a95a5c->leave($__internal_a43f0c791ff419d219a78196d2666bd59add8d9edf212b961d95b73969a95a5c_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ef931f6549d04e050de470d68663dedfdc4de31e4432c17b9f34a3e50a7c1dc = $this->env->getExtension("native_profiler");
        $__internal_9ef931f6549d04e050de470d68663dedfdc4de31e4432c17b9f34a3e50a7c1dc->enter($__internal_9ef931f6549d04e050de470d68663dedfdc4de31e4432c17b9f34a3e50a7c1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9ef931f6549d04e050de470d68663dedfdc4de31e4432c17b9f34a3e50a7c1dc->leave($__internal_9ef931f6549d04e050de470d68663dedfdc4de31e4432c17b9f34a3e50a7c1dc_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_32d2021cdb7e2a321f511683750944f3a80c582aea5c8883b472a70d49eb7a78 = $this->env->getExtension("native_profiler");
        $__internal_32d2021cdb7e2a321f511683750944f3a80c582aea5c8883b472a70d49eb7a78->enter($__internal_32d2021cdb7e2a321f511683750944f3a80c582aea5c8883b472a70d49eb7a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_32d2021cdb7e2a321f511683750944f3a80c582aea5c8883b472a70d49eb7a78->leave($__internal_32d2021cdb7e2a321f511683750944f3a80c582aea5c8883b472a70d49eb7a78_prof);

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
