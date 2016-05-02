<?php

/* :alectivos:edit.html.twig */
class __TwigTemplate_eb215e3330129c47e5edade6f4d56e525a74cf76185b9d938b5a25d065202407 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":alectivos:edit.html.twig", 1);
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
        $__internal_cd62ce908df05dbd242f6792928c12648922db1be694a66c4bbeb2f52953b8c0 = $this->env->getExtension("native_profiler");
        $__internal_cd62ce908df05dbd242f6792928c12648922db1be694a66c4bbeb2f52953b8c0->enter($__internal_cd62ce908df05dbd242f6792928c12648922db1be694a66c4bbeb2f52953b8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alectivos:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd62ce908df05dbd242f6792928c12648922db1be694a66c4bbeb2f52953b8c0->leave($__internal_cd62ce908df05dbd242f6792928c12648922db1be694a66c4bbeb2f52953b8c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a24982db99847e8db5352ae25f21f17f3c087331bac7ec39349fa8b83645964 = $this->env->getExtension("native_profiler");
        $__internal_1a24982db99847e8db5352ae25f21f17f3c087331bac7ec39349fa8b83645964->enter($__internal_1a24982db99847e8db5352ae25f21f17f3c087331bac7ec39349fa8b83645964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ALectivos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("alectivos_index");
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
        
        $__internal_1a24982db99847e8db5352ae25f21f17f3c087331bac7ec39349fa8b83645964->leave($__internal_1a24982db99847e8db5352ae25f21f17f3c087331bac7ec39349fa8b83645964_prof);

    }

    public function getTemplateName()
    {
        return ":alectivos:edit.html.twig";
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
/*     <h1>ALectivos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('alectivos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
