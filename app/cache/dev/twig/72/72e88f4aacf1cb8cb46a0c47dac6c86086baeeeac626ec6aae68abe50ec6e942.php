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
        $__internal_1f6825e6cc7a87776a45945d64d77ad44ba5252fc277890a6bb5afbdc487214f = $this->env->getExtension("native_profiler");
        $__internal_1f6825e6cc7a87776a45945d64d77ad44ba5252fc277890a6bb5afbdc487214f->enter($__internal_1f6825e6cc7a87776a45945d64d77ad44ba5252fc277890a6bb5afbdc487214f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6825e6cc7a87776a45945d64d77ad44ba5252fc277890a6bb5afbdc487214f->leave($__internal_1f6825e6cc7a87776a45945d64d77ad44ba5252fc277890a6bb5afbdc487214f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9af847eb8484e61477024571bc0ff7dc8b3d5fbf66534fe46ef8b38c27db723a = $this->env->getExtension("native_profiler");
        $__internal_9af847eb8484e61477024571bc0ff7dc8b3d5fbf66534fe46ef8b38c27db723a->enter($__internal_9af847eb8484e61477024571bc0ff7dc8b3d5fbf66534fe46ef8b38c27db723a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9af847eb8484e61477024571bc0ff7dc8b3d5fbf66534fe46ef8b38c27db723a->leave($__internal_9af847eb8484e61477024571bc0ff7dc8b3d5fbf66534fe46ef8b38c27db723a_prof);

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
