<?php

/* alectivos/new.html.twig */
class __TwigTemplate_062908d0e2d8b9f8a23411070cba5aed8c2853d0855a6192f81ca9357b57b001 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alectivos/new.html.twig", 1);
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
        $__internal_5eab44edbe825cdcd5786c3382d1ef7f6e5abdfb5f7c2f24953df8fc98796792 = $this->env->getExtension("native_profiler");
        $__internal_5eab44edbe825cdcd5786c3382d1ef7f6e5abdfb5f7c2f24953df8fc98796792->enter($__internal_5eab44edbe825cdcd5786c3382d1ef7f6e5abdfb5f7c2f24953df8fc98796792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eab44edbe825cdcd5786c3382d1ef7f6e5abdfb5f7c2f24953df8fc98796792->leave($__internal_5eab44edbe825cdcd5786c3382d1ef7f6e5abdfb5f7c2f24953df8fc98796792_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a4483f2e2fda0602611d6361a2741894f047db939e75b983c770f36f3223e7 = $this->env->getExtension("native_profiler");
        $__internal_e9a4483f2e2fda0602611d6361a2741894f047db939e75b983c770f36f3223e7->enter($__internal_e9a4483f2e2fda0602611d6361a2741894f047db939e75b983c770f36f3223e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>ALectivos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("alectivos_index");
        echo "\">Back to the list</a>
    </li>
</ul>
";
        
        $__internal_e9a4483f2e2fda0602611d6361a2741894f047db939e75b983c770f36f3223e7->leave($__internal_e9a4483f2e2fda0602611d6361a2741894f047db939e75b983c770f36f3223e7_prof);

    }

    public function getTemplateName()
    {
        return "alectivos/new.html.twig";
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
/* <h1>ALectivos creation</h1>*/
/* */
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* <input type="submit" value="Create" />*/
/* {{ form_end(form) }}*/
/* */
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('alectivos_index') }}">Back to the list</a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
