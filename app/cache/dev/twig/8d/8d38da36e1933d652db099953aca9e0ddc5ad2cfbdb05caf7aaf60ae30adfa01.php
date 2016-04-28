<?php

/* :usuarios:new.html.twig */
class __TwigTemplate_48a937566ff9d0c783509a78ded616a41c750eba44501876044881915ed31e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:new.html.twig", 1);
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
        $__internal_32cf2c85ce66d9aefc7c2806657e467478c7d74cb51168a71920735df031691e = $this->env->getExtension("native_profiler");
        $__internal_32cf2c85ce66d9aefc7c2806657e467478c7d74cb51168a71920735df031691e->enter($__internal_32cf2c85ce66d9aefc7c2806657e467478c7d74cb51168a71920735df031691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cf2c85ce66d9aefc7c2806657e467478c7d74cb51168a71920735df031691e->leave($__internal_32cf2c85ce66d9aefc7c2806657e467478c7d74cb51168a71920735df031691e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e1bb5d947377a364dee39aa1c2b5f3a32c8a6bc5645ed19ef29d2278e74e88e = $this->env->getExtension("native_profiler");
        $__internal_2e1bb5d947377a364dee39aa1c2b5f3a32c8a6bc5645ed19ef29d2278e74e88e->enter($__internal_2e1bb5d947377a364dee39aa1c2b5f3a32c8a6bc5645ed19ef29d2278e74e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2e1bb5d947377a364dee39aa1c2b5f3a32c8a6bc5645ed19ef29d2278e74e88e->leave($__internal_2e1bb5d947377a364dee39aa1c2b5f3a32c8a6bc5645ed19ef29d2278e74e88e_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:new.html.twig";
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
/*     <h1>Usuarios creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
