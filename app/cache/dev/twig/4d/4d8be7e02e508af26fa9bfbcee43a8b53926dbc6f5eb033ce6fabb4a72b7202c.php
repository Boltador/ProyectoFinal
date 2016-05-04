<?php

/* periodos/index.html.twig */
class __TwigTemplate_873633ae7dd78ce2f2e7ea9dabaaef50df25f43edc245a662293d52fbc925bfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "periodos/index.html.twig", 1);
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
        $__internal_0775416b322c1b494d71cff8507b95d0fa8025762c0a427bd8adb2abcf10a4c8 = $this->env->getExtension("native_profiler");
        $__internal_0775416b322c1b494d71cff8507b95d0fa8025762c0a427bd8adb2abcf10a4c8->enter($__internal_0775416b322c1b494d71cff8507b95d0fa8025762c0a427bd8adb2abcf10a4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "periodos/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0775416b322c1b494d71cff8507b95d0fa8025762c0a427bd8adb2abcf10a4c8->leave($__internal_0775416b322c1b494d71cff8507b95d0fa8025762c0a427bd8adb2abcf10a4c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbced2aa01509993fa49e6a69a55af0e6f0a3011e91bba8637aefc448cc58b6b = $this->env->getExtension("native_profiler");
        $__internal_dbced2aa01509993fa49e6a69a55af0e6f0a3011e91bba8637aefc448cc58b6b->enter($__internal_dbced2aa01509993fa49e6a69a55af0e6f0a3011e91bba8637aefc448cc58b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Periodos list</h1>

    <table>
        <thead>
            <tr>
                <th>Idperiodo</th>
                <th>Fechainper</th>
                <th>Fechafinper</th>
                <th>Numero</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodos"]) ? $context["periodos"] : $this->getContext($context, "periodos")));
        foreach ($context['_seq'] as $context["_key"] => $context["periodo"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodos_show", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "idPeriodo", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["periodo"], "fechaInPer", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaInPer", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["periodo"], "fechaFinPer", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["periodo"], "fechaFinPer", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "numero", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodos_show", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("periodos_edit", array("id" => $this->getAttribute($context["periodo"], "idPeriodo", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("periodos_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_dbced2aa01509993fa49e6a69a55af0e6f0a3011e91bba8637aefc448cc58b6b->leave($__internal_dbced2aa01509993fa49e6a69a55af0e6f0a3011e91bba8637aefc448cc58b6b_prof);

    }

    public function getTemplateName()
    {
        return "periodos/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  80 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Periodos list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idperiodo</th>*/
/*                 <th>Fechainper</th>*/
/*                 <th>Fechafinper</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for periodo in periodos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('periodos_show', { 'id': periodo.idPeriodo }) }}">{{ periodo.idPeriodo }}</a></td>*/
/*                 <td>{% if periodo.fechaInPer %}{{ periodo.fechaInPer|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if periodo.fechaFinPer %}{{ periodo.fechaFinPer|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ periodo.numero }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('periodos_show', { 'id': periodo.idPeriodo }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('periodos_edit', { 'id': periodo.idPeriodo }) }}">edit</a>*/
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
/*             <a href="{{ path('periodos_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
