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
        $__internal_aa624337b5b17089e20379886911d94f8a43f328723b64ce501108c9e28474ca = $this->env->getExtension("native_profiler");
        $__internal_aa624337b5b17089e20379886911d94f8a43f328723b64ce501108c9e28474ca->enter($__internal_aa624337b5b17089e20379886911d94f8a43f328723b64ce501108c9e28474ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aa624337b5b17089e20379886911d94f8a43f328723b64ce501108c9e28474ca->leave($__internal_aa624337b5b17089e20379886911d94f8a43f328723b64ce501108c9e28474ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c4c962f7569d408f4892bc07c23f4b493e960e029c0b7af63e1ba12f5cceaa2 = $this->env->getExtension("native_profiler");
        $__internal_9c4c962f7569d408f4892bc07c23f4b493e960e029c0b7af63e1ba12f5cceaa2->enter($__internal_9c4c962f7569d408f4892bc07c23f4b493e960e029c0b7af63e1ba12f5cceaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c4c962f7569d408f4892bc07c23f4b493e960e029c0b7af63e1ba12f5cceaa2->leave($__internal_9c4c962f7569d408f4892bc07c23f4b493e960e029c0b7af63e1ba12f5cceaa2_prof);

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
