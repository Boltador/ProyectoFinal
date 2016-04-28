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
        $__internal_377d9210c88510b32a9c50c8e56e07544c65db9179e7c16502e714a634fa572b = $this->env->getExtension("native_profiler");
        $__internal_377d9210c88510b32a9c50c8e56e07544c65db9179e7c16502e714a634fa572b->enter($__internal_377d9210c88510b32a9c50c8e56e07544c65db9179e7c16502e714a634fa572b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_377d9210c88510b32a9c50c8e56e07544c65db9179e7c16502e714a634fa572b->leave($__internal_377d9210c88510b32a9c50c8e56e07544c65db9179e7c16502e714a634fa572b_prof);

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
