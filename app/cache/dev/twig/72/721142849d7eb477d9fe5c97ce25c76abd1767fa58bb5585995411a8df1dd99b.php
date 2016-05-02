<?php

/* :matriculas:show.html.twig */
class __TwigTemplate_6e1ed795a85616ed388d4d77a1531b8a36c245a13cfd8b339c1164021c4af4a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":matriculas:show.html.twig", 1);
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
        $__internal_d2e6da8ba71be1d4e942567dc526f556374250dd15e9af9b3639d30d59cbf8ce = $this->env->getExtension("native_profiler");
        $__internal_d2e6da8ba71be1d4e942567dc526f556374250dd15e9af9b3639d30d59cbf8ce->enter($__internal_d2e6da8ba71be1d4e942567dc526f556374250dd15e9af9b3639d30d59cbf8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":matriculas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2e6da8ba71be1d4e942567dc526f556374250dd15e9af9b3639d30d59cbf8ce->leave($__internal_d2e6da8ba71be1d4e942567dc526f556374250dd15e9af9b3639d30d59cbf8ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aabd6864edf351006d838d8217fc72e048e04102d756b7cfab4552e98ca48e3 = $this->env->getExtension("native_profiler");
        $__internal_0aabd6864edf351006d838d8217fc72e048e04102d756b7cfab4552e98ca48e3->enter($__internal_0aabd6864edf351006d838d8217fc72e048e04102d756b7cfab4552e98ca48e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idmat</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matricula"]) ? $context["matricula"] : $this->getContext($context, "matricula")), "idMat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matriculas_edit", array("id" => $this->getAttribute((isset($context["matricula"]) ? $context["matricula"] : $this->getContext($context, "matricula")), "idMat", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0aabd6864edf351006d838d8217fc72e048e04102d756b7cfab4552e98ca48e3->leave($__internal_0aabd6864edf351006d838d8217fc72e048e04102d756b7cfab4552e98ca48e3_prof);

    }

    public function getTemplateName()
    {
        return ":matriculas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  70 => 23,  64 => 20,  58 => 17,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Matriculas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idmat</th>*/
/*                 <td>{{ matricula.idMat }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_edit', { 'id': matricula.idMat }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
