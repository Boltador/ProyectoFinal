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
        $__internal_71874f5d9cfda5ae459dd06199614f86f69552082372ec52fcc063dce4357362 = $this->env->getExtension("native_profiler");
        $__internal_71874f5d9cfda5ae459dd06199614f86f69552082372ec52fcc063dce4357362->enter($__internal_71874f5d9cfda5ae459dd06199614f86f69552082372ec52fcc063dce4357362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71874f5d9cfda5ae459dd06199614f86f69552082372ec52fcc063dce4357362->leave($__internal_71874f5d9cfda5ae459dd06199614f86f69552082372ec52fcc063dce4357362_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aadfe8489bd536188809023358fbc5a3166cea01c86671120f9ce0a0dd2d4070 = $this->env->getExtension("native_profiler");
        $__internal_aadfe8489bd536188809023358fbc5a3166cea01c86671120f9ce0a0dd2d4070->enter($__internal_aadfe8489bd536188809023358fbc5a3166cea01c86671120f9ce0a0dd2d4070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aadfe8489bd536188809023358fbc5a3166cea01c86671120f9ce0a0dd2d4070->leave($__internal_aadfe8489bd536188809023358fbc5a3166cea01c86671120f9ce0a0dd2d4070_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa226b635e83115e87a6101499667c8a36f6eb48c239253b9ab2e468b2f4344e = $this->env->getExtension("native_profiler");
        $__internal_aa226b635e83115e87a6101499667c8a36f6eb48c239253b9ab2e468b2f4344e->enter($__internal_aa226b635e83115e87a6101499667c8a36f6eb48c239253b9ab2e468b2f4344e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa226b635e83115e87a6101499667c8a36f6eb48c239253b9ab2e468b2f4344e->leave($__internal_aa226b635e83115e87a6101499667c8a36f6eb48c239253b9ab2e468b2f4344e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac187a3a84497560c8c3c1938d4447efc1c796ad16abed82bd755bd0193e41b = $this->env->getExtension("native_profiler");
        $__internal_fac187a3a84497560c8c3c1938d4447efc1c796ad16abed82bd755bd0193e41b->enter($__internal_fac187a3a84497560c8c3c1938d4447efc1c796ad16abed82bd755bd0193e41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fac187a3a84497560c8c3c1938d4447efc1c796ad16abed82bd755bd0193e41b->leave($__internal_fac187a3a84497560c8c3c1938d4447efc1c796ad16abed82bd755bd0193e41b_prof);

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
