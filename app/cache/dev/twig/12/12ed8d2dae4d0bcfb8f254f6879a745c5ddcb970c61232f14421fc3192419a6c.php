<?php

/* grados/edit.html.twig */
class __TwigTemplate_3b55b6e0ec51291fea4d6f3307586b8104f93eae89947ee7e07e2435c0b63a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grados/edit.html.twig", 1);
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
        $__internal_c271ca01cf07f442e6e6411db928adf215ae2339b7363dad1875550310faf2b8 = $this->env->getExtension("native_profiler");
        $__internal_c271ca01cf07f442e6e6411db928adf215ae2339b7363dad1875550310faf2b8->enter($__internal_c271ca01cf07f442e6e6411db928adf215ae2339b7363dad1875550310faf2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grados/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c271ca01cf07f442e6e6411db928adf215ae2339b7363dad1875550310faf2b8->leave($__internal_c271ca01cf07f442e6e6411db928adf215ae2339b7363dad1875550310faf2b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9808cd5fac00df907713e5d6fcf4e74ebc3e706745bb28569c81321cfe0c5923 = $this->env->getExtension("native_profiler");
        $__internal_9808cd5fac00df907713e5d6fcf4e74ebc3e706745bb28569c81321cfe0c5923->enter($__internal_9808cd5fac00df907713e5d6fcf4e74ebc3e706745bb28569c81321cfe0c5923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9808cd5fac00df907713e5d6fcf4e74ebc3e706745bb28569c81321cfe0c5923->leave($__internal_9808cd5fac00df907713e5d6fcf4e74ebc3e706745bb28569c81321cfe0c5923_prof);

    }

    public function getTemplateName()
    {
        return "grados/edit.html.twig";
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
