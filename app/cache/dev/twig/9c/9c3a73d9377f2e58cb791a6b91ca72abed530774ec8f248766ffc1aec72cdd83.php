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
        $__internal_f6968f7a0cbae7b68657eeb7971645870f73f472ee6c6510b7598c8dcfbc7b13 = $this->env->getExtension("native_profiler");
        $__internal_f6968f7a0cbae7b68657eeb7971645870f73f472ee6c6510b7598c8dcfbc7b13->enter($__internal_f6968f7a0cbae7b68657eeb7971645870f73f472ee6c6510b7598c8dcfbc7b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f6968f7a0cbae7b68657eeb7971645870f73f472ee6c6510b7598c8dcfbc7b13->leave($__internal_f6968f7a0cbae7b68657eeb7971645870f73f472ee6c6510b7598c8dcfbc7b13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9343454bad535ff4c8fc43d56577acde54aafbf345a4fce560f2b07a7a981087 = $this->env->getExtension("native_profiler");
        $__internal_9343454bad535ff4c8fc43d56577acde54aafbf345a4fce560f2b07a7a981087->enter($__internal_9343454bad535ff4c8fc43d56577acde54aafbf345a4fce560f2b07a7a981087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema de Gestión Académica";
        
        $__internal_9343454bad535ff4c8fc43d56577acde54aafbf345a4fce560f2b07a7a981087->leave($__internal_9343454bad535ff4c8fc43d56577acde54aafbf345a4fce560f2b07a7a981087_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcc01dd0bcc488c123e8904a74b555a67f935bfa459dc45f38f0575ebca95f5b = $this->env->getExtension("native_profiler");
        $__internal_fcc01dd0bcc488c123e8904a74b555a67f935bfa459dc45f38f0575ebca95f5b->enter($__internal_fcc01dd0bcc488c123e8904a74b555a67f935bfa459dc45f38f0575ebca95f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fcc01dd0bcc488c123e8904a74b555a67f935bfa459dc45f38f0575ebca95f5b->leave($__internal_fcc01dd0bcc488c123e8904a74b555a67f935bfa459dc45f38f0575ebca95f5b_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_6858c53f8db8cf15b0d48f1b2af4dd57dde1bea6f0e6c9e9a1b4ddde35dcfa8b = $this->env->getExtension("native_profiler");
        $__internal_6858c53f8db8cf15b0d48f1b2af4dd57dde1bea6f0e6c9e9a1b4ddde35dcfa8b->enter($__internal_6858c53f8db8cf15b0d48f1b2af4dd57dde1bea6f0e6c9e9a1b4ddde35dcfa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
  ";
        
        $__internal_6858c53f8db8cf15b0d48f1b2af4dd57dde1bea6f0e6c9e9a1b4ddde35dcfa8b->leave($__internal_6858c53f8db8cf15b0d48f1b2af4dd57dde1bea6f0e6c9e9a1b4ddde35dcfa8b_prof);

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
