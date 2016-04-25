<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8790d91a3f144cb6f2f771b5215910856800b88fa1c1b507960e1ce7c049f7cc extends Twig_Template
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
        $__internal_ef630ecb24bbf35d2f9ecea84e7bc0c272590c653df63a9b648e4bd27ae827ae = $this->env->getExtension("native_profiler");
        $__internal_ef630ecb24bbf35d2f9ecea84e7bc0c272590c653df63a9b648e4bd27ae827ae->enter($__internal_ef630ecb24bbf35d2f9ecea84e7bc0c272590c653df63a9b648e4bd27ae827ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ef630ecb24bbf35d2f9ecea84e7bc0c272590c653df63a9b648e4bd27ae827ae->leave($__internal_ef630ecb24bbf35d2f9ecea84e7bc0c272590c653df63a9b648e4bd27ae827ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
