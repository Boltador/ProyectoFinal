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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3258354fc733181ea6abca34c5c1e969f2ac90509dfc7a36bd5bd34f342072ed = $this->env->getExtension("native_profiler");
        $__internal_3258354fc733181ea6abca34c5c1e969f2ac90509dfc7a36bd5bd34f342072ed->enter($__internal_3258354fc733181ea6abca34c5c1e969f2ac90509dfc7a36bd5bd34f342072ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
  ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</body>
</html>
";
        
        $__internal_3258354fc733181ea6abca34c5c1e969f2ac90509dfc7a36bd5bd34f342072ed->leave($__internal_3258354fc733181ea6abca34c5c1e969f2ac90509dfc7a36bd5bd34f342072ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73cf0d0c8f2b5302dec55cd9be6bba7f234ce20d0936bcf1c9948a4041391ebf = $this->env->getExtension("native_profiler");
        $__internal_73cf0d0c8f2b5302dec55cd9be6bba7f234ce20d0936bcf1c9948a4041391ebf->enter($__internal_73cf0d0c8f2b5302dec55cd9be6bba7f234ce20d0936bcf1c9948a4041391ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_73cf0d0c8f2b5302dec55cd9be6bba7f234ce20d0936bcf1c9948a4041391ebf->leave($__internal_73cf0d0c8f2b5302dec55cd9be6bba7f234ce20d0936bcf1c9948a4041391ebf_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8e699308c873e90d13d4fee3ee4f11162d3312ea8f0bf4fa67f39b67ccb7c9f2 = $this->env->getExtension("native_profiler");
        $__internal_8e699308c873e90d13d4fee3ee4f11162d3312ea8f0bf4fa67f39b67ccb7c9f2->enter($__internal_8e699308c873e90d13d4fee3ee4f11162d3312ea8f0bf4fa67f39b67ccb7c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/panel/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_8e699308c873e90d13d4fee3ee4f11162d3312ea8f0bf4fa67f39b67ccb7c9f2->leave($__internal_8e699308c873e90d13d4fee3ee4f11162d3312ea8f0bf4fa67f39b67ccb7c9f2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8679d370773d9b9f1b390005a79357529dfcdd6bf9eadd0435043c4920302ef = $this->env->getExtension("native_profiler");
        $__internal_a8679d370773d9b9f1b390005a79357529dfcdd6bf9eadd0435043c4920302ef->enter($__internal_a8679d370773d9b9f1b390005a79357529dfcdd6bf9eadd0435043c4920302ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
  ";
        
        $__internal_a8679d370773d9b9f1b390005a79357529dfcdd6bf9eadd0435043c4920302ef->leave($__internal_a8679d370773d9b9f1b390005a79357529dfcdd6bf9eadd0435043c4920302ef_prof);

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
        return array (  99 => 17,  93 => 16,  84 => 11,  80 => 10,  75 => 9,  69 => 8,  57 => 7,  48 => 19,  46 => 16,  39 => 13,  37 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="content-type" content="text/html; charset=UTF-8">*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*   <title>{% block title %}Sistema de Gestión Académica{% endblock %}</title>*/
/*   {% block stylesheets %}*/
/*   <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/panel/styles.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet" />*/
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
