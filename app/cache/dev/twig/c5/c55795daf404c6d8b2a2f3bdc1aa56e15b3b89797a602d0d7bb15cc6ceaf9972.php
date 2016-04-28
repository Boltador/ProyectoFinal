<?php

/* :acudientes:show.html.twig */
class __TwigTemplate_0de8b3039d1f0feb895cbb2e7979d70e53363d2ce0466a7779cd8f10ffa49437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":acudientes:show.html.twig", 1);
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
        $__internal_690196cf2bd3646718c149eec9d40aa2add33c052f2b96bb18468b03dce450b3 = $this->env->getExtension("native_profiler");
        $__internal_690196cf2bd3646718c149eec9d40aa2add33c052f2b96bb18468b03dce450b3->enter($__internal_690196cf2bd3646718c149eec9d40aa2add33c052f2b96bb18468b03dce450b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":acudientes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_690196cf2bd3646718c149eec9d40aa2add33c052f2b96bb18468b03dce450b3->leave($__internal_690196cf2bd3646718c149eec9d40aa2add33c052f2b96bb18468b03dce450b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbecd4df42683fa22d4ac30384d3bde661e7fce508f6634567e13c89d77c8326 = $this->env->getExtension("native_profiler");
        $__internal_bbecd4df42683fa22d4ac30384d3bde661e7fce508f6634567e13c89d77c8326->enter($__internal_bbecd4df42683fa22d4ac30384d3bde661e7fce508f6634567e13c89d77c8326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Acudientes</h1>

    <table>
        <tbody>
            <tr>
                <th>Idacu</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acudiente"]) ? $context["acudiente"] : $this->getContext($context, "acudiente")), "idAcu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nuip</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acudiente"]) ? $context["acudiente"] : $this->getContext($context, "acudiente")), "nuip", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomacu</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acudiente"]) ? $context["acudiente"] : $this->getContext($context, "acudiente")), "nomAcu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["acudiente"]) ? $context["acudiente"] : $this->getContext($context, "acudiente")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("acudientes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acudientes_edit", array("id" => $this->getAttribute((isset($context["acudiente"]) ? $context["acudiente"] : $this->getContext($context, "acudiente")), "idAcu", array()))), "html", null, true);
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
        
        $__internal_bbecd4df42683fa22d4ac30384d3bde661e7fce508f6634567e13c89d77c8326->leave($__internal_bbecd4df42683fa22d4ac30384d3bde661e7fce508f6634567e13c89d77c8326_prof);

    }

    public function getTemplateName()
    {
        return ":acudientes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Acudientes</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idacu</th>*/
/*                 <td>{{ acudiente.idAcu }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nuip</th>*/
/*                 <td>{{ acudiente.nuip }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomacu</th>*/
/*                 <td>{{ acudiente.nomAcu }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ acudiente.email }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('acudientes_edit', { 'id': acudiente.idAcu }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
