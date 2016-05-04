<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_72bd4f58862fa3deccf05b45f692ba55cca1db1e6e68880c26119bf77ec2a80f extends Twig_Template
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
        $__internal_b68ed1945b111d3d1195157a6d789d184bb209ff6007437b3ae9c13d30589b70 = $this->env->getExtension("native_profiler");
        $__internal_b68ed1945b111d3d1195157a6d789d184bb209ff6007437b3ae9c13d30589b70->enter($__internal_b68ed1945b111d3d1195157a6d789d184bb209ff6007437b3ae9c13d30589b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b68ed1945b111d3d1195157a6d789d184bb209ff6007437b3ae9c13d30589b70->leave($__internal_b68ed1945b111d3d1195157a6d789d184bb209ff6007437b3ae9c13d30589b70_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_387f4874be957fdcab2f8acb05ee0ab6d9a8eeb0ae172f3eb672753f64c7e53d = $this->env->getExtension("native_profiler");
        $__internal_387f4874be957fdcab2f8acb05ee0ab6d9a8eeb0ae172f3eb672753f64c7e53d->enter($__internal_387f4874be957fdcab2f8acb05ee0ab6d9a8eeb0ae172f3eb672753f64c7e53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_387f4874be957fdcab2f8acb05ee0ab6d9a8eeb0ae172f3eb672753f64c7e53d->leave($__internal_387f4874be957fdcab2f8acb05ee0ab6d9a8eeb0ae172f3eb672753f64c7e53d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
