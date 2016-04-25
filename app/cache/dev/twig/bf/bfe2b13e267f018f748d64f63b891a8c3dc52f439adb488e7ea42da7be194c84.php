<?php

/* matriculas/show.html.twig */
class __TwigTemplate_dba7555c2109861893163349f86eb82c74bd9b5ea6db4c40487eb97aa9ba76f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "matriculas/show.html.twig", 1);
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
        $__internal_7da6c759fcaa3f391e03e4e2c07e9c561c8adfa675b8e997531867b7ea5995e0 = $this->env->getExtension("native_profiler");
        $__internal_7da6c759fcaa3f391e03e4e2c07e9c561c8adfa675b8e997531867b7ea5995e0->enter($__internal_7da6c759fcaa3f391e03e4e2c07e9c561c8adfa675b8e997531867b7ea5995e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "matriculas/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7da6c759fcaa3f391e03e4e2c07e9c561c8adfa675b8e997531867b7ea5995e0->leave($__internal_7da6c759fcaa3f391e03e4e2c07e9c561c8adfa675b8e997531867b7ea5995e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_807141dee3fe6ef6ad1e9200bde0594cb21d958ec29013d711bdc0d210d2dd96 = $this->env->getExtension("native_profiler");
        $__internal_807141dee3fe6ef6ad1e9200bde0594cb21d958ec29013d711bdc0d210d2dd96->enter($__internal_807141dee3fe6ef6ad1e9200bde0594cb21d958ec29013d711bdc0d210d2dd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Matriculas</h1>

    <table>
        <tbody>
            <tr>
                <th>Idmat</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["matricula"]) ? $context["matricula"] : $this->getContext($context, "matricula")), "idMat", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("matriculas_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matriculas_edit", array("id" => $this->getAttribute((isset($context["matricula"]) ? $context["matricula"] : $this->getContext($context, "matricula")), "idMat", array()))), "html", null, true);
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
        
        $__internal_807141dee3fe6ef6ad1e9200bde0594cb21d958ec29013d711bdc0d210d2dd96->leave($__internal_807141dee3fe6ef6ad1e9200bde0594cb21d958ec29013d711bdc0d210d2dd96_prof);

    }

    public function getTemplateName()
    {
        return "matriculas/show.html.twig";
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
/*     <h1>Matriculas</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idmat</th>*/
/*                 <td>{{ matricula.idMat }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('matriculas_edit', { 'id': matricula.idMat }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
