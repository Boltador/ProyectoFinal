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
        $__internal_3ea6b0ae17cb4c6f7ff50b21956da22d3e6b6f3106c6446c7d48ca5371091e53 = $this->env->getExtension("native_profiler");
        $__internal_3ea6b0ae17cb4c6f7ff50b21956da22d3e6b6f3106c6446c7d48ca5371091e53->enter($__internal_3ea6b0ae17cb4c6f7ff50b21956da22d3e6b6f3106c6446c7d48ca5371091e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3ea6b0ae17cb4c6f7ff50b21956da22d3e6b6f3106c6446c7d48ca5371091e53->leave($__internal_3ea6b0ae17cb4c6f7ff50b21956da22d3e6b6f3106c6446c7d48ca5371091e53_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0faaa1d20b72d77931141e08db84b8786dfee2cc0129316ba0458c52db86b532 = $this->env->getExtension("native_profiler");
        $__internal_0faaa1d20b72d77931141e08db84b8786dfee2cc0129316ba0458c52db86b532->enter($__internal_0faaa1d20b72d77931141e08db84b8786dfee2cc0129316ba0458c52db86b532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0faaa1d20b72d77931141e08db84b8786dfee2cc0129316ba0458c52db86b532->leave($__internal_0faaa1d20b72d77931141e08db84b8786dfee2cc0129316ba0458c52db86b532_prof);

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
