<?php

/* grupos/show.html.twig */
class __TwigTemplate_dc78c8f901df471fb09563165e0fbed7f46bb141f8b06a35dc7214cf05caa953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "grupos/show.html.twig", 1);
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
        $__internal_722518976c0c278a65fe24dda31fa9cbc3e25b4b46e370b67b37588a3d76b0e5 = $this->env->getExtension("native_profiler");
        $__internal_722518976c0c278a65fe24dda31fa9cbc3e25b4b46e370b67b37588a3d76b0e5->enter($__internal_722518976c0c278a65fe24dda31fa9cbc3e25b4b46e370b67b37588a3d76b0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "grupos/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_722518976c0c278a65fe24dda31fa9cbc3e25b4b46e370b67b37588a3d76b0e5->leave($__internal_722518976c0c278a65fe24dda31fa9cbc3e25b4b46e370b67b37588a3d76b0e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_830cbe6bae8917d8721b6d018ae44f1673b280aba75a5a195821768c4c2be69c = $this->env->getExtension("native_profiler");
        $__internal_830cbe6bae8917d8721b6d018ae44f1673b280aba75a5a195821768c4c2be69c->enter($__internal_830cbe6bae8917d8721b6d018ae44f1673b280aba75a5a195821768c4c2be69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Grupos</h1>

    <table>
        <tbody>
            <tr>
                <th>Idgrupo</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "idGrupo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomenclatura</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "nomenclatura", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("grupos_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("grupos_edit", array("id" => $this->getAttribute((isset($context["grupo"]) ? $context["grupo"] : $this->getContext($context, "grupo")), "idGrupo", array()))), "html", null, true);
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
        
        $__internal_830cbe6bae8917d8721b6d018ae44f1673b280aba75a5a195821768c4c2be69c->leave($__internal_830cbe6bae8917d8721b6d018ae44f1673b280aba75a5a195821768c4c2be69c_prof);

    }

    public function getTemplateName()
    {
        return "grupos/show.html.twig";
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
/*     <h1>Grupos</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idgrupo</th>*/
/*                 <td>{{ grupo.idGrupo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomenclatura</th>*/
/*                 <td>{{ grupo.nomenclatura }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('grupos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('grupos_edit', { 'id': grupo.idGrupo }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
