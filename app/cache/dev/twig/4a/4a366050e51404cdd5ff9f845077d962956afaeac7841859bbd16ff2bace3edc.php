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
        $__internal_c0433390a73497e187abd4afa61378b843899daed4830cc8fbac2bf922b1436f = $this->env->getExtension("native_profiler");
        $__internal_c0433390a73497e187abd4afa61378b843899daed4830cc8fbac2bf922b1436f->enter($__internal_c0433390a73497e187abd4afa61378b843899daed4830cc8fbac2bf922b1436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c0433390a73497e187abd4afa61378b843899daed4830cc8fbac2bf922b1436f->leave($__internal_c0433390a73497e187abd4afa61378b843899daed4830cc8fbac2bf922b1436f_prof);

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
