<?php

/* ::base.html.twig */
class __TwigTemplate_1685db0231258fdde2fbce28ac9d67281ba559e177d81a0f0996a5b5f7e72b7e extends Twig_Template
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
        $__internal_37494424b46b73d84d9d27136f72f85c854f325fa05538f43b9e104412b553ac = $this->env->getExtension("native_profiler");
        $__internal_37494424b46b73d84d9d27136f72f85c854f325fa05538f43b9e104412b553ac->enter($__internal_37494424b46b73d84d9d27136f72f85c854f325fa05538f43b9e104412b553ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_37494424b46b73d84d9d27136f72f85c854f325fa05538f43b9e104412b553ac->leave($__internal_37494424b46b73d84d9d27136f72f85c854f325fa05538f43b9e104412b553ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_541802fd33117f843bdaf99b17c831d8f44f917df812f6acefd0ea9d933fb0b5 = $this->env->getExtension("native_profiler");
        $__internal_541802fd33117f843bdaf99b17c831d8f44f917df812f6acefd0ea9d933fb0b5->enter($__internal_541802fd33117f843bdaf99b17c831d8f44f917df812f6acefd0ea9d933fb0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_541802fd33117f843bdaf99b17c831d8f44f917df812f6acefd0ea9d933fb0b5->leave($__internal_541802fd33117f843bdaf99b17c831d8f44f917df812f6acefd0ea9d933fb0b5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e9e59a47c0f71b2735a98684fcd8d08864580f3aad69f3ae905aac0d1f06837 = $this->env->getExtension("native_profiler");
        $__internal_7e9e59a47c0f71b2735a98684fcd8d08864580f3aad69f3ae905aac0d1f06837->enter($__internal_7e9e59a47c0f71b2735a98684fcd8d08864580f3aad69f3ae905aac0d1f06837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7e9e59a47c0f71b2735a98684fcd8d08864580f3aad69f3ae905aac0d1f06837->leave($__internal_7e9e59a47c0f71b2735a98684fcd8d08864580f3aad69f3ae905aac0d1f06837_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed5274663c92775a8ff6b72db2837baf08597c0bc117aa155591e48ed255ac68 = $this->env->getExtension("native_profiler");
        $__internal_ed5274663c92775a8ff6b72db2837baf08597c0bc117aa155591e48ed255ac68->enter($__internal_ed5274663c92775a8ff6b72db2837baf08597c0bc117aa155591e48ed255ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_ed5274663c92775a8ff6b72db2837baf08597c0bc117aa155591e48ed255ac68->leave($__internal_ed5274663c92775a8ff6b72db2837baf08597c0bc117aa155591e48ed255ac68_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be6b359cd8d00cf9f02c7d4907dfea7d9592eb0a6a118910b387c6749fc43bc = $this->env->getExtension("native_profiler");
        $__internal_4be6b359cd8d00cf9f02c7d4907dfea7d9592eb0a6a118910b387c6749fc43bc->enter($__internal_4be6b359cd8d00cf9f02c7d4907dfea7d9592eb0a6a118910b387c6749fc43bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_4be6b359cd8d00cf9f02c7d4907dfea7d9592eb0a6a118910b387c6749fc43bc->leave($__internal_4be6b359cd8d00cf9f02c7d4907dfea7d9592eb0a6a118910b387c6749fc43bc_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
