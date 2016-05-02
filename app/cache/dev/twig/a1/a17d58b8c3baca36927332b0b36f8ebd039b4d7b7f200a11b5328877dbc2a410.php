<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0875af5ca63a546a5085ce2e2aaf28f790f5173dabb502002443c06ba53bae38 extends Twig_Template
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
        $__internal_c461a2f98f892c5e83a11569ade5dafad0b22b6deb37763c56f0a7fa652abc33 = $this->env->getExtension("native_profiler");
        $__internal_c461a2f98f892c5e83a11569ade5dafad0b22b6deb37763c56f0a7fa652abc33->enter($__internal_c461a2f98f892c5e83a11569ade5dafad0b22b6deb37763c56f0a7fa652abc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c461a2f98f892c5e83a11569ade5dafad0b22b6deb37763c56f0a7fa652abc33->leave($__internal_c461a2f98f892c5e83a11569ade5dafad0b22b6deb37763c56f0a7fa652abc33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
