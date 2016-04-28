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
        $__internal_3f988281144738313b3a19b8bf55de02d3ce5f323f91051ee7c41966d2981745 = $this->env->getExtension("native_profiler");
        $__internal_3f988281144738313b3a19b8bf55de02d3ce5f323f91051ee7c41966d2981745->enter($__internal_3f988281144738313b3a19b8bf55de02d3ce5f323f91051ee7c41966d2981745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f988281144738313b3a19b8bf55de02d3ce5f323f91051ee7c41966d2981745->leave($__internal_3f988281144738313b3a19b8bf55de02d3ce5f323f91051ee7c41966d2981745_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4b8ac851bec1893b642803d59ee01fc9445faa23dcee1ff81691ff57bd0c5a8f = $this->env->getExtension("native_profiler");
        $__internal_4b8ac851bec1893b642803d59ee01fc9445faa23dcee1ff81691ff57bd0c5a8f->enter($__internal_4b8ac851bec1893b642803d59ee01fc9445faa23dcee1ff81691ff57bd0c5a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4b8ac851bec1893b642803d59ee01fc9445faa23dcee1ff81691ff57bd0c5a8f->leave($__internal_4b8ac851bec1893b642803d59ee01fc9445faa23dcee1ff81691ff57bd0c5a8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79d44f352910a62dfb0e89900ea7a011f48f54d524ddfe1b1ee22646679fa620 = $this->env->getExtension("native_profiler");
        $__internal_79d44f352910a62dfb0e89900ea7a011f48f54d524ddfe1b1ee22646679fa620->enter($__internal_79d44f352910a62dfb0e89900ea7a011f48f54d524ddfe1b1ee22646679fa620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79d44f352910a62dfb0e89900ea7a011f48f54d524ddfe1b1ee22646679fa620->leave($__internal_79d44f352910a62dfb0e89900ea7a011f48f54d524ddfe1b1ee22646679fa620_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9226582fc6b42209119089caee5cc6a78cbe31442908219d4d781032338475b = $this->env->getExtension("native_profiler");
        $__internal_a9226582fc6b42209119089caee5cc6a78cbe31442908219d4d781032338475b->enter($__internal_a9226582fc6b42209119089caee5cc6a78cbe31442908219d4d781032338475b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a9226582fc6b42209119089caee5cc6a78cbe31442908219d4d781032338475b->leave($__internal_a9226582fc6b42209119089caee5cc6a78cbe31442908219d4d781032338475b_prof);

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
