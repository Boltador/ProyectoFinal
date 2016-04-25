<?php

/* competencias/show.html.twig */
class __TwigTemplate_f278f6c13ed693111764e1dc4f11cc750403e586de47112cbe2d6ee5fd895b08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competencias/show.html.twig", 1);
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
        $__internal_e1b16199bf2e2842db9e5de7c54e19d8badf8d4a3ab227b385f625097492f0c4 = $this->env->getExtension("native_profiler");
        $__internal_e1b16199bf2e2842db9e5de7c54e19d8badf8d4a3ab227b385f625097492f0c4->enter($__internal_e1b16199bf2e2842db9e5de7c54e19d8badf8d4a3ab227b385f625097492f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competencias/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1b16199bf2e2842db9e5de7c54e19d8badf8d4a3ab227b385f625097492f0c4->leave($__internal_e1b16199bf2e2842db9e5de7c54e19d8badf8d4a3ab227b385f625097492f0c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69b7dca8a3224c0ae025e14259a725e96575b7dcb4eec31dbca97448677d3b6d = $this->env->getExtension("native_profiler");
        $__internal_69b7dca8a3224c0ae025e14259a725e96575b7dcb4eec31dbca97448677d3b6d->enter($__internal_69b7dca8a3224c0ae025e14259a725e96575b7dcb4eec31dbca97448677d3b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias</h1>

    <table>
        <tbody>
            <tr>
                <th>Idcomp</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competencia"]) ? $context["competencia"] : $this->getContext($context, "competencia")), "idComp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenido</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competencia"]) ? $context["competencia"] : $this->getContext($context, "competencia")), "contenido", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("competencias_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competencias_edit", array("id" => $this->getAttribute((isset($context["competencia"]) ? $context["competencia"] : $this->getContext($context, "competencia")), "idComp", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_69b7dca8a3224c0ae025e14259a725e96575b7dcb4eec31dbca97448677d3b6d->leave($__internal_69b7dca8a3224c0ae025e14259a725e96575b7dcb4eec31dbca97448677d3b6d_prof);

    }

    public function getTemplateName()
    {
        return "competencias/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Competencias</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idcomp</th>*/
/*                 <td>{{ competencia.idComp }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contenido</th>*/
/*                 <td>{{ competencia.contenido }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('competencias_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('competencias_edit', { 'id': competencia.idComp }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
