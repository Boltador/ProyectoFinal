<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bcf4e7d4036b2bb40f9ee5c4c62d27d4ddfeee13ac46e53d4c70c99a4ddbd544 extends Twig_Template
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
        $__internal_29f403e2bc3a22f8bcb4c18e07a6c13241bd5b86a1cfecf2ca0022cb785e65fb = $this->env->getExtension("native_profiler");
        $__internal_29f403e2bc3a22f8bcb4c18e07a6c13241bd5b86a1cfecf2ca0022cb785e65fb->enter($__internal_29f403e2bc3a22f8bcb4c18e07a6c13241bd5b86a1cfecf2ca0022cb785e65fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_29f403e2bc3a22f8bcb4c18e07a6c13241bd5b86a1cfecf2ca0022cb785e65fb->leave($__internal_29f403e2bc3a22f8bcb4c18e07a6c13241bd5b86a1cfecf2ca0022cb785e65fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
