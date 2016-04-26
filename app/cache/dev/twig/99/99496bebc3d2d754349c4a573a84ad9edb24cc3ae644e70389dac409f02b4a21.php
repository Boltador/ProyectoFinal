<?php

/* :coordinadores:edit.html.twig */
class __TwigTemplate_4434c80aa66b21a1b459e0f12d1527db540c8bf8589f811750633465af3efd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:edit.html.twig", 1);
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
        $__internal_dee5f1cd63dd3993ce9b3fc1d062ddd77c03638316c7a81abb109aa87b1c22db = $this->env->getExtension("native_profiler");
        $__internal_dee5f1cd63dd3993ce9b3fc1d062ddd77c03638316c7a81abb109aa87b1c22db->enter($__internal_dee5f1cd63dd3993ce9b3fc1d062ddd77c03638316c7a81abb109aa87b1c22db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dee5f1cd63dd3993ce9b3fc1d062ddd77c03638316c7a81abb109aa87b1c22db->leave($__internal_dee5f1cd63dd3993ce9b3fc1d062ddd77c03638316c7a81abb109aa87b1c22db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d7303468189a21a3b99292aa15c4aa8f52c09f176455f97cbdadeb60809e8d = $this->env->getExtension("native_profiler");
        $__internal_f2d7303468189a21a3b99292aa15c4aa8f52c09f176455f97cbdadeb60809e8d->enter($__internal_f2d7303468189a21a3b99292aa15c4aa8f52c09f176455f97cbdadeb60809e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f2d7303468189a21a3b99292aa15c4aa8f52c09f176455f97cbdadeb60809e8d->leave($__internal_f2d7303468189a21a3b99292aa15c4aa8f52c09f176455f97cbdadeb60809e8d_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:edit.html.twig";
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
