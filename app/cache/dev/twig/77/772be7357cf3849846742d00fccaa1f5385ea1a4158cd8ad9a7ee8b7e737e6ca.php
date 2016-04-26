<?php

/* :alectivos:show.html.twig */
class __TwigTemplate_a304241a3736433a9daaa9cb8d50914a0af38250066199a26c83de5f3440ce35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":alectivos:show.html.twig", 1);
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
        $__internal_15a5bba852f4c5db05cf52c7c8e429c9d293e9644f318088d72c9692a8b71d34 = $this->env->getExtension("native_profiler");
        $__internal_15a5bba852f4c5db05cf52c7c8e429c9d293e9644f318088d72c9692a8b71d34->enter($__internal_15a5bba852f4c5db05cf52c7c8e429c9d293e9644f318088d72c9692a8b71d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":alectivos:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a5bba852f4c5db05cf52c7c8e429c9d293e9644f318088d72c9692a8b71d34->leave($__internal_15a5bba852f4c5db05cf52c7c8e429c9d293e9644f318088d72c9692a8b71d34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43169ff80cade9b4efa3b5cbdc6acdb992e1c8bb49c6cf4c695a6cb3da4096c8 = $this->env->getExtension("native_profiler");
        $__internal_43169ff80cade9b4efa3b5cbdc6acdb992e1c8bb49c6cf4c695a6cb3da4096c8->enter($__internal_43169ff80cade9b4efa3b5cbdc6acdb992e1c8bb49c6cf4c695a6cb3da4096c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ALectivos</h1>

    <table>
        <tbody>
            <tr>
                <th>Idalectivo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "idALectivo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechainicio</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "fechaInicio", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "fechaInicio", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafinal</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "fechaFinal", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "fechaFinal", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("alectivos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alectivos_edit", array("id" => $this->getAttribute((isset($context["aLectivo"]) ? $context["aLectivo"] : $this->getContext($context, "aLectivo")), "idALectivo", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_43169ff80cade9b4efa3b5cbdc6acdb992e1c8bb49c6cf4c695a6cb3da4096c8->leave($__internal_43169ff80cade9b4efa3b5cbdc6acdb992e1c8bb49c6cf4c695a6cb3da4096c8_prof);

    }

    public function getTemplateName()
    {
        return ":alectivos:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  88 => 31,  82 => 28,  76 => 25,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ALectivos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idalectivo</th>*/
/*                 <td>{{ aLectivo.idALectivo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechainicio</th>*/
/*                 <td>{% if aLectivo.fechaInicio %}{{ aLectivo.fechaInicio|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechafinal</th>*/
/*                 <td>{% if aLectivo.fechaFinal %}{{ aLectivo.fechaFinal|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('alectivos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('alectivos_edit', { 'id': aLectivo.idALectivo }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
