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
        $__internal_a028a94e3b18e7873bb8b3b0a1d60b39e9638548d1a85344c13058cb93424c7c = $this->env->getExtension("native_profiler");
        $__internal_a028a94e3b18e7873bb8b3b0a1d60b39e9638548d1a85344c13058cb93424c7c->enter($__internal_a028a94e3b18e7873bb8b3b0a1d60b39e9638548d1a85344c13058cb93424c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a028a94e3b18e7873bb8b3b0a1d60b39e9638548d1a85344c13058cb93424c7c->leave($__internal_a028a94e3b18e7873bb8b3b0a1d60b39e9638548d1a85344c13058cb93424c7c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5beadc61a190909eb54ab5bec2ce974444357922bf116540b5fce032a99fc383 = $this->env->getExtension("native_profiler");
        $__internal_5beadc61a190909eb54ab5bec2ce974444357922bf116540b5fce032a99fc383->enter($__internal_5beadc61a190909eb54ab5bec2ce974444357922bf116540b5fce032a99fc383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5beadc61a190909eb54ab5bec2ce974444357922bf116540b5fce032a99fc383->leave($__internal_5beadc61a190909eb54ab5bec2ce974444357922bf116540b5fce032a99fc383_prof);

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
