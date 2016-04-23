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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58d0843aa21531484cd0d8cf71d0be590a84d4f8e765d6c18eeda315c7c793d4 = $this->env->getExtension("native_profiler");
        $__internal_58d0843aa21531484cd0d8cf71d0be590a84d4f8e765d6c18eeda315c7c793d4->enter($__internal_58d0843aa21531484cd0d8cf71d0be590a84d4f8e765d6c18eeda315c7c793d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "</body>
</html>
";
        
        $__internal_58d0843aa21531484cd0d8cf71d0be590a84d4f8e765d6c18eeda315c7c793d4->leave($__internal_58d0843aa21531484cd0d8cf71d0be590a84d4f8e765d6c18eeda315c7c793d4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3aceeed3a66960f768349f634e5902e1c876bb56896b94bbbe1984391a8c016 = $this->env->getExtension("native_profiler");
        $__internal_a3aceeed3a66960f768349f634e5902e1c876bb56896b94bbbe1984391a8c016->enter($__internal_a3aceeed3a66960f768349f634e5902e1c876bb56896b94bbbe1984391a8c016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_a3aceeed3a66960f768349f634e5902e1c876bb56896b94bbbe1984391a8c016->leave($__internal_a3aceeed3a66960f768349f634e5902e1c876bb56896b94bbbe1984391a8c016_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01eb353fc87dab863945992deb92ca88dc672f07fe33b68122d8c1ab48d2bdee = $this->env->getExtension("native_profiler");
        $__internal_01eb353fc87dab863945992deb92ca88dc672f07fe33b68122d8c1ab48d2bdee->enter($__internal_01eb353fc87dab863945992deb92ca88dc672f07fe33b68122d8c1ab48d2bdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/panel/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  ";
        
        $__internal_01eb353fc87dab863945992deb92ca88dc672f07fe33b68122d8c1ab48d2bdee->leave($__internal_01eb353fc87dab863945992deb92ca88dc672f07fe33b68122d8c1ab48d2bdee_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_df0a876fe4d29e4a2d45246564131ecd1dba45b097dbb1f17bba6bb694123c2d = $this->env->getExtension("native_profiler");
        $__internal_df0a876fe4d29e4a2d45246564131ecd1dba45b097dbb1f17bba6bb694123c2d->enter($__internal_df0a876fe4d29e4a2d45246564131ecd1dba45b097dbb1f17bba6bb694123c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    ";
        
        $__internal_df0a876fe4d29e4a2d45246564131ecd1dba45b097dbb1f17bba6bb694123c2d->leave($__internal_df0a876fe4d29e4a2d45246564131ecd1dba45b097dbb1f17bba6bb694123c2d_prof);

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
        return array (  95 => 16,  89 => 15,  80 => 10,  75 => 9,  69 => 8,  57 => 7,  48 => 18,  46 => 15,  39 => 12,  37 => 8,  33 => 7,  25 => 1,);
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
/*   <link href="{{ asset('public/css/panel/styles.css') }}" rel="stylesheet">*/
/*   {% endblock %}*/
/*   <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/*     {% block body %}*/
/* */
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
