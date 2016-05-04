<?php

/* :planeadores:edit.html.twig */
class __TwigTemplate_8d40f2d761114b2357d19c56d4b6e6b54196f94a1d429c47a9d6e627be4cdf10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planeadores:edit.html.twig", 1);
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
        $__internal_0d730746f5a9c2b12b4ad806429bb717f7f1ac9f1c23fac799238f359f0e843f = $this->env->getExtension("native_profiler");
        $__internal_0d730746f5a9c2b12b4ad806429bb717f7f1ac9f1c23fac799238f359f0e843f->enter($__internal_0d730746f5a9c2b12b4ad806429bb717f7f1ac9f1c23fac799238f359f0e843f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planeadores:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d730746f5a9c2b12b4ad806429bb717f7f1ac9f1c23fac799238f359f0e843f->leave($__internal_0d730746f5a9c2b12b4ad806429bb717f7f1ac9f1c23fac799238f359f0e843f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d3631a096c35841522d350411221fc9b77f523fbeb3066dc145b65375becdf2 = $this->env->getExtension("native_profiler");
        $__internal_8d3631a096c35841522d350411221fc9b77f523fbeb3066dc145b65375becdf2->enter($__internal_8d3631a096c35841522d350411221fc9b77f523fbeb3066dc145b65375becdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8d3631a096c35841522d350411221fc9b77f523fbeb3066dc145b65375becdf2->leave($__internal_8d3631a096c35841522d350411221fc9b77f523fbeb3066dc145b65375becdf2_prof);

    }

    public function getTemplateName()
    {
        return ":planeadores:edit.html.twig";
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
