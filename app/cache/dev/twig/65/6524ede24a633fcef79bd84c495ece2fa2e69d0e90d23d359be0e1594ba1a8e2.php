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
        $__internal_a2450f72e28284d240232abb384e338c809c00d70fe694328e191b968722f446 = $this->env->getExtension("native_profiler");
        $__internal_a2450f72e28284d240232abb384e338c809c00d70fe694328e191b968722f446->enter($__internal_a2450f72e28284d240232abb384e338c809c00d70fe694328e191b968722f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2450f72e28284d240232abb384e338c809c00d70fe694328e191b968722f446->leave($__internal_a2450f72e28284d240232abb384e338c809c00d70fe694328e191b968722f446_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e32fb59f1931af10a03098e6e2cc20b26b1924e0f6c25b0eaa0a5f2f92bf3a6 = $this->env->getExtension("native_profiler");
        $__internal_0e32fb59f1931af10a03098e6e2cc20b26b1924e0f6c25b0eaa0a5f2f92bf3a6->enter($__internal_0e32fb59f1931af10a03098e6e2cc20b26b1924e0f6c25b0eaa0a5f2f92bf3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_0e32fb59f1931af10a03098e6e2cc20b26b1924e0f6c25b0eaa0a5f2f92bf3a6->leave($__internal_0e32fb59f1931af10a03098e6e2cc20b26b1924e0f6c25b0eaa0a5f2f92bf3a6_prof);

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
