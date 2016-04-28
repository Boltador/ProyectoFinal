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
        $__internal_f55d5ac727c77312b500263b95facd59be58cf2ee7abca85771bdf2f5de17e4a = $this->env->getExtension("native_profiler");
        $__internal_f55d5ac727c77312b500263b95facd59be58cf2ee7abca85771bdf2f5de17e4a->enter($__internal_f55d5ac727c77312b500263b95facd59be58cf2ee7abca85771bdf2f5de17e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f55d5ac727c77312b500263b95facd59be58cf2ee7abca85771bdf2f5de17e4a->leave($__internal_f55d5ac727c77312b500263b95facd59be58cf2ee7abca85771bdf2f5de17e4a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_51756ec35495253563cc18da13c6ba2fc466deff279d1de6265ee2a7bb21e160 = $this->env->getExtension("native_profiler");
        $__internal_51756ec35495253563cc18da13c6ba2fc466deff279d1de6265ee2a7bb21e160->enter($__internal_51756ec35495253563cc18da13c6ba2fc466deff279d1de6265ee2a7bb21e160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_51756ec35495253563cc18da13c6ba2fc466deff279d1de6265ee2a7bb21e160->leave($__internal_51756ec35495253563cc18da13c6ba2fc466deff279d1de6265ee2a7bb21e160_prof);

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
