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
        $__internal_6d8480faf6400c4f1c99c58e9b69a075c232886886487c2ab413529afd105f6f = $this->env->getExtension("native_profiler");
        $__internal_6d8480faf6400c4f1c99c58e9b69a075c232886886487c2ab413529afd105f6f->enter($__internal_6d8480faf6400c4f1c99c58e9b69a075c232886886487c2ab413529afd105f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d8480faf6400c4f1c99c58e9b69a075c232886886487c2ab413529afd105f6f->leave($__internal_6d8480faf6400c4f1c99c58e9b69a075c232886886487c2ab413529afd105f6f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33c1b799ab2d5b6914a2db1635544a6dd93b2f71e84c386f2334aa3ea9f4a9cd = $this->env->getExtension("native_profiler");
        $__internal_33c1b799ab2d5b6914a2db1635544a6dd93b2f71e84c386f2334aa3ea9f4a9cd->enter($__internal_33c1b799ab2d5b6914a2db1635544a6dd93b2f71e84c386f2334aa3ea9f4a9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33c1b799ab2d5b6914a2db1635544a6dd93b2f71e84c386f2334aa3ea9f4a9cd->leave($__internal_33c1b799ab2d5b6914a2db1635544a6dd93b2f71e84c386f2334aa3ea9f4a9cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5ca4e31247cc204954acba5aa29fd540f9bf254b9eafa9bd77e3417fd41ca06 = $this->env->getExtension("native_profiler");
        $__internal_a5ca4e31247cc204954acba5aa29fd540f9bf254b9eafa9bd77e3417fd41ca06->enter($__internal_a5ca4e31247cc204954acba5aa29fd540f9bf254b9eafa9bd77e3417fd41ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5ca4e31247cc204954acba5aa29fd540f9bf254b9eafa9bd77e3417fd41ca06->leave($__internal_a5ca4e31247cc204954acba5aa29fd540f9bf254b9eafa9bd77e3417fd41ca06_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_07b78af47ba4501b33e807aa21eb45d4076113edff12e1d797035d91ab5a98a1 = $this->env->getExtension("native_profiler");
        $__internal_07b78af47ba4501b33e807aa21eb45d4076113edff12e1d797035d91ab5a98a1->enter($__internal_07b78af47ba4501b33e807aa21eb45d4076113edff12e1d797035d91ab5a98a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07b78af47ba4501b33e807aa21eb45d4076113edff12e1d797035d91ab5a98a1->leave($__internal_07b78af47ba4501b33e807aa21eb45d4076113edff12e1d797035d91ab5a98a1_prof);

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
