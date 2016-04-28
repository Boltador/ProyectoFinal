<?php

/* :temas:new.html.twig */
class __TwigTemplate_4626c3fa7829f922343fbc4daa92d3cb3e23928348855f401e7dea4eb01ed9e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", ":temas:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docente-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82eb4d050de3648289e9e8c504c493959c5211fff323c7551d7e5a4060fd7354 = $this->env->getExtension("native_profiler");
        $__internal_82eb4d050de3648289e9e8c504c493959c5211fff323c7551d7e5a4060fd7354->enter($__internal_82eb4d050de3648289e9e8c504c493959c5211fff323c7551d7e5a4060fd7354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":temas:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82eb4d050de3648289e9e8c504c493959c5211fff323c7551d7e5a4060fd7354->leave($__internal_82eb4d050de3648289e9e8c504c493959c5211fff323c7551d7e5a4060fd7354_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42eb3c7772dc9bc88774ee347f8417aaeb9c104b393d1e9d27465a46133cde37 = $this->env->getExtension("native_profiler");
        $__internal_42eb3c7772dc9bc88774ee347f8417aaeb9c104b393d1e9d27465a46133cde37->enter($__internal_42eb3c7772dc9bc88774ee347f8417aaeb9c104b393d1e9d27465a46133cde37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Temas creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("temas_index");
        echo "\">Back to the list</a>
    </li>
</ul>

";
        
        $__internal_42eb3c7772dc9bc88774ee347f8417aaeb9c104b393d1e9d27465a46133cde37->leave($__internal_42eb3c7772dc9bc88774ee347f8417aaeb9c104b393d1e9d27465a46133cde37_prof);

    }

    public function getTemplateName()
    {
        return ":temas:new.html.twig";
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
/* {% extends 'docente-base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Temas creation</h1>*/
/* */
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <input type="submit" value="Create" />*/
/* {{ form_end(form) }}*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
