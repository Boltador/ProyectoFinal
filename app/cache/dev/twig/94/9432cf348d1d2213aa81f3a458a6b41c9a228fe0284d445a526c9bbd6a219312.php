<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e26f6f2aca31421763893206cbe55ed6227bbb7e0add31563759b9e1a66876c8 extends Twig_Template
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
        $__internal_5d6f3a900f8aeca45052801dbe6247f3f7430289f8a6a82ff2c20811a491c20a = $this->env->getExtension("native_profiler");
        $__internal_5d6f3a900f8aeca45052801dbe6247f3f7430289f8a6a82ff2c20811a491c20a->enter($__internal_5d6f3a900f8aeca45052801dbe6247f3f7430289f8a6a82ff2c20811a491c20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5d6f3a900f8aeca45052801dbe6247f3f7430289f8a6a82ff2c20811a491c20a->leave($__internal_5d6f3a900f8aeca45052801dbe6247f3f7430289f8a6a82ff2c20811a491c20a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
