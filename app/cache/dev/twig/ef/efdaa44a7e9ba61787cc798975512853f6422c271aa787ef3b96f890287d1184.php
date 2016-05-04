<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_02ed3334ec308978efbfc2745e335c3abe3347990652a72ddbe1409026354300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbcdc0a908811d450c2a7df409221b3f55cbde58dfaa9e867cd0cc06e77ac260 = $this->env->getExtension("native_profiler");
        $__internal_dbcdc0a908811d450c2a7df409221b3f55cbde58dfaa9e867cd0cc06e77ac260->enter($__internal_dbcdc0a908811d450c2a7df409221b3f55cbde58dfaa9e867cd0cc06e77ac260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dbcdc0a908811d450c2a7df409221b3f55cbde58dfaa9e867cd0cc06e77ac260->leave($__internal_dbcdc0a908811d450c2a7df409221b3f55cbde58dfaa9e867cd0cc06e77ac260_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
