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
        $__internal_d6866dea634a16aa07e6c014e2fea96ca36c18ea4e3310d907d7fd33b6b181e2 = $this->env->getExtension("native_profiler");
        $__internal_d6866dea634a16aa07e6c014e2fea96ca36c18ea4e3310d907d7fd33b6b181e2->enter($__internal_d6866dea634a16aa07e6c014e2fea96ca36c18ea4e3310d907d7fd33b6b181e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":estudiantes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6866dea634a16aa07e6c014e2fea96ca36c18ea4e3310d907d7fd33b6b181e2->leave($__internal_d6866dea634a16aa07e6c014e2fea96ca36c18ea4e3310d907d7fd33b6b181e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a0051cf861ce1b28213923037df18bd652ca3cf3b438b6ad0d4359c67d5b3f2 = $this->env->getExtension("native_profiler");
        $__internal_2a0051cf861ce1b28213923037df18bd652ca3cf3b438b6ad0d4359c67d5b3f2->enter($__internal_2a0051cf861ce1b28213923037df18bd652ca3cf3b438b6ad0d4359c67d5b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a0051cf861ce1b28213923037df18bd652ca3cf3b438b6ad0d4359c67d5b3f2->leave($__internal_2a0051cf861ce1b28213923037df18bd652ca3cf3b438b6ad0d4359c67d5b3f2_prof);

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
