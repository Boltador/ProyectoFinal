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
        $__internal_8db24151b9e8e459209904fdc55b6ec2c9d9fca8a3e95f5592c1561e7f9d8a8f = $this->env->getExtension("native_profiler");
        $__internal_8db24151b9e8e459209904fdc55b6ec2c9d9fca8a3e95f5592c1561e7f9d8a8f->enter($__internal_8db24151b9e8e459209904fdc55b6ec2c9d9fca8a3e95f5592c1561e7f9d8a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db24151b9e8e459209904fdc55b6ec2c9d9fca8a3e95f5592c1561e7f9d8a8f->leave($__internal_8db24151b9e8e459209904fdc55b6ec2c9d9fca8a3e95f5592c1561e7f9d8a8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ad34f18438f63e7a9594dd902d113015859ea34bdec8e533bcae44a31e99898e = $this->env->getExtension("native_profiler");
        $__internal_ad34f18438f63e7a9594dd902d113015859ea34bdec8e533bcae44a31e99898e->enter($__internal_ad34f18438f63e7a9594dd902d113015859ea34bdec8e533bcae44a31e99898e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ad34f18438f63e7a9594dd902d113015859ea34bdec8e533bcae44a31e99898e->leave($__internal_ad34f18438f63e7a9594dd902d113015859ea34bdec8e533bcae44a31e99898e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c70becaee0b872f79a4df2d9a927ac4a2f54deb2b0a7e6377c4275d0856c5d8 = $this->env->getExtension("native_profiler");
        $__internal_3c70becaee0b872f79a4df2d9a927ac4a2f54deb2b0a7e6377c4275d0856c5d8->enter($__internal_3c70becaee0b872f79a4df2d9a927ac4a2f54deb2b0a7e6377c4275d0856c5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3c70becaee0b872f79a4df2d9a927ac4a2f54deb2b0a7e6377c4275d0856c5d8->leave($__internal_3c70becaee0b872f79a4df2d9a927ac4a2f54deb2b0a7e6377c4275d0856c5d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_163f76a25539612a9d3026e3d4d2611df11d30441e6ada57fbd9bbe631f0b08d = $this->env->getExtension("native_profiler");
        $__internal_163f76a25539612a9d3026e3d4d2611df11d30441e6ada57fbd9bbe631f0b08d->enter($__internal_163f76a25539612a9d3026e3d4d2611df11d30441e6ada57fbd9bbe631f0b08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_163f76a25539612a9d3026e3d4d2611df11d30441e6ada57fbd9bbe631f0b08d->leave($__internal_163f76a25539612a9d3026e3d4d2611df11d30441e6ada57fbd9bbe631f0b08d_prof);

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
