<?php

/* AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig */
class __TwigTemplate_d00da8ab150cc88fdc6535b5fc41219c7fa22c0d1005c02180957b7a4e887443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docente-base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b34d1d1acb4c3001092af25791d75ba143feca71461131c199e7fc9434bc0c0 = $this->env->getExtension("native_profiler");
        $__internal_6b34d1d1acb4c3001092af25791d75ba143feca71461131c199e7fc9434bc0c0->enter($__internal_6b34d1d1acb4c3001092af25791d75ba143feca71461131c199e7fc9434bc0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b34d1d1acb4c3001092af25791d75ba143feca71461131c199e7fc9434bc0c0->leave($__internal_6b34d1d1acb4c3001092af25791d75ba143feca71461131c199e7fc9434bc0c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe54687fb974cf99acc947b00abbf6f99f09275a1519f3ce9d9c6181b3fd690c = $this->env->getExtension("native_profiler");
        $__internal_fe54687fb974cf99acc947b00abbf6f99f09275a1519f3ce9d9c6181b3fd690c->enter($__internal_fe54687fb974cf99acc947b00abbf6f99f09275a1519f3ce9d9c6181b3fd690c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Main -->
<div class=\"container\">

    <!-- upper section -->
    <div class=\"row\">
        <div id=\"row-menu\" class=\"col-sm-3\">
            <!-- left -->
            <h3><i class=\"glyphicon glyphicon-menu-hamburger\"></i>    Menú</h3>
            <hr>

            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"nav-item\"><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("AdonaiUsuarios_docente");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i>   Inicio</a></li>
                <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-education\"></i>   Competencias</a></li>
                <li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("planeadores_index");
        echo "\"><i class=\"glyphicon glyphicon-th-list\"></i>   Planeadores</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("notas_index");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>   Notas Estudiantes</a></li>
                <li class=\"nav-item\"><a href=\"#\"><i class=\"glyphicon glyphicon-folder-open\"></i>     Observador Grupo</a></li>
            </ul>
            <hr>
        </div><!-- /row-menu -->

        <div id=\"contenedor-central\" class=\"col-sm-9\">
            <!-- column 2 -->
            <h3></i>Panel Planeadores Académicos</h3>
            <hr>
            <!-- center left-->
            <div id=\"contenedor_gestionar_busqueda\" class=\"col-md-12\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Crear Planeadores</h4></div>
                    <div id=\"panel_ver_notas\" class=\"panel-body\">

                    </div><!--/panel-body-->
                </div><!-- Panel-Primary -->
            </div><!-- contenedor-registrar -->
        </div><!-- row Gestionar -->


        <div id=\"contenedor_registrar_planeador\" class=\"col-sm-12\">
        </div><!-- contenedor-registrar -->

    </div><!-- /Contenedor-Central -->
</div><!-- row primera -->
</div><!--/container-->


<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 53
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_fe54687fb974cf99acc947b00abbf6f99f09275a1519f3ce9d9c6181b3fd690c->leave($__internal_fe54687fb974cf99acc947b00abbf6f99f09275a1519f3ce9d9c6181b3fd690c_prof);

    }

    public function block_scripts($context, array $blocks = array())
    {
        $__internal_cd6e84ff182e141330400261681356bff7994c70d1f9be40e459d847257bf375 = $this->env->getExtension("native_profiler");
        $__internal_cd6e84ff182e141330400261681356bff7994c70d1f9be40e459d847257bf375->enter($__internal_cd6e84ff182e141330400261681356bff7994c70d1f9be40e459d847257bf375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_cd6e84ff182e141330400261681356bff7994c70d1f9be40e459d847257bf375->leave($__internal_cd6e84ff182e141330400261681356bff7994c70d1f9be40e459d847257bf375_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Planeadores:planeador_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 53,  64 => 19,  60 => 18,  55 => 16,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'docente-base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <!-- Main -->*/
/* <div class="container">*/
/* */
/*     <!-- upper section -->*/
/*     <div class="row">*/
/*         <div id="row-menu" class="col-sm-3">*/
/*             <!-- left -->*/
/*             <h3><i class="glyphicon glyphicon-menu-hamburger"></i>    Menú</h3>*/
/*             <hr>*/
/* */
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li class="nav-item"><a href="{{ path('AdonaiUsuarios_docente') }}"><i class="glyphicon glyphicon-home"></i>   Inicio</a></li>*/
/*                 <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-education"></i>   Competencias</a></li>*/
/*                 <li class="nav-item"><a href="{{ path('planeadores_index') }}"><i class="glyphicon glyphicon-th-list"></i>   Planeadores</a></li>*/
/*                 <li class="nav-item"><a class="nav-link" href="{{ path('notas_index') }}"><i class="glyphicon glyphicon-pencil"></i>   Notas Estudiantes</a></li>*/
/*                 <li class="nav-item"><a href="#"><i class="glyphicon glyphicon-folder-open"></i>     Observador Grupo</a></li>*/
/*             </ul>*/
/*             <hr>*/
/*         </div><!-- /row-menu -->*/
/* */
/*         <div id="contenedor-central" class="col-sm-9">*/
/*             <!-- column 2 -->*/
/*             <h3></i>Panel Planeadores Académicos</h3>*/
/*             <hr>*/
/*             <!-- center left-->*/
/*             <div id="contenedor_gestionar_busqueda" class="col-md-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Crear Planeadores</h4></div>*/
/*                     <div id="panel_ver_notas" class="panel-body">*/
/* */
/*                     </div><!--/panel-body-->*/
/*                 </div><!-- Panel-Primary -->*/
/*             </div><!-- contenedor-registrar -->*/
/*         </div><!-- row Gestionar -->*/
/* */
/* */
/*         <div id="contenedor_registrar_planeador" class="col-sm-12">*/
/*         </div><!-- contenedor-registrar -->*/
/* */
/*     </div><!-- /Contenedor-Central -->*/
/* </div><!-- row primera -->*/
/* </div><!--/container-->*/
/* */
/* */
/* <!-- /Main -->*/
/* <footer id="footer"class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/* <!-- script references -->*/
/* {% block scripts %}*/
/* {% endblock %}*/
/* {% endblock %}*/
