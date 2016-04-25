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
        $__internal_0aae941202995402badef000e2e538bedd87f7df6d9b968fc299712e85c39af8 = $this->env->getExtension("native_profiler");
        $__internal_0aae941202995402badef000e2e538bedd87f7df6d9b968fc299712e85c39af8->enter($__internal_0aae941202995402badef000e2e538bedd87f7df6d9b968fc299712e85c39af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aae941202995402badef000e2e538bedd87f7df6d9b968fc299712e85c39af8->leave($__internal_0aae941202995402badef000e2e538bedd87f7df6d9b968fc299712e85c39af8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c638f5cfc95fd84272b2dc987cd986f7376928797d57c0ad61057a82e9968fa = $this->env->getExtension("native_profiler");
        $__internal_8c638f5cfc95fd84272b2dc987cd986f7376928797d57c0ad61057a82e9968fa->enter($__internal_8c638f5cfc95fd84272b2dc987cd986f7376928797d57c0ad61057a82e9968fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c638f5cfc95fd84272b2dc987cd986f7376928797d57c0ad61057a82e9968fa->leave($__internal_8c638f5cfc95fd84272b2dc987cd986f7376928797d57c0ad61057a82e9968fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61329957af59f5de27dbad8dc9b076ede363d1a6d1fb681c4e5478da5056dec6 = $this->env->getExtension("native_profiler");
        $__internal_61329957af59f5de27dbad8dc9b076ede363d1a6d1fb681c4e5478da5056dec6->enter($__internal_61329957af59f5de27dbad8dc9b076ede363d1a6d1fb681c4e5478da5056dec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61329957af59f5de27dbad8dc9b076ede363d1a6d1fb681c4e5478da5056dec6->leave($__internal_61329957af59f5de27dbad8dc9b076ede363d1a6d1fb681c4e5478da5056dec6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb75b6abe3dd23824852a1f725babd5c5b5c7f273731e540a77cb7fb50da02a0 = $this->env->getExtension("native_profiler");
        $__internal_fb75b6abe3dd23824852a1f725babd5c5b5c7f273731e540a77cb7fb50da02a0->enter($__internal_fb75b6abe3dd23824852a1f725babd5c5b5c7f273731e540a77cb7fb50da02a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb75b6abe3dd23824852a1f725babd5c5b5c7f273731e540a77cb7fb50da02a0->leave($__internal_fb75b6abe3dd23824852a1f725babd5c5b5c7f273731e540a77cb7fb50da02a0_prof);

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
