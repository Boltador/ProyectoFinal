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
        $__internal_fd21a721075ed832ee14fdf14cf91225955b88a0d31cfde0eb947f2734770ebe = $this->env->getExtension("native_profiler");
        $__internal_fd21a721075ed832ee14fdf14cf91225955b88a0d31cfde0eb947f2734770ebe->enter($__internal_fd21a721075ed832ee14fdf14cf91225955b88a0d31cfde0eb947f2734770ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fd21a721075ed832ee14fdf14cf91225955b88a0d31cfde0eb947f2734770ebe->leave($__internal_fd21a721075ed832ee14fdf14cf91225955b88a0d31cfde0eb947f2734770ebe_prof);

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
