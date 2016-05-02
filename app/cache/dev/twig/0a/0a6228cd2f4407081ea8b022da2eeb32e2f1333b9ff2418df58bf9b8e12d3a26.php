<?php

/* :grados:edit.html.twig */
class __TwigTemplate_747f629cb52f8475327a595614431a09d2c68de0bfb35b6cc19d7b0611a48c89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grados:edit.html.twig", 1);
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
        $__internal_c616634538fc8dcacacf7b6341998b21277a3c1409043b60bc3a5ec7ea5f5140 = $this->env->getExtension("native_profiler");
        $__internal_c616634538fc8dcacacf7b6341998b21277a3c1409043b60bc3a5ec7ea5f5140->enter($__internal_c616634538fc8dcacacf7b6341998b21277a3c1409043b60bc3a5ec7ea5f5140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grados:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c616634538fc8dcacacf7b6341998b21277a3c1409043b60bc3a5ec7ea5f5140->leave($__internal_c616634538fc8dcacacf7b6341998b21277a3c1409043b60bc3a5ec7ea5f5140_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7962119b8409f1b5624d3d473129bb8c0cbb89ba4c9a780a08761851e4cf7b3e = $this->env->getExtension("native_profiler");
        $__internal_7962119b8409f1b5624d3d473129bb8c0cbb89ba4c9a780a08761851e4cf7b3e->enter($__internal_7962119b8409f1b5624d3d473129bb8c0cbb89ba4c9a780a08761851e4cf7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grados edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("grados_index");
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
        
        $__internal_7962119b8409f1b5624d3d473129bb8c0cbb89ba4c9a780a08761851e4cf7b3e->leave($__internal_7962119b8409f1b5624d3d473129bb8c0cbb89ba4c9a780a08761851e4cf7b3e_prof);

    }

    public function getTemplateName()
    {
        return ":grados:edit.html.twig";
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
/*     <h1>Grados edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grados_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
