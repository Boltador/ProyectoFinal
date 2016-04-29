<?php

/* temas/new.html.twig */
class __TwigTemplate_eb5d37a3fdb3c634170c78f6e343a4287b1ebc2ec4b6678b03e1e2623fc2986f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "temas/new.html.twig", 1);
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
        $__internal_fd977cbc3eb8d6e321edcd9780fdb44c252daafe4dd43042df33c0faa45b7525 = $this->env->getExtension("native_profiler");
        $__internal_fd977cbc3eb8d6e321edcd9780fdb44c252daafe4dd43042df33c0faa45b7525->enter($__internal_fd977cbc3eb8d6e321edcd9780fdb44c252daafe4dd43042df33c0faa45b7525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "temas/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd977cbc3eb8d6e321edcd9780fdb44c252daafe4dd43042df33c0faa45b7525->leave($__internal_fd977cbc3eb8d6e321edcd9780fdb44c252daafe4dd43042df33c0faa45b7525_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8756fe07cf2dd510e42a6f5bb412a6c768a18c4ea2a2e3df1f3abee5e30a5584 = $this->env->getExtension("native_profiler");
        $__internal_8756fe07cf2dd510e42a6f5bb412a6c768a18c4ea2a2e3df1f3abee5e30a5584->enter($__internal_8756fe07cf2dd510e42a6f5bb412a6c768a18c4ea2a2e3df1f3abee5e30a5584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas creation</h1>

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
        
        $__internal_8756fe07cf2dd510e42a6f5bb412a6c768a18c4ea2a2e3df1f3abee5e30a5584->leave($__internal_8756fe07cf2dd510e42a6f5bb412a6c768a18c4ea2a2e3df1f3abee5e30a5584_prof);

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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Temas creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
