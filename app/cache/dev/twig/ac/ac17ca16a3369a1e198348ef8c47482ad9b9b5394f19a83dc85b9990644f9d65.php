<?php

/* :periodos:new.html.twig */
class __TwigTemplate_34ecfd85c6b9fd5ae014a23c86ec39ce4f3c5a49ca6eb3bae394c60919ab3e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":periodos:new.html.twig", 1);
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
        $__internal_f39312cb20f31058d478bec0007cf7670b2f82010725cce9049d67dbebd21898 = $this->env->getExtension("native_profiler");
        $__internal_f39312cb20f31058d478bec0007cf7670b2f82010725cce9049d67dbebd21898->enter($__internal_f39312cb20f31058d478bec0007cf7670b2f82010725cce9049d67dbebd21898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":periodos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39312cb20f31058d478bec0007cf7670b2f82010725cce9049d67dbebd21898->leave($__internal_f39312cb20f31058d478bec0007cf7670b2f82010725cce9049d67dbebd21898_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eef6b5d833443644942f485a06e41bc207926f730775b6f6c005264eb9741f73 = $this->env->getExtension("native_profiler");
        $__internal_eef6b5d833443644942f485a06e41bc207926f730775b6f6c005264eb9741f73->enter($__internal_eef6b5d833443644942f485a06e41bc207926f730775b6f6c005264eb9741f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("periodos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_eef6b5d833443644942f485a06e41bc207926f730775b6f6c005264eb9741f73->leave($__internal_eef6b5d833443644942f485a06e41bc207926f730775b6f6c005264eb9741f73_prof);

    }

    public function getTemplateName()
    {
        return ":periodos:new.html.twig";
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
/*     <h1>Periodos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('periodos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
