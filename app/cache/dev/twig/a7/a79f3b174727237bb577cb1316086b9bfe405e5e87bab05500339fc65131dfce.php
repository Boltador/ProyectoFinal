<?php

/* asignaturas/show.html.twig */
class __TwigTemplate_a40ea785a8f5b437e4737c786b92348d26459f69ddf6b4592869db6b75d46346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "asignaturas/show.html.twig", 1);
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
        $__internal_8f3f5b83c3ac8e905b56f19831b6fe110d907affe6c7b2122e41579838d663df = $this->env->getExtension("native_profiler");
        $__internal_8f3f5b83c3ac8e905b56f19831b6fe110d907affe6c7b2122e41579838d663df->enter($__internal_8f3f5b83c3ac8e905b56f19831b6fe110d907affe6c7b2122e41579838d663df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "asignaturas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f3f5b83c3ac8e905b56f19831b6fe110d907affe6c7b2122e41579838d663df->leave($__internal_8f3f5b83c3ac8e905b56f19831b6fe110d907affe6c7b2122e41579838d663df_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b14ff534089876069696eb1c18a441ad85c14b81826f70ec3c23a2af523c5c7e = $this->env->getExtension("native_profiler");
        $__internal_b14ff534089876069696eb1c18a441ad85c14b81826f70ec3c23a2af523c5c7e->enter($__internal_b14ff534089876069696eb1c18a441ad85c14b81826f70ec3c23a2af523c5c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Asignaturas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idasig</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignatura"]) ? $context["asignatura"] : $this->getContext($context, "asignatura")), "idAsig", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomasig</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["asignatura"]) ? $context["asignatura"] : $this->getContext($context, "asignatura")), "nomAsig", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("asignaturas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("asignaturas_edit", array("id" => $this->getAttribute((isset($context["asignatura"]) ? $context["asignatura"] : $this->getContext($context, "asignatura")), "idAsig", array()))), "html", null, true);
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
        
        $__internal_b14ff534089876069696eb1c18a441ad85c14b81826f70ec3c23a2af523c5c7e->leave($__internal_b14ff534089876069696eb1c18a441ad85c14b81826f70ec3c23a2af523c5c7e_prof);

    }

    public function getTemplateName()
    {
        return "asignaturas/show.html.twig";
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
/*     <h1>Asignaturas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idasig</th>*/
/*                 <td>{{ asignatura.idAsig }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomasig</th>*/
/*                 <td>{{ asignatura.nomAsig }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('asignaturas_edit', { 'id': asignatura.idAsig }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
