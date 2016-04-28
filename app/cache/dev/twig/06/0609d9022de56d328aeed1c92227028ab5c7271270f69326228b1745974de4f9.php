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
        $__internal_98d943759c9651d8dfe08ad2acff2dc711af78a13fb9e38ff3ac4b7bf586bdfc = $this->env->getExtension("native_profiler");
        $__internal_98d943759c9651d8dfe08ad2acff2dc711af78a13fb9e38ff3ac4b7bf586bdfc->enter($__internal_98d943759c9651d8dfe08ad2acff2dc711af78a13fb9e38ff3ac4b7bf586bdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_98d943759c9651d8dfe08ad2acff2dc711af78a13fb9e38ff3ac4b7bf586bdfc->leave($__internal_98d943759c9651d8dfe08ad2acff2dc711af78a13fb9e38ff3ac4b7bf586bdfc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a63d110dd2caad22ffd77bce8846361fb00a33c861987f9e7c282d0029f4a05d = $this->env->getExtension("native_profiler");
        $__internal_a63d110dd2caad22ffd77bce8846361fb00a33c861987f9e7c282d0029f4a05d->enter($__internal_a63d110dd2caad22ffd77bce8846361fb00a33c861987f9e7c282d0029f4a05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a63d110dd2caad22ffd77bce8846361fb00a33c861987f9e7c282d0029f4a05d->leave($__internal_a63d110dd2caad22ffd77bce8846361fb00a33c861987f9e7c282d0029f4a05d_prof);

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
