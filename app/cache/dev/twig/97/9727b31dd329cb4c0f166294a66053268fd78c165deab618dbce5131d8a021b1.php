<?php

/* coordinadores/edit.html.twig */
class __TwigTemplate_15889e1cd4c379a76e0f67b94790541669c7271b063f91b9612084f8433a7f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinadores/edit.html.twig", 1);
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
        $__internal_576be034bbff1c894776eba17cbd9ce8b982e60004bdacdf0d7b38c26965d692 = $this->env->getExtension("native_profiler");
        $__internal_576be034bbff1c894776eba17cbd9ce8b982e60004bdacdf0d7b38c26965d692->enter($__internal_576be034bbff1c894776eba17cbd9ce8b982e60004bdacdf0d7b38c26965d692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_576be034bbff1c894776eba17cbd9ce8b982e60004bdacdf0d7b38c26965d692->leave($__internal_576be034bbff1c894776eba17cbd9ce8b982e60004bdacdf0d7b38c26965d692_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd86182d7308268b4c15da29e5154100f8b38b46b6b4327163e55e7752b68ae2 = $this->env->getExtension("native_profiler");
        $__internal_dd86182d7308268b4c15da29e5154100f8b38b46b6b4327163e55e7752b68ae2->enter($__internal_dd86182d7308268b4c15da29e5154100f8b38b46b6b4327163e55e7752b68ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd86182d7308268b4c15da29e5154100f8b38b46b6b4327163e55e7752b68ae2->leave($__internal_dd86182d7308268b4c15da29e5154100f8b38b46b6b4327163e55e7752b68ae2_prof);

    }

    public function getTemplateName()
    {
        return "coordinadores/edit.html.twig";
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
