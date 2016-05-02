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
        $__internal_fb20834ed3e7d132cb8be8406bd88a003c00d5b388d21f43c77469e78d5ea462 = $this->env->getExtension("native_profiler");
        $__internal_fb20834ed3e7d132cb8be8406bd88a003c00d5b388d21f43c77469e78d5ea462->enter($__internal_fb20834ed3e7d132cb8be8406bd88a003c00d5b388d21f43c77469e78d5ea462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb20834ed3e7d132cb8be8406bd88a003c00d5b388d21f43c77469e78d5ea462->leave($__internal_fb20834ed3e7d132cb8be8406bd88a003c00d5b388d21f43c77469e78d5ea462_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8a0232a2b20e7ab07444146d2e4acc1f8a3e0832d0dd74aacc09bf0ea550483 = $this->env->getExtension("native_profiler");
        $__internal_a8a0232a2b20e7ab07444146d2e4acc1f8a3e0832d0dd74aacc09bf0ea550483->enter($__internal_a8a0232a2b20e7ab07444146d2e4acc1f8a3e0832d0dd74aacc09bf0ea550483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8a0232a2b20e7ab07444146d2e4acc1f8a3e0832d0dd74aacc09bf0ea550483->leave($__internal_a8a0232a2b20e7ab07444146d2e4acc1f8a3e0832d0dd74aacc09bf0ea550483_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba5122daa63d169432a6dfabef4b25049285e829cdeb29a177e663d34ddb0425 = $this->env->getExtension("native_profiler");
        $__internal_ba5122daa63d169432a6dfabef4b25049285e829cdeb29a177e663d34ddb0425->enter($__internal_ba5122daa63d169432a6dfabef4b25049285e829cdeb29a177e663d34ddb0425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ba5122daa63d169432a6dfabef4b25049285e829cdeb29a177e663d34ddb0425->leave($__internal_ba5122daa63d169432a6dfabef4b25049285e829cdeb29a177e663d34ddb0425_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_199a8ed94f995cb25b2f7aeed6d774d4fc4ddffac3c2048b1f181a922ef7136e = $this->env->getExtension("native_profiler");
        $__internal_199a8ed94f995cb25b2f7aeed6d774d4fc4ddffac3c2048b1f181a922ef7136e->enter($__internal_199a8ed94f995cb25b2f7aeed6d774d4fc4ddffac3c2048b1f181a922ef7136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_199a8ed94f995cb25b2f7aeed6d774d4fc4ddffac3c2048b1f181a922ef7136e->leave($__internal_199a8ed94f995cb25b2f7aeed6d774d4fc4ddffac3c2048b1f181a922ef7136e_prof);

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
