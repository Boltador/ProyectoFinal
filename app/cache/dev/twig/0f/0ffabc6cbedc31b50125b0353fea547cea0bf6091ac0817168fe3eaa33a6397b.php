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
        $__internal_1379571fb9bbb77e4bbed846cc5252c7175a196c60c46f10e4d4aea347cb24b4 = $this->env->getExtension("native_profiler");
        $__internal_1379571fb9bbb77e4bbed846cc5252c7175a196c60c46f10e4d4aea347cb24b4->enter($__internal_1379571fb9bbb77e4bbed846cc5252c7175a196c60c46f10e4d4aea347cb24b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1379571fb9bbb77e4bbed846cc5252c7175a196c60c46f10e4d4aea347cb24b4->leave($__internal_1379571fb9bbb77e4bbed846cc5252c7175a196c60c46f10e4d4aea347cb24b4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b749de3cc096027c07ceac4cbcfbe022f2dc86288f3eb36e10817acab569a2b = $this->env->getExtension("native_profiler");
        $__internal_3b749de3cc096027c07ceac4cbcfbe022f2dc86288f3eb36e10817acab569a2b->enter($__internal_3b749de3cc096027c07ceac4cbcfbe022f2dc86288f3eb36e10817acab569a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b749de3cc096027c07ceac4cbcfbe022f2dc86288f3eb36e10817acab569a2b->leave($__internal_3b749de3cc096027c07ceac4cbcfbe022f2dc86288f3eb36e10817acab569a2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4f62cecac9375acfee51c64e95d323bbeb7a7e50dc56e4a6ca1e3ce830697bf = $this->env->getExtension("native_profiler");
        $__internal_f4f62cecac9375acfee51c64e95d323bbeb7a7e50dc56e4a6ca1e3ce830697bf->enter($__internal_f4f62cecac9375acfee51c64e95d323bbeb7a7e50dc56e4a6ca1e3ce830697bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4f62cecac9375acfee51c64e95d323bbeb7a7e50dc56e4a6ca1e3ce830697bf->leave($__internal_f4f62cecac9375acfee51c64e95d323bbeb7a7e50dc56e4a6ca1e3ce830697bf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dad38699c5ef1bded785c2f580cfd58bb62069c9a21af07a7ec3a6753e4c53a4 = $this->env->getExtension("native_profiler");
        $__internal_dad38699c5ef1bded785c2f580cfd58bb62069c9a21af07a7ec3a6753e4c53a4->enter($__internal_dad38699c5ef1bded785c2f580cfd58bb62069c9a21af07a7ec3a6753e4c53a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dad38699c5ef1bded785c2f580cfd58bb62069c9a21af07a7ec3a6753e4c53a4->leave($__internal_dad38699c5ef1bded785c2f580cfd58bb62069c9a21af07a7ec3a6753e4c53a4_prof);

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
