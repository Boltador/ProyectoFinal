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
        $__internal_de216bfcc662d2663fd1739e1eee6bc3d8b61f118c28013a9c909439d7e1f44c = $this->env->getExtension("native_profiler");
        $__internal_de216bfcc662d2663fd1739e1eee6bc3d8b61f118c28013a9c909439d7e1f44c->enter($__internal_de216bfcc662d2663fd1739e1eee6bc3d8b61f118c28013a9c909439d7e1f44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_de216bfcc662d2663fd1739e1eee6bc3d8b61f118c28013a9c909439d7e1f44c->leave($__internal_de216bfcc662d2663fd1739e1eee6bc3d8b61f118c28013a9c909439d7e1f44c_prof);

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
