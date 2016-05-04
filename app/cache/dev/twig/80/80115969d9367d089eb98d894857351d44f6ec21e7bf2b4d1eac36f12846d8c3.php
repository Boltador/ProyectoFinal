<?php

/* :asignaciones:new.html.twig */
class __TwigTemplate_a5cfb3dd93531830fba2becad7f9b4789744f87bf58909c0f28df5aa1cb902f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaciones:new.html.twig", 1);
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
        $__internal_0e14b5eb30d06050d9900ebb63b6f2ee2127238c5c41249ef8f8513510d456c2 = $this->env->getExtension("native_profiler");
        $__internal_0e14b5eb30d06050d9900ebb63b6f2ee2127238c5c41249ef8f8513510d456c2->enter($__internal_0e14b5eb30d06050d9900ebb63b6f2ee2127238c5c41249ef8f8513510d456c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaciones:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e14b5eb30d06050d9900ebb63b6f2ee2127238c5c41249ef8f8513510d456c2->leave($__internal_0e14b5eb30d06050d9900ebb63b6f2ee2127238c5c41249ef8f8513510d456c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e1c02a3ea1059e1c76f905b15e329c767aa574f6ab956d549366e7be89133bc = $this->env->getExtension("native_profiler");
        $__internal_1e1c02a3ea1059e1c76f905b15e329c767aa574f6ab956d549366e7be89133bc->enter($__internal_1e1c02a3ea1059e1c76f905b15e329c767aa574f6ab956d549366e7be89133bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaciones creation</h1>

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
        // line 14
        echo $this->env->getExtension('routing')->getPath("asignaciones_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1e1c02a3ea1059e1c76f905b15e329c767aa574f6ab956d549366e7be89133bc->leave($__internal_1e1c02a3ea1059e1c76f905b15e329c767aa574f6ab956d549366e7be89133bc_prof);

    }

    public function getTemplateName()
    {
        return ":asignaciones:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Asignaciones creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaciones_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
