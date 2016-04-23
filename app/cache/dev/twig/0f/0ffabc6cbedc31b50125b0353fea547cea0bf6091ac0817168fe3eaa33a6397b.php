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
        $__internal_8240f914e91b23156ebf5a275bf803ddee4351143b7ddfcc5004720d5543e626 = $this->env->getExtension("native_profiler");
        $__internal_8240f914e91b23156ebf5a275bf803ddee4351143b7ddfcc5004720d5543e626->enter($__internal_8240f914e91b23156ebf5a275bf803ddee4351143b7ddfcc5004720d5543e626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8240f914e91b23156ebf5a275bf803ddee4351143b7ddfcc5004720d5543e626->leave($__internal_8240f914e91b23156ebf5a275bf803ddee4351143b7ddfcc5004720d5543e626_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_77962b45737a58c2331feae3dcaae64c49063f28d1b3c6ca8cdc74bec3238ec2 = $this->env->getExtension("native_profiler");
        $__internal_77962b45737a58c2331feae3dcaae64c49063f28d1b3c6ca8cdc74bec3238ec2->enter($__internal_77962b45737a58c2331feae3dcaae64c49063f28d1b3c6ca8cdc74bec3238ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_77962b45737a58c2331feae3dcaae64c49063f28d1b3c6ca8cdc74bec3238ec2->leave($__internal_77962b45737a58c2331feae3dcaae64c49063f28d1b3c6ca8cdc74bec3238ec2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cc458c38a8a1ab5a4a4a09f0f5cdf7ac348514552925ef2c7988e50debddf17 = $this->env->getExtension("native_profiler");
        $__internal_6cc458c38a8a1ab5a4a4a09f0f5cdf7ac348514552925ef2c7988e50debddf17->enter($__internal_6cc458c38a8a1ab5a4a4a09f0f5cdf7ac348514552925ef2c7988e50debddf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cc458c38a8a1ab5a4a4a09f0f5cdf7ac348514552925ef2c7988e50debddf17->leave($__internal_6cc458c38a8a1ab5a4a4a09f0f5cdf7ac348514552925ef2c7988e50debddf17_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9787a91065813c2f484758e28407dc4ac4896102d4617208e32dab91ae83787c = $this->env->getExtension("native_profiler");
        $__internal_9787a91065813c2f484758e28407dc4ac4896102d4617208e32dab91ae83787c->enter($__internal_9787a91065813c2f484758e28407dc4ac4896102d4617208e32dab91ae83787c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9787a91065813c2f484758e28407dc4ac4896102d4617208e32dab91ae83787c->leave($__internal_9787a91065813c2f484758e28407dc4ac4896102d4617208e32dab91ae83787c_prof);

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
