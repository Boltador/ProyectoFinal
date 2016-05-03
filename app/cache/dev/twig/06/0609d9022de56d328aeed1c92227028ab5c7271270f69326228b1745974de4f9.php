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
        $__internal_2a95cbe7d73a7d00972781e38ddc658a79006447aedfba5eb3d2fd184fc3fac9 = $this->env->getExtension("native_profiler");
        $__internal_2a95cbe7d73a7d00972781e38ddc658a79006447aedfba5eb3d2fd184fc3fac9->enter($__internal_2a95cbe7d73a7d00972781e38ddc658a79006447aedfba5eb3d2fd184fc3fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a95cbe7d73a7d00972781e38ddc658a79006447aedfba5eb3d2fd184fc3fac9->leave($__internal_2a95cbe7d73a7d00972781e38ddc658a79006447aedfba5eb3d2fd184fc3fac9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4b86f8a9d4dbed63f7f7713b7f40253e958553743a28500337869704aba59bb = $this->env->getExtension("native_profiler");
        $__internal_c4b86f8a9d4dbed63f7f7713b7f40253e958553743a28500337869704aba59bb->enter($__internal_c4b86f8a9d4dbed63f7f7713b7f40253e958553743a28500337869704aba59bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c4b86f8a9d4dbed63f7f7713b7f40253e958553743a28500337869704aba59bb->leave($__internal_c4b86f8a9d4dbed63f7f7713b7f40253e958553743a28500337869704aba59bb_prof);

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
