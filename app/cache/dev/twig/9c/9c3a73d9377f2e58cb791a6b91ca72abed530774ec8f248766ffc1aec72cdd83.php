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
        $__internal_a449cd867c6f50b6a80345ed6fc283b06cc0d0275a6d33aea742855b7c5394f3 = $this->env->getExtension("native_profiler");
        $__internal_a449cd867c6f50b6a80345ed6fc283b06cc0d0275a6d33aea742855b7c5394f3->enter($__internal_a449cd867c6f50b6a80345ed6fc283b06cc0d0275a6d33aea742855b7c5394f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_a449cd867c6f50b6a80345ed6fc283b06cc0d0275a6d33aea742855b7c5394f3->leave($__internal_a449cd867c6f50b6a80345ed6fc283b06cc0d0275a6d33aea742855b7c5394f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97bd73fab1008a3c859d142abd9ef56ebd9266bb6f8a42db97109f3d2a1652a5 = $this->env->getExtension("native_profiler");
        $__internal_97bd73fab1008a3c859d142abd9ef56ebd9266bb6f8a42db97109f3d2a1652a5->enter($__internal_97bd73fab1008a3c859d142abd9ef56ebd9266bb6f8a42db97109f3d2a1652a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_97bd73fab1008a3c859d142abd9ef56ebd9266bb6f8a42db97109f3d2a1652a5->leave($__internal_97bd73fab1008a3c859d142abd9ef56ebd9266bb6f8a42db97109f3d2a1652a5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6c2b1209bfbdcf6e0a7a9d816e78740e1419b454b4e6e61deb21dfaf714e1f22 = $this->env->getExtension("native_profiler");
        $__internal_6c2b1209bfbdcf6e0a7a9d816e78740e1419b454b4e6e61deb21dfaf714e1f22->enter($__internal_6c2b1209bfbdcf6e0a7a9d816e78740e1419b454b4e6e61deb21dfaf714e1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6c2b1209bfbdcf6e0a7a9d816e78740e1419b454b4e6e61deb21dfaf714e1f22->leave($__internal_6c2b1209bfbdcf6e0a7a9d816e78740e1419b454b4e6e61deb21dfaf714e1f22_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a3dab1c8fc96290a218bcec9bf10f7928e1fc9679940e75a79a278bd2b7089d = $this->env->getExtension("native_profiler");
        $__internal_0a3dab1c8fc96290a218bcec9bf10f7928e1fc9679940e75a79a278bd2b7089d->enter($__internal_0a3dab1c8fc96290a218bcec9bf10f7928e1fc9679940e75a79a278bd2b7089d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0a3dab1c8fc96290a218bcec9bf10f7928e1fc9679940e75a79a278bd2b7089d->leave($__internal_0a3dab1c8fc96290a218bcec9bf10f7928e1fc9679940e75a79a278bd2b7089d_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d356f55f7b274e0588efd97488053e21420616f5f35580be9d43dded6b9b0030 = $this->env->getExtension("native_profiler");
        $__internal_d356f55f7b274e0588efd97488053e21420616f5f35580be9d43dded6b9b0030->enter($__internal_d356f55f7b274e0588efd97488053e21420616f5f35580be9d43dded6b9b0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_d356f55f7b274e0588efd97488053e21420616f5f35580be9d43dded6b9b0030->leave($__internal_d356f55f7b274e0588efd97488053e21420616f5f35580be9d43dded6b9b0030_prof);

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
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*   {% block body %}*/
/* */
/*   {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
