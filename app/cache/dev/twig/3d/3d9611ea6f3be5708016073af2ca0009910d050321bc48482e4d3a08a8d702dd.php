<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0569b3c9be73996d0f03cc24f336606a93d20bf82c04e6ab4e198c45aa81d942 extends Twig_Template
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
        $__internal_e791d33bc28334ed69c92285549f928a7ff2ca0d3c090bc8f822c6ccd190e9c5 = $this->env->getExtension("native_profiler");
        $__internal_e791d33bc28334ed69c92285549f928a7ff2ca0d3c090bc8f822c6ccd190e9c5->enter($__internal_e791d33bc28334ed69c92285549f928a7ff2ca0d3c090bc8f822c6ccd190e9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_e791d33bc28334ed69c92285549f928a7ff2ca0d3c090bc8f822c6ccd190e9c5->leave($__internal_e791d33bc28334ed69c92285549f928a7ff2ca0d3c090bc8f822c6ccd190e9c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
