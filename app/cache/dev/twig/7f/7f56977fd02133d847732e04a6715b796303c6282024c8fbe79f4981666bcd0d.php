<?php

/* notas/edit.html.twig */
class __TwigTemplate_0c64c0ca73e9cd845e08355125d5fe5376dc5adef0ba0df25a5b56899f8597d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "notas/edit.html.twig", 1);
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
        $__internal_a0c5c4d0c66bb1bd2db8e133552976f65f18abb453ce0fc5da4372c04d52c83d = $this->env->getExtension("native_profiler");
        $__internal_a0c5c4d0c66bb1bd2db8e133552976f65f18abb453ce0fc5da4372c04d52c83d->enter($__internal_a0c5c4d0c66bb1bd2db8e133552976f65f18abb453ce0fc5da4372c04d52c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "notas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c5c4d0c66bb1bd2db8e133552976f65f18abb453ce0fc5da4372c04d52c83d->leave($__internal_a0c5c4d0c66bb1bd2db8e133552976f65f18abb453ce0fc5da4372c04d52c83d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_de90639e2e57073560454aa7f417f9c702f19fea59a6b88d1a993b5d83f45e45 = $this->env->getExtension("native_profiler");
        $__internal_de90639e2e57073560454aa7f417f9c702f19fea59a6b88d1a993b5d83f45e45->enter($__internal_de90639e2e57073560454aa7f417f9c702f19fea59a6b88d1a993b5d83f45e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_de90639e2e57073560454aa7f417f9c702f19fea59a6b88d1a993b5d83f45e45->leave($__internal_de90639e2e57073560454aa7f417f9c702f19fea59a6b88d1a993b5d83f45e45_prof);

    }

    public function getTemplateName()
    {
        return "notas/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Notas edit</h1>*/
/* */
/*     {# {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('notas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }} */
/*         </li>*/
/*     </ul> #}*/
/* {% endblock %}*/
/* */
