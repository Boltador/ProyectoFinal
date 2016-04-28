<?php

/* acudientes/new.html.twig */
class __TwigTemplate_34b8803d2fc9e500fed37006125008d72ed4ff75bcacb6e8fb1118f84123d02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acudientes/new.html.twig", 1);
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
        $__internal_335b7f5fa8514f33d68d4b27c20f9724eedb78b3ac006c23c9aeb1f18bc05233 = $this->env->getExtension("native_profiler");
        $__internal_335b7f5fa8514f33d68d4b27c20f9724eedb78b3ac006c23c9aeb1f18bc05233->enter($__internal_335b7f5fa8514f33d68d4b27c20f9724eedb78b3ac006c23c9aeb1f18bc05233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acudientes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335b7f5fa8514f33d68d4b27c20f9724eedb78b3ac006c23c9aeb1f18bc05233->leave($__internal_335b7f5fa8514f33d68d4b27c20f9724eedb78b3ac006c23c9aeb1f18bc05233_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88aeebe8b2822ae5c12fc28cadbddb90228cda0cbada7f5bf81a04056d037433 = $this->env->getExtension("native_profiler");
        $__internal_88aeebe8b2822ae5c12fc28cadbddb90228cda0cbada7f5bf81a04056d037433->enter($__internal_88aeebe8b2822ae5c12fc28cadbddb90228cda0cbada7f5bf81a04056d037433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_88aeebe8b2822ae5c12fc28cadbddb90228cda0cbada7f5bf81a04056d037433->leave($__internal_88aeebe8b2822ae5c12fc28cadbddb90228cda0cbada7f5bf81a04056d037433_prof);

    }

    public function getTemplateName()
    {
        return "acudientes/new.html.twig";
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
/*     <h1>Acudientes creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
