<?php

/* grupos/new.html.twig */
class __TwigTemplate_b64d5446b7d319d4561cb6852374b2d94b78ab848d1ec941039f04b92943324a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/new.html.twig", 1);
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
        $__internal_c250a3e24eaa0bd5a2fe53233f40e84b5d8d91a7a3e8039228b46e8c102157a0 = $this->env->getExtension("native_profiler");
        $__internal_c250a3e24eaa0bd5a2fe53233f40e84b5d8d91a7a3e8039228b46e8c102157a0->enter($__internal_c250a3e24eaa0bd5a2fe53233f40e84b5d8d91a7a3e8039228b46e8c102157a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c250a3e24eaa0bd5a2fe53233f40e84b5d8d91a7a3e8039228b46e8c102157a0->leave($__internal_c250a3e24eaa0bd5a2fe53233f40e84b5d8d91a7a3e8039228b46e8c102157a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65a1c5f3e49c39071a09d5e9ca61631f2d5a0efd1bc9ff22c166d1d1ac5048b8 = $this->env->getExtension("native_profiler");
        $__internal_65a1c5f3e49c39071a09d5e9ca61631f2d5a0efd1bc9ff22c166d1d1ac5048b8->enter($__internal_65a1c5f3e49c39071a09d5e9ca61631f2d5a0efd1bc9ff22c166d1d1ac5048b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("grupos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_65a1c5f3e49c39071a09d5e9ca61631f2d5a0efd1bc9ff22c166d1d1ac5048b8->leave($__internal_65a1c5f3e49c39071a09d5e9ca61631f2d5a0efd1bc9ff22c166d1d1ac5048b8_prof);

    }

    public function getTemplateName()
    {
        return "grupos/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Grupos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
