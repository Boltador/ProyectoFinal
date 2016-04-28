<?php

/* :periodos:edit.html.twig */
class __TwigTemplate_783fe0af289afd789cdac175b07ac2851b411e2ff97e3d584d9c371c79a23e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":periodos:edit.html.twig", 1);
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
        $__internal_b993d89efc49ae94117dd4ae748d63051fab09a90af91ecf17e7e722dc6406c8 = $this->env->getExtension("native_profiler");
        $__internal_b993d89efc49ae94117dd4ae748d63051fab09a90af91ecf17e7e722dc6406c8->enter($__internal_b993d89efc49ae94117dd4ae748d63051fab09a90af91ecf17e7e722dc6406c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":periodos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b993d89efc49ae94117dd4ae748d63051fab09a90af91ecf17e7e722dc6406c8->leave($__internal_b993d89efc49ae94117dd4ae748d63051fab09a90af91ecf17e7e722dc6406c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_773f2c189aeb56586164a8d0ea7e91bb3fbe97353b7784661fc8810f949425b9 = $this->env->getExtension("native_profiler");
        $__internal_773f2c189aeb56586164a8d0ea7e91bb3fbe97353b7784661fc8810f949425b9->enter($__internal_773f2c189aeb56586164a8d0ea7e91bb3fbe97353b7784661fc8810f949425b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("periodos_index");
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
        
        $__internal_773f2c189aeb56586164a8d0ea7e91bb3fbe97353b7784661fc8810f949425b9->leave($__internal_773f2c189aeb56586164a8d0ea7e91bb3fbe97353b7784661fc8810f949425b9_prof);

    }

    public function getTemplateName()
    {
        return ":periodos:edit.html.twig";
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
/*     <h1>Periodos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
