<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_02ed3334ec308978efbfc2745e335c3abe3347990652a72ddbe1409026354300 extends Twig_Template
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
        $__internal_a6ed769d9ca6911569f3d2f1b1d5b127bbd0ebf55f35a095c610177b641f6155 = $this->env->getExtension("native_profiler");
        $__internal_a6ed769d9ca6911569f3d2f1b1d5b127bbd0ebf55f35a095c610177b641f6155->enter($__internal_a6ed769d9ca6911569f3d2f1b1d5b127bbd0ebf55f35a095c610177b641f6155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a6ed769d9ca6911569f3d2f1b1d5b127bbd0ebf55f35a095c610177b641f6155->leave($__internal_a6ed769d9ca6911569f3d2f1b1d5b127bbd0ebf55f35a095c610177b641f6155_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
