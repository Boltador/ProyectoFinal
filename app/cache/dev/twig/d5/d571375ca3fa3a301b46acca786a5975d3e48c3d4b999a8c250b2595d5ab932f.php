<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_28b7e1c583f4b48acfb267cb3353299a2d6e36e356910a577a124ec39fe0284b extends Twig_Template
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
        $__internal_6078b3e5c36af39a5c30234d82bd87c3e4eacec502d24277980ccf42dd36ea1e = $this->env->getExtension("native_profiler");
        $__internal_6078b3e5c36af39a5c30234d82bd87c3e4eacec502d24277980ccf42dd36ea1e->enter($__internal_6078b3e5c36af39a5c30234d82bd87c3e4eacec502d24277980ccf42dd36ea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6078b3e5c36af39a5c30234d82bd87c3e4eacec502d24277980ccf42dd36ea1e->leave($__internal_6078b3e5c36af39a5c30234d82bd87c3e4eacec502d24277980ccf42dd36ea1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
