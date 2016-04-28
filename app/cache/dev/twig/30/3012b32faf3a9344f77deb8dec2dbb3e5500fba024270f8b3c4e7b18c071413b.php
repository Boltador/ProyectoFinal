<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1ee7e18661cded70fbe56b907ee95860f36f4fd5fd86e5858b688f7d340a1c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a7703798f64ed93a9e2b33f19b9db66276a081348121b721932a6f5db26920ef = $this->env->getExtension("native_profiler");
        $__internal_a7703798f64ed93a9e2b33f19b9db66276a081348121b721932a6f5db26920ef->enter($__internal_a7703798f64ed93a9e2b33f19b9db66276a081348121b721932a6f5db26920ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7703798f64ed93a9e2b33f19b9db66276a081348121b721932a6f5db26920ef->leave($__internal_a7703798f64ed93a9e2b33f19b9db66276a081348121b721932a6f5db26920ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3793ea7d4cf91ae95b8cd23313e4531fda60a4045233822e96cf58fd6bc341cf = $this->env->getExtension("native_profiler");
        $__internal_3793ea7d4cf91ae95b8cd23313e4531fda60a4045233822e96cf58fd6bc341cf->enter($__internal_3793ea7d4cf91ae95b8cd23313e4531fda60a4045233822e96cf58fd6bc341cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3793ea7d4cf91ae95b8cd23313e4531fda60a4045233822e96cf58fd6bc341cf->leave($__internal_3793ea7d4cf91ae95b8cd23313e4531fda60a4045233822e96cf58fd6bc341cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bd6adba2e3c60798b805786cc3f455a8d06095d3c3da1f57b8a4bb952f4cee97 = $this->env->getExtension("native_profiler");
        $__internal_bd6adba2e3c60798b805786cc3f455a8d06095d3c3da1f57b8a4bb952f4cee97->enter($__internal_bd6adba2e3c60798b805786cc3f455a8d06095d3c3da1f57b8a4bb952f4cee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bd6adba2e3c60798b805786cc3f455a8d06095d3c3da1f57b8a4bb952f4cee97->leave($__internal_bd6adba2e3c60798b805786cc3f455a8d06095d3c3da1f57b8a4bb952f4cee97_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58bc7f72bb3a4c27dc3603174404c8769c6280300c8a265910a912bb7d39e478 = $this->env->getExtension("native_profiler");
        $__internal_58bc7f72bb3a4c27dc3603174404c8769c6280300c8a265910a912bb7d39e478->enter($__internal_58bc7f72bb3a4c27dc3603174404c8769c6280300c8a265910a912bb7d39e478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_58bc7f72bb3a4c27dc3603174404c8769c6280300c8a265910a912bb7d39e478->leave($__internal_58bc7f72bb3a4c27dc3603174404c8769c6280300c8a265910a912bb7d39e478_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
