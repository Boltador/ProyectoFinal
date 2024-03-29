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
        $__internal_9f76a0d4ae0435f4d2d3f69d7eb72985b270415801963c60e4cd545c771045a9 = $this->env->getExtension("native_profiler");
        $__internal_9f76a0d4ae0435f4d2d3f69d7eb72985b270415801963c60e4cd545c771045a9->enter($__internal_9f76a0d4ae0435f4d2d3f69d7eb72985b270415801963c60e4cd545c771045a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f76a0d4ae0435f4d2d3f69d7eb72985b270415801963c60e4cd545c771045a9->leave($__internal_9f76a0d4ae0435f4d2d3f69d7eb72985b270415801963c60e4cd545c771045a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4152ada104d2329765047e95af8d3116f9b3902cab3ea57312a7dced9cb4dc29 = $this->env->getExtension("native_profiler");
        $__internal_4152ada104d2329765047e95af8d3116f9b3902cab3ea57312a7dced9cb4dc29->enter($__internal_4152ada104d2329765047e95af8d3116f9b3902cab3ea57312a7dced9cb4dc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4152ada104d2329765047e95af8d3116f9b3902cab3ea57312a7dced9cb4dc29->leave($__internal_4152ada104d2329765047e95af8d3116f9b3902cab3ea57312a7dced9cb4dc29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3e67cfc281ce9d5eb146cf9fc57ef96971e708fc72e3f5e1edc9ed225ec356d = $this->env->getExtension("native_profiler");
        $__internal_c3e67cfc281ce9d5eb146cf9fc57ef96971e708fc72e3f5e1edc9ed225ec356d->enter($__internal_c3e67cfc281ce9d5eb146cf9fc57ef96971e708fc72e3f5e1edc9ed225ec356d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3e67cfc281ce9d5eb146cf9fc57ef96971e708fc72e3f5e1edc9ed225ec356d->leave($__internal_c3e67cfc281ce9d5eb146cf9fc57ef96971e708fc72e3f5e1edc9ed225ec356d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4377c1bc25eb6b28272fb11a3fb7dd5dc4ab53083a6083372fa7444a553b901d = $this->env->getExtension("native_profiler");
        $__internal_4377c1bc25eb6b28272fb11a3fb7dd5dc4ab53083a6083372fa7444a553b901d->enter($__internal_4377c1bc25eb6b28272fb11a3fb7dd5dc4ab53083a6083372fa7444a553b901d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4377c1bc25eb6b28272fb11a3fb7dd5dc4ab53083a6083372fa7444a553b901d->leave($__internal_4377c1bc25eb6b28272fb11a3fb7dd5dc4ab53083a6083372fa7444a553b901d_prof);

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
