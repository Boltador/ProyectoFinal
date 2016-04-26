<?php

/* :asignaciones:edit.html.twig */
class __TwigTemplate_1b7436a8cbbae59749b41c53e8bb0797e88de0eacec15308aef16542227b403e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaciones:edit.html.twig", 1);
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
        $__internal_e5ff4d7bdffc367b580c6d617d76fb0272118cb781ad0c5783fdadd9d837009b = $this->env->getExtension("native_profiler");
        $__internal_e5ff4d7bdffc367b580c6d617d76fb0272118cb781ad0c5783fdadd9d837009b->enter($__internal_e5ff4d7bdffc367b580c6d617d76fb0272118cb781ad0c5783fdadd9d837009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaciones:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ff4d7bdffc367b580c6d617d76fb0272118cb781ad0c5783fdadd9d837009b->leave($__internal_e5ff4d7bdffc367b580c6d617d76fb0272118cb781ad0c5783fdadd9d837009b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6a24fed7617d9dbc9e077c0eef99466e098708b23a536a21721c57c5743ca35 = $this->env->getExtension("native_profiler");
        $__internal_b6a24fed7617d9dbc9e077c0eef99466e098708b23a536a21721c57c5743ca35->enter($__internal_b6a24fed7617d9dbc9e077c0eef99466e098708b23a536a21721c57c5743ca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
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
        
        $__internal_b6a24fed7617d9dbc9e077c0eef99466e098708b23a536a21721c57c5743ca35->leave($__internal_b6a24fed7617d9dbc9e077c0eef99466e098708b23a536a21721c57c5743ca35_prof);

    }

    public function getTemplateName()
    {
        return ":asignaciones:edit.html.twig";
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
/*     <h1>Asignaciones edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
