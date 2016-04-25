<?php

/* :competencias:edit.html.twig */
class __TwigTemplate_ce9838a3eaf84260c249c608e0693f831a6b483ada948ed9b4cf2824d955e521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":competencias:edit.html.twig", 1);
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
        $__internal_536f05715a2073c9a2fe42230ee11330ee41a4c04f03d1920be012791438d9be = $this->env->getExtension("native_profiler");
        $__internal_536f05715a2073c9a2fe42230ee11330ee41a4c04f03d1920be012791438d9be->enter($__internal_536f05715a2073c9a2fe42230ee11330ee41a4c04f03d1920be012791438d9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":competencias:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_536f05715a2073c9a2fe42230ee11330ee41a4c04f03d1920be012791438d9be->leave($__internal_536f05715a2073c9a2fe42230ee11330ee41a4c04f03d1920be012791438d9be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10fceb9b5b8a165cd0439484f603504a7a2921609e96f6f56c86c7cbac5f7f68 = $this->env->getExtension("native_profiler");
        $__internal_10fceb9b5b8a165cd0439484f603504a7a2921609e96f6f56c86c7cbac5f7f68->enter($__internal_10fceb9b5b8a165cd0439484f603504a7a2921609e96f6f56c86c7cbac5f7f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10fceb9b5b8a165cd0439484f603504a7a2921609e96f6f56c86c7cbac5f7f68->leave($__internal_10fceb9b5b8a165cd0439484f603504a7a2921609e96f6f56c86c7cbac5f7f68_prof);

    }

    public function getTemplateName()
    {
        return ":competencias:edit.html.twig";
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
