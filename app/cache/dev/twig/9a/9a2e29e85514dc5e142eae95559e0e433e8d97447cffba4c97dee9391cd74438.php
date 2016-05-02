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
        $__internal_543fa36ebf1d986f5628bb318172115e729261bd3c230d54717157e6f8e80eda = $this->env->getExtension("native_profiler");
        $__internal_543fa36ebf1d986f5628bb318172115e729261bd3c230d54717157e6f8e80eda->enter($__internal_543fa36ebf1d986f5628bb318172115e729261bd3c230d54717157e6f8e80eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_543fa36ebf1d986f5628bb318172115e729261bd3c230d54717157e6f8e80eda->leave($__internal_543fa36ebf1d986f5628bb318172115e729261bd3c230d54717157e6f8e80eda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2484f56a1addcba16bbbbe2c2d4325d039fc760712c7543926391ed0c7465397 = $this->env->getExtension("native_profiler");
        $__internal_2484f56a1addcba16bbbbe2c2d4325d039fc760712c7543926391ed0c7465397->enter($__internal_2484f56a1addcba16bbbbe2c2d4325d039fc760712c7543926391ed0c7465397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2484f56a1addcba16bbbbe2c2d4325d039fc760712c7543926391ed0c7465397->leave($__internal_2484f56a1addcba16bbbbe2c2d4325d039fc760712c7543926391ed0c7465397_prof);

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
