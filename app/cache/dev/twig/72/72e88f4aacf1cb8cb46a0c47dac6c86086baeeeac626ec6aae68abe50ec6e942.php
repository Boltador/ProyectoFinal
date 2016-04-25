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
        $__internal_595b0320b56c654bac4c8564cca1e07d0f35c85446d6fd931aec3db476978a2a = $this->env->getExtension("native_profiler");
        $__internal_595b0320b56c654bac4c8564cca1e07d0f35c85446d6fd931aec3db476978a2a->enter($__internal_595b0320b56c654bac4c8564cca1e07d0f35c85446d6fd931aec3db476978a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "usuarios/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_595b0320b56c654bac4c8564cca1e07d0f35c85446d6fd931aec3db476978a2a->leave($__internal_595b0320b56c654bac4c8564cca1e07d0f35c85446d6fd931aec3db476978a2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_884bcedffbe4eeddeb0ab06984e5baf4e898e82d56f161cd984f2768932df5f7 = $this->env->getExtension("native_profiler");
        $__internal_884bcedffbe4eeddeb0ab06984e5baf4e898e82d56f161cd984f2768932df5f7->enter($__internal_884bcedffbe4eeddeb0ab06984e5baf4e898e82d56f161cd984f2768932df5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_884bcedffbe4eeddeb0ab06984e5baf4e898e82d56f161cd984f2768932df5f7->leave($__internal_884bcedffbe4eeddeb0ab06984e5baf4e898e82d56f161cd984f2768932df5f7_prof);

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
