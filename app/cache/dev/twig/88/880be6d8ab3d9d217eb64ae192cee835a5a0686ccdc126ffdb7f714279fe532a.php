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
        $__internal_afeea9260a16873a267b5455b4eead22b4a60cab84d963badcf38f54ab3600bf = $this->env->getExtension("native_profiler");
        $__internal_afeea9260a16873a267b5455b4eead22b4a60cab84d963badcf38f54ab3600bf->enter($__internal_afeea9260a16873a267b5455b4eead22b4a60cab84d963badcf38f54ab3600bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afeea9260a16873a267b5455b4eead22b4a60cab84d963badcf38f54ab3600bf->leave($__internal_afeea9260a16873a267b5455b4eead22b4a60cab84d963badcf38f54ab3600bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ce7bbf88da409f3521d623a5ed588cac8f3f09de5f03de9ee2f26e02f90c6d2 = $this->env->getExtension("native_profiler");
        $__internal_3ce7bbf88da409f3521d623a5ed588cac8f3f09de5f03de9ee2f26e02f90c6d2->enter($__internal_3ce7bbf88da409f3521d623a5ed588cac8f3f09de5f03de9ee2f26e02f90c6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ce7bbf88da409f3521d623a5ed588cac8f3f09de5f03de9ee2f26e02f90c6d2->leave($__internal_3ce7bbf88da409f3521d623a5ed588cac8f3f09de5f03de9ee2f26e02f90c6d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3258b7e5b956a60075773cee65a65d356bb411838ff32a8834e13f37f410d422 = $this->env->getExtension("native_profiler");
        $__internal_3258b7e5b956a60075773cee65a65d356bb411838ff32a8834e13f37f410d422->enter($__internal_3258b7e5b956a60075773cee65a65d356bb411838ff32a8834e13f37f410d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3258b7e5b956a60075773cee65a65d356bb411838ff32a8834e13f37f410d422->leave($__internal_3258b7e5b956a60075773cee65a65d356bb411838ff32a8834e13f37f410d422_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_177d81ba3554608812b5603a2816f6a4233b83bebf7fcbf0de376e1ef1a9d238 = $this->env->getExtension("native_profiler");
        $__internal_177d81ba3554608812b5603a2816f6a4233b83bebf7fcbf0de376e1ef1a9d238->enter($__internal_177d81ba3554608812b5603a2816f6a4233b83bebf7fcbf0de376e1ef1a9d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_177d81ba3554608812b5603a2816f6a4233b83bebf7fcbf0de376e1ef1a9d238->leave($__internal_177d81ba3554608812b5603a2816f6a4233b83bebf7fcbf0de376e1ef1a9d238_prof);

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
