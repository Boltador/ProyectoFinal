<?php

/* planeadores/edit.html.twig */
class __TwigTemplate_fd13da796566b9fc793a5c62af32983317fe2b7549253d6327cdc8be34d8280e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/edit.html.twig", 1);
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
        $__internal_cfcd41e50ea47d08ffbc91a1ced38b2ff29d487b50eec6f9c2f4f983366fc28b = $this->env->getExtension("native_profiler");
        $__internal_cfcd41e50ea47d08ffbc91a1ced38b2ff29d487b50eec6f9c2f4f983366fc28b->enter($__internal_cfcd41e50ea47d08ffbc91a1ced38b2ff29d487b50eec6f9c2f4f983366fc28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcd41e50ea47d08ffbc91a1ced38b2ff29d487b50eec6f9c2f4f983366fc28b->leave($__internal_cfcd41e50ea47d08ffbc91a1ced38b2ff29d487b50eec6f9c2f4f983366fc28b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f8b8a6aace12beba6277a0323d09d9410b4b611224ab3a8d8fdbfa20d4070f7 = $this->env->getExtension("native_profiler");
        $__internal_8f8b8a6aace12beba6277a0323d09d9410b4b611224ab3a8d8fdbfa20d4070f7->enter($__internal_8f8b8a6aace12beba6277a0323d09d9410b4b611224ab3a8d8fdbfa20d4070f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
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
        
        $__internal_8f8b8a6aace12beba6277a0323d09d9410b4b611224ab3a8d8fdbfa20d4070f7->leave($__internal_8f8b8a6aace12beba6277a0323d09d9410b4b611224ab3a8d8fdbfa20d4070f7_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/edit.html.twig";
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
/*     <h1>Planeadores edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
