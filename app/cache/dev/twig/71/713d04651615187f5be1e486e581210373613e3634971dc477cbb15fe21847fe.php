<?php

/* :estudiantes:edit.html.twig */
class __TwigTemplate_185cea0211f3f3a811903e08ea8f168b52a21bc5cea5db7abb5d46f639ef71c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estudiantes:edit.html.twig", 1);
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
        $__internal_2d371cbb3e8281b54511abdb52fd76a6d03191b12b3b41259e3c5a0b5a64b558 = $this->env->getExtension("native_profiler");
        $__internal_2d371cbb3e8281b54511abdb52fd76a6d03191b12b3b41259e3c5a0b5a64b558->enter($__internal_2d371cbb3e8281b54511abdb52fd76a6d03191b12b3b41259e3c5a0b5a64b558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d371cbb3e8281b54511abdb52fd76a6d03191b12b3b41259e3c5a0b5a64b558->leave($__internal_2d371cbb3e8281b54511abdb52fd76a6d03191b12b3b41259e3c5a0b5a64b558_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c29684f730b79fff6475aa1544d7a085f72892e7696e76a53ca96cdaf4923b2f = $this->env->getExtension("native_profiler");
        $__internal_c29684f730b79fff6475aa1544d7a085f72892e7696e76a53ca96cdaf4923b2f->enter($__internal_c29684f730b79fff6475aa1544d7a085f72892e7696e76a53ca96cdaf4923b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
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
        
        $__internal_c29684f730b79fff6475aa1544d7a085f72892e7696e76a53ca96cdaf4923b2f->leave($__internal_c29684f730b79fff6475aa1544d7a085f72892e7696e76a53ca96cdaf4923b2f_prof);

    }

    public function getTemplateName()
    {
        return ":estudiantes:edit.html.twig";
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
/*     <h1>Estudiantes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
