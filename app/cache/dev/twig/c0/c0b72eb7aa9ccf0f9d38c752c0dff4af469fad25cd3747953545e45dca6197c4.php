<?php

/* :coordinadores:new.html.twig */
class __TwigTemplate_c642fc82a330ca1618fcfdaa619951a0e688aa525508a6349655ebd564e5debb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":coordinadores:new.html.twig", 1);
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
        $__internal_831965b06dca79c8b6bce621831817d50b43c8e5fd048eb1fca48e8ca3bc699a = $this->env->getExtension("native_profiler");
        $__internal_831965b06dca79c8b6bce621831817d50b43c8e5fd048eb1fca48e8ca3bc699a->enter($__internal_831965b06dca79c8b6bce621831817d50b43c8e5fd048eb1fca48e8ca3bc699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":coordinadores:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831965b06dca79c8b6bce621831817d50b43c8e5fd048eb1fca48e8ca3bc699a->leave($__internal_831965b06dca79c8b6bce621831817d50b43c8e5fd048eb1fca48e8ca3bc699a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d9a534441a09a8c51dba57691b7338d2df96332b3f3e6e6761982445580c73d = $this->env->getExtension("native_profiler");
        $__internal_0d9a534441a09a8c51dba57691b7338d2df96332b3f3e6e6761982445580c73d->enter($__internal_0d9a534441a09a8c51dba57691b7338d2df96332b3f3e6e6761982445580c73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0d9a534441a09a8c51dba57691b7338d2df96332b3f3e6e6761982445580c73d->leave($__internal_0d9a534441a09a8c51dba57691b7338d2df96332b3f3e6e6761982445580c73d_prof);

    }

    public function getTemplateName()
    {
        return ":coordinadores:new.html.twig";
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
/*     <h1>Coordinadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
