<?php

/* usuarios/new.html.twig */
class __TwigTemplate_de78bb3eda8057780490db7a96c9c4fdfec0b16770aefab31447c98564942b11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "usuarios/new.html.twig", 1);
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
        $__internal_1dfff40033663d30d697d3c60dd8962c4fa40551d77878a7c3ceb462c48b0e15 = $this->env->getExtension("native_profiler");
        $__internal_1dfff40033663d30d697d3c60dd8962c4fa40551d77878a7c3ceb462c48b0e15->enter($__internal_1dfff40033663d30d697d3c60dd8962c4fa40551d77878a7c3ceb462c48b0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dfff40033663d30d697d3c60dd8962c4fa40551d77878a7c3ceb462c48b0e15->leave($__internal_1dfff40033663d30d697d3c60dd8962c4fa40551d77878a7c3ceb462c48b0e15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45876be7e58b7d5ce1a11d9e139d37ae2a4f7a018719e26351ad14a8ea9cd959 = $this->env->getExtension("native_profiler");
        $__internal_45876be7e58b7d5ce1a11d9e139d37ae2a4f7a018719e26351ad14a8ea9cd959->enter($__internal_45876be7e58b7d5ce1a11d9e139d37ae2a4f7a018719e26351ad14a8ea9cd959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45876be7e58b7d5ce1a11d9e139d37ae2a4f7a018719e26351ad14a8ea9cd959->leave($__internal_45876be7e58b7d5ce1a11d9e139d37ae2a4f7a018719e26351ad14a8ea9cd959_prof);

    }

    public function getTemplateName()
    {
        return "usuarios/new.html.twig";
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
