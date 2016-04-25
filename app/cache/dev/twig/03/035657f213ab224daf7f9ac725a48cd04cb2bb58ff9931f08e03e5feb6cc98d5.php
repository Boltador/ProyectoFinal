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
        $__internal_550d2f925688baca0031e08582ee557470d461b6632b8639534dde416eb398fb = $this->env->getExtension("native_profiler");
        $__internal_550d2f925688baca0031e08582ee557470d461b6632b8639534dde416eb398fb->enter($__internal_550d2f925688baca0031e08582ee557470d461b6632b8639534dde416eb398fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550d2f925688baca0031e08582ee557470d461b6632b8639534dde416eb398fb->leave($__internal_550d2f925688baca0031e08582ee557470d461b6632b8639534dde416eb398fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6e26f47cdf3ab514da74aa789c080f2bfffa34929e9830b3cab8ec7e1bd3b85 = $this->env->getExtension("native_profiler");
        $__internal_c6e26f47cdf3ab514da74aa789c080f2bfffa34929e9830b3cab8ec7e1bd3b85->enter($__internal_c6e26f47cdf3ab514da74aa789c080f2bfffa34929e9830b3cab8ec7e1bd3b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6e26f47cdf3ab514da74aa789c080f2bfffa34929e9830b3cab8ec7e1bd3b85->leave($__internal_c6e26f47cdf3ab514da74aa789c080f2bfffa34929e9830b3cab8ec7e1bd3b85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6a9b06b849090b86fcbb8cf1d439d888f71228407f6b412bd96c322d02ec6ec = $this->env->getExtension("native_profiler");
        $__internal_b6a9b06b849090b86fcbb8cf1d439d888f71228407f6b412bd96c322d02ec6ec->enter($__internal_b6a9b06b849090b86fcbb8cf1d439d888f71228407f6b412bd96c322d02ec6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6a9b06b849090b86fcbb8cf1d439d888f71228407f6b412bd96c322d02ec6ec->leave($__internal_b6a9b06b849090b86fcbb8cf1d439d888f71228407f6b412bd96c322d02ec6ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4f2ecf38f9bf4a1250499a21faf31a0dd1f30099ca8f04062d417508443c120 = $this->env->getExtension("native_profiler");
        $__internal_e4f2ecf38f9bf4a1250499a21faf31a0dd1f30099ca8f04062d417508443c120->enter($__internal_e4f2ecf38f9bf4a1250499a21faf31a0dd1f30099ca8f04062d417508443c120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4f2ecf38f9bf4a1250499a21faf31a0dd1f30099ca8f04062d417508443c120->leave($__internal_e4f2ecf38f9bf4a1250499a21faf31a0dd1f30099ca8f04062d417508443c120_prof);

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
