<?php

/* grupos/edit.html.twig */
class __TwigTemplate_01bdad480ffb6c504835baeed32cbc7acb6c530c29728dfced681afc9961564b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/edit.html.twig", 1);
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
        $__internal_2745708af6258c522d473ebcca0ab48905470231a83d00c3fcec45c213f1d473 = $this->env->getExtension("native_profiler");
        $__internal_2745708af6258c522d473ebcca0ab48905470231a83d00c3fcec45c213f1d473->enter($__internal_2745708af6258c522d473ebcca0ab48905470231a83d00c3fcec45c213f1d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2745708af6258c522d473ebcca0ab48905470231a83d00c3fcec45c213f1d473->leave($__internal_2745708af6258c522d473ebcca0ab48905470231a83d00c3fcec45c213f1d473_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c79a17ca3cf62ddbf96cc9aff92cce630bdd0e561b252106463978c9d2a090e = $this->env->getExtension("native_profiler");
        $__internal_3c79a17ca3cf62ddbf96cc9aff92cce630bdd0e561b252106463978c9d2a090e->enter($__internal_3c79a17ca3cf62ddbf96cc9aff92cce630bdd0e561b252106463978c9d2a090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("grupos_index");
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
        
        $__internal_3c79a17ca3cf62ddbf96cc9aff92cce630bdd0e561b252106463978c9d2a090e->leave($__internal_3c79a17ca3cf62ddbf96cc9aff92cce630bdd0e561b252106463978c9d2a090e_prof);

    }

    public function getTemplateName()
    {
        return "grupos/edit.html.twig";
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
/*     <h1>Grupos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
