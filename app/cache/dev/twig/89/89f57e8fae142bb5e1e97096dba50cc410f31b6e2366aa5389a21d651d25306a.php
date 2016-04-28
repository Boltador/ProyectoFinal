<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0b962d90288e4146c279bbd777c61fb7889571fe1b401dc939a7fb0bd1c42a92 extends Twig_Template
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
        $__internal_826ed6fd5d82f7a5044e6bc877f34e43780e7fb22cb435144a955577fb9564fc = $this->env->getExtension("native_profiler");
        $__internal_826ed6fd5d82f7a5044e6bc877f34e43780e7fb22cb435144a955577fb9564fc->enter($__internal_826ed6fd5d82f7a5044e6bc877f34e43780e7fb22cb435144a955577fb9564fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_826ed6fd5d82f7a5044e6bc877f34e43780e7fb22cb435144a955577fb9564fc->leave($__internal_826ed6fd5d82f7a5044e6bc877f34e43780e7fb22cb435144a955577fb9564fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
