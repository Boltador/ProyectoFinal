<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_85efc639a2c8b1f7e8579b8fac14c74b4206ff10c8b63732a51d80f862f1e2ec extends Twig_Template
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
        $__internal_80c36d2540c5f9e43e9db4bdc3145a2366f8f8dfde12f85b58b2b9894eed6f52 = $this->env->getExtension("native_profiler");
        $__internal_80c36d2540c5f9e43e9db4bdc3145a2366f8f8dfde12f85b58b2b9894eed6f52->enter($__internal_80c36d2540c5f9e43e9db4bdc3145a2366f8f8dfde12f85b58b2b9894eed6f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80c36d2540c5f9e43e9db4bdc3145a2366f8f8dfde12f85b58b2b9894eed6f52->leave($__internal_80c36d2540c5f9e43e9db4bdc3145a2366f8f8dfde12f85b58b2b9894eed6f52_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
