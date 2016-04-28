<?php

/* :notas:edit.html.twig */
class __TwigTemplate_63fa9dffc8a50cf4f8273e08a560bbf9a6ad70f11a9b1de380b4f07debcb3ddd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":notas:edit.html.twig", 1);
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
        $__internal_05bc53e14fef629ac7b0c18d9eeba9ce7edd63b38e2a834ae46477023f2214b3 = $this->env->getExtension("native_profiler");
        $__internal_05bc53e14fef629ac7b0c18d9eeba9ce7edd63b38e2a834ae46477023f2214b3->enter($__internal_05bc53e14fef629ac7b0c18d9eeba9ce7edd63b38e2a834ae46477023f2214b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":notas:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bc53e14fef629ac7b0c18d9eeba9ce7edd63b38e2a834ae46477023f2214b3->leave($__internal_05bc53e14fef629ac7b0c18d9eeba9ce7edd63b38e2a834ae46477023f2214b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2acc2ae3c6c2b14b7947bf449276d8e5a0714ffdeb9fc47f4f966ce9df1b1c4b = $this->env->getExtension("native_profiler");
        $__internal_2acc2ae3c6c2b14b7947bf449276d8e5a0714ffdeb9fc47f4f966ce9df1b1c4b->enter($__internal_2acc2ae3c6c2b14b7947bf449276d8e5a0714ffdeb9fc47f4f966ce9df1b1c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Notas edit</h1>

    ";
        
        $__internal_2acc2ae3c6c2b14b7947bf449276d8e5a0714ffdeb9fc47f4f966ce9df1b1c4b->leave($__internal_2acc2ae3c6c2b14b7947bf449276d8e5a0714ffdeb9fc47f4f966ce9df1b1c4b_prof);

    }

    public function getTemplateName()
    {
        return ":notas:edit.html.twig";
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
