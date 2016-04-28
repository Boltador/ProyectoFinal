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
        $__internal_52d8e84efc275bc4e5f45c40940753860fb540c2ebae358facce17945a787428 = $this->env->getExtension("native_profiler");
        $__internal_52d8e84efc275bc4e5f45c40940753860fb540c2ebae358facce17945a787428->enter($__internal_52d8e84efc275bc4e5f45c40940753860fb540c2ebae358facce17945a787428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52d8e84efc275bc4e5f45c40940753860fb540c2ebae358facce17945a787428->leave($__internal_52d8e84efc275bc4e5f45c40940753860fb540c2ebae358facce17945a787428_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cdc392a24c22144c946c4b68bd6a4f04ab31bd5c2349c2666c4add4032b6711 = $this->env->getExtension("native_profiler");
        $__internal_1cdc392a24c22144c946c4b68bd6a4f04ab31bd5c2349c2666c4add4032b6711->enter($__internal_1cdc392a24c22144c946c4b68bd6a4f04ab31bd5c2349c2666c4add4032b6711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1cdc392a24c22144c946c4b68bd6a4f04ab31bd5c2349c2666c4add4032b6711->leave($__internal_1cdc392a24c22144c946c4b68bd6a4f04ab31bd5c2349c2666c4add4032b6711_prof);

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
