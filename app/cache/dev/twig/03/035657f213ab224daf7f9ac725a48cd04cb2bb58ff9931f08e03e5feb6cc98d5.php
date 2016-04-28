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
        $__internal_cbf5ccd1e4e0b554c5c568629d05be172476faea6ab076ae9840307c27aea75b = $this->env->getExtension("native_profiler");
        $__internal_cbf5ccd1e4e0b554c5c568629d05be172476faea6ab076ae9840307c27aea75b->enter($__internal_cbf5ccd1e4e0b554c5c568629d05be172476faea6ab076ae9840307c27aea75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf5ccd1e4e0b554c5c568629d05be172476faea6ab076ae9840307c27aea75b->leave($__internal_cbf5ccd1e4e0b554c5c568629d05be172476faea6ab076ae9840307c27aea75b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e49fe1f7098e86870e7e3ab8bc89372e5f43e531c6d86560bbd9797a104d062d = $this->env->getExtension("native_profiler");
        $__internal_e49fe1f7098e86870e7e3ab8bc89372e5f43e531c6d86560bbd9797a104d062d->enter($__internal_e49fe1f7098e86870e7e3ab8bc89372e5f43e531c6d86560bbd9797a104d062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e49fe1f7098e86870e7e3ab8bc89372e5f43e531c6d86560bbd9797a104d062d->leave($__internal_e49fe1f7098e86870e7e3ab8bc89372e5f43e531c6d86560bbd9797a104d062d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f82de91c649de3aea96c52212ce63e65095f38a45e7f12cdbc4799a0fd8b9ec0 = $this->env->getExtension("native_profiler");
        $__internal_f82de91c649de3aea96c52212ce63e65095f38a45e7f12cdbc4799a0fd8b9ec0->enter($__internal_f82de91c649de3aea96c52212ce63e65095f38a45e7f12cdbc4799a0fd8b9ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f82de91c649de3aea96c52212ce63e65095f38a45e7f12cdbc4799a0fd8b9ec0->leave($__internal_f82de91c649de3aea96c52212ce63e65095f38a45e7f12cdbc4799a0fd8b9ec0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db303863b6033ef6c15f21c0d7861a87b9e4b4e2523e4c0a120119dfb27ced9d = $this->env->getExtension("native_profiler");
        $__internal_db303863b6033ef6c15f21c0d7861a87b9e4b4e2523e4c0a120119dfb27ced9d->enter($__internal_db303863b6033ef6c15f21c0d7861a87b9e4b4e2523e4c0a120119dfb27ced9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db303863b6033ef6c15f21c0d7861a87b9e4b4e2523e4c0a120119dfb27ced9d->leave($__internal_db303863b6033ef6c15f21c0d7861a87b9e4b4e2523e4c0a120119dfb27ced9d_prof);

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
