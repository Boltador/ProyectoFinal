<?php

/* planeadores/show.html.twig */
class __TwigTemplate_6a5286e72ee30d4378702ce88eee567f0eca5971c37d307f115ccf6e9e64af55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planeadores/show.html.twig", 1);
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
        $__internal_3e5892d8caf1e089ae16f1079d49c5a8f0472336f040c84473e855c28151079a = $this->env->getExtension("native_profiler");
        $__internal_3e5892d8caf1e089ae16f1079d49c5a8f0472336f040c84473e855c28151079a->enter($__internal_3e5892d8caf1e089ae16f1079d49c5a8f0472336f040c84473e855c28151079a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planeadores/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e5892d8caf1e089ae16f1079d49c5a8f0472336f040c84473e855c28151079a->leave($__internal_3e5892d8caf1e089ae16f1079d49c5a8f0472336f040c84473e855c28151079a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3fb8e714113c8bb89d8e5c53a5415196b71ee145b42d0d89758d0b3fb02ac64 = $this->env->getExtension("native_profiler");
        $__internal_f3fb8e714113c8bb89d8e5c53a5415196b71ee145b42d0d89758d0b3fb02ac64->enter($__internal_f3fb8e714113c8bb89d8e5c53a5415196b71ee145b42d0d89758d0b3fb02ac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Planeadores</h1>

    <table>
        <tbody>
            <tr>
                <th>Idplan</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["planeadore"]) ? $context["planeadore"] : $this->getContext($context, "planeadore")), "idPlan", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("planeadores_edit", array("id" => $this->getAttribute((isset($context["planeadore"]) ? $context["planeadore"] : $this->getContext($context, "planeadore")), "idPlan", array()))), "html", null, true);
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
        
        $__internal_f3fb8e714113c8bb89d8e5c53a5415196b71ee145b42d0d89758d0b3fb02ac64->leave($__internal_f3fb8e714113c8bb89d8e5c53a5415196b71ee145b42d0d89758d0b3fb02ac64_prof);

    }

    public function getTemplateName()
    {
        return "planeadores/show.html.twig";
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
/*     <h1>Planeadores</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idplan</th>*/
/*                 <td>{{ planeadore.idPlan }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('planeadores_edit', { 'id': planeadore.idPlan }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
