<?php

/* periodos/edit.html.twig */
class __TwigTemplate_dfec5922a4650d25210f17bb54f9b02ba852e8cf34c1cfc898cf2d48d7d1e9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periodos/edit.html.twig", 1);
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
        $__internal_8cd15182b5800e20718539e99289f8d6f928bd07bc5fdbfa5cdf30af59ff6e33 = $this->env->getExtension("native_profiler");
        $__internal_8cd15182b5800e20718539e99289f8d6f928bd07bc5fdbfa5cdf30af59ff6e33->enter($__internal_8cd15182b5800e20718539e99289f8d6f928bd07bc5fdbfa5cdf30af59ff6e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cd15182b5800e20718539e99289f8d6f928bd07bc5fdbfa5cdf30af59ff6e33->leave($__internal_8cd15182b5800e20718539e99289f8d6f928bd07bc5fdbfa5cdf30af59ff6e33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b8975edf15193901ae9f6de4fb55bd088e40ddd0d2f1ed24facae6384566fff = $this->env->getExtension("native_profiler");
        $__internal_0b8975edf15193901ae9f6de4fb55bd088e40ddd0d2f1ed24facae6384566fff->enter($__internal_0b8975edf15193901ae9f6de4fb55bd088e40ddd0d2f1ed24facae6384566fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b8975edf15193901ae9f6de4fb55bd088e40ddd0d2f1ed24facae6384566fff->leave($__internal_0b8975edf15193901ae9f6de4fb55bd088e40ddd0d2f1ed24facae6384566fff_prof);

    }

    public function getTemplateName()
    {
        return "periodos/edit.html.twig";
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
