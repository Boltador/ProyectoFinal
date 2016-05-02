<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e7802285157b892da4ef44227bb6945a293f6632f141d864a0041b7267671a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a2977fc67cbf509e182636923679b3c12cd2a4747f2c1626253abc1ac6f7687a = $this->env->getExtension("native_profiler");
        $__internal_a2977fc67cbf509e182636923679b3c12cd2a4747f2c1626253abc1ac6f7687a->enter($__internal_a2977fc67cbf509e182636923679b3c12cd2a4747f2c1626253abc1ac6f7687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2977fc67cbf509e182636923679b3c12cd2a4747f2c1626253abc1ac6f7687a->leave($__internal_a2977fc67cbf509e182636923679b3c12cd2a4747f2c1626253abc1ac6f7687a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6e15ea11dd69f1fed3bfb492064734e93e93c0c92383d92d2bf1e0bfbff1aa2 = $this->env->getExtension("native_profiler");
        $__internal_d6e15ea11dd69f1fed3bfb492064734e93e93c0c92383d92d2bf1e0bfbff1aa2->enter($__internal_d6e15ea11dd69f1fed3bfb492064734e93e93c0c92383d92d2bf1e0bfbff1aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6e15ea11dd69f1fed3bfb492064734e93e93c0c92383d92d2bf1e0bfbff1aa2->leave($__internal_d6e15ea11dd69f1fed3bfb492064734e93e93c0c92383d92d2bf1e0bfbff1aa2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_23e8d8dc2016c17ed662717a4bd45fbc84ac452f29f8b9bbf8bc97540b5117f2 = $this->env->getExtension("native_profiler");
        $__internal_23e8d8dc2016c17ed662717a4bd45fbc84ac452f29f8b9bbf8bc97540b5117f2->enter($__internal_23e8d8dc2016c17ed662717a4bd45fbc84ac452f29f8b9bbf8bc97540b5117f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_23e8d8dc2016c17ed662717a4bd45fbc84ac452f29f8b9bbf8bc97540b5117f2->leave($__internal_23e8d8dc2016c17ed662717a4bd45fbc84ac452f29f8b9bbf8bc97540b5117f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cafe3a6ef8f90c9ee6b819c60b879e426897dc502e12e7676b3871abe7406799 = $this->env->getExtension("native_profiler");
        $__internal_cafe3a6ef8f90c9ee6b819c60b879e426897dc502e12e7676b3871abe7406799->enter($__internal_cafe3a6ef8f90c9ee6b819c60b879e426897dc502e12e7676b3871abe7406799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cafe3a6ef8f90c9ee6b819c60b879e426897dc502e12e7676b3871abe7406799->leave($__internal_cafe3a6ef8f90c9ee6b819c60b879e426897dc502e12e7676b3871abe7406799_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
