<?php

/* alectivos/edit.html.twig */
class __TwigTemplate_523b3e69b3bb9fac08fefec8281abf126a52d51c273b572fd1d723ed962b6a2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alectivos/edit.html.twig", 1);
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
        $__internal_d75db8d7c7deff050d8cf7418b910297054ca6216dee9e37cc259e2049a7669b = $this->env->getExtension("native_profiler");
        $__internal_d75db8d7c7deff050d8cf7418b910297054ca6216dee9e37cc259e2049a7669b->enter($__internal_d75db8d7c7deff050d8cf7418b910297054ca6216dee9e37cc259e2049a7669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75db8d7c7deff050d8cf7418b910297054ca6216dee9e37cc259e2049a7669b->leave($__internal_d75db8d7c7deff050d8cf7418b910297054ca6216dee9e37cc259e2049a7669b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd36c3346fd6315c56a7b93ce9cfb91a137890944c54237a6f48c32bd745d841 = $this->env->getExtension("native_profiler");
        $__internal_bd36c3346fd6315c56a7b93ce9cfb91a137890944c54237a6f48c32bd745d841->enter($__internal_bd36c3346fd6315c56a7b93ce9cfb91a137890944c54237a6f48c32bd745d841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ALectivos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("alectivos_index");
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
        
        $__internal_bd36c3346fd6315c56a7b93ce9cfb91a137890944c54237a6f48c32bd745d841->leave($__internal_bd36c3346fd6315c56a7b93ce9cfb91a137890944c54237a6f48c32bd745d841_prof);

    }

    public function getTemplateName()
    {
        return "alectivos/edit.html.twig";
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
/*     <h1>ALectivos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('alectivos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
