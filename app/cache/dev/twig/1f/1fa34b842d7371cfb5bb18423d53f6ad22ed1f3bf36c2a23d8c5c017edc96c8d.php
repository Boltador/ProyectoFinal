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
        $__internal_cd0b07d4c0bacdfb33e3f00472bbcd6e3c91df9cc85b756461559dc95efb4d36 = $this->env->getExtension("native_profiler");
        $__internal_cd0b07d4c0bacdfb33e3f00472bbcd6e3c91df9cc85b756461559dc95efb4d36->enter($__internal_cd0b07d4c0bacdfb33e3f00472bbcd6e3c91df9cc85b756461559dc95efb4d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alectivos:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd0b07d4c0bacdfb33e3f00472bbcd6e3c91df9cc85b756461559dc95efb4d36->leave($__internal_cd0b07d4c0bacdfb33e3f00472bbcd6e3c91df9cc85b756461559dc95efb4d36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eda9599636a2087ae0062493d49971fc685dae3b3db649714d8f21353c8abcd = $this->env->getExtension("native_profiler");
        $__internal_5eda9599636a2087ae0062493d49971fc685dae3b3db649714d8f21353c8abcd->enter($__internal_5eda9599636a2087ae0062493d49971fc685dae3b3db649714d8f21353c8abcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5eda9599636a2087ae0062493d49971fc685dae3b3db649714d8f21353c8abcd->leave($__internal_5eda9599636a2087ae0062493d49971fc685dae3b3db649714d8f21353c8abcd_prof);

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
