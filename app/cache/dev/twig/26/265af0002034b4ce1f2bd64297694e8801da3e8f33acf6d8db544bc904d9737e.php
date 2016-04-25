<?php

/* :grupos:new.html.twig */
class __TwigTemplate_633529f2bcce9decf599937d92b7d85304cf80ad849507ad6ce4dca59f98d2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grupos:new.html.twig", 1);
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
        $__internal_647ff73d58585f36f995c1b8b7de11b9ca491483b3f2000386b28568c0cac39b = $this->env->getExtension("native_profiler");
        $__internal_647ff73d58585f36f995c1b8b7de11b9ca491483b3f2000386b28568c0cac39b->enter($__internal_647ff73d58585f36f995c1b8b7de11b9ca491483b3f2000386b28568c0cac39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grupos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_647ff73d58585f36f995c1b8b7de11b9ca491483b3f2000386b28568c0cac39b->leave($__internal_647ff73d58585f36f995c1b8b7de11b9ca491483b3f2000386b28568c0cac39b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6071aa334dea62b28d49ffea2d124d8f45f7ed2d2d7b93d18369bb567e98401 = $this->env->getExtension("native_profiler");
        $__internal_f6071aa334dea62b28d49ffea2d124d8f45f7ed2d2d7b93d18369bb567e98401->enter($__internal_f6071aa334dea62b28d49ffea2d124d8f45f7ed2d2d7b93d18369bb567e98401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("grupos_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f6071aa334dea62b28d49ffea2d124d8f45f7ed2d2d7b93d18369bb567e98401->leave($__internal_f6071aa334dea62b28d49ffea2d124d8f45f7ed2d2d7b93d18369bb567e98401_prof);

    }

    public function getTemplateName()
    {
        return ":grupos:new.html.twig";
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
/*     <h1>Grupos creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
