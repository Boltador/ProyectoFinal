<?php

/* :matriculas:edit.html.twig */
class __TwigTemplate_2bfea9edc7f55a7c4e297c6e13cf992553a8c70fb68cccc4f18ea9f731ef62f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:edit.html.twig", 1);
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
        $__internal_5da04227b02ab5474fa59d4a331410e1c578de4b3ac887b1445cff6c7a2ce032 = $this->env->getExtension("native_profiler");
        $__internal_5da04227b02ab5474fa59d4a331410e1c578de4b3ac887b1445cff6c7a2ce032->enter($__internal_5da04227b02ab5474fa59d4a331410e1c578de4b3ac887b1445cff6c7a2ce032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da04227b02ab5474fa59d4a331410e1c578de4b3ac887b1445cff6c7a2ce032->leave($__internal_5da04227b02ab5474fa59d4a331410e1c578de4b3ac887b1445cff6c7a2ce032_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5f64e6e5d555b26352764742e9bb1c3fb4d680b9884b30e5f54486ecac5c0a1 = $this->env->getExtension("native_profiler");
        $__internal_a5f64e6e5d555b26352764742e9bb1c3fb4d680b9884b30e5f54486ecac5c0a1->enter($__internal_a5f64e6e5d555b26352764742e9bb1c3fb4d680b9884b30e5f54486ecac5c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a5f64e6e5d555b26352764742e9bb1c3fb4d680b9884b30e5f54486ecac5c0a1->leave($__internal_a5f64e6e5d555b26352764742e9bb1c3fb4d680b9884b30e5f54486ecac5c0a1_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:edit.html.twig";
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
