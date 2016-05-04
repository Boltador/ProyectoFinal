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
        $__internal_d62039925d308b58efb8bbf7bc774371b7146d318a7cdfa790d345d23d59d9c9 = $this->env->getExtension("native_profiler");
        $__internal_d62039925d308b58efb8bbf7bc774371b7146d318a7cdfa790d345d23d59d9c9->enter($__internal_d62039925d308b58efb8bbf7bc774371b7146d318a7cdfa790d345d23d59d9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62039925d308b58efb8bbf7bc774371b7146d318a7cdfa790d345d23d59d9c9->leave($__internal_d62039925d308b58efb8bbf7bc774371b7146d318a7cdfa790d345d23d59d9c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2379aa63bc27771831d00dd48623f25a79d4e3a4acea1515b27de12c4dc502ca = $this->env->getExtension("native_profiler");
        $__internal_2379aa63bc27771831d00dd48623f25a79d4e3a4acea1515b27de12c4dc502ca->enter($__internal_2379aa63bc27771831d00dd48623f25a79d4e3a4acea1515b27de12c4dc502ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2379aa63bc27771831d00dd48623f25a79d4e3a4acea1515b27de12c4dc502ca->leave($__internal_2379aa63bc27771831d00dd48623f25a79d4e3a4acea1515b27de12c4dc502ca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d552efad6bab441f0b3fe1686055b228d5bb50ab4df48cacc67320716faf5039 = $this->env->getExtension("native_profiler");
        $__internal_d552efad6bab441f0b3fe1686055b228d5bb50ab4df48cacc67320716faf5039->enter($__internal_d552efad6bab441f0b3fe1686055b228d5bb50ab4df48cacc67320716faf5039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d552efad6bab441f0b3fe1686055b228d5bb50ab4df48cacc67320716faf5039->leave($__internal_d552efad6bab441f0b3fe1686055b228d5bb50ab4df48cacc67320716faf5039_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5ed0c63548c01886ef80ac70d04763ff1f99d37c64e39ff0ae6ebf549a2ad61 = $this->env->getExtension("native_profiler");
        $__internal_a5ed0c63548c01886ef80ac70d04763ff1f99d37c64e39ff0ae6ebf549a2ad61->enter($__internal_a5ed0c63548c01886ef80ac70d04763ff1f99d37c64e39ff0ae6ebf549a2ad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a5ed0c63548c01886ef80ac70d04763ff1f99d37c64e39ff0ae6ebf549a2ad61->leave($__internal_a5ed0c63548c01886ef80ac70d04763ff1f99d37c64e39ff0ae6ebf549a2ad61_prof);

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
