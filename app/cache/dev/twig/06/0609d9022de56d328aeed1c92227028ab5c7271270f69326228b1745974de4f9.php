<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a70c07f9920d3cb7f75898217d8b4daa373855ae95c91dfe68530490019ac330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a23f1d168c23593cc24c5c9ab1207e23e32d541cc94182b507848e3742777ad7 = $this->env->getExtension("native_profiler");
        $__internal_a23f1d168c23593cc24c5c9ab1207e23e32d541cc94182b507848e3742777ad7->enter($__internal_a23f1d168c23593cc24c5c9ab1207e23e32d541cc94182b507848e3742777ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a23f1d168c23593cc24c5c9ab1207e23e32d541cc94182b507848e3742777ad7->leave($__internal_a23f1d168c23593cc24c5c9ab1207e23e32d541cc94182b507848e3742777ad7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b855ba528b01f14fffd4bff4cce38a2ded863ef0ecc16f2bdab3aad3e32d9a4 = $this->env->getExtension("native_profiler");
        $__internal_0b855ba528b01f14fffd4bff4cce38a2ded863ef0ecc16f2bdab3aad3e32d9a4->enter($__internal_0b855ba528b01f14fffd4bff4cce38a2ded863ef0ecc16f2bdab3aad3e32d9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0b855ba528b01f14fffd4bff4cce38a2ded863ef0ecc16f2bdab3aad3e32d9a4->leave($__internal_0b855ba528b01f14fffd4bff4cce38a2ded863ef0ecc16f2bdab3aad3e32d9a4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
