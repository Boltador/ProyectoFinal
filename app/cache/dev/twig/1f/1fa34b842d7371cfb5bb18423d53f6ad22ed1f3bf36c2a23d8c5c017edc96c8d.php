<?php

/* :alectivos:new.html.twig */
class __TwigTemplate_d8f04754181854ebde5e6e90abba71a961017c95f2fb6198d47bc67ebc2824f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":alectivos:new.html.twig", 1);
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
        $__internal_f82997090615d999e068d00d3574a1572db62b4b8d0718526d9c622a87f39757 = $this->env->getExtension("native_profiler");
        $__internal_f82997090615d999e068d00d3574a1572db62b4b8d0718526d9c622a87f39757->enter($__internal_f82997090615d999e068d00d3574a1572db62b4b8d0718526d9c622a87f39757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alectivos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f82997090615d999e068d00d3574a1572db62b4b8d0718526d9c622a87f39757->leave($__internal_f82997090615d999e068d00d3574a1572db62b4b8d0718526d9c622a87f39757_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6953e9d5eed5041336dc6176e602877b56b363ff78ccf6107cd2acf5003cc16a = $this->env->getExtension("native_profiler");
        $__internal_6953e9d5eed5041336dc6176e602877b56b363ff78ccf6107cd2acf5003cc16a->enter($__internal_6953e9d5eed5041336dc6176e602877b56b363ff78ccf6107cd2acf5003cc16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6953e9d5eed5041336dc6176e602877b56b363ff78ccf6107cd2acf5003cc16a->leave($__internal_6953e9d5eed5041336dc6176e602877b56b363ff78ccf6107cd2acf5003cc16a_prof);

    }

    public function getTemplateName()
    {
        return ":alectivos:new.html.twig";
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
