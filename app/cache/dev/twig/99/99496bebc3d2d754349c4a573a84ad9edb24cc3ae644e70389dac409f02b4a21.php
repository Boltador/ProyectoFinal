<?php

/* :coordinadores:edit.html.twig */
class __TwigTemplate_4434c80aa66b21a1b459e0f12d1527db540c8bf8589f811750633465af3efd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:edit.html.twig", 1);
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
        $__internal_16ea1aa86f59a7a0e934fac31b9d376e81675825fd9a0499cb63976c5b5a976e = $this->env->getExtension("native_profiler");
        $__internal_16ea1aa86f59a7a0e934fac31b9d376e81675825fd9a0499cb63976c5b5a976e->enter($__internal_16ea1aa86f59a7a0e934fac31b9d376e81675825fd9a0499cb63976c5b5a976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ea1aa86f59a7a0e934fac31b9d376e81675825fd9a0499cb63976c5b5a976e->leave($__internal_16ea1aa86f59a7a0e934fac31b9d376e81675825fd9a0499cb63976c5b5a976e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03d2b1335b94ca426fc46d48e8370da26cb52e864cc8107b0f3f9e7bffee0e27 = $this->env->getExtension("native_profiler");
        $__internal_03d2b1335b94ca426fc46d48e8370da26cb52e864cc8107b0f3f9e7bffee0e27->enter($__internal_03d2b1335b94ca426fc46d48e8370da26cb52e864cc8107b0f3f9e7bffee0e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
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
        
        $__internal_03d2b1335b94ca426fc46d48e8370da26cb52e864cc8107b0f3f9e7bffee0e27->leave($__internal_03d2b1335b94ca426fc46d48e8370da26cb52e864cc8107b0f3f9e7bffee0e27_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:edit.html.twig";
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
/*     <h1>Coordinadores edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
