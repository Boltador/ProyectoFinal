<?php

/* planeadores/edit.html.twig */
class __TwigTemplate_fd13da796566b9fc793a5c62af32983317fe2b7549253d6327cdc8be34d8280e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/edit.html.twig", 1);
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
        $__internal_c30b83833ed05f822b81b4d1d2b3af86a0f07081e7aa17becfc5e0f53af7cc58 = $this->env->getExtension("native_profiler");
        $__internal_c30b83833ed05f822b81b4d1d2b3af86a0f07081e7aa17becfc5e0f53af7cc58->enter($__internal_c30b83833ed05f822b81b4d1d2b3af86a0f07081e7aa17becfc5e0f53af7cc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30b83833ed05f822b81b4d1d2b3af86a0f07081e7aa17becfc5e0f53af7cc58->leave($__internal_c30b83833ed05f822b81b4d1d2b3af86a0f07081e7aa17becfc5e0f53af7cc58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3594c04339f4c3bfff45998937a780f579dcfc1cae72d1ed8a931bc0495b1c75 = $this->env->getExtension("native_profiler");
        $__internal_3594c04339f4c3bfff45998937a780f579dcfc1cae72d1ed8a931bc0495b1c75->enter($__internal_3594c04339f4c3bfff45998937a780f579dcfc1cae72d1ed8a931bc0495b1c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
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
        
        $__internal_3594c04339f4c3bfff45998937a780f579dcfc1cae72d1ed8a931bc0495b1c75->leave($__internal_3594c04339f4c3bfff45998937a780f579dcfc1cae72d1ed8a931bc0495b1c75_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/edit.html.twig";
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
/*     <h1>Planeadores edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
