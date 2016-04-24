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
        $__internal_b7b4f7bfde53976c2e6f956411ac77587375443392dff55dde528a6318c18227 = $this->env->getExtension("native_profiler");
        $__internal_b7b4f7bfde53976c2e6f956411ac77587375443392dff55dde528a6318c18227->enter($__internal_b7b4f7bfde53976c2e6f956411ac77587375443392dff55dde528a6318c18227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7b4f7bfde53976c2e6f956411ac77587375443392dff55dde528a6318c18227->leave($__internal_b7b4f7bfde53976c2e6f956411ac77587375443392dff55dde528a6318c18227_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc23fd2b1c57c1385a24d10371105f84af48bd41ce308641ded83ce6ce0aec66 = $this->env->getExtension("native_profiler");
        $__internal_dc23fd2b1c57c1385a24d10371105f84af48bd41ce308641ded83ce6ce0aec66->enter($__internal_dc23fd2b1c57c1385a24d10371105f84af48bd41ce308641ded83ce6ce0aec66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dc23fd2b1c57c1385a24d10371105f84af48bd41ce308641ded83ce6ce0aec66->leave($__internal_dc23fd2b1c57c1385a24d10371105f84af48bd41ce308641ded83ce6ce0aec66_prof);

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
