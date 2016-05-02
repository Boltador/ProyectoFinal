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
        $__internal_02104ab0bafe049ed34df82f86263c04c12aea85cfbe2b00de9d0030168575b5 = $this->env->getExtension("native_profiler");
        $__internal_02104ab0bafe049ed34df82f86263c04c12aea85cfbe2b00de9d0030168575b5->enter($__internal_02104ab0bafe049ed34df82f86263c04c12aea85cfbe2b00de9d0030168575b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_02104ab0bafe049ed34df82f86263c04c12aea85cfbe2b00de9d0030168575b5->leave($__internal_02104ab0bafe049ed34df82f86263c04c12aea85cfbe2b00de9d0030168575b5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3e9cc9fd9cecf03aaf5b8a8f86fc5fef73edb48abfd0efdd3a33fbf6566c32e = $this->env->getExtension("native_profiler");
        $__internal_c3e9cc9fd9cecf03aaf5b8a8f86fc5fef73edb48abfd0efdd3a33fbf6566c32e->enter($__internal_c3e9cc9fd9cecf03aaf5b8a8f86fc5fef73edb48abfd0efdd3a33fbf6566c32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c3e9cc9fd9cecf03aaf5b8a8f86fc5fef73edb48abfd0efdd3a33fbf6566c32e->leave($__internal_c3e9cc9fd9cecf03aaf5b8a8f86fc5fef73edb48abfd0efdd3a33fbf6566c32e_prof);

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
