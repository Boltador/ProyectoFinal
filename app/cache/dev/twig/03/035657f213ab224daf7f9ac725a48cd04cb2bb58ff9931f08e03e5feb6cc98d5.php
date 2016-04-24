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
        $__internal_f77552a7120f79ab113eab0786bd103609ac85bc62a6ac10be4f21a1c828b9d8 = $this->env->getExtension("native_profiler");
        $__internal_f77552a7120f79ab113eab0786bd103609ac85bc62a6ac10be4f21a1c828b9d8->enter($__internal_f77552a7120f79ab113eab0786bd103609ac85bc62a6ac10be4f21a1c828b9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77552a7120f79ab113eab0786bd103609ac85bc62a6ac10be4f21a1c828b9d8->leave($__internal_f77552a7120f79ab113eab0786bd103609ac85bc62a6ac10be4f21a1c828b9d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a42856b52fda300e5b6503ff89f338d5ab8a9b38ddc977bcfedccc34cdf6f11d = $this->env->getExtension("native_profiler");
        $__internal_a42856b52fda300e5b6503ff89f338d5ab8a9b38ddc977bcfedccc34cdf6f11d->enter($__internal_a42856b52fda300e5b6503ff89f338d5ab8a9b38ddc977bcfedccc34cdf6f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a42856b52fda300e5b6503ff89f338d5ab8a9b38ddc977bcfedccc34cdf6f11d->leave($__internal_a42856b52fda300e5b6503ff89f338d5ab8a9b38ddc977bcfedccc34cdf6f11d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_351377e60f682b550e31eec35c73ae67e7671fec1c2d27a8abb7d57e1da8c843 = $this->env->getExtension("native_profiler");
        $__internal_351377e60f682b550e31eec35c73ae67e7671fec1c2d27a8abb7d57e1da8c843->enter($__internal_351377e60f682b550e31eec35c73ae67e7671fec1c2d27a8abb7d57e1da8c843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_351377e60f682b550e31eec35c73ae67e7671fec1c2d27a8abb7d57e1da8c843->leave($__internal_351377e60f682b550e31eec35c73ae67e7671fec1c2d27a8abb7d57e1da8c843_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69ce12c57e769675d64395440953ffd4208545a14f804344f2887bdca302a0dc = $this->env->getExtension("native_profiler");
        $__internal_69ce12c57e769675d64395440953ffd4208545a14f804344f2887bdca302a0dc->enter($__internal_69ce12c57e769675d64395440953ffd4208545a14f804344f2887bdca302a0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69ce12c57e769675d64395440953ffd4208545a14f804344f2887bdca302a0dc->leave($__internal_69ce12c57e769675d64395440953ffd4208545a14f804344f2887bdca302a0dc_prof);

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
