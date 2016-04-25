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
        $__internal_31c2a9fc7380d015a2ea031964b5bfc5fe9e017b916c7d9d50e73ab75f65840e = $this->env->getExtension("native_profiler");
        $__internal_31c2a9fc7380d015a2ea031964b5bfc5fe9e017b916c7d9d50e73ab75f65840e->enter($__internal_31c2a9fc7380d015a2ea031964b5bfc5fe9e017b916c7d9d50e73ab75f65840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c2a9fc7380d015a2ea031964b5bfc5fe9e017b916c7d9d50e73ab75f65840e->leave($__internal_31c2a9fc7380d015a2ea031964b5bfc5fe9e017b916c7d9d50e73ab75f65840e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0f3fda14d6f2a9bda76009908ea4f4dd503cbe2625a66950d5538323da851d9 = $this->env->getExtension("native_profiler");
        $__internal_f0f3fda14d6f2a9bda76009908ea4f4dd503cbe2625a66950d5538323da851d9->enter($__internal_f0f3fda14d6f2a9bda76009908ea4f4dd503cbe2625a66950d5538323da851d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f0f3fda14d6f2a9bda76009908ea4f4dd503cbe2625a66950d5538323da851d9->leave($__internal_f0f3fda14d6f2a9bda76009908ea4f4dd503cbe2625a66950d5538323da851d9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8390f7ca6cc0a3299b0de10c240615541adb4d2ab8816e8110b5843d6458ff23 = $this->env->getExtension("native_profiler");
        $__internal_8390f7ca6cc0a3299b0de10c240615541adb4d2ab8816e8110b5843d6458ff23->enter($__internal_8390f7ca6cc0a3299b0de10c240615541adb4d2ab8816e8110b5843d6458ff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8390f7ca6cc0a3299b0de10c240615541adb4d2ab8816e8110b5843d6458ff23->leave($__internal_8390f7ca6cc0a3299b0de10c240615541adb4d2ab8816e8110b5843d6458ff23_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ccbe4a77375a79662f8a3d55bc840d6ebd36720fdc51ec391dbebc04666df3e = $this->env->getExtension("native_profiler");
        $__internal_3ccbe4a77375a79662f8a3d55bc840d6ebd36720fdc51ec391dbebc04666df3e->enter($__internal_3ccbe4a77375a79662f8a3d55bc840d6ebd36720fdc51ec391dbebc04666df3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ccbe4a77375a79662f8a3d55bc840d6ebd36720fdc51ec391dbebc04666df3e->leave($__internal_3ccbe4a77375a79662f8a3d55bc840d6ebd36720fdc51ec391dbebc04666df3e_prof);

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
