<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9651b566c4d7f7e5cf50a2c6a8adbb29885ea8c1ff9a4a5ff5476fe956ab39eb extends Twig_Template
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
        $__internal_38bbff95d504ca288f4858dd7bb2862b36657a3dd370dfb5c2c8cab20b3b894a = $this->env->getExtension("native_profiler");
        $__internal_38bbff95d504ca288f4858dd7bb2862b36657a3dd370dfb5c2c8cab20b3b894a->enter($__internal_38bbff95d504ca288f4858dd7bb2862b36657a3dd370dfb5c2c8cab20b3b894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_38bbff95d504ca288f4858dd7bb2862b36657a3dd370dfb5c2c8cab20b3b894a->leave($__internal_38bbff95d504ca288f4858dd7bb2862b36657a3dd370dfb5c2c8cab20b3b894a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
