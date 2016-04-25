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
        $__internal_8c1254e527b7617fff84c46aae5b7876760932cec082abd8c86c29eee449a8c7 = $this->env->getExtension("native_profiler");
        $__internal_8c1254e527b7617fff84c46aae5b7876760932cec082abd8c86c29eee449a8c7->enter($__internal_8c1254e527b7617fff84c46aae5b7876760932cec082abd8c86c29eee449a8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8c1254e527b7617fff84c46aae5b7876760932cec082abd8c86c29eee449a8c7->leave($__internal_8c1254e527b7617fff84c46aae5b7876760932cec082abd8c86c29eee449a8c7_prof);

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
