<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5f751a262ed3e8061fa1994f1f08f651a08defc4e82b60e819d347dc6465de91 extends Twig_Template
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
        $__internal_155eb954a9edc0a191e241e8d808fd5872b697abe6ea0ceeb9415f0d6c36332e = $this->env->getExtension("native_profiler");
        $__internal_155eb954a9edc0a191e241e8d808fd5872b697abe6ea0ceeb9415f0d6c36332e->enter($__internal_155eb954a9edc0a191e241e8d808fd5872b697abe6ea0ceeb9415f0d6c36332e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_155eb954a9edc0a191e241e8d808fd5872b697abe6ea0ceeb9415f0d6c36332e->leave($__internal_155eb954a9edc0a191e241e8d808fd5872b697abe6ea0ceeb9415f0d6c36332e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
