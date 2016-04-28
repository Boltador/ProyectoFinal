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
        $__internal_72b175f2dfa2dc34a0bf65da38739c74b411d22aad0c207fd485633a5d9ee507 = $this->env->getExtension("native_profiler");
        $__internal_72b175f2dfa2dc34a0bf65da38739c74b411d22aad0c207fd485633a5d9ee507->enter($__internal_72b175f2dfa2dc34a0bf65da38739c74b411d22aad0c207fd485633a5d9ee507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b175f2dfa2dc34a0bf65da38739c74b411d22aad0c207fd485633a5d9ee507->leave($__internal_72b175f2dfa2dc34a0bf65da38739c74b411d22aad0c207fd485633a5d9ee507_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24df8a1cdd88635aa41a8521521d500e8b02242abea6059b7b809f5fd92faf65 = $this->env->getExtension("native_profiler");
        $__internal_24df8a1cdd88635aa41a8521521d500e8b02242abea6059b7b809f5fd92faf65->enter($__internal_24df8a1cdd88635aa41a8521521d500e8b02242abea6059b7b809f5fd92faf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_24df8a1cdd88635aa41a8521521d500e8b02242abea6059b7b809f5fd92faf65->leave($__internal_24df8a1cdd88635aa41a8521521d500e8b02242abea6059b7b809f5fd92faf65_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17b8f999a796276a0bb1aa9fd5ec2594ce32f573ec4dafe918afe8bb8f2b45b2 = $this->env->getExtension("native_profiler");
        $__internal_17b8f999a796276a0bb1aa9fd5ec2594ce32f573ec4dafe918afe8bb8f2b45b2->enter($__internal_17b8f999a796276a0bb1aa9fd5ec2594ce32f573ec4dafe918afe8bb8f2b45b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17b8f999a796276a0bb1aa9fd5ec2594ce32f573ec4dafe918afe8bb8f2b45b2->leave($__internal_17b8f999a796276a0bb1aa9fd5ec2594ce32f573ec4dafe918afe8bb8f2b45b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75faa59773de1d18f574e5448fa50f79268b646be691d60926432f88c8db017d = $this->env->getExtension("native_profiler");
        $__internal_75faa59773de1d18f574e5448fa50f79268b646be691d60926432f88c8db017d->enter($__internal_75faa59773de1d18f574e5448fa50f79268b646be691d60926432f88c8db017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75faa59773de1d18f574e5448fa50f79268b646be691d60926432f88c8db017d->leave($__internal_75faa59773de1d18f574e5448fa50f79268b646be691d60926432f88c8db017d_prof);

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
