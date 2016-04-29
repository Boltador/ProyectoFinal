<?php

/* :asignaturas:new.html.twig */
class __TwigTemplate_dd4e2eb0b9510a217491613ae78e0daef23382ae4c34ad1893bec1912308029c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaturas:new.html.twig", 1);
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
        $__internal_143ad1d06b2ae1c8d899e540de516c40ac47a675080a0a1079e719c63a1bb4d5 = $this->env->getExtension("native_profiler");
        $__internal_143ad1d06b2ae1c8d899e540de516c40ac47a675080a0a1079e719c63a1bb4d5->enter($__internal_143ad1d06b2ae1c8d899e540de516c40ac47a675080a0a1079e719c63a1bb4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_143ad1d06b2ae1c8d899e540de516c40ac47a675080a0a1079e719c63a1bb4d5->leave($__internal_143ad1d06b2ae1c8d899e540de516c40ac47a675080a0a1079e719c63a1bb4d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51f1d2adceafb3bf4927ae21ae686ef037503d32d067a2d8b2005a6be17e2e9a = $this->env->getExtension("native_profiler");
        $__internal_51f1d2adceafb3bf4927ae21ae686ef037503d32d067a2d8b2005a6be17e2e9a->enter($__internal_51f1d2adceafb3bf4927ae21ae686ef037503d32d067a2d8b2005a6be17e2e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaturas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_51f1d2adceafb3bf4927ae21ae686ef037503d32d067a2d8b2005a6be17e2e9a->leave($__internal_51f1d2adceafb3bf4927ae21ae686ef037503d32d067a2d8b2005a6be17e2e9a_prof);

    }

    public function getTemplateName()
    {
        return ":asignaturas:new.html.twig";
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
/*     <h1>Asignaturas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
