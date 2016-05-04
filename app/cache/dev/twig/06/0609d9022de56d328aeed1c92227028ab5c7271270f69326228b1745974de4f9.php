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
        $__internal_0af3db3e6ed60b6320dcff2f5cb6318125dba381580b765d333b77319929fd93 = $this->env->getExtension("native_profiler");
        $__internal_0af3db3e6ed60b6320dcff2f5cb6318125dba381580b765d333b77319929fd93->enter($__internal_0af3db3e6ed60b6320dcff2f5cb6318125dba381580b765d333b77319929fd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0af3db3e6ed60b6320dcff2f5cb6318125dba381580b765d333b77319929fd93->leave($__internal_0af3db3e6ed60b6320dcff2f5cb6318125dba381580b765d333b77319929fd93_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_155a640ed8a95947d1724130a7e524eec439b0e98586b9a9845101e9f24fdca0 = $this->env->getExtension("native_profiler");
        $__internal_155a640ed8a95947d1724130a7e524eec439b0e98586b9a9845101e9f24fdca0->enter($__internal_155a640ed8a95947d1724130a7e524eec439b0e98586b9a9845101e9f24fdca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_155a640ed8a95947d1724130a7e524eec439b0e98586b9a9845101e9f24fdca0->leave($__internal_155a640ed8a95947d1724130a7e524eec439b0e98586b9a9845101e9f24fdca0_prof);

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
