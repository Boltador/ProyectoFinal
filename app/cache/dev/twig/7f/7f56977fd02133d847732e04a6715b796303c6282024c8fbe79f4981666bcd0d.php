<?php

/* notas/edit.html.twig */
class __TwigTemplate_0c64c0ca73e9cd845e08355125d5fe5376dc5adef0ba0df25a5b56899f8597d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notas/edit.html.twig", 1);
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
        $__internal_f5ec7e4d0a753b6551cb1f1b71bd342a9c4265f3568884db1f1c07562651cb9b = $this->env->getExtension("native_profiler");
        $__internal_f5ec7e4d0a753b6551cb1f1b71bd342a9c4265f3568884db1f1c07562651cb9b->enter($__internal_f5ec7e4d0a753b6551cb1f1b71bd342a9c4265f3568884db1f1c07562651cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ec7e4d0a753b6551cb1f1b71bd342a9c4265f3568884db1f1c07562651cb9b->leave($__internal_f5ec7e4d0a753b6551cb1f1b71bd342a9c4265f3568884db1f1c07562651cb9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_315e8b0561cf033dbb57b832718a73abf2b46bed7127c110df46b7d5f09dc359 = $this->env->getExtension("native_profiler");
        $__internal_315e8b0561cf033dbb57b832718a73abf2b46bed7127c110df46b7d5f09dc359->enter($__internal_315e8b0561cf033dbb57b832718a73abf2b46bed7127c110df46b7d5f09dc359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_315e8b0561cf033dbb57b832718a73abf2b46bed7127c110df46b7d5f09dc359->leave($__internal_315e8b0561cf033dbb57b832718a73abf2b46bed7127c110df46b7d5f09dc359_prof);

    }

    public function getTemplateName()
    {
        return "notas/edit.html.twig";
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
