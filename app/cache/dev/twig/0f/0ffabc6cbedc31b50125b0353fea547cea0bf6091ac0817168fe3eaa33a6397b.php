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
        $__internal_72ebb1c630db0fefdf70ab697c4967a5e95b79a5518b459301e4c8dc7696739f = $this->env->getExtension("native_profiler");
        $__internal_72ebb1c630db0fefdf70ab697c4967a5e95b79a5518b459301e4c8dc7696739f->enter($__internal_72ebb1c630db0fefdf70ab697c4967a5e95b79a5518b459301e4c8dc7696739f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ebb1c630db0fefdf70ab697c4967a5e95b79a5518b459301e4c8dc7696739f->leave($__internal_72ebb1c630db0fefdf70ab697c4967a5e95b79a5518b459301e4c8dc7696739f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c5d575750d4fba2dc38978b3176855e68e0ba6a37e70d2028ebcced7ad23f96 = $this->env->getExtension("native_profiler");
        $__internal_8c5d575750d4fba2dc38978b3176855e68e0ba6a37e70d2028ebcced7ad23f96->enter($__internal_8c5d575750d4fba2dc38978b3176855e68e0ba6a37e70d2028ebcced7ad23f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c5d575750d4fba2dc38978b3176855e68e0ba6a37e70d2028ebcced7ad23f96->leave($__internal_8c5d575750d4fba2dc38978b3176855e68e0ba6a37e70d2028ebcced7ad23f96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_80fcbdd2fab0b43fecd37396122b617f70d1a76a65e1d0892bd6aff3c0994fe3 = $this->env->getExtension("native_profiler");
        $__internal_80fcbdd2fab0b43fecd37396122b617f70d1a76a65e1d0892bd6aff3c0994fe3->enter($__internal_80fcbdd2fab0b43fecd37396122b617f70d1a76a65e1d0892bd6aff3c0994fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80fcbdd2fab0b43fecd37396122b617f70d1a76a65e1d0892bd6aff3c0994fe3->leave($__internal_80fcbdd2fab0b43fecd37396122b617f70d1a76a65e1d0892bd6aff3c0994fe3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3366b7583695e18cec11de2055796f65e0afacfd79fe626d89d3a3b7397ea28c = $this->env->getExtension("native_profiler");
        $__internal_3366b7583695e18cec11de2055796f65e0afacfd79fe626d89d3a3b7397ea28c->enter($__internal_3366b7583695e18cec11de2055796f65e0afacfd79fe626d89d3a3b7397ea28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3366b7583695e18cec11de2055796f65e0afacfd79fe626d89d3a3b7397ea28c->leave($__internal_3366b7583695e18cec11de2055796f65e0afacfd79fe626d89d3a3b7397ea28c_prof);

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
