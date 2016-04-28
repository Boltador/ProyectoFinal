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
        $__internal_f399d1c7674bab244e74e3d83b1c66611ffe1349888f44633b4ebe5c5fcb89ac = $this->env->getExtension("native_profiler");
        $__internal_f399d1c7674bab244e74e3d83b1c66611ffe1349888f44633b4ebe5c5fcb89ac->enter($__internal_f399d1c7674bab244e74e3d83b1c66611ffe1349888f44633b4ebe5c5fcb89ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f399d1c7674bab244e74e3d83b1c66611ffe1349888f44633b4ebe5c5fcb89ac->leave($__internal_f399d1c7674bab244e74e3d83b1c66611ffe1349888f44633b4ebe5c5fcb89ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_157fdd5a55ccba97cbd88efe1b8461b9a0bad121555c842abbc24c9bda979f1e = $this->env->getExtension("native_profiler");
        $__internal_157fdd5a55ccba97cbd88efe1b8461b9a0bad121555c842abbc24c9bda979f1e->enter($__internal_157fdd5a55ccba97cbd88efe1b8461b9a0bad121555c842abbc24c9bda979f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_157fdd5a55ccba97cbd88efe1b8461b9a0bad121555c842abbc24c9bda979f1e->leave($__internal_157fdd5a55ccba97cbd88efe1b8461b9a0bad121555c842abbc24c9bda979f1e_prof);

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
