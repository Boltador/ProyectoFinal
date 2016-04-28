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
        $__internal_09b1e62f260e260a1d86d2c0db8a933793fc4a8976f7367b3d245933ee696e79 = $this->env->getExtension("native_profiler");
        $__internal_09b1e62f260e260a1d86d2c0db8a933793fc4a8976f7367b3d245933ee696e79->enter($__internal_09b1e62f260e260a1d86d2c0db8a933793fc4a8976f7367b3d245933ee696e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_09b1e62f260e260a1d86d2c0db8a933793fc4a8976f7367b3d245933ee696e79->leave($__internal_09b1e62f260e260a1d86d2c0db8a933793fc4a8976f7367b3d245933ee696e79_prof);

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
