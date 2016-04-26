<?php

/* matriculas/new.html.twig */
class __TwigTemplate_bccdba1f1ff9f50d0a7757ca7a57a18621961c477e88c7b964fff7e86d202751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/new.html.twig", 1);
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
        $__internal_72433bed10b8dfa0b81d5dac2e7cd658f01c3a58a3aae97b4da55d4564b975b4 = $this->env->getExtension("native_profiler");
        $__internal_72433bed10b8dfa0b81d5dac2e7cd658f01c3a58a3aae97b4da55d4564b975b4->enter($__internal_72433bed10b8dfa0b81d5dac2e7cd658f01c3a58a3aae97b4da55d4564b975b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72433bed10b8dfa0b81d5dac2e7cd658f01c3a58a3aae97b4da55d4564b975b4->leave($__internal_72433bed10b8dfa0b81d5dac2e7cd658f01c3a58a3aae97b4da55d4564b975b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_653761f940181bf15d8da2ba8d26a2f6c742754669e248ee012afbd7f9f8e84c = $this->env->getExtension("native_profiler");
        $__internal_653761f940181bf15d8da2ba8d26a2f6c742754669e248ee012afbd7f9f8e84c->enter($__internal_653761f940181bf15d8da2ba8d26a2f6c742754669e248ee012afbd7f9f8e84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_653761f940181bf15d8da2ba8d26a2f6c742754669e248ee012afbd7f9f8e84c->leave($__internal_653761f940181bf15d8da2ba8d26a2f6c742754669e248ee012afbd7f9f8e84c_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/new.html.twig";
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
/*     <h1>Matriculas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
