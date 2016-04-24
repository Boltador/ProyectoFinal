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
        $__internal_ce44fc6777218355199f89da7a3c0b8f5b76169a8f41e0e184adeaf83663e6eb = $this->env->getExtension("native_profiler");
        $__internal_ce44fc6777218355199f89da7a3c0b8f5b76169a8f41e0e184adeaf83663e6eb->enter($__internal_ce44fc6777218355199f89da7a3c0b8f5b76169a8f41e0e184adeaf83663e6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ce44fc6777218355199f89da7a3c0b8f5b76169a8f41e0e184adeaf83663e6eb->leave($__internal_ce44fc6777218355199f89da7a3c0b8f5b76169a8f41e0e184adeaf83663e6eb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_185601c5f7f924f250a0e1b82864d6d653aa867904a9796dfe9a3b8ef053f13f = $this->env->getExtension("native_profiler");
        $__internal_185601c5f7f924f250a0e1b82864d6d653aa867904a9796dfe9a3b8ef053f13f->enter($__internal_185601c5f7f924f250a0e1b82864d6d653aa867904a9796dfe9a3b8ef053f13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_185601c5f7f924f250a0e1b82864d6d653aa867904a9796dfe9a3b8ef053f13f->leave($__internal_185601c5f7f924f250a0e1b82864d6d653aa867904a9796dfe9a3b8ef053f13f_prof);

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
