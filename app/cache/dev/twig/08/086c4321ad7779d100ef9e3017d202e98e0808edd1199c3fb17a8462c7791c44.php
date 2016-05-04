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
        $__internal_343fd9f8465f6cf7b7d52a5196c96d7f51515bd25c6e2e08e575c3f4d5375085 = $this->env->getExtension("native_profiler");
        $__internal_343fd9f8465f6cf7b7d52a5196c96d7f51515bd25c6e2e08e575c3f4d5375085->enter($__internal_343fd9f8465f6cf7b7d52a5196c96d7f51515bd25c6e2e08e575c3f4d5375085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_343fd9f8465f6cf7b7d52a5196c96d7f51515bd25c6e2e08e575c3f4d5375085->leave($__internal_343fd9f8465f6cf7b7d52a5196c96d7f51515bd25c6e2e08e575c3f4d5375085_prof);

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
