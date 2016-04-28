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
        $__internal_f7a5a1b5d5be5dfb23343f12d19796be45b48af1e1b54ffcc10fe488d860d43e = $this->env->getExtension("native_profiler");
        $__internal_f7a5a1b5d5be5dfb23343f12d19796be45b48af1e1b54ffcc10fe488d860d43e->enter($__internal_f7a5a1b5d5be5dfb23343f12d19796be45b48af1e1b54ffcc10fe488d860d43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7a5a1b5d5be5dfb23343f12d19796be45b48af1e1b54ffcc10fe488d860d43e->leave($__internal_f7a5a1b5d5be5dfb23343f12d19796be45b48af1e1b54ffcc10fe488d860d43e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c79d426223eb661c0baa2f62ec1e155ba538447ddac948debcf60e6f725f0ccf = $this->env->getExtension("native_profiler");
        $__internal_c79d426223eb661c0baa2f62ec1e155ba538447ddac948debcf60e6f725f0ccf->enter($__internal_c79d426223eb661c0baa2f62ec1e155ba538447ddac948debcf60e6f725f0ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c79d426223eb661c0baa2f62ec1e155ba538447ddac948debcf60e6f725f0ccf->leave($__internal_c79d426223eb661c0baa2f62ec1e155ba538447ddac948debcf60e6f725f0ccf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a79aa76e5027f76b5c62eea3a698adf33b95d669ec021e7857dd7087800145da = $this->env->getExtension("native_profiler");
        $__internal_a79aa76e5027f76b5c62eea3a698adf33b95d669ec021e7857dd7087800145da->enter($__internal_a79aa76e5027f76b5c62eea3a698adf33b95d669ec021e7857dd7087800145da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a79aa76e5027f76b5c62eea3a698adf33b95d669ec021e7857dd7087800145da->leave($__internal_a79aa76e5027f76b5c62eea3a698adf33b95d669ec021e7857dd7087800145da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c08904699307b01d41df6fe30c7d1bdfc123b31867efcf22c0d22566018f233 = $this->env->getExtension("native_profiler");
        $__internal_2c08904699307b01d41df6fe30c7d1bdfc123b31867efcf22c0d22566018f233->enter($__internal_2c08904699307b01d41df6fe30c7d1bdfc123b31867efcf22c0d22566018f233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c08904699307b01d41df6fe30c7d1bdfc123b31867efcf22c0d22566018f233->leave($__internal_2c08904699307b01d41df6fe30c7d1bdfc123b31867efcf22c0d22566018f233_prof);

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
