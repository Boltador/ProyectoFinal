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
        $__internal_c19e551b20aca51d2674bdc1a2b8a1c3ca7c4fca5469b4a8cc631b53b5a62b19 = $this->env->getExtension("native_profiler");
        $__internal_c19e551b20aca51d2674bdc1a2b8a1c3ca7c4fca5469b4a8cc631b53b5a62b19->enter($__internal_c19e551b20aca51d2674bdc1a2b8a1c3ca7c4fca5469b4a8cc631b53b5a62b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c19e551b20aca51d2674bdc1a2b8a1c3ca7c4fca5469b4a8cc631b53b5a62b19->leave($__internal_c19e551b20aca51d2674bdc1a2b8a1c3ca7c4fca5469b4a8cc631b53b5a62b19_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cae745d6dbf132c13d1b09c18f609e936fbf59bcd04030efa4df51cc920dccaf = $this->env->getExtension("native_profiler");
        $__internal_cae745d6dbf132c13d1b09c18f609e936fbf59bcd04030efa4df51cc920dccaf->enter($__internal_cae745d6dbf132c13d1b09c18f609e936fbf59bcd04030efa4df51cc920dccaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cae745d6dbf132c13d1b09c18f609e936fbf59bcd04030efa4df51cc920dccaf->leave($__internal_cae745d6dbf132c13d1b09c18f609e936fbf59bcd04030efa4df51cc920dccaf_prof);

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
