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
        $__internal_dd434a89b63e710255bba44a13799de7df5e4b6118f5220f711e33d79c6a0d6c = $this->env->getExtension("native_profiler");
        $__internal_dd434a89b63e710255bba44a13799de7df5e4b6118f5220f711e33d79c6a0d6c->enter($__internal_dd434a89b63e710255bba44a13799de7df5e4b6118f5220f711e33d79c6a0d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd434a89b63e710255bba44a13799de7df5e4b6118f5220f711e33d79c6a0d6c->leave($__internal_dd434a89b63e710255bba44a13799de7df5e4b6118f5220f711e33d79c6a0d6c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_076f3fbdc84900add63666128d9903433368db77ac0639e4c72ba14e9816456a = $this->env->getExtension("native_profiler");
        $__internal_076f3fbdc84900add63666128d9903433368db77ac0639e4c72ba14e9816456a->enter($__internal_076f3fbdc84900add63666128d9903433368db77ac0639e4c72ba14e9816456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_076f3fbdc84900add63666128d9903433368db77ac0639e4c72ba14e9816456a->leave($__internal_076f3fbdc84900add63666128d9903433368db77ac0639e4c72ba14e9816456a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38ab31a729a1d4b7e98087f0bc0d387fdcab1f5e38d1746f5c75e90c24d3646c = $this->env->getExtension("native_profiler");
        $__internal_38ab31a729a1d4b7e98087f0bc0d387fdcab1f5e38d1746f5c75e90c24d3646c->enter($__internal_38ab31a729a1d4b7e98087f0bc0d387fdcab1f5e38d1746f5c75e90c24d3646c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38ab31a729a1d4b7e98087f0bc0d387fdcab1f5e38d1746f5c75e90c24d3646c->leave($__internal_38ab31a729a1d4b7e98087f0bc0d387fdcab1f5e38d1746f5c75e90c24d3646c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4cd3e13d7529a7463129524736ffb814874d6cfa2cdd0ad299c859d04fc9419b = $this->env->getExtension("native_profiler");
        $__internal_4cd3e13d7529a7463129524736ffb814874d6cfa2cdd0ad299c859d04fc9419b->enter($__internal_4cd3e13d7529a7463129524736ffb814874d6cfa2cdd0ad299c859d04fc9419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4cd3e13d7529a7463129524736ffb814874d6cfa2cdd0ad299c859d04fc9419b->leave($__internal_4cd3e13d7529a7463129524736ffb814874d6cfa2cdd0ad299c859d04fc9419b_prof);

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
