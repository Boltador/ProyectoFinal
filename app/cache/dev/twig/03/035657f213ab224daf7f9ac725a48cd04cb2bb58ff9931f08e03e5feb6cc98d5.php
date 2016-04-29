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
        $__internal_7c1418ac69e54d093e266f1bdf62f1e46e20e7194d54027de6be5b2c56f390f2 = $this->env->getExtension("native_profiler");
        $__internal_7c1418ac69e54d093e266f1bdf62f1e46e20e7194d54027de6be5b2c56f390f2->enter($__internal_7c1418ac69e54d093e266f1bdf62f1e46e20e7194d54027de6be5b2c56f390f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1418ac69e54d093e266f1bdf62f1e46e20e7194d54027de6be5b2c56f390f2->leave($__internal_7c1418ac69e54d093e266f1bdf62f1e46e20e7194d54027de6be5b2c56f390f2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ebcd5406afdb3912ed48a311e4e53bac2fd6259ef24d37bc954b388020078e0 = $this->env->getExtension("native_profiler");
        $__internal_8ebcd5406afdb3912ed48a311e4e53bac2fd6259ef24d37bc954b388020078e0->enter($__internal_8ebcd5406afdb3912ed48a311e4e53bac2fd6259ef24d37bc954b388020078e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ebcd5406afdb3912ed48a311e4e53bac2fd6259ef24d37bc954b388020078e0->leave($__internal_8ebcd5406afdb3912ed48a311e4e53bac2fd6259ef24d37bc954b388020078e0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c26f5180c278b9b8e63132d75cc8291370d5849ffa86458df93a7e476428dd4c = $this->env->getExtension("native_profiler");
        $__internal_c26f5180c278b9b8e63132d75cc8291370d5849ffa86458df93a7e476428dd4c->enter($__internal_c26f5180c278b9b8e63132d75cc8291370d5849ffa86458df93a7e476428dd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c26f5180c278b9b8e63132d75cc8291370d5849ffa86458df93a7e476428dd4c->leave($__internal_c26f5180c278b9b8e63132d75cc8291370d5849ffa86458df93a7e476428dd4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ce78d38abb395923496c9821b8c26a3ac42eb25bd0e2da85ed9d3c6a1c8e496 = $this->env->getExtension("native_profiler");
        $__internal_0ce78d38abb395923496c9821b8c26a3ac42eb25bd0e2da85ed9d3c6a1c8e496->enter($__internal_0ce78d38abb395923496c9821b8c26a3ac42eb25bd0e2da85ed9d3c6a1c8e496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ce78d38abb395923496c9821b8c26a3ac42eb25bd0e2da85ed9d3c6a1c8e496->leave($__internal_0ce78d38abb395923496c9821b8c26a3ac42eb25bd0e2da85ed9d3c6a1c8e496_prof);

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
