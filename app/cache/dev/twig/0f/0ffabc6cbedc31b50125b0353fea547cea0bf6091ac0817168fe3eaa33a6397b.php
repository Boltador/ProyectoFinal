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
        $__internal_c4449c4d70e0adb00e81d2cecc26ae9985d8704c4677db14dbe9c1613e0e1142 = $this->env->getExtension("native_profiler");
        $__internal_c4449c4d70e0adb00e81d2cecc26ae9985d8704c4677db14dbe9c1613e0e1142->enter($__internal_c4449c4d70e0adb00e81d2cecc26ae9985d8704c4677db14dbe9c1613e0e1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4449c4d70e0adb00e81d2cecc26ae9985d8704c4677db14dbe9c1613e0e1142->leave($__internal_c4449c4d70e0adb00e81d2cecc26ae9985d8704c4677db14dbe9c1613e0e1142_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5aee451c3057f00736700c8d92c677fa8caa20c100c604e6ab453db56a50423 = $this->env->getExtension("native_profiler");
        $__internal_b5aee451c3057f00736700c8d92c677fa8caa20c100c604e6ab453db56a50423->enter($__internal_b5aee451c3057f00736700c8d92c677fa8caa20c100c604e6ab453db56a50423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5aee451c3057f00736700c8d92c677fa8caa20c100c604e6ab453db56a50423->leave($__internal_b5aee451c3057f00736700c8d92c677fa8caa20c100c604e6ab453db56a50423_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecf9ca95ababdb216554fde94e2d2f79df411b2b3855439209c682e887708425 = $this->env->getExtension("native_profiler");
        $__internal_ecf9ca95ababdb216554fde94e2d2f79df411b2b3855439209c682e887708425->enter($__internal_ecf9ca95ababdb216554fde94e2d2f79df411b2b3855439209c682e887708425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ecf9ca95ababdb216554fde94e2d2f79df411b2b3855439209c682e887708425->leave($__internal_ecf9ca95ababdb216554fde94e2d2f79df411b2b3855439209c682e887708425_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f26242d34c804e02b186e2b78bf8755cc425f07c942372cc4ad5ac8cf7c9af2a = $this->env->getExtension("native_profiler");
        $__internal_f26242d34c804e02b186e2b78bf8755cc425f07c942372cc4ad5ac8cf7c9af2a->enter($__internal_f26242d34c804e02b186e2b78bf8755cc425f07c942372cc4ad5ac8cf7c9af2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f26242d34c804e02b186e2b78bf8755cc425f07c942372cc4ad5ac8cf7c9af2a->leave($__internal_f26242d34c804e02b186e2b78bf8755cc425f07c942372cc4ad5ac8cf7c9af2a_prof);

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
