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
        $__internal_b5ee6fe138f35f489015d84c21e530f52d709bfeb9c684a35a3f8d4ea9723a3c = $this->env->getExtension("native_profiler");
        $__internal_b5ee6fe138f35f489015d84c21e530f52d709bfeb9c684a35a3f8d4ea9723a3c->enter($__internal_b5ee6fe138f35f489015d84c21e530f52d709bfeb9c684a35a3f8d4ea9723a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5ee6fe138f35f489015d84c21e530f52d709bfeb9c684a35a3f8d4ea9723a3c->leave($__internal_b5ee6fe138f35f489015d84c21e530f52d709bfeb9c684a35a3f8d4ea9723a3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6d1db56a9a8c643fe9a1d146c868f1c34911e15e93e237cceef9d4d93b00424 = $this->env->getExtension("native_profiler");
        $__internal_d6d1db56a9a8c643fe9a1d146c868f1c34911e15e93e237cceef9d4d93b00424->enter($__internal_d6d1db56a9a8c643fe9a1d146c868f1c34911e15e93e237cceef9d4d93b00424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6d1db56a9a8c643fe9a1d146c868f1c34911e15e93e237cceef9d4d93b00424->leave($__internal_d6d1db56a9a8c643fe9a1d146c868f1c34911e15e93e237cceef9d4d93b00424_prof);

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
