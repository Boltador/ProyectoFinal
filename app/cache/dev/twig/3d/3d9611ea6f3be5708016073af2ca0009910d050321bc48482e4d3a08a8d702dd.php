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
        $__internal_25cde30f43b19a874c71e0d8e97c013105786c603f23b3643739ff9bb7bef6ac = $this->env->getExtension("native_profiler");
        $__internal_25cde30f43b19a874c71e0d8e97c013105786c603f23b3643739ff9bb7bef6ac->enter($__internal_25cde30f43b19a874c71e0d8e97c013105786c603f23b3643739ff9bb7bef6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_25cde30f43b19a874c71e0d8e97c013105786c603f23b3643739ff9bb7bef6ac->leave($__internal_25cde30f43b19a874c71e0d8e97c013105786c603f23b3643739ff9bb7bef6ac_prof);

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