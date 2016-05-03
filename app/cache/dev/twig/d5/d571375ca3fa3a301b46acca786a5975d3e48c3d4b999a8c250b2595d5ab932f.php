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
        $__internal_1165df18d287095111c08d417a5ac030235e1468bc11494afb7bb49d2cb0d009 = $this->env->getExtension("native_profiler");
        $__internal_1165df18d287095111c08d417a5ac030235e1468bc11494afb7bb49d2cb0d009->enter($__internal_1165df18d287095111c08d417a5ac030235e1468bc11494afb7bb49d2cb0d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_1165df18d287095111c08d417a5ac030235e1468bc11494afb7bb49d2cb0d009->leave($__internal_1165df18d287095111c08d417a5ac030235e1468bc11494afb7bb49d2cb0d009_prof);

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
