<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6af1e5dd6ccb345b7ff7abd7935e4f85c583e891a964e77576ec8b929418f4b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f88e78010be44fe8b4be64441dc5455e5dbdea679e61d4d0e0f9ec80d5c8be1 = $this->env->getExtension("native_profiler");
        $__internal_1f88e78010be44fe8b4be64441dc5455e5dbdea679e61d4d0e0f9ec80d5c8be1->enter($__internal_1f88e78010be44fe8b4be64441dc5455e5dbdea679e61d4d0e0f9ec80d5c8be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f88e78010be44fe8b4be64441dc5455e5dbdea679e61d4d0e0f9ec80d5c8be1->leave($__internal_1f88e78010be44fe8b4be64441dc5455e5dbdea679e61d4d0e0f9ec80d5c8be1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a22502a160d3f7225e3bf02f407e95a59b7c487991f654ee78556ed014986b13 = $this->env->getExtension("native_profiler");
        $__internal_a22502a160d3f7225e3bf02f407e95a59b7c487991f654ee78556ed014986b13->enter($__internal_a22502a160d3f7225e3bf02f407e95a59b7c487991f654ee78556ed014986b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a22502a160d3f7225e3bf02f407e95a59b7c487991f654ee78556ed014986b13->leave($__internal_a22502a160d3f7225e3bf02f407e95a59b7c487991f654ee78556ed014986b13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09a345ac0c6ed15a004d15f2944b540972e8b0086ad7dc0fabb05e2317bf1913 = $this->env->getExtension("native_profiler");
        $__internal_09a345ac0c6ed15a004d15f2944b540972e8b0086ad7dc0fabb05e2317bf1913->enter($__internal_09a345ac0c6ed15a004d15f2944b540972e8b0086ad7dc0fabb05e2317bf1913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_09a345ac0c6ed15a004d15f2944b540972e8b0086ad7dc0fabb05e2317bf1913->leave($__internal_09a345ac0c6ed15a004d15f2944b540972e8b0086ad7dc0fabb05e2317bf1913_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
