<?php

/* :asignaturas:show.html.twig */
class __TwigTemplate_24fb516873bc042c2c082e2bcc004153df37e7b529a5f9d14b95e98c10785fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":asignaturas:show.html.twig", 1);
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
        $__internal_ff47f27093b94b90756142840771137487e1844174b0860d85b179960eb9c950 = $this->env->getExtension("native_profiler");
        $__internal_ff47f27093b94b90756142840771137487e1844174b0860d85b179960eb9c950->enter($__internal_ff47f27093b94b90756142840771137487e1844174b0860d85b179960eb9c950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff47f27093b94b90756142840771137487e1844174b0860d85b179960eb9c950->leave($__internal_ff47f27093b94b90756142840771137487e1844174b0860d85b179960eb9c950_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_278efda2b38b08ff59f53288534cf834f03167854e9f5d6df78b3ddc9bc4baed = $this->env->getExtension("native_profiler");
        $__internal_278efda2b38b08ff59f53288534cf834f03167854e9f5d6df78b3ddc9bc4baed->enter($__internal_278efda2b38b08ff59f53288534cf834f03167854e9f5d6df78b3ddc9bc4baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_278efda2b38b08ff59f53288534cf834f03167854e9f5d6df78b3ddc9bc4baed->leave($__internal_278efda2b38b08ff59f53288534cf834f03167854e9f5d6df78b3ddc9bc4baed_prof);

    }

    public function getTemplateName()
    {
        return ":asignaturas:show.html.twig";
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
