<?php

/* :asignaturas:edit.html.twig */
class __TwigTemplate_cec4e7df295f480cea5f17c74d0d03e561964ed25a9fc5a764e0a5e728b60f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaturas:edit.html.twig", 1);
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
        $__internal_c3232d5e59a9f81c2b521ee077980c6afa0b8bc21ba1e21327614ad807b020c0 = $this->env->getExtension("native_profiler");
        $__internal_c3232d5e59a9f81c2b521ee077980c6afa0b8bc21ba1e21327614ad807b020c0->enter($__internal_c3232d5e59a9f81c2b521ee077980c6afa0b8bc21ba1e21327614ad807b020c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3232d5e59a9f81c2b521ee077980c6afa0b8bc21ba1e21327614ad807b020c0->leave($__internal_c3232d5e59a9f81c2b521ee077980c6afa0b8bc21ba1e21327614ad807b020c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74ccaf8827d190682b404523129ccc7c30f26ac42039eab87fb5225435d16e3d = $this->env->getExtension("native_profiler");
        $__internal_74ccaf8827d190682b404523129ccc7c30f26ac42039eab87fb5225435d16e3d->enter($__internal_74ccaf8827d190682b404523129ccc7c30f26ac42039eab87fb5225435d16e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("asignaturas_index");
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
        
        $__internal_74ccaf8827d190682b404523129ccc7c30f26ac42039eab87fb5225435d16e3d->leave($__internal_74ccaf8827d190682b404523129ccc7c30f26ac42039eab87fb5225435d16e3d_prof);

    }

    public function getTemplateName()
    {
        return ":asignaturas:edit.html.twig";
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
/*     <h1>Asignaturas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
