<?php

/* :temas:edit.html.twig */
class __TwigTemplate_5c3e27597a7eea24c7c0fdd56edcafbd20ee62a01aaa5b526028379c055fc602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":temas:edit.html.twig", 1);
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
        $__internal_2d6244a79c4f08a34773881d47d078d64104458842be1b2fe69c9419d61c8ba3 = $this->env->getExtension("native_profiler");
        $__internal_2d6244a79c4f08a34773881d47d078d64104458842be1b2fe69c9419d61c8ba3->enter($__internal_2d6244a79c4f08a34773881d47d078d64104458842be1b2fe69c9419d61c8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6244a79c4f08a34773881d47d078d64104458842be1b2fe69c9419d61c8ba3->leave($__internal_2d6244a79c4f08a34773881d47d078d64104458842be1b2fe69c9419d61c8ba3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f50f69c11cd912e11cffc15111c26629fcbcfa94cfe274db3fe1a0c5ce535450 = $this->env->getExtension("native_profiler");
        $__internal_f50f69c11cd912e11cffc15111c26629fcbcfa94cfe274db3fe1a0c5ce535450->enter($__internal_f50f69c11cd912e11cffc15111c26629fcbcfa94cfe274db3fe1a0c5ce535450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("temas_index");
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
        
        $__internal_f50f69c11cd912e11cffc15111c26629fcbcfa94cfe274db3fe1a0c5ce535450->leave($__internal_f50f69c11cd912e11cffc15111c26629fcbcfa94cfe274db3fe1a0c5ce535450_prof);

    }

    public function getTemplateName()
    {
        return ":temas:edit.html.twig";
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
/*     <h1>Temas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
