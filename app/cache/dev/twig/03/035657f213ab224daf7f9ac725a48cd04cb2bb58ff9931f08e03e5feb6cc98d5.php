<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f2e2ced57133a147f98611fd68af1166cc99fbf53d2a23e9014f251af0a0cda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a82bf168ced9d5033ce085a402b17f869157204a76a9612a73787bfe1993739e = $this->env->getExtension("native_profiler");
        $__internal_a82bf168ced9d5033ce085a402b17f869157204a76a9612a73787bfe1993739e->enter($__internal_a82bf168ced9d5033ce085a402b17f869157204a76a9612a73787bfe1993739e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82bf168ced9d5033ce085a402b17f869157204a76a9612a73787bfe1993739e->leave($__internal_a82bf168ced9d5033ce085a402b17f869157204a76a9612a73787bfe1993739e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e016ff1ac939e3fa30a57e396914603dd4fe2c51b11d69edac017cc39d3239b = $this->env->getExtension("native_profiler");
        $__internal_3e016ff1ac939e3fa30a57e396914603dd4fe2c51b11d69edac017cc39d3239b->enter($__internal_3e016ff1ac939e3fa30a57e396914603dd4fe2c51b11d69edac017cc39d3239b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e016ff1ac939e3fa30a57e396914603dd4fe2c51b11d69edac017cc39d3239b->leave($__internal_3e016ff1ac939e3fa30a57e396914603dd4fe2c51b11d69edac017cc39d3239b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e40f572af84199d64113d91bb796d5e63aa333a0c01c0fda2efc4cf457db6cee = $this->env->getExtension("native_profiler");
        $__internal_e40f572af84199d64113d91bb796d5e63aa333a0c01c0fda2efc4cf457db6cee->enter($__internal_e40f572af84199d64113d91bb796d5e63aa333a0c01c0fda2efc4cf457db6cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e40f572af84199d64113d91bb796d5e63aa333a0c01c0fda2efc4cf457db6cee->leave($__internal_e40f572af84199d64113d91bb796d5e63aa333a0c01c0fda2efc4cf457db6cee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26666071034ac51a32cdf5d05ab2a4b8364afe5e517ce053b1dcb3e0a9a9bc88 = $this->env->getExtension("native_profiler");
        $__internal_26666071034ac51a32cdf5d05ab2a4b8364afe5e517ce053b1dcb3e0a9a9bc88->enter($__internal_26666071034ac51a32cdf5d05ab2a4b8364afe5e517ce053b1dcb3e0a9a9bc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26666071034ac51a32cdf5d05ab2a4b8364afe5e517ce053b1dcb3e0a9a9bc88->leave($__internal_26666071034ac51a32cdf5d05ab2a4b8364afe5e517ce053b1dcb3e0a9a9bc88_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
