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
        $__internal_cd8e0548a5cbef98a3fe1b54013e9d886a9a2e081de7598a06a9c36974a578fa = $this->env->getExtension("native_profiler");
        $__internal_cd8e0548a5cbef98a3fe1b54013e9d886a9a2e081de7598a06a9c36974a578fa->enter($__internal_cd8e0548a5cbef98a3fe1b54013e9d886a9a2e081de7598a06a9c36974a578fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8e0548a5cbef98a3fe1b54013e9d886a9a2e081de7598a06a9c36974a578fa->leave($__internal_cd8e0548a5cbef98a3fe1b54013e9d886a9a2e081de7598a06a9c36974a578fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c8dc9ad22e65bf478ffe7f21643cc4cc1968812ceb8ec0953866c813859d1a = $this->env->getExtension("native_profiler");
        $__internal_72c8dc9ad22e65bf478ffe7f21643cc4cc1968812ceb8ec0953866c813859d1a->enter($__internal_72c8dc9ad22e65bf478ffe7f21643cc4cc1968812ceb8ec0953866c813859d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_72c8dc9ad22e65bf478ffe7f21643cc4cc1968812ceb8ec0953866c813859d1a->leave($__internal_72c8dc9ad22e65bf478ffe7f21643cc4cc1968812ceb8ec0953866c813859d1a_prof);

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
