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
        $__internal_aa125eacde436febae26015d5b291d13d563b5cac5b60e4f0f0f2d2e2d22517d = $this->env->getExtension("native_profiler");
        $__internal_aa125eacde436febae26015d5b291d13d563b5cac5b60e4f0f0f2d2e2d22517d->enter($__internal_aa125eacde436febae26015d5b291d13d563b5cac5b60e4f0f0f2d2e2d22517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aa125eacde436febae26015d5b291d13d563b5cac5b60e4f0f0f2d2e2d22517d->leave($__internal_aa125eacde436febae26015d5b291d13d563b5cac5b60e4f0f0f2d2e2d22517d_prof);

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
