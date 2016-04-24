<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f63bed8621000d0462c69d4c49e1bf46b5bd6f4562104295765b98cee9ec348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dde37d696b741adfa1b7be2edfd3cac93e6b2508c71beb1e382e31dd226ab14 = $this->env->getExtension("native_profiler");
        $__internal_6dde37d696b741adfa1b7be2edfd3cac93e6b2508c71beb1e382e31dd226ab14->enter($__internal_6dde37d696b741adfa1b7be2edfd3cac93e6b2508c71beb1e382e31dd226ab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dde37d696b741adfa1b7be2edfd3cac93e6b2508c71beb1e382e31dd226ab14->leave($__internal_6dde37d696b741adfa1b7be2edfd3cac93e6b2508c71beb1e382e31dd226ab14_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_589f1d61e7afcc8f1e7321e113ca5bca738adf1ada1f6abd22e00a7eafb8e261 = $this->env->getExtension("native_profiler");
        $__internal_589f1d61e7afcc8f1e7321e113ca5bca738adf1ada1f6abd22e00a7eafb8e261->enter($__internal_589f1d61e7afcc8f1e7321e113ca5bca738adf1ada1f6abd22e00a7eafb8e261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_589f1d61e7afcc8f1e7321e113ca5bca738adf1ada1f6abd22e00a7eafb8e261->leave($__internal_589f1d61e7afcc8f1e7321e113ca5bca738adf1ada1f6abd22e00a7eafb8e261_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c7e551d0cfe021fca8aadb73342ee5138aa80b1bde7d99ca44a0168af00fdd9 = $this->env->getExtension("native_profiler");
        $__internal_1c7e551d0cfe021fca8aadb73342ee5138aa80b1bde7d99ca44a0168af00fdd9->enter($__internal_1c7e551d0cfe021fca8aadb73342ee5138aa80b1bde7d99ca44a0168af00fdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c7e551d0cfe021fca8aadb73342ee5138aa80b1bde7d99ca44a0168af00fdd9->leave($__internal_1c7e551d0cfe021fca8aadb73342ee5138aa80b1bde7d99ca44a0168af00fdd9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89e882836d3a77bee3c8e45d62ad6692984ba111d03d9d07a8850f87fa36204 = $this->env->getExtension("native_profiler");
        $__internal_d89e882836d3a77bee3c8e45d62ad6692984ba111d03d9d07a8850f87fa36204->enter($__internal_d89e882836d3a77bee3c8e45d62ad6692984ba111d03d9d07a8850f87fa36204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d89e882836d3a77bee3c8e45d62ad6692984ba111d03d9d07a8850f87fa36204->leave($__internal_d89e882836d3a77bee3c8e45d62ad6692984ba111d03d9d07a8850f87fa36204_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
