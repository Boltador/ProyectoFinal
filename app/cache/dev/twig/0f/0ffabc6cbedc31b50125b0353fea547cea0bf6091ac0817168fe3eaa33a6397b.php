<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8dd88f369e1dd947b811e62b8708530c9130fc173136a5e09cb78babe7c79a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_7516da54f26a1593bcf2d96c3c1163b9a15278d57a3e3dd5d15d15dd2d11e700 = $this->env->getExtension("native_profiler");
        $__internal_7516da54f26a1593bcf2d96c3c1163b9a15278d57a3e3dd5d15d15dd2d11e700->enter($__internal_7516da54f26a1593bcf2d96c3c1163b9a15278d57a3e3dd5d15d15dd2d11e700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7516da54f26a1593bcf2d96c3c1163b9a15278d57a3e3dd5d15d15dd2d11e700->leave($__internal_7516da54f26a1593bcf2d96c3c1163b9a15278d57a3e3dd5d15d15dd2d11e700_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19450fadccdf4d86e73e2016ad02a6fa483ba8c578f527cf1daaa01eb84b4079 = $this->env->getExtension("native_profiler");
        $__internal_19450fadccdf4d86e73e2016ad02a6fa483ba8c578f527cf1daaa01eb84b4079->enter($__internal_19450fadccdf4d86e73e2016ad02a6fa483ba8c578f527cf1daaa01eb84b4079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_19450fadccdf4d86e73e2016ad02a6fa483ba8c578f527cf1daaa01eb84b4079->leave($__internal_19450fadccdf4d86e73e2016ad02a6fa483ba8c578f527cf1daaa01eb84b4079_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_154d9e4c49f87fdffeefe6d3d50d97e27ba0984107d11ed164abcfe3196a4f60 = $this->env->getExtension("native_profiler");
        $__internal_154d9e4c49f87fdffeefe6d3d50d97e27ba0984107d11ed164abcfe3196a4f60->enter($__internal_154d9e4c49f87fdffeefe6d3d50d97e27ba0984107d11ed164abcfe3196a4f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_154d9e4c49f87fdffeefe6d3d50d97e27ba0984107d11ed164abcfe3196a4f60->leave($__internal_154d9e4c49f87fdffeefe6d3d50d97e27ba0984107d11ed164abcfe3196a4f60_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aea48f6dbe27f791fabb2ade345c3427523b05d933bdfc31ac7500fbe9b66d2b = $this->env->getExtension("native_profiler");
        $__internal_aea48f6dbe27f791fabb2ade345c3427523b05d933bdfc31ac7500fbe9b66d2b->enter($__internal_aea48f6dbe27f791fabb2ade345c3427523b05d933bdfc31ac7500fbe9b66d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aea48f6dbe27f791fabb2ade345c3427523b05d933bdfc31ac7500fbe9b66d2b->leave($__internal_aea48f6dbe27f791fabb2ade345c3427523b05d933bdfc31ac7500fbe9b66d2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
