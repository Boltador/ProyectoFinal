<?php

/* matriculas/edit.html.twig */
class __TwigTemplate_2ff9b802230e4bd7203cb49822a88d0982afb87623d57f3a2f52319ccb2a53e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/edit.html.twig", 1);
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
        $__internal_8ae8ddcd63b7bafb94bfd680afa7267b3a186a77a0236f1fbf420232d2882795 = $this->env->getExtension("native_profiler");
        $__internal_8ae8ddcd63b7bafb94bfd680afa7267b3a186a77a0236f1fbf420232d2882795->enter($__internal_8ae8ddcd63b7bafb94bfd680afa7267b3a186a77a0236f1fbf420232d2882795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae8ddcd63b7bafb94bfd680afa7267b3a186a77a0236f1fbf420232d2882795->leave($__internal_8ae8ddcd63b7bafb94bfd680afa7267b3a186a77a0236f1fbf420232d2882795_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7463d599b0677adb922f2817e2891630e60956a3b60963ceee752f902f9b1cc = $this->env->getExtension("native_profiler");
        $__internal_f7463d599b0677adb922f2817e2891630e60956a3b60963ceee752f902f9b1cc->enter($__internal_f7463d599b0677adb922f2817e2891630e60956a3b60963ceee752f902f9b1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
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
        
        $__internal_f7463d599b0677adb922f2817e2891630e60956a3b60963ceee752f902f9b1cc->leave($__internal_f7463d599b0677adb922f2817e2891630e60956a3b60963ceee752f902f9b1cc_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/edit.html.twig";
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
/*     <h1>Matriculas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
