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
        $__internal_0a2836032a291dac06f980dcfd23e018b71a91c58eeb0ac85a318891b6e774ad = $this->env->getExtension("native_profiler");
        $__internal_0a2836032a291dac06f980dcfd23e018b71a91c58eeb0ac85a318891b6e774ad->enter($__internal_0a2836032a291dac06f980dcfd23e018b71a91c58eeb0ac85a318891b6e774ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0a2836032a291dac06f980dcfd23e018b71a91c58eeb0ac85a318891b6e774ad->leave($__internal_0a2836032a291dac06f980dcfd23e018b71a91c58eeb0ac85a318891b6e774ad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fbadc9f9483a4640742901f1ac66599c6a2507e01cd9181f0b521936927b0db = $this->env->getExtension("native_profiler");
        $__internal_8fbadc9f9483a4640742901f1ac66599c6a2507e01cd9181f0b521936927b0db->enter($__internal_8fbadc9f9483a4640742901f1ac66599c6a2507e01cd9181f0b521936927b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8fbadc9f9483a4640742901f1ac66599c6a2507e01cd9181f0b521936927b0db->leave($__internal_8fbadc9f9483a4640742901f1ac66599c6a2507e01cd9181f0b521936927b0db_prof);

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
