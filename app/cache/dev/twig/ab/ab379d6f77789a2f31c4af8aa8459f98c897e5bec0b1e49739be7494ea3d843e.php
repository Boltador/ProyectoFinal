<?php

/* :estudiantes:new.html.twig */
class __TwigTemplate_ad1bcdd25999af7ada2f761296f819ad1b2f9f28e0957eb375b29b51efce0a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":estudiantes:new.html.twig", 1);
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
        $__internal_d6333b9e552a9a57634ef5478fcec3d0be49da0f42c32d8fbb4755125c62eb30 = $this->env->getExtension("native_profiler");
        $__internal_d6333b9e552a9a57634ef5478fcec3d0be49da0f42c32d8fbb4755125c62eb30->enter($__internal_d6333b9e552a9a57634ef5478fcec3d0be49da0f42c32d8fbb4755125c62eb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6333b9e552a9a57634ef5478fcec3d0be49da0f42c32d8fbb4755125c62eb30->leave($__internal_d6333b9e552a9a57634ef5478fcec3d0be49da0f42c32d8fbb4755125c62eb30_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6cf490dec058c9471d4645049369aaf7e5e27c561d76c0939fd5af17ffb537b = $this->env->getExtension("native_profiler");
        $__internal_b6cf490dec058c9471d4645049369aaf7e5e27c561d76c0939fd5af17ffb537b->enter($__internal_b6cf490dec058c9471d4645049369aaf7e5e27c561d76c0939fd5af17ffb537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b6cf490dec058c9471d4645049369aaf7e5e27c561d76c0939fd5af17ffb537b->leave($__internal_b6cf490dec058c9471d4645049369aaf7e5e27c561d76c0939fd5af17ffb537b_prof);

    }

    public function getTemplateName()
    {
        return ":estudiantes:new.html.twig";
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
/*     <h1>Estudiantes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
