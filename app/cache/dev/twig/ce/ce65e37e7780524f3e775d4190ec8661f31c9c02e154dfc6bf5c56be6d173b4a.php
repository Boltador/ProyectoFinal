<?php

/* alectivos/index.html.twig */
class __TwigTemplate_7a7634c6c360b28a8d5678d5b14d9ca4e47294e51c51a1cc81fd03a3a3041315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "alectivos/index.html.twig", 1);
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
        $__internal_e79c034ac8090a0d82309b059926b02e416ffa94f011dbd695e8653cbd8793b5 = $this->env->getExtension("native_profiler");
        $__internal_e79c034ac8090a0d82309b059926b02e416ffa94f011dbd695e8653cbd8793b5->enter($__internal_e79c034ac8090a0d82309b059926b02e416ffa94f011dbd695e8653cbd8793b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "alectivos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e79c034ac8090a0d82309b059926b02e416ffa94f011dbd695e8653cbd8793b5->leave($__internal_e79c034ac8090a0d82309b059926b02e416ffa94f011dbd695e8653cbd8793b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e6ef718ea705c70bdee11eb200bef5890b0dcf629d0c2f4c3fd6f07ae212e47 = $this->env->getExtension("native_profiler");
        $__internal_9e6ef718ea705c70bdee11eb200bef5890b0dcf629d0c2f4c3fd6f07ae212e47->enter($__internal_9e6ef718ea705c70bdee11eb200bef5890b0dcf629d0c2f4c3fd6f07ae212e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>ALectivos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idalectivo</th>
                <th>Fechainicio</th>
                <th>Fechafinal</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aLectivos"]) ? $context["aLectivos"] : $this->getContext($context, "aLectivos")));
        foreach ($context['_seq'] as $context["_key"] => $context["aLectivo"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alectivos_show", array("id" => $this->getAttribute($context["aLectivo"], "idALectivo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aLectivo"], "idALectivo", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            if ($this->getAttribute($context["aLectivo"], "fechaInicio", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aLectivo"], "fechaInicio", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["aLectivo"], "fechaFinal", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["aLectivo"], "fechaFinal", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alectivos_show", array("id" => $this->getAttribute($context["aLectivo"], "idALectivo", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alectivos_edit", array("id" => $this->getAttribute($context["aLectivo"], "idALectivo", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aLectivo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("alectivos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9e6ef718ea705c70bdee11eb200bef5890b0dcf629d0c2f4c3fd6f07ae212e47->leave($__internal_9e6ef718ea705c70bdee11eb200bef5890b0dcf629d0c2f4c3fd6f07ae212e47_prof);

    }

    public function getTemplateName()
    {
        return "alectivos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 38,  100 => 33,  88 => 27,  82 => 24,  73 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>ALectivos list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idalectivo</th>*/
/*                 <th>Fechainicio</th>*/
/*                 <th>Fechafinal</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for aLectivo in aLectivos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('alectivos_show', { 'id': aLectivo.idALectivo }) }}">{{ aLectivo.idALectivo }}</a></td>*/
/*                 <td>{% if aLectivo.fechaInicio %}{{ aLectivo.fechaInicio|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if aLectivo.fechaFinal %}{{ aLectivo.fechaFinal|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('alectivos_show', { 'id': aLectivo.idALectivo }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('alectivos_edit', { 'id': aLectivo.idALectivo }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('alectivos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
