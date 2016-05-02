<?php

/* :matriculas:new.html.twig */
class __TwigTemplate_c74ab37c0e0030d29fb35b5d9811a33a45b3451f05c5a1020a2eb28f9085107f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:new.html.twig", 1);
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
        $__internal_c009d89fd13b5d6c118d269d16796c5ada66d57e6a91d20ee9ce162daad0c78c = $this->env->getExtension("native_profiler");
        $__internal_c009d89fd13b5d6c118d269d16796c5ada66d57e6a91d20ee9ce162daad0c78c->enter($__internal_c009d89fd13b5d6c118d269d16796c5ada66d57e6a91d20ee9ce162daad0c78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c009d89fd13b5d6c118d269d16796c5ada66d57e6a91d20ee9ce162daad0c78c->leave($__internal_c009d89fd13b5d6c118d269d16796c5ada66d57e6a91d20ee9ce162daad0c78c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_336a6db468358c09396547e24232da9a13046c69b86f106ddaf12091d76c4a01 = $this->env->getExtension("native_profiler");
        $__internal_336a6db468358c09396547e24232da9a13046c69b86f106ddaf12091d76c4a01->enter($__internal_336a6db468358c09396547e24232da9a13046c69b86f106ddaf12091d76c4a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_336a6db468358c09396547e24232da9a13046c69b86f106ddaf12091d76c4a01->leave($__internal_336a6db468358c09396547e24232da9a13046c69b86f106ddaf12091d76c4a01_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:new.html.twig";
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
