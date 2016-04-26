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
        $__internal_284d41de430e94b3035a94196b686292e619a44de48bf9fb7316e06d695a8336 = $this->env->getExtension("native_profiler");
        $__internal_284d41de430e94b3035a94196b686292e619a44de48bf9fb7316e06d695a8336->enter($__internal_284d41de430e94b3035a94196b686292e619a44de48bf9fb7316e06d695a8336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_284d41de430e94b3035a94196b686292e619a44de48bf9fb7316e06d695a8336->leave($__internal_284d41de430e94b3035a94196b686292e619a44de48bf9fb7316e06d695a8336_prof);

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
