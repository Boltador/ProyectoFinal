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
        $__internal_9ca2af57fda65ba04d9c36978f9729c97f432d25eedf65e54afd807c3c180ca2 = $this->env->getExtension("native_profiler");
        $__internal_9ca2af57fda65ba04d9c36978f9729c97f432d25eedf65e54afd807c3c180ca2->enter($__internal_9ca2af57fda65ba04d9c36978f9729c97f432d25eedf65e54afd807c3c180ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ca2af57fda65ba04d9c36978f9729c97f432d25eedf65e54afd807c3c180ca2->leave($__internal_9ca2af57fda65ba04d9c36978f9729c97f432d25eedf65e54afd807c3c180ca2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_668b2a8fa27855269e2453f1ff7d3168e30d64d41a87a49f81afb713753456bf = $this->env->getExtension("native_profiler");
        $__internal_668b2a8fa27855269e2453f1ff7d3168e30d64d41a87a49f81afb713753456bf->enter($__internal_668b2a8fa27855269e2453f1ff7d3168e30d64d41a87a49f81afb713753456bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_668b2a8fa27855269e2453f1ff7d3168e30d64d41a87a49f81afb713753456bf->leave($__internal_668b2a8fa27855269e2453f1ff7d3168e30d64d41a87a49f81afb713753456bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4cfe183be9999952b554b2447bbc391d58a18f9bd6e4199bda88671cfd1d40f = $this->env->getExtension("native_profiler");
        $__internal_a4cfe183be9999952b554b2447bbc391d58a18f9bd6e4199bda88671cfd1d40f->enter($__internal_a4cfe183be9999952b554b2447bbc391d58a18f9bd6e4199bda88671cfd1d40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4cfe183be9999952b554b2447bbc391d58a18f9bd6e4199bda88671cfd1d40f->leave($__internal_a4cfe183be9999952b554b2447bbc391d58a18f9bd6e4199bda88671cfd1d40f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7df840a9e8120deb6b3f1bd480e48782161d0bf3a087bfe9097a2b701ca60f9a = $this->env->getExtension("native_profiler");
        $__internal_7df840a9e8120deb6b3f1bd480e48782161d0bf3a087bfe9097a2b701ca60f9a->enter($__internal_7df840a9e8120deb6b3f1bd480e48782161d0bf3a087bfe9097a2b701ca60f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7df840a9e8120deb6b3f1bd480e48782161d0bf3a087bfe9097a2b701ca60f9a->leave($__internal_7df840a9e8120deb6b3f1bd480e48782161d0bf3a087bfe9097a2b701ca60f9a_prof);

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
