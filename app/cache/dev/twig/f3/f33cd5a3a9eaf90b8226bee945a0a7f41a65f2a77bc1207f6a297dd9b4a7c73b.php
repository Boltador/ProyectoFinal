<?php

/* :planeadores:show.html.twig */
class __TwigTemplate_1f55c546a39cdbdfc9d77089c3823e19650b378eb63ce2aade092d1433707cb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":planeadores:show.html.twig", 1);
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
        $__internal_34dc9c6b32bc8c3c15613216387325405d909b838dc636b4feb3a406b876d957 = $this->env->getExtension("native_profiler");
        $__internal_34dc9c6b32bc8c3c15613216387325405d909b838dc636b4feb3a406b876d957->enter($__internal_34dc9c6b32bc8c3c15613216387325405d909b838dc636b4feb3a406b876d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":planeadores:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34dc9c6b32bc8c3c15613216387325405d909b838dc636b4feb3a406b876d957->leave($__internal_34dc9c6b32bc8c3c15613216387325405d909b838dc636b4feb3a406b876d957_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9943cb969aea4aaf32caaed913ad254dc5cf4c387758eedf731dd6184338e6fe = $this->env->getExtension("native_profiler");
        $__internal_9943cb969aea4aaf32caaed913ad254dc5cf4c387758eedf731dd6184338e6fe->enter($__internal_9943cb969aea4aaf32caaed913ad254dc5cf4c387758eedf731dd6184338e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9943cb969aea4aaf32caaed913ad254dc5cf4c387758eedf731dd6184338e6fe->leave($__internal_9943cb969aea4aaf32caaed913ad254dc5cf4c387758eedf731dd6184338e6fe_prof);

    }

    public function getTemplateName()
    {
        return ":planeadores:show.html.twig";
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
