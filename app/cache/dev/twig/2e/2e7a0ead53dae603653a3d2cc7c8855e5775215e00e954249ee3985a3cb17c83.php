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
        $__internal_1ffb2ff9c6a54a1ff3e4aa9693d98e125c91627e966e56e0bf0ed6acc90def8b = $this->env->getExtension("native_profiler");
        $__internal_1ffb2ff9c6a54a1ff3e4aa9693d98e125c91627e966e56e0bf0ed6acc90def8b->enter($__internal_1ffb2ff9c6a54a1ff3e4aa9693d98e125c91627e966e56e0bf0ed6acc90def8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":asignaturas:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ffb2ff9c6a54a1ff3e4aa9693d98e125c91627e966e56e0bf0ed6acc90def8b->leave($__internal_1ffb2ff9c6a54a1ff3e4aa9693d98e125c91627e966e56e0bf0ed6acc90def8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3bca151072c5230995fa3a11c4a3df10f0c1d08e03c47b09e6f650cd6f54266 = $this->env->getExtension("native_profiler");
        $__internal_c3bca151072c5230995fa3a11c4a3df10f0c1d08e03c47b09e6f650cd6f54266->enter($__internal_c3bca151072c5230995fa3a11c4a3df10f0c1d08e03c47b09e6f650cd6f54266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3bca151072c5230995fa3a11c4a3df10f0c1d08e03c47b09e6f650cd6f54266->leave($__internal_c3bca151072c5230995fa3a11c4a3df10f0c1d08e03c47b09e6f650cd6f54266_prof);

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
