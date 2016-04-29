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
        $__internal_0ace53ed14edb9d32e575633f91cbe8307fc22bcfc4aca819440330ab27ec8ac = $this->env->getExtension("native_profiler");
        $__internal_0ace53ed14edb9d32e575633f91cbe8307fc22bcfc4aca819440330ab27ec8ac->enter($__internal_0ace53ed14edb9d32e575633f91cbe8307fc22bcfc4aca819440330ab27ec8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0ace53ed14edb9d32e575633f91cbe8307fc22bcfc4aca819440330ab27ec8ac->leave($__internal_0ace53ed14edb9d32e575633f91cbe8307fc22bcfc4aca819440330ab27ec8ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_16d7baee69e1fb1fabf51981611ea3b0b577ad855f5206bdb066c2d5ecbf61c1 = $this->env->getExtension("native_profiler");
        $__internal_16d7baee69e1fb1fabf51981611ea3b0b577ad855f5206bdb066c2d5ecbf61c1->enter($__internal_16d7baee69e1fb1fabf51981611ea3b0b577ad855f5206bdb066c2d5ecbf61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_16d7baee69e1fb1fabf51981611ea3b0b577ad855f5206bdb066c2d5ecbf61c1->leave($__internal_16d7baee69e1fb1fabf51981611ea3b0b577ad855f5206bdb066c2d5ecbf61c1_prof);

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
