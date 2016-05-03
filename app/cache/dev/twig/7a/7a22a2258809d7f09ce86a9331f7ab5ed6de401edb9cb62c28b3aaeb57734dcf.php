<?php

/* competencias/edit.html.twig */
class __TwigTemplate_1e956fe8162184b95b70806e2e7c81b8e8a741bd67f6887020572166c3583fd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competencias/edit.html.twig", 1);
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
        $__internal_220ede27a7be0116f0c450b467e42f58d6ee94a1daeb51362c2b0e5297189ccf = $this->env->getExtension("native_profiler");
        $__internal_220ede27a7be0116f0c450b467e42f58d6ee94a1daeb51362c2b0e5297189ccf->enter($__internal_220ede27a7be0116f0c450b467e42f58d6ee94a1daeb51362c2b0e5297189ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competencias/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_220ede27a7be0116f0c450b467e42f58d6ee94a1daeb51362c2b0e5297189ccf->leave($__internal_220ede27a7be0116f0c450b467e42f58d6ee94a1daeb51362c2b0e5297189ccf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfa76f6758d1e3dc994c153c159facf4184b295d16af19ba4983cf38a5eab5f5 = $this->env->getExtension("native_profiler");
        $__internal_dfa76f6758d1e3dc994c153c159facf4184b295d16af19ba4983cf38a5eab5f5->enter($__internal_dfa76f6758d1e3dc994c153c159facf4184b295d16af19ba4983cf38a5eab5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("competencias_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dfa76f6758d1e3dc994c153c159facf4184b295d16af19ba4983cf38a5eab5f5->leave($__internal_dfa76f6758d1e3dc994c153c159facf4184b295d16af19ba4983cf38a5eab5f5_prof);

    }

    public function getTemplateName()
    {
        return "competencias/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Competencias edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competencias_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
