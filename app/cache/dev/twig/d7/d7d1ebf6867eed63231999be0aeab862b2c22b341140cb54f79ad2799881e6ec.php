<?php

/* alectivos/show.html.twig */
class __TwigTemplate_1b52685095cfdee898f21899695f3626d65d98efb53faee8d8da88980a889d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alectivos/show.html.twig", 1);
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
        $__internal_be3f95da304c47bdecf899001e8845ee9811a3e03ecc4f4896d60241900fa48a = $this->env->getExtension("native_profiler");
        $__internal_be3f95da304c47bdecf899001e8845ee9811a3e03ecc4f4896d60241900fa48a->enter($__internal_be3f95da304c47bdecf899001e8845ee9811a3e03ecc4f4896d60241900fa48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3f95da304c47bdecf899001e8845ee9811a3e03ecc4f4896d60241900fa48a->leave($__internal_be3f95da304c47bdecf899001e8845ee9811a3e03ecc4f4896d60241900fa48a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_62f96f102a69e03196259ceb189ee402f3d07ce42ddc7203d34e0a0295c3c986 = $this->env->getExtension("native_profiler");
        $__internal_62f96f102a69e03196259ceb189ee402f3d07ce42ddc7203d34e0a0295c3c986->enter($__internal_62f96f102a69e03196259ceb189ee402f3d07ce42ddc7203d34e0a0295c3c986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_62f96f102a69e03196259ceb189ee402f3d07ce42ddc7203d34e0a0295c3c986->leave($__internal_62f96f102a69e03196259ceb189ee402f3d07ce42ddc7203d34e0a0295c3c986_prof);

    }

    public function getTemplateName()
    {
        return "alectivos/show.html.twig";
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
