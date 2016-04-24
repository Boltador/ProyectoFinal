<?php

/* alectivos/new.html.twig */
class __TwigTemplate_062908d0e2d8b9f8a23411070cba5aed8c2853d0855a6192f81ca9357b57b001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alectivos/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd03366f96e26ac9825781ed1a38e30ecffd10714b3fa80ddb444b77f4e84672 = $this->env->getExtension("native_profiler");
        $__internal_dd03366f96e26ac9825781ed1a38e30ecffd10714b3fa80ddb444b77f4e84672->enter($__internal_dd03366f96e26ac9825781ed1a38e30ecffd10714b3fa80ddb444b77f4e84672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd03366f96e26ac9825781ed1a38e30ecffd10714b3fa80ddb444b77f4e84672->leave($__internal_dd03366f96e26ac9825781ed1a38e30ecffd10714b3fa80ddb444b77f4e84672_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7798e4c2e961d796754e549af6ed8477c7e99312524b4e1d60862b86416a3c6 = $this->env->getExtension("native_profiler");
        $__internal_b7798e4c2e961d796754e549af6ed8477c7e99312524b4e1d60862b86416a3c6->enter($__internal_b7798e4c2e961d796754e549af6ed8477c7e99312524b4e1d60862b86416a3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>ALectivos creation</h1>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"submit\" value=\"Create\" />
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<ul>
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("alectivos_index");
        echo "\">Back to the list</a>
    </li>
</ul>
";
        
        $__internal_b7798e4c2e961d796754e549af6ed8477c7e99312524b4e1d60862b86416a3c6->leave($__internal_b7798e4c2e961d796754e549af6ed8477c7e99312524b4e1d60862b86416a3c6_prof);

    }

    public function getTemplateName()
    {
        return "alectivos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>ALectivos creation</h1>*/
/* */
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <input type="submit" value="Create" />*/
/* {{ form_end(form) }}*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('alectivos_index') }}">Back to the list</a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
