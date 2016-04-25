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
        $__internal_b152ffd890ad88d79576c2795fa326c49d9e95cd0fd7b2fc74e24b93ea68e3bb = $this->env->getExtension("native_profiler");
        $__internal_b152ffd890ad88d79576c2795fa326c49d9e95cd0fd7b2fc74e24b93ea68e3bb->enter($__internal_b152ffd890ad88d79576c2795fa326c49d9e95cd0fd7b2fc74e24b93ea68e3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b152ffd890ad88d79576c2795fa326c49d9e95cd0fd7b2fc74e24b93ea68e3bb->leave($__internal_b152ffd890ad88d79576c2795fa326c49d9e95cd0fd7b2fc74e24b93ea68e3bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a81f7ae5498a55e9a797436e545e0e5015019ee9a00964a622f05f27b478fc08 = $this->env->getExtension("native_profiler");
        $__internal_a81f7ae5498a55e9a797436e545e0e5015019ee9a00964a622f05f27b478fc08->enter($__internal_a81f7ae5498a55e9a797436e545e0e5015019ee9a00964a622f05f27b478fc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a81f7ae5498a55e9a797436e545e0e5015019ee9a00964a622f05f27b478fc08->leave($__internal_a81f7ae5498a55e9a797436e545e0e5015019ee9a00964a622f05f27b478fc08_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f302949bc25cfe8bccdc4a441073b5ad4661c69d8213e034956bc74100f818e1 = $this->env->getExtension("native_profiler");
        $__internal_f302949bc25cfe8bccdc4a441073b5ad4661c69d8213e034956bc74100f818e1->enter($__internal_f302949bc25cfe8bccdc4a441073b5ad4661c69d8213e034956bc74100f818e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f302949bc25cfe8bccdc4a441073b5ad4661c69d8213e034956bc74100f818e1->leave($__internal_f302949bc25cfe8bccdc4a441073b5ad4661c69d8213e034956bc74100f818e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2dad6c4fd75e3d3d215fd4319ee0a1dece55fe068f0ca527c7a18253e16d82a = $this->env->getExtension("native_profiler");
        $__internal_f2dad6c4fd75e3d3d215fd4319ee0a1dece55fe068f0ca527c7a18253e16d82a->enter($__internal_f2dad6c4fd75e3d3d215fd4319ee0a1dece55fe068f0ca527c7a18253e16d82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2dad6c4fd75e3d3d215fd4319ee0a1dece55fe068f0ca527c7a18253e16d82a->leave($__internal_f2dad6c4fd75e3d3d215fd4319ee0a1dece55fe068f0ca527c7a18253e16d82a_prof);

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
