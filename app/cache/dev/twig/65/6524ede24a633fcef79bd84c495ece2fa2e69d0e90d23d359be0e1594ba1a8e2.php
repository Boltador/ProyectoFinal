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
        $__internal_bd5400c40d13357f35de6e19c5c12308fed75f6b431685d971a254b8773bd752 = $this->env->getExtension("native_profiler");
        $__internal_bd5400c40d13357f35de6e19c5c12308fed75f6b431685d971a254b8773bd752->enter($__internal_bd5400c40d13357f35de6e19c5c12308fed75f6b431685d971a254b8773bd752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd5400c40d13357f35de6e19c5c12308fed75f6b431685d971a254b8773bd752->leave($__internal_bd5400c40d13357f35de6e19c5c12308fed75f6b431685d971a254b8773bd752_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0a7855a214fca172fe074144d401021f0112d046097d4c24cc1ba0617391ffd = $this->env->getExtension("native_profiler");
        $__internal_a0a7855a214fca172fe074144d401021f0112d046097d4c24cc1ba0617391ffd->enter($__internal_a0a7855a214fca172fe074144d401021f0112d046097d4c24cc1ba0617391ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_a0a7855a214fca172fe074144d401021f0112d046097d4c24cc1ba0617391ffd->leave($__internal_a0a7855a214fca172fe074144d401021f0112d046097d4c24cc1ba0617391ffd_prof);

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
