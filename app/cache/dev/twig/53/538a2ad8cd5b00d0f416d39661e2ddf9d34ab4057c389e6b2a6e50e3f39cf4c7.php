<?php

/* temas/show.html.twig */
class __TwigTemplate_3b6904a1fc3c32a83c252b4bcd90ccc8d65b86ab01e95bbc4d9f04a4e77e7a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "temas/show.html.twig", 1);
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
        $__internal_2786382ffb2efc586be78c39bff34b7625bffdee824d1187afde459fe3359893 = $this->env->getExtension("native_profiler");
        $__internal_2786382ffb2efc586be78c39bff34b7625bffdee824d1187afde459fe3359893->enter($__internal_2786382ffb2efc586be78c39bff34b7625bffdee824d1187afde459fe3359893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "temas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2786382ffb2efc586be78c39bff34b7625bffdee824d1187afde459fe3359893->leave($__internal_2786382ffb2efc586be78c39bff34b7625bffdee824d1187afde459fe3359893_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc667a3595647c46e8fd64a120f06825949afc6e613714ce34041321b6999dfd = $this->env->getExtension("native_profiler");
        $__internal_bc667a3595647c46e8fd64a120f06825949afc6e613714ce34041321b6999dfd->enter($__internal_bc667a3595647c46e8fd64a120f06825949afc6e613714ce34041321b6999dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Temas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idtema</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "idTema", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomtema</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "nomTema", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechaintema</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "fechaInTema", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "fechaInTema", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Fechafintema</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "fechaFinTema", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "fechaFinTema", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("temas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("temas_edit", array("id" => $this->getAttribute((isset($context["tema"]) ? $context["tema"] : $this->getContext($context, "tema")), "idTema", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bc667a3595647c46e8fd64a120f06825949afc6e613714ce34041321b6999dfd->leave($__internal_bc667a3595647c46e8fd64a120f06825949afc6e613714ce34041321b6999dfd_prof);

    }

    public function getTemplateName()
    {
        return "temas/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Temas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idtema</th>*/
/*                 <td>{{ tema.idTema }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomtema</th>*/
/*                 <td>{{ tema.nomTema }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechaintema</th>*/
/*                 <td>{% if tema.fechaInTema %}{{ tema.fechaInTema|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fechafintema</th>*/
/*                 <td>{% if tema.fechaFinTema %}{{ tema.fechaFinTema|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('temas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('temas_edit', { 'id': tema.idTema }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
