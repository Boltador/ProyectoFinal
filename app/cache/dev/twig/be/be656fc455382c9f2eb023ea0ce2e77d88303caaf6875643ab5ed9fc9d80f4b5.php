<?php

/* acudientes/edit.html.twig */
class __TwigTemplate_833389c38e6f353fe29b317af12e8a2fdd253e951a42ad5fbbb29cec8231d46c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acudientes/edit.html.twig", 1);
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
        $__internal_391b45a5c3086a9b762061edc959f7486c483a6a6c2f4721afbe09ce51d22d75 = $this->env->getExtension("native_profiler");
        $__internal_391b45a5c3086a9b762061edc959f7486c483a6a6c2f4721afbe09ce51d22d75->enter($__internal_391b45a5c3086a9b762061edc959f7486c483a6a6c2f4721afbe09ce51d22d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391b45a5c3086a9b762061edc959f7486c483a6a6c2f4721afbe09ce51d22d75->leave($__internal_391b45a5c3086a9b762061edc959f7486c483a6a6c2f4721afbe09ce51d22d75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_896be1d4993a0238d5322e06fec4de4885d9a416622334b0e92504efabb770e0 = $this->env->getExtension("native_profiler");
        $__internal_896be1d4993a0238d5322e06fec4de4885d9a416622334b0e92504efabb770e0->enter($__internal_896be1d4993a0238d5322e06fec4de4885d9a416622334b0e92504efabb770e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
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
        
        $__internal_896be1d4993a0238d5322e06fec4de4885d9a416622334b0e92504efabb770e0->leave($__internal_896be1d4993a0238d5322e06fec4de4885d9a416622334b0e92504efabb770e0_prof);

    }

    public function getTemplateName()
    {
        return "acudientes/edit.html.twig";
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
/*     <h1>Acudientes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
