<?php

/* :asignaciones:edit.html.twig */
class __TwigTemplate_1b7436a8cbbae59749b41c53e8bb0797e88de0eacec15308aef16542227b403e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaciones:edit.html.twig", 1);
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
        $__internal_f1b6dfa39815a9518c5a6eb92641680be66eb27b2d87525142e515c97c3c780d = $this->env->getExtension("native_profiler");
        $__internal_f1b6dfa39815a9518c5a6eb92641680be66eb27b2d87525142e515c97c3c780d->enter($__internal_f1b6dfa39815a9518c5a6eb92641680be66eb27b2d87525142e515c97c3c780d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaciones:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b6dfa39815a9518c5a6eb92641680be66eb27b2d87525142e515c97c3c780d->leave($__internal_f1b6dfa39815a9518c5a6eb92641680be66eb27b2d87525142e515c97c3c780d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39ad880a3f2361bd2750a466f70e4604594674d7b9c40d5f7ef44a576fbd7488 = $this->env->getExtension("native_profiler");
        $__internal_39ad880a3f2361bd2750a466f70e4604594674d7b9c40d5f7ef44a576fbd7488->enter($__internal_39ad880a3f2361bd2750a466f70e4604594674d7b9c40d5f7ef44a576fbd7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
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
        
        $__internal_39ad880a3f2361bd2750a466f70e4604594674d7b9c40d5f7ef44a576fbd7488->leave($__internal_39ad880a3f2361bd2750a466f70e4604594674d7b9c40d5f7ef44a576fbd7488_prof);

    }

    public function getTemplateName()
    {
        return ":asignaciones:edit.html.twig";
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
/*     <h1>Asignaciones edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
