<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6b8a435357684530a0feea450da11e187798b4b991d55e23b208d25b568b0c34 extends Twig_Template
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
        $__internal_06d53dd2bfc3b59be1ab29414829aedae7c54291d81c21c4eb51755391fbf25a = $this->env->getExtension("native_profiler");
        $__internal_06d53dd2bfc3b59be1ab29414829aedae7c54291d81c21c4eb51755391fbf25a->enter($__internal_06d53dd2bfc3b59be1ab29414829aedae7c54291d81c21c4eb51755391fbf25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_06d53dd2bfc3b59be1ab29414829aedae7c54291d81c21c4eb51755391fbf25a->leave($__internal_06d53dd2bfc3b59be1ab29414829aedae7c54291d81c21c4eb51755391fbf25a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
