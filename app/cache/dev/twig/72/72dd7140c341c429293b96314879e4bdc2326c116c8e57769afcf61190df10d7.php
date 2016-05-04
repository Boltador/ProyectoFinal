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
        $__internal_44698568c6df54eb84970bb5e5b5b49eb299b2fab1163a19dadc9222ea189777 = $this->env->getExtension("native_profiler");
        $__internal_44698568c6df54eb84970bb5e5b5b49eb299b2fab1163a19dadc9222ea189777->enter($__internal_44698568c6df54eb84970bb5e5b5b49eb299b2fab1163a19dadc9222ea189777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44698568c6df54eb84970bb5e5b5b49eb299b2fab1163a19dadc9222ea189777->leave($__internal_44698568c6df54eb84970bb5e5b5b49eb299b2fab1163a19dadc9222ea189777_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a3512cfe3169234df8f47f8cca2ccfd82aaafccc882939b89e1277636822c07 = $this->env->getExtension("native_profiler");
        $__internal_8a3512cfe3169234df8f47f8cca2ccfd82aaafccc882939b89e1277636822c07->enter($__internal_8a3512cfe3169234df8f47f8cca2ccfd82aaafccc882939b89e1277636822c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8a3512cfe3169234df8f47f8cca2ccfd82aaafccc882939b89e1277636822c07->leave($__internal_8a3512cfe3169234df8f47f8cca2ccfd82aaafccc882939b89e1277636822c07_prof);

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
