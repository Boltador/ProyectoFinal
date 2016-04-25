<?php

/* estudiantes/new.html.twig */
class __TwigTemplate_430cb9f99125df3ba288ba39fb70c27e1d014deb8ea75a2848a0ed711cd7d7b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/new.html.twig", 1);
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
        $__internal_74f530e98e5fe92c5346e3ce43cc0edd8db64209bcdab14fab58f76638ab0e25 = $this->env->getExtension("native_profiler");
        $__internal_74f530e98e5fe92c5346e3ce43cc0edd8db64209bcdab14fab58f76638ab0e25->enter($__internal_74f530e98e5fe92c5346e3ce43cc0edd8db64209bcdab14fab58f76638ab0e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74f530e98e5fe92c5346e3ce43cc0edd8db64209bcdab14fab58f76638ab0e25->leave($__internal_74f530e98e5fe92c5346e3ce43cc0edd8db64209bcdab14fab58f76638ab0e25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0400d15bb1fd480f07cc1953786cd69d9882df925ca5562eb3245cc180e484 = $this->env->getExtension("native_profiler");
        $__internal_2d0400d15bb1fd480f07cc1953786cd69d9882df925ca5562eb3245cc180e484->enter($__internal_2d0400d15bb1fd480f07cc1953786cd69d9882df925ca5562eb3245cc180e484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2d0400d15bb1fd480f07cc1953786cd69d9882df925ca5562eb3245cc180e484->leave($__internal_2d0400d15bb1fd480f07cc1953786cd69d9882df925ca5562eb3245cc180e484_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/new.html.twig";
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
/*     <h1>Estudiantes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
