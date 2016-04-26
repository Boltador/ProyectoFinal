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
        $__internal_2551d890dc10b91d4917e1bbad9d02b8ca3be3f5b5e6cc2281e5b23d1a528378 = $this->env->getExtension("native_profiler");
        $__internal_2551d890dc10b91d4917e1bbad9d02b8ca3be3f5b5e6cc2281e5b23d1a528378->enter($__internal_2551d890dc10b91d4917e1bbad9d02b8ca3be3f5b5e6cc2281e5b23d1a528378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2551d890dc10b91d4917e1bbad9d02b8ca3be3f5b5e6cc2281e5b23d1a528378->leave($__internal_2551d890dc10b91d4917e1bbad9d02b8ca3be3f5b5e6cc2281e5b23d1a528378_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4afb5d22c95d219c61ebb41a8d8ad014fac75967ccf2af8d98c4fbdcb2f33267 = $this->env->getExtension("native_profiler");
        $__internal_4afb5d22c95d219c61ebb41a8d8ad014fac75967ccf2af8d98c4fbdcb2f33267->enter($__internal_4afb5d22c95d219c61ebb41a8d8ad014fac75967ccf2af8d98c4fbdcb2f33267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4afb5d22c95d219c61ebb41a8d8ad014fac75967ccf2af8d98c4fbdcb2f33267->leave($__internal_4afb5d22c95d219c61ebb41a8d8ad014fac75967ccf2af8d98c4fbdcb2f33267_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f551e46066c44f108c3aa3fa49adb113242626f439aeee22b055ba15033db9dc = $this->env->getExtension("native_profiler");
        $__internal_f551e46066c44f108c3aa3fa49adb113242626f439aeee22b055ba15033db9dc->enter($__internal_f551e46066c44f108c3aa3fa49adb113242626f439aeee22b055ba15033db9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f551e46066c44f108c3aa3fa49adb113242626f439aeee22b055ba15033db9dc->leave($__internal_f551e46066c44f108c3aa3fa49adb113242626f439aeee22b055ba15033db9dc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1187a2f6ded0f8fd68f0572068d9c1f9cee510ce9a04e1ffd53519c80ea16ac = $this->env->getExtension("native_profiler");
        $__internal_d1187a2f6ded0f8fd68f0572068d9c1f9cee510ce9a04e1ffd53519c80ea16ac->enter($__internal_d1187a2f6ded0f8fd68f0572068d9c1f9cee510ce9a04e1ffd53519c80ea16ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d1187a2f6ded0f8fd68f0572068d9c1f9cee510ce9a04e1ffd53519c80ea16ac->leave($__internal_d1187a2f6ded0f8fd68f0572068d9c1f9cee510ce9a04e1ffd53519c80ea16ac_prof);

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
