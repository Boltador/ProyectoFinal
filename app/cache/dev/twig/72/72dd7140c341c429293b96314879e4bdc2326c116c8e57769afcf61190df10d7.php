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
        $__internal_5cc2b36899dae9c6b56e3d5eb5028226d9e5809fa49f845579f2272ad1ce185b = $this->env->getExtension("native_profiler");
        $__internal_5cc2b36899dae9c6b56e3d5eb5028226d9e5809fa49f845579f2272ad1ce185b->enter($__internal_5cc2b36899dae9c6b56e3d5eb5028226d9e5809fa49f845579f2272ad1ce185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cc2b36899dae9c6b56e3d5eb5028226d9e5809fa49f845579f2272ad1ce185b->leave($__internal_5cc2b36899dae9c6b56e3d5eb5028226d9e5809fa49f845579f2272ad1ce185b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e8bb1b98ac5c242cc7ebded0c27039a73df9712b0464b704f15331553fc13c2 = $this->env->getExtension("native_profiler");
        $__internal_2e8bb1b98ac5c242cc7ebded0c27039a73df9712b0464b704f15331553fc13c2->enter($__internal_2e8bb1b98ac5c242cc7ebded0c27039a73df9712b0464b704f15331553fc13c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e8bb1b98ac5c242cc7ebded0c27039a73df9712b0464b704f15331553fc13c2->leave($__internal_2e8bb1b98ac5c242cc7ebded0c27039a73df9712b0464b704f15331553fc13c2_prof);

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
