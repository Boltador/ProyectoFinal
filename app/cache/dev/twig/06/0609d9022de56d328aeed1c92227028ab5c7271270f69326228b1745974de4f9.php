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
        $__internal_c94610514f20548c1f44550265f14b2bdec315b994b36cb2052af94d18821cd1 = $this->env->getExtension("native_profiler");
        $__internal_c94610514f20548c1f44550265f14b2bdec315b994b36cb2052af94d18821cd1->enter($__internal_c94610514f20548c1f44550265f14b2bdec315b994b36cb2052af94d18821cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c94610514f20548c1f44550265f14b2bdec315b994b36cb2052af94d18821cd1->leave($__internal_c94610514f20548c1f44550265f14b2bdec315b994b36cb2052af94d18821cd1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0af10c25ced355ab286592ace468a6f9f62fec492b598fd5ea3bee8d2be17b28 = $this->env->getExtension("native_profiler");
        $__internal_0af10c25ced355ab286592ace468a6f9f62fec492b598fd5ea3bee8d2be17b28->enter($__internal_0af10c25ced355ab286592ace468a6f9f62fec492b598fd5ea3bee8d2be17b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0af10c25ced355ab286592ace468a6f9f62fec492b598fd5ea3bee8d2be17b28->leave($__internal_0af10c25ced355ab286592ace468a6f9f62fec492b598fd5ea3bee8d2be17b28_prof);

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
