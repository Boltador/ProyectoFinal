<?php

/* docentes/show.html.twig */
class __TwigTemplate_6c1237a42a94607ca68cb2f6112533e4b13a39ddc06d70fc261bdee79ecf637a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "docentes/show.html.twig", 1);
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
        $__internal_c2ae03fe9d4b34ead095a3bcb43381b7094fb3d2d0744b0747ffafc5ad7e3eb3 = $this->env->getExtension("native_profiler");
        $__internal_c2ae03fe9d4b34ead095a3bcb43381b7094fb3d2d0744b0747ffafc5ad7e3eb3->enter($__internal_c2ae03fe9d4b34ead095a3bcb43381b7094fb3d2d0744b0747ffafc5ad7e3eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "docentes/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ae03fe9d4b34ead095a3bcb43381b7094fb3d2d0744b0747ffafc5ad7e3eb3->leave($__internal_c2ae03fe9d4b34ead095a3bcb43381b7094fb3d2d0744b0747ffafc5ad7e3eb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cf382937d2634a299aaf93a80ba1bb0c5871e107296e97c406b5d61480a076a = $this->env->getExtension("native_profiler");
        $__internal_3cf382937d2634a299aaf93a80ba1bb0c5871e107296e97c406b5d61480a076a->enter($__internal_3cf382937d2634a299aaf93a80ba1bb0c5871e107296e97c406b5d61480a076a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Docentes</h1>

    <table>
        <tbody>
            <tr>
                <th>Iddoc</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "idDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nuip</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "nuip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomdoc</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "nomDoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dir</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "dir", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Movil</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "movil", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Usuario</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "usuario", array()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("docentes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("docentes_edit", array("id" => $this->getAttribute((isset($context["docente"]) ? $context["docente"] : $this->getContext($context, "docente")), "idDoc", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3cf382937d2634a299aaf93a80ba1bb0c5871e107296e97c406b5d61480a076a->leave($__internal_3cf382937d2634a299aaf93a80ba1bb0c5871e107296e97c406b5d61480a076a_prof);

    }

    public function getTemplateName()
    {
        return "docentes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  119 => 51,  113 => 48,  107 => 45,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Docentes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Iddoc</th>*/
/*                 <td>{{ docente.idDoc }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nuip</th>*/
/*                 <td>{{ docente.nuip }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomdoc</th>*/
/*                 <td>{{ docente.nomDoc }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dir</th>*/
/*                 <td>{{ docente.dir }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ docente.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Movil</th>*/
/*                 <td>{{ docente.movil }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ docente.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Usuario</th>*/
/*                 <td>{{ docente.usuario.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('docentes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('docentes_edit', { 'id': docente.idDoc }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
