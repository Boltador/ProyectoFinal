<?php

/* :docentes:edit.html.twig */
class __TwigTemplate_f449943b0a9a41c957ef1f5a205d2befd86b5ad07bda6022b9ca36ebcb57597f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":docentes:edit.html.twig", 1);
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
        $__internal_ac0d05250d3b89aaa0dd481f3a9b10269d833897fad38c914ee1b6861f28f9b3 = $this->env->getExtension("native_profiler");
        $__internal_ac0d05250d3b89aaa0dd481f3a9b10269d833897fad38c914ee1b6861f28f9b3->enter($__internal_ac0d05250d3b89aaa0dd481f3a9b10269d833897fad38c914ee1b6861f28f9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":docentes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac0d05250d3b89aaa0dd481f3a9b10269d833897fad38c914ee1b6861f28f9b3->leave($__internal_ac0d05250d3b89aaa0dd481f3a9b10269d833897fad38c914ee1b6861f28f9b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b15737207989a86c4919d45214ed128de6f8854dbf8e3b3f52f8edade69cf238 = $this->env->getExtension("native_profiler");
        $__internal_b15737207989a86c4919d45214ed128de6f8854dbf8e3b3f52f8edade69cf238->enter($__internal_b15737207989a86c4919d45214ed128de6f8854dbf8e3b3f52f8edade69cf238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("docentes_index");
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
        
        $__internal_b15737207989a86c4919d45214ed128de6f8854dbf8e3b3f52f8edade69cf238->leave($__internal_b15737207989a86c4919d45214ed128de6f8854dbf8e3b3f52f8edade69cf238_prof);

    }

    public function getTemplateName()
    {
        return ":docentes:edit.html.twig";
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
/*     <h1>Docentes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
