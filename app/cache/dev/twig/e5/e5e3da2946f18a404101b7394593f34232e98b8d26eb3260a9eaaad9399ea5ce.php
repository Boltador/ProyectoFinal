<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3229f68cca84e773c8d54e190fd64fb8b62bd0d8ca0a11c5a08d38b607ffb468 extends Twig_Template
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
        $__internal_6af5799a6d0ae57c1114adadca4ea39c5d8ce38a204a2a924608f01441ce9f46 = $this->env->getExtension("native_profiler");
        $__internal_6af5799a6d0ae57c1114adadca4ea39c5d8ce38a204a2a924608f01441ce9f46->enter($__internal_6af5799a6d0ae57c1114adadca4ea39c5d8ce38a204a2a924608f01441ce9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6af5799a6d0ae57c1114adadca4ea39c5d8ce38a204a2a924608f01441ce9f46->leave($__internal_6af5799a6d0ae57c1114adadca4ea39c5d8ce38a204a2a924608f01441ce9f46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
