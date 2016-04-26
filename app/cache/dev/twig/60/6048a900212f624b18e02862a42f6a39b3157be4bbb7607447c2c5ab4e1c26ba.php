<?php

/* competencias/index.html.twig */
class __TwigTemplate_f410a7292e9892b0c265638719eaaae3e57c00147931cbe964e813ae969104f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "competencias/index.html.twig", 1);
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
        $__internal_ab1a3dbbd9da9cff9d3e07bbc13a093a5ab4690abda3be5b0ca7af518b1dc4ba = $this->env->getExtension("native_profiler");
        $__internal_ab1a3dbbd9da9cff9d3e07bbc13a093a5ab4690abda3be5b0ca7af518b1dc4ba->enter($__internal_ab1a3dbbd9da9cff9d3e07bbc13a093a5ab4690abda3be5b0ca7af518b1dc4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "competencias/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab1a3dbbd9da9cff9d3e07bbc13a093a5ab4690abda3be5b0ca7af518b1dc4ba->leave($__internal_ab1a3dbbd9da9cff9d3e07bbc13a093a5ab4690abda3be5b0ca7af518b1dc4ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2c75b5a300b565307d884278819adf9eaa52fa20a7e4ce3c460aa5c5080f328 = $this->env->getExtension("native_profiler");
        $__internal_a2c75b5a300b565307d884278819adf9eaa52fa20a7e4ce3c460aa5c5080f328->enter($__internal_a2c75b5a300b565307d884278819adf9eaa52fa20a7e4ce3c460aa5c5080f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Competencias list</h1>

    <table>
        <thead>
            <tr>
                <th>Idcomp</th>
                <th>Contenido</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competencias"]) ? $context["competencias"] : $this->getContext($context, "competencias")));
        foreach ($context['_seq'] as $context["_key"] => $context["competencia"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competencias_show", array("id" => $this->getAttribute($context["competencia"], "idComp", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["competencia"], "idComp", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["competencia"], "contenido", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competencias_show", array("id" => $this->getAttribute($context["competencia"], "idComp", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competencias_edit", array("id" => $this->getAttribute($context["competencia"], "idComp", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("competencias_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_a2c75b5a300b565307d884278819adf9eaa52fa20a7e4ce3c460aa5c5080f328->leave($__internal_a2c75b5a300b565307d884278819adf9eaa52fa20a7e4ce3c460aa5c5080f328_prof);

    }

    public function getTemplateName()
    {
        return "competencias/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Competencias list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idcomp</th>*/
/*                 <th>Contenido</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for competencia in competencias %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('competencias_show', { 'id': competencia.idComp }) }}">{{ competencia.idComp }}</a></td>*/
/*                 <td>{{ competencia.contenido }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('competencias_show', { 'id': competencia.idComp }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('competencias_edit', { 'id': competencia.idComp }) }}">edit</a>*/
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
/*             <a href="{{ path('competencias_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
