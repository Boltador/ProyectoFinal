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
        $__internal_b05764482ebd1f163caf3ec0b05ff354b7df9fffe8ca3160ec6c2afe6707c090 = $this->env->getExtension("native_profiler");
        $__internal_b05764482ebd1f163caf3ec0b05ff354b7df9fffe8ca3160ec6c2afe6707c090->enter($__internal_b05764482ebd1f163caf3ec0b05ff354b7df9fffe8ca3160ec6c2afe6707c090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_b05764482ebd1f163caf3ec0b05ff354b7df9fffe8ca3160ec6c2afe6707c090->leave($__internal_b05764482ebd1f163caf3ec0b05ff354b7df9fffe8ca3160ec6c2afe6707c090_prof);

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
