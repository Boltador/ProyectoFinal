<?php

/* temas/new.html.twig */
class __TwigTemplate_eb5d37a3fdb3c634170c78f6e343a4287b1ebc2ec4b6678b03e1e2623fc2986f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "temas/new.html.twig", 1);
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
        $__internal_7788b1b492e0c3b781847ff7016960ec9dba90ff6afab3c1d886161f0617f7aa = $this->env->getExtension("native_profiler");
        $__internal_7788b1b492e0c3b781847ff7016960ec9dba90ff6afab3c1d886161f0617f7aa->enter($__internal_7788b1b492e0c3b781847ff7016960ec9dba90ff6afab3c1d886161f0617f7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "temas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7788b1b492e0c3b781847ff7016960ec9dba90ff6afab3c1d886161f0617f7aa->leave($__internal_7788b1b492e0c3b781847ff7016960ec9dba90ff6afab3c1d886161f0617f7aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11fc2ae16f2e61bc0352c7920e22e077c993d735ad843a60e030f48af50c9ef = $this->env->getExtension("native_profiler");
        $__internal_f11fc2ae16f2e61bc0352c7920e22e077c993d735ad843a60e030f48af50c9ef->enter($__internal_f11fc2ae16f2e61bc0352c7920e22e077c993d735ad843a60e030f48af50c9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f11fc2ae16f2e61bc0352c7920e22e077c993d735ad843a60e030f48af50c9ef->leave($__internal_f11fc2ae16f2e61bc0352c7920e22e077c993d735ad843a60e030f48af50c9ef_prof);

    }

    public function getTemplateName()
    {
        return "temas/new.html.twig";
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
