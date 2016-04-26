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
        $__internal_0c2f2d273543c98e7848199a3e6fca5751307398887a726ffc741d99671b042c = $this->env->getExtension("native_profiler");
        $__internal_0c2f2d273543c98e7848199a3e6fca5751307398887a726ffc741d99671b042c->enter($__internal_0c2f2d273543c98e7848199a3e6fca5751307398887a726ffc741d99671b042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_0c2f2d273543c98e7848199a3e6fca5751307398887a726ffc741d99671b042c->leave($__internal_0c2f2d273543c98e7848199a3e6fca5751307398887a726ffc741d99671b042c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33ad48c1e1514aacc10e3707dbeb8d66ff6137817f71fd93c467cb0731e476b1 = $this->env->getExtension("native_profiler");
        $__internal_33ad48c1e1514aacc10e3707dbeb8d66ff6137817f71fd93c467cb0731e476b1->enter($__internal_33ad48c1e1514aacc10e3707dbeb8d66ff6137817f71fd93c467cb0731e476b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_33ad48c1e1514aacc10e3707dbeb8d66ff6137817f71fd93c467cb0731e476b1->leave($__internal_33ad48c1e1514aacc10e3707dbeb8d66ff6137817f71fd93c467cb0731e476b1_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb976723b5083bbb73654b0e989986f7c94ac4e98f5339f36ac693bd133a816d = $this->env->getExtension("native_profiler");
        $__internal_fb976723b5083bbb73654b0e989986f7c94ac4e98f5339f36ac693bd133a816d->enter($__internal_fb976723b5083bbb73654b0e989986f7c94ac4e98f5339f36ac693bd133a816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fb976723b5083bbb73654b0e989986f7c94ac4e98f5339f36ac693bd133a816d->leave($__internal_fb976723b5083bbb73654b0e989986f7c94ac4e98f5339f36ac693bd133a816d_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_698b87d17ef407539c28037a3aef92b83f35e183a46aa3df401bc595a95386af = $this->env->getExtension("native_profiler");
        $__internal_698b87d17ef407539c28037a3aef92b83f35e183a46aa3df401bc595a95386af->enter($__internal_698b87d17ef407539c28037a3aef92b83f35e183a46aa3df401bc595a95386af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_698b87d17ef407539c28037a3aef92b83f35e183a46aa3df401bc595a95386af->leave($__internal_698b87d17ef407539c28037a3aef92b83f35e183a46aa3df401bc595a95386af_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a8b3edc1da3f07e30b06edc6016c7edeed0637d4cbefd4b289891ecb2da4e6 = $this->env->getExtension("native_profiler");
        $__internal_94a8b3edc1da3f07e30b06edc6016c7edeed0637d4cbefd4b289891ecb2da4e6->enter($__internal_94a8b3edc1da3f07e30b06edc6016c7edeed0637d4cbefd4b289891ecb2da4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_94a8b3edc1da3f07e30b06edc6016c7edeed0637d4cbefd4b289891ecb2da4e6->leave($__internal_94a8b3edc1da3f07e30b06edc6016c7edeed0637d4cbefd4b289891ecb2da4e6_prof);

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
