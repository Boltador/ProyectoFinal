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
        $__internal_2aca97265c9a95228960a7f09a8227d21e304a7b427547cbd7cd216325de7cdd = $this->env->getExtension("native_profiler");
        $__internal_2aca97265c9a95228960a7f09a8227d21e304a7b427547cbd7cd216325de7cdd->enter($__internal_2aca97265c9a95228960a7f09a8227d21e304a7b427547cbd7cd216325de7cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aca97265c9a95228960a7f09a8227d21e304a7b427547cbd7cd216325de7cdd->leave($__internal_2aca97265c9a95228960a7f09a8227d21e304a7b427547cbd7cd216325de7cdd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0035f6e8c7f242b1b9bbbb13ad1ad057f4a42f43115d25b3e6fee4e7959ecbb1 = $this->env->getExtension("native_profiler");
        $__internal_0035f6e8c7f242b1b9bbbb13ad1ad057f4a42f43115d25b3e6fee4e7959ecbb1->enter($__internal_0035f6e8c7f242b1b9bbbb13ad1ad057f4a42f43115d25b3e6fee4e7959ecbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0035f6e8c7f242b1b9bbbb13ad1ad057f4a42f43115d25b3e6fee4e7959ecbb1->leave($__internal_0035f6e8c7f242b1b9bbbb13ad1ad057f4a42f43115d25b3e6fee4e7959ecbb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_045a2efbd2ad25c078fabb17c842b8fce2e8f57cd313047f06fdef11e7032eb2 = $this->env->getExtension("native_profiler");
        $__internal_045a2efbd2ad25c078fabb17c842b8fce2e8f57cd313047f06fdef11e7032eb2->enter($__internal_045a2efbd2ad25c078fabb17c842b8fce2e8f57cd313047f06fdef11e7032eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_045a2efbd2ad25c078fabb17c842b8fce2e8f57cd313047f06fdef11e7032eb2->leave($__internal_045a2efbd2ad25c078fabb17c842b8fce2e8f57cd313047f06fdef11e7032eb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ee6d1d6406d4e1dc934f61f73ff580aaed6c24aff494f2ae1e865453c37744b = $this->env->getExtension("native_profiler");
        $__internal_5ee6d1d6406d4e1dc934f61f73ff580aaed6c24aff494f2ae1e865453c37744b->enter($__internal_5ee6d1d6406d4e1dc934f61f73ff580aaed6c24aff494f2ae1e865453c37744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ee6d1d6406d4e1dc934f61f73ff580aaed6c24aff494f2ae1e865453c37744b->leave($__internal_5ee6d1d6406d4e1dc934f61f73ff580aaed6c24aff494f2ae1e865453c37744b_prof);

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
