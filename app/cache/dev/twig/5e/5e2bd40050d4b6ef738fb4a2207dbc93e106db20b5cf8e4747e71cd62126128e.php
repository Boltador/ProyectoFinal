<?php

/* matriculas/new.html.twig */
class __TwigTemplate_bccdba1f1ff9f50d0a7757ca7a57a18621961c477e88c7b964fff7e86d202751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/new.html.twig", 1);
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
        $__internal_515e8057c447ecb439de75433587c363284a401613e6ff29ed1f4df3c7141f0a = $this->env->getExtension("native_profiler");
        $__internal_515e8057c447ecb439de75433587c363284a401613e6ff29ed1f4df3c7141f0a->enter($__internal_515e8057c447ecb439de75433587c363284a401613e6ff29ed1f4df3c7141f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515e8057c447ecb439de75433587c363284a401613e6ff29ed1f4df3c7141f0a->leave($__internal_515e8057c447ecb439de75433587c363284a401613e6ff29ed1f4df3c7141f0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b7c30ecf6c8cfa800f67d865cf3c213864965eaffa0b9ad3b61dc669c1dcb2b = $this->env->getExtension("native_profiler");
        $__internal_7b7c30ecf6c8cfa800f67d865cf3c213864965eaffa0b9ad3b61dc669c1dcb2b->enter($__internal_7b7c30ecf6c8cfa800f67d865cf3c213864965eaffa0b9ad3b61dc669c1dcb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7b7c30ecf6c8cfa800f67d865cf3c213864965eaffa0b9ad3b61dc669c1dcb2b->leave($__internal_7b7c30ecf6c8cfa800f67d865cf3c213864965eaffa0b9ad3b61dc669c1dcb2b_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/new.html.twig";
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
/*     <h1>Matriculas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
