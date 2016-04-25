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
        $__internal_2d28c64528bb684cdd7a6b5ff724f5a4f7b675d6b0330481c76d86fa75447a92 = $this->env->getExtension("native_profiler");
        $__internal_2d28c64528bb684cdd7a6b5ff724f5a4f7b675d6b0330481c76d86fa75447a92->enter($__internal_2d28c64528bb684cdd7a6b5ff724f5a4f7b675d6b0330481c76d86fa75447a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2d28c64528bb684cdd7a6b5ff724f5a4f7b675d6b0330481c76d86fa75447a92->leave($__internal_2d28c64528bb684cdd7a6b5ff724f5a4f7b675d6b0330481c76d86fa75447a92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bd5c5ebeafb35daefb66f3f82e1bccc9186c4b63a142f4e0d849df0d8ff1f32 = $this->env->getExtension("native_profiler");
        $__internal_2bd5c5ebeafb35daefb66f3f82e1bccc9186c4b63a142f4e0d849df0d8ff1f32->enter($__internal_2bd5c5ebeafb35daefb66f3f82e1bccc9186c4b63a142f4e0d849df0d8ff1f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_2bd5c5ebeafb35daefb66f3f82e1bccc9186c4b63a142f4e0d849df0d8ff1f32->leave($__internal_2bd5c5ebeafb35daefb66f3f82e1bccc9186c4b63a142f4e0d849df0d8ff1f32_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_757d73ba94731f3685237a1f46049845a017b4608f451949b72975e1d77cd3ac = $this->env->getExtension("native_profiler");
        $__internal_757d73ba94731f3685237a1f46049845a017b4608f451949b72975e1d77cd3ac->enter($__internal_757d73ba94731f3685237a1f46049845a017b4608f451949b72975e1d77cd3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_757d73ba94731f3685237a1f46049845a017b4608f451949b72975e1d77cd3ac->leave($__internal_757d73ba94731f3685237a1f46049845a017b4608f451949b72975e1d77cd3ac_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_383bb105d2f5dfdcfe034b6086528d9f8f36a2ceaf37c45fe93b55f42c0d9872 = $this->env->getExtension("native_profiler");
        $__internal_383bb105d2f5dfdcfe034b6086528d9f8f36a2ceaf37c45fe93b55f42c0d9872->enter($__internal_383bb105d2f5dfdcfe034b6086528d9f8f36a2ceaf37c45fe93b55f42c0d9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_383bb105d2f5dfdcfe034b6086528d9f8f36a2ceaf37c45fe93b55f42c0d9872->leave($__internal_383bb105d2f5dfdcfe034b6086528d9f8f36a2ceaf37c45fe93b55f42c0d9872_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7457f2ac808fe570d453dec487dc66a9068dbb1f0e533a70232e92c98c6aab = $this->env->getExtension("native_profiler");
        $__internal_3e7457f2ac808fe570d453dec487dc66a9068dbb1f0e533a70232e92c98c6aab->enter($__internal_3e7457f2ac808fe570d453dec487dc66a9068dbb1f0e533a70232e92c98c6aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
  ";
        
        $__internal_3e7457f2ac808fe570d453dec487dc66a9068dbb1f0e533a70232e92c98c6aab->leave($__internal_3e7457f2ac808fe570d453dec487dc66a9068dbb1f0e533a70232e92c98c6aab_prof);

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
