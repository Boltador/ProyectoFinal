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
        $__internal_2430bba4382d0844798cb3f13cb97cdb8332ce0bb68335d94cb467e976bac05f = $this->env->getExtension("native_profiler");
        $__internal_2430bba4382d0844798cb3f13cb97cdb8332ce0bb68335d94cb467e976bac05f->enter($__internal_2430bba4382d0844798cb3f13cb97cdb8332ce0bb68335d94cb467e976bac05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2430bba4382d0844798cb3f13cb97cdb8332ce0bb68335d94cb467e976bac05f->leave($__internal_2430bba4382d0844798cb3f13cb97cdb8332ce0bb68335d94cb467e976bac05f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a76b231d5a5f2125a6e89a9f1906e9861e1f3a75806977f2d0664a30da1c3bfa = $this->env->getExtension("native_profiler");
        $__internal_a76b231d5a5f2125a6e89a9f1906e9861e1f3a75806977f2d0664a30da1c3bfa->enter($__internal_a76b231d5a5f2125a6e89a9f1906e9861e1f3a75806977f2d0664a30da1c3bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a76b231d5a5f2125a6e89a9f1906e9861e1f3a75806977f2d0664a30da1c3bfa->leave($__internal_a76b231d5a5f2125a6e89a9f1906e9861e1f3a75806977f2d0664a30da1c3bfa_prof);

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
