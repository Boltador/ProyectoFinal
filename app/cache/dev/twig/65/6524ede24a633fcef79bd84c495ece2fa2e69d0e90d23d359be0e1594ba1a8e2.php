<?php

/* :notas:edit.html.twig */
class __TwigTemplate_63fa9dffc8a50cf4f8273e08a560bbf9a6ad70f11a9b1de380b4f07debcb3ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notas:edit.html.twig", 1);
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
        $__internal_4502fa25b8005bab3c3e17b8fac78a37ed0733d37f31d28b04b6a09a0741c4ae = $this->env->getExtension("native_profiler");
        $__internal_4502fa25b8005bab3c3e17b8fac78a37ed0733d37f31d28b04b6a09a0741c4ae->enter($__internal_4502fa25b8005bab3c3e17b8fac78a37ed0733d37f31d28b04b6a09a0741c4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4502fa25b8005bab3c3e17b8fac78a37ed0733d37f31d28b04b6a09a0741c4ae->leave($__internal_4502fa25b8005bab3c3e17b8fac78a37ed0733d37f31d28b04b6a09a0741c4ae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b882ebe785e9815aeb52dbebbd3fe13049958911ade49c5f773fe744dee49e1 = $this->env->getExtension("native_profiler");
        $__internal_2b882ebe785e9815aeb52dbebbd3fe13049958911ade49c5f773fe744dee49e1->enter($__internal_2b882ebe785e9815aeb52dbebbd3fe13049958911ade49c5f773fe744dee49e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_2b882ebe785e9815aeb52dbebbd3fe13049958911ade49c5f773fe744dee49e1->leave($__internal_2b882ebe785e9815aeb52dbebbd3fe13049958911ade49c5f773fe744dee49e1_prof);

    }

    public function getTemplateName()
    {
        return ":notas:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notas edit</h1>*/
/* */
/*     {# {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('notas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }} */
/*         </li>*/
/*     </ul> #}*/
/* {% endblock %}*/
/* */
