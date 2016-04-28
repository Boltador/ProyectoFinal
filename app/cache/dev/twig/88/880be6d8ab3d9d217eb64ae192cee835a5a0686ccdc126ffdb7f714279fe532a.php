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
        $__internal_f14b930c85ede5fa78e48cc0c6d9029e8e037187f758cb9c5f0086b8827b4b9d = $this->env->getExtension("native_profiler");
        $__internal_f14b930c85ede5fa78e48cc0c6d9029e8e037187f758cb9c5f0086b8827b4b9d->enter($__internal_f14b930c85ede5fa78e48cc0c6d9029e8e037187f758cb9c5f0086b8827b4b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f14b930c85ede5fa78e48cc0c6d9029e8e037187f758cb9c5f0086b8827b4b9d->leave($__internal_f14b930c85ede5fa78e48cc0c6d9029e8e037187f758cb9c5f0086b8827b4b9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c5ddbf141c2190c861494b0f7c560a8996240627ed5a9e728ec9016b74366ef = $this->env->getExtension("native_profiler");
        $__internal_3c5ddbf141c2190c861494b0f7c560a8996240627ed5a9e728ec9016b74366ef->enter($__internal_3c5ddbf141c2190c861494b0f7c560a8996240627ed5a9e728ec9016b74366ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c5ddbf141c2190c861494b0f7c560a8996240627ed5a9e728ec9016b74366ef->leave($__internal_3c5ddbf141c2190c861494b0f7c560a8996240627ed5a9e728ec9016b74366ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_801a889a7943c82071020aa26aece396ecde556d325ff4f91231b3a40d7f9eff = $this->env->getExtension("native_profiler");
        $__internal_801a889a7943c82071020aa26aece396ecde556d325ff4f91231b3a40d7f9eff->enter($__internal_801a889a7943c82071020aa26aece396ecde556d325ff4f91231b3a40d7f9eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_801a889a7943c82071020aa26aece396ecde556d325ff4f91231b3a40d7f9eff->leave($__internal_801a889a7943c82071020aa26aece396ecde556d325ff4f91231b3a40d7f9eff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_011d75d4fbf3fd58362c9833362bfc7cbd72ef767b0b6fe52234ce8dc5b8af63 = $this->env->getExtension("native_profiler");
        $__internal_011d75d4fbf3fd58362c9833362bfc7cbd72ef767b0b6fe52234ce8dc5b8af63->enter($__internal_011d75d4fbf3fd58362c9833362bfc7cbd72ef767b0b6fe52234ce8dc5b8af63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_011d75d4fbf3fd58362c9833362bfc7cbd72ef767b0b6fe52234ce8dc5b8af63->leave($__internal_011d75d4fbf3fd58362c9833362bfc7cbd72ef767b0b6fe52234ce8dc5b8af63_prof);

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
