<?php

/* :coordinadores:edit.html.twig */
class __TwigTemplate_4434c80aa66b21a1b459e0f12d1527db540c8bf8589f811750633465af3efd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:edit.html.twig", 1);
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
        $__internal_592868712c50aca8ca9f7e3ea54673c7ddf05f959a8962ac6ccbfd1bceaa1383 = $this->env->getExtension("native_profiler");
        $__internal_592868712c50aca8ca9f7e3ea54673c7ddf05f959a8962ac6ccbfd1bceaa1383->enter($__internal_592868712c50aca8ca9f7e3ea54673c7ddf05f959a8962ac6ccbfd1bceaa1383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592868712c50aca8ca9f7e3ea54673c7ddf05f959a8962ac6ccbfd1bceaa1383->leave($__internal_592868712c50aca8ca9f7e3ea54673c7ddf05f959a8962ac6ccbfd1bceaa1383_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bfe7e3e8e6e16a958fc944168c206e1eae47956faa0dd3cb58aa8b5df574f88 = $this->env->getExtension("native_profiler");
        $__internal_2bfe7e3e8e6e16a958fc944168c206e1eae47956faa0dd3cb58aa8b5df574f88->enter($__internal_2bfe7e3e8e6e16a958fc944168c206e1eae47956faa0dd3cb58aa8b5df574f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2bfe7e3e8e6e16a958fc944168c206e1eae47956faa0dd3cb58aa8b5df574f88->leave($__internal_2bfe7e3e8e6e16a958fc944168c206e1eae47956faa0dd3cb58aa8b5df574f88_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Coordinadores edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
