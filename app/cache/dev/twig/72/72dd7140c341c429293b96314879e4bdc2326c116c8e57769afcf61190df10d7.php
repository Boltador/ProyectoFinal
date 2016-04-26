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
        $__internal_5430cfdc78b1bc8dd891c75b813e3cceeaa52b15dfa1d15728cbbc2048ac1770 = $this->env->getExtension("native_profiler");
        $__internal_5430cfdc78b1bc8dd891c75b813e3cceeaa52b15dfa1d15728cbbc2048ac1770->enter($__internal_5430cfdc78b1bc8dd891c75b813e3cceeaa52b15dfa1d15728cbbc2048ac1770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5430cfdc78b1bc8dd891c75b813e3cceeaa52b15dfa1d15728cbbc2048ac1770->leave($__internal_5430cfdc78b1bc8dd891c75b813e3cceeaa52b15dfa1d15728cbbc2048ac1770_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_184bb2de6a0712e7c4f9820d089a566baee3cc4a669f101f45d684af7ce5d67a = $this->env->getExtension("native_profiler");
        $__internal_184bb2de6a0712e7c4f9820d089a566baee3cc4a669f101f45d684af7ce5d67a->enter($__internal_184bb2de6a0712e7c4f9820d089a566baee3cc4a669f101f45d684af7ce5d67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_184bb2de6a0712e7c4f9820d089a566baee3cc4a669f101f45d684af7ce5d67a->leave($__internal_184bb2de6a0712e7c4f9820d089a566baee3cc4a669f101f45d684af7ce5d67a_prof);

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
