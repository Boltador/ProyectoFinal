<?php

/* :usuarios:show.html.twig */
class __TwigTemplate_635374bc1a0fcfacad0f852ed22af96b36d1c8cfc8048f0cb2d48fd115d29d7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":usuarios:show.html.twig", 1);
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
        $__internal_8d41436fdfe66f6f24d7c6d3d8850917a30c2610570cb3e9dc4c41bc59eba617 = $this->env->getExtension("native_profiler");
        $__internal_8d41436fdfe66f6f24d7c6d3d8850917a30c2610570cb3e9dc4c41bc59eba617->enter($__internal_8d41436fdfe66f6f24d7c6d3d8850917a30c2610570cb3e9dc4c41bc59eba617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":usuarios:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d41436fdfe66f6f24d7c6d3d8850917a30c2610570cb3e9dc4c41bc59eba617->leave($__internal_8d41436fdfe66f6f24d7c6d3d8850917a30c2610570cb3e9dc4c41bc59eba617_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b2572cc95300b780a7ffaf398aff3dd1416b3b399345fcd1b01c63eaa01d1b = $this->env->getExtension("native_profiler");
        $__internal_b7b2572cc95300b780a7ffaf398aff3dd1416b3b399345fcd1b01c63eaa01d1b->enter($__internal_b7b2572cc95300b780a7ffaf398aff3dd1416b3b399345fcd1b01c63eaa01d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Usuarios</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Username</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Salt</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "salt", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Isactive</th>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "isActive", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("usuarios_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuarios_edit", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_b7b2572cc95300b780a7ffaf398aff3dd1416b3b399345fcd1b01c63eaa01d1b->leave($__internal_b7b2572cc95300b780a7ffaf398aff3dd1416b3b399345fcd1b01c63eaa01d1b_prof);

    }

    public function getTemplateName()
    {
        return ":usuarios:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  102 => 39,  96 => 36,  90 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Usuarios</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ usuario.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Username</th>*/
/*                 <td>{{ usuario.username }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Salt</th>*/
/*                 <td>{{ usuario.salt }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Password</th>*/
/*                 <td>{{ usuario.password }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Isactive</th>*/
/*                 <td>{% if usuario.isActive %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('usuarios_edit', { 'id': usuario.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
