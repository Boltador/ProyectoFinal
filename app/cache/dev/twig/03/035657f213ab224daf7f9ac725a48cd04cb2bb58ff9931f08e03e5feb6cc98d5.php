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
        $__internal_5b63dac2a42eb7d28e432de344cdcbc1e6e8a8f533af32e1141a7b8fbb3ce431 = $this->env->getExtension("native_profiler");
        $__internal_5b63dac2a42eb7d28e432de344cdcbc1e6e8a8f533af32e1141a7b8fbb3ce431->enter($__internal_5b63dac2a42eb7d28e432de344cdcbc1e6e8a8f533af32e1141a7b8fbb3ce431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b63dac2a42eb7d28e432de344cdcbc1e6e8a8f533af32e1141a7b8fbb3ce431->leave($__internal_5b63dac2a42eb7d28e432de344cdcbc1e6e8a8f533af32e1141a7b8fbb3ce431_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2120e8b885c7342fb6033d67c10f87daf17afe0513ab30ff3113f165c18cba2f = $this->env->getExtension("native_profiler");
        $__internal_2120e8b885c7342fb6033d67c10f87daf17afe0513ab30ff3113f165c18cba2f->enter($__internal_2120e8b885c7342fb6033d67c10f87daf17afe0513ab30ff3113f165c18cba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2120e8b885c7342fb6033d67c10f87daf17afe0513ab30ff3113f165c18cba2f->leave($__internal_2120e8b885c7342fb6033d67c10f87daf17afe0513ab30ff3113f165c18cba2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d8c5d094d9f7dd8f6c58700cd837ddc258f542b360ad7e754e2e38e46d9e0054 = $this->env->getExtension("native_profiler");
        $__internal_d8c5d094d9f7dd8f6c58700cd837ddc258f542b360ad7e754e2e38e46d9e0054->enter($__internal_d8c5d094d9f7dd8f6c58700cd837ddc258f542b360ad7e754e2e38e46d9e0054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d8c5d094d9f7dd8f6c58700cd837ddc258f542b360ad7e754e2e38e46d9e0054->leave($__internal_d8c5d094d9f7dd8f6c58700cd837ddc258f542b360ad7e754e2e38e46d9e0054_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_281a2031a2b5912d8ef2cd6710fd2f688aeed67f50fabed69ff24e04e42a9040 = $this->env->getExtension("native_profiler");
        $__internal_281a2031a2b5912d8ef2cd6710fd2f688aeed67f50fabed69ff24e04e42a9040->enter($__internal_281a2031a2b5912d8ef2cd6710fd2f688aeed67f50fabed69ff24e04e42a9040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_281a2031a2b5912d8ef2cd6710fd2f688aeed67f50fabed69ff24e04e42a9040->leave($__internal_281a2031a2b5912d8ef2cd6710fd2f688aeed67f50fabed69ff24e04e42a9040_prof);

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
