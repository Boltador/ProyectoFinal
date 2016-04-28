<?php

/* coordinadores/new.html.twig */
class __TwigTemplate_e9977973704e18b304decca172b4b65fea36f2a2dcd9d968b654c9de109d5010 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "coordinadores/new.html.twig", 1);
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
        $__internal_f59c95813d45f5b5509ad4af50c4372615723af6ec2c88a48c2c504396a5bcc9 = $this->env->getExtension("native_profiler");
        $__internal_f59c95813d45f5b5509ad4af50c4372615723af6ec2c88a48c2c504396a5bcc9->enter($__internal_f59c95813d45f5b5509ad4af50c4372615723af6ec2c88a48c2c504396a5bcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinadores/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59c95813d45f5b5509ad4af50c4372615723af6ec2c88a48c2c504396a5bcc9->leave($__internal_f59c95813d45f5b5509ad4af50c4372615723af6ec2c88a48c2c504396a5bcc9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e103e872ad83b3ce508efe77d92906c3292934cb40b8ee65ac1f1110e6d542e = $this->env->getExtension("native_profiler");
        $__internal_1e103e872ad83b3ce508efe77d92906c3292934cb40b8ee65ac1f1110e6d542e->enter($__internal_1e103e872ad83b3ce508efe77d92906c3292934cb40b8ee65ac1f1110e6d542e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Coordinadores creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("coordinadores_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1e103e872ad83b3ce508efe77d92906c3292934cb40b8ee65ac1f1110e6d542e->leave($__internal_1e103e872ad83b3ce508efe77d92906c3292934cb40b8ee65ac1f1110e6d542e_prof);

    }

    public function getTemplateName()
    {
        return "coordinadores/new.html.twig";
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
/*     <h1>Coordinadores creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('coordinadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
