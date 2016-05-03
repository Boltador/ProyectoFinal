<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6ead7abf4cb3d08e95790f525584a2cee4a75be2b4a01c8aa1fbb6079bd370d3 extends Twig_Template
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
        $__internal_07a1d5abc7616568c8c354a225d3c25f7a37c6c825499de182929bbf61e7d33f = $this->env->getExtension("native_profiler");
        $__internal_07a1d5abc7616568c8c354a225d3c25f7a37c6c825499de182929bbf61e7d33f->enter($__internal_07a1d5abc7616568c8c354a225d3c25f7a37c6c825499de182929bbf61e7d33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_07a1d5abc7616568c8c354a225d3c25f7a37c6c825499de182929bbf61e7d33f->leave($__internal_07a1d5abc7616568c8c354a225d3c25f7a37c6c825499de182929bbf61e7d33f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
