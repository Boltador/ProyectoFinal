<?php

/* AdonaiUnicoBundle:Notas:notas_docente.html.twig */
class __TwigTemplate_bafb8deee206d7d187256ab7766eb570c73940360396c7b65bc75d0a324f8844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "AdonaiUnicoBundle:Notas:notas_docente.html.twig", 1);
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
        $__internal_cdccd8e8596e0927ff3f9540b31837e0b2f61fc7f4ce6efacaf15bb022dbfa8e = $this->env->getExtension("native_profiler");
        $__internal_cdccd8e8596e0927ff3f9540b31837e0b2f61fc7f4ce6efacaf15bb022dbfa8e->enter($__internal_cdccd8e8596e0927ff3f9540b31837e0b2f61fc7f4ce6efacaf15bb022dbfa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdonaiUnicoBundle:Notas:notas_docente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdccd8e8596e0927ff3f9540b31837e0b2f61fc7f4ce6efacaf15bb022dbfa8e->leave($__internal_cdccd8e8596e0927ff3f9540b31837e0b2f61fc7f4ce6efacaf15bb022dbfa8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16800247c1ac7fb5af2af1916b284da182f587ec8877deda5aabe0c41fe1df48 = $this->env->getExtension("native_profiler");
        $__internal_16800247c1ac7fb5af2af1916b284da182f587ec8877deda5aabe0c41fe1df48->enter($__internal_16800247c1ac7fb5af2af1916b284da182f587ec8877deda5aabe0c41fe1df48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h3><i class=\"glyphicon glyphicon-wrench\"></i>    Opciones</h3>
            <hr>

            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"nav-item\"><a class=\"nav-link active\" id=\"target_registrar\" href=\"#\"><i class=\"glyphicon glyphicon-plus\"></i>   Registrar Calificaciones</a></li>
                <li class=\"nav-item\"><a class=\"nav-link active\" id=\"target_ver\" href=\"#\"><i class=\"glyphicon glyphicon-search\"></i>     Ver Calificaciones</a></li>
            </ul>
            <hr>
            <div id=\"contenedor_promedio\" class=\"col-md-12 hidden\">
                <div id=\"panel_promedio\" class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-stats\"></i>  Promedio</h4></div>
                    <div id=\"body_promedio\" class=\"panel-body\">
                    </div><!--/panel-body-->
                </div>
            </div>

        </div><!-- /row-menu -->

        <div id=\"contenedor-central\" class=\"col-sm-9\">
            <!-- column 2 -->
            <h3></i>Panel de Calificaciones Estudiantiles</h3>
            <hr>
            <!-- center left-->
            <div id=\"contenedor_gestionar\" class=\"col-md-12 hidden\">
                <div id=\"panel_asignaciones\" class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-sort\"></i>  Gestionar Notas de Estudiantes</h4></div>
                    <div class=\"panel-body\">

                        <form id=\"form_notas\" action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("notas_new");
        echo "\" method=\"POST\" novalidate role=\"form\">
                           <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : $this->getContext($context, "al_actual")), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>
                        </div>                                                  
                        <div class=\"col-xs-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/><i><medium>Número: </medium></i><medium id=\"periodo_numero\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo "</medium>
                        </div>
                        <div class=\"col-xs-4\">
                            <i class=\"glyphicon glyphicon-list-alt\"></i>
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'label');
        echo "
                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <br/><br/><br/>
                        <div class=\"col-xs-12\">
                            <hr>
                            <h4><i class=\"glyphicon glyphicon-education\"></i>  Escoger Estudiante</h4>
                            <hr>
                            <div id=\"panel_escoger_est\">
                                <div id=\"div_lista_espera\">
                                </div>
                                <table id=\"tabla_mats\" class=\"table table-hover\">
                                    <thead id=\"head_tabla_mats\" class=\"hidden\">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre Estudiante</th>
                                            <th>Estado</th>
                                            <th>Seleccionar</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"body_tabla_mats\">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--/panel-body-->
                </div> <!-- panel primary Gestionar -->
            </div><!-- row Gestionar -->
            
            <div id=\"contenedor_registrar\" class=\"col-sm-12 hidden\">
                <div class=\"panel panel-primary\">
                    <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-edit\"></i>  Registrar Notas</h4></div>
                    <div id=\"panel_registrar_notas\" class=\"panel-body\">
                        <div id=\"div_registrar_espera\">
                        </div>

                        ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "periodo", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                        ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricula", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                        <div id=\"panel_competencias\" class=\"col-md-12\">
                        </div> <!-- Fin Panel_Competencias -->
                        <br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button id=\"enviar_form\" type=\"submit\" class=\"btn btn-success hidden\">
                            <span class=\"glyphicon glyphicon-floppy-saved\"></span>       Guardar
                        </button>  
                        ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </form>
                </div><!--/panel-body-->
            </div><!-- Panel-Primary -->
        </div><!-- contenedor-registrar -->

        <div id=\"contenedor_ver_notas\" class=\"col-sm-12\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-eye-open\"></i>  Ver Calificaciones</h4></div>
                <div id=\"panel_ver_notas\" class=\"panel-body\">
                    <div class=\"col-md-4\">
                        <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-list-alt\"></i>  Escoger Asignación: </h5>
                        <select id=\"combo_asig_ver\" class=\"form-control\">
                        </select>
                    </div>
                    <div class=\"col-md-4\">
                        <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-info-sign\"></i>  Escoger Periodo: </h5>

                        <select id=\"combo_periodo_ver\" class=\"form-control\">
                            <option value=\"0\">-- Seleccione un Periodo --</option>
                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodos"]) ? $context["periodos"] : $this->getContext($context, "periodos")));
        foreach ($context['_seq'] as $context["_key"] => $context["periodo"]) {
            // line 128
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "idPeriodo", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["periodo"], "numero", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['periodo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                        </select>

                    </div>
                    <div id=\"div_progreso\" class=\"col-md-4\">
                        <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-signal\"></i>  Progreso Notas </h5>
                        
                        <medium>&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-menu-right\"></span><strong>&nbsp;&nbsp;Periodo ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : $this->getContext($context, "periodo_actual")), "numero", array()), "html", null, true);
        echo " (Actual): </strong></medium><medium id=\"total_periodo\"></medium>
                    </div>
                    <br/><br/>
                    <div id=\"panel_tabla_notas\" class=\"col-md-12 hidden\">
                        <hr>
                        <div id=\"div_espera_ver\">
                        </div>
                        <table id=\"tabla_notas\" class=\"table\">
                            <thead id=\"head_tabla_notas\">
                                <tr id=\"head_row_notas\">
                                </tr>
                            </thead>
                            <tbody id=\"body_tabla_notas\">
                            </tbody>
                        </table>
                        <br/>
                        <h4><span class=\"glyphicon glyphicon-blackboard\"></span>&nbsp;&nbsp;Convenciones: </h4>
                        <div id=\"contenedor_convenciones\">  
                        </div>
                    </div><!--/panel-body-->
                    <br/>
                    <div class=\"col-md-12\">
                        <br/>
                        <div id=\"div_error_ver\">
                        </div>
                        <div id=\"div_info_ver\">
                            <p><strong>NOTA: </strong> En este apartado puedes ver tanto las notas de todos los estudiantes en el periodo actual y en los periodos anteriores, más no modificar notas en periodos anteriores.</p><br/>
                        </div>
                        <button type=\"button\" id=\"boton_buscar\" data-loading-text=\"Buscando\" autocomplete=\"off\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </div><!-- Panel-Primary -->
            </div><!-- contenedor-registrar -->

        </div><!-- /Contenedor-Central -->
    </div><!-- row primera -->
</div><!--/container-->


<!-- /Main -->
<footer id=\"footer\"class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

<!-- script references -->
";
        // line 178
        $this->displayBlock('scripts', $context, $blocks);
        
        $__internal_16800247c1ac7fb5af2af1916b284da182f587ec8877deda5aabe0c41fe1df48->leave($__internal_16800247c1ac7fb5af2af1916b284da182f587ec8877deda5aabe0c41fe1df48_prof);

    }

    public function block_scripts($context, array $blocks = array())
    {
        $__internal_193e28f8fa601e5e9be3d2602f2a69e01953d3dc264d22d3d4d18866225b8ab0 = $this->env->getExtension("native_profiler");
        $__internal_193e28f8fa601e5e9be3d2602f2a69e01953d3dc264d22d3d4d18866225b8ab0->enter($__internal_193e28f8fa601e5e9be3d2602f2a69e01953d3dc264d22d3d4d18866225b8ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 179
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/notas_docente.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_193e28f8fa601e5e9be3d2602f2a69e01953d3dc264d22d3d4d18866225b8ab0->leave($__internal_193e28f8fa601e5e9be3d2602f2a69e01953d3dc264d22d3d4d18866225b8ab0_prof);

    }

    public function getTemplateName()
    {
        return "AdonaiUnicoBundle:Notas:notas_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 179,  273 => 178,  228 => 136,  220 => 130,  209 => 128,  205 => 127,  182 => 107,  170 => 98,  165 => 96,  127 => 61,  123 => 60,  112 => 56,  104 => 53,  99 => 51,  64 => 19,  60 => 18,  55 => 16,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <h3><i class="glyphicon glyphicon-wrench"></i>    Opciones</h3>*/
/*             <hr>*/
/* */
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li class="nav-item"><a class="nav-link active" id="target_registrar" href="#"><i class="glyphicon glyphicon-plus"></i>   Registrar Calificaciones</a></li>*/
/*                 <li class="nav-item"><a class="nav-link active" id="target_ver" href="#"><i class="glyphicon glyphicon-search"></i>     Ver Calificaciones</a></li>*/
/*             </ul>*/
/*             <hr>*/
/*             <div id="contenedor_promedio" class="col-md-12 hidden">*/
/*                 <div id="panel_promedio" class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-stats"></i>  Promedio</h4></div>*/
/*                     <div id="body_promedio" class="panel-body">*/
/*                     </div><!--/panel-body-->*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div><!-- /row-menu -->*/
/* */
/*         <div id="contenedor-central" class="col-sm-9">*/
/*             <!-- column 2 -->*/
/*             <h3></i>Panel de Calificaciones Estudiantiles</h3>*/
/*             <hr>*/
/*             <!-- center left-->*/
/*             <div id="contenedor_gestionar" class="col-md-12 hidden">*/
/*                 <div id="panel_asignaciones" class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-sort"></i>  Gestionar Notas de Estudiantes</h4></div>*/
/*                     <div class="panel-body">*/
/* */
/*                         <form id="form_notas" action="{{ path('notas_new') }}" method="POST" novalidate role="form">*/
/*                            <div class="col-xs-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h5><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/*                         </div>                                                  */
/*                         <div class="col-xs-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h5><medium id="periodo_fechas">{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }}</medium><br/><i><medium>Número: </medium></i><medium id="periodo_numero">{{ periodo_actual.numero }}</medium>*/
/*                         </div>*/
/*                         <div class="col-xs-4">*/
/*                             <i class="glyphicon glyphicon-list-alt"></i>*/
/*                             {{ form_label(form.asignacion) }}*/
/*                             {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/*                         </div>*/
/*                         <br/><br/><br/>*/
/*                         <div class="col-xs-12">*/
/*                             <hr>*/
/*                             <h4><i class="glyphicon glyphicon-education"></i>  Escoger Estudiante</h4>*/
/*                             <hr>*/
/*                             <div id="panel_escoger_est">*/
/*                                 <div id="div_lista_espera">*/
/*                                 </div>*/
/*                                 <table id="tabla_mats" class="table table-hover">*/
/*                                     <thead id="head_tabla_mats" class="hidden">*/
/*                                         <tr>*/
/*                                             <th>ID</th>*/
/*                                             <th>Nombre Estudiante</th>*/
/*                                             <th>Estado</th>*/
/*                                             <th>Seleccionar</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody id="body_tabla_mats">*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--/panel-body-->*/
/*                 </div> <!-- panel primary Gestionar -->*/
/*             </div><!-- row Gestionar -->*/
/*             */
/*             <div id="contenedor_registrar" class="col-sm-12 hidden">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Registrar Notas</h4></div>*/
/*                     <div id="panel_registrar_notas" class="panel-body">*/
/*                         <div id="div_registrar_espera">*/
/*                         </div>*/
/* */
/*                         {{ form_widget(form.periodo, {'attr': {'class':'hidden'}})}}*/
/* */
/*                         {{ form_widget(form.matricula, {'attr': {'class':'hidden'}})}}*/
/* */
/*                         <div id="panel_competencias" class="col-md-12">*/
/*                         </div> <!-- Fin Panel_Competencias -->*/
/*                         <br/>*/
/*                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                         <button id="enviar_form" type="submit" class="btn btn-success hidden">*/
/*                             <span class="glyphicon glyphicon-floppy-saved"></span>       Guardar*/
/*                         </button>  */
/*                         {{ form_rest(form) }}*/
/*                     </form>*/
/*                 </div><!--/panel-body-->*/
/*             </div><!-- Panel-Primary -->*/
/*         </div><!-- contenedor-registrar -->*/
/* */
/*         <div id="contenedor_ver_notas" class="col-sm-12">*/
/*             <div class="panel panel-primary">*/
/*                 <div class="panel-heading"><h4><i class="glyphicon glyphicon-eye-open"></i>  Ver Calificaciones</h4></div>*/
/*                 <div id="panel_ver_notas" class="panel-body">*/
/*                     <div class="col-md-4">*/
/*                         <h5 id="subtitulo"><i class="glyphicon glyphicon-list-alt"></i>  Escoger Asignación: </h5>*/
/*                         <select id="combo_asig_ver" class="form-control">*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="col-md-4">*/
/*                         <h5 id="subtitulo"><i class="glyphicon glyphicon-info-sign"></i>  Escoger Periodo: </h5>*/
/* */
/*                         <select id="combo_periodo_ver" class="form-control">*/
/*                             <option value="0">-- Seleccione un Periodo --</option>*/
/*                             {% for periodo in periodos %}*/
/*                             <option value="{{ periodo.idPeriodo }}">{{ periodo.numero }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/* */
/*                     </div>*/
/*                     <div id="div_progreso" class="col-md-4">*/
/*                         <h5 id="subtitulo"><i class="glyphicon glyphicon-signal"></i>  Progreso Notas </h5>*/
/*                         */
/*                         <medium>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span><strong>&nbsp;&nbsp;Periodo {{ periodo_actual.numero }} (Actual): </strong></medium><medium id="total_periodo"></medium>*/
/*                     </div>*/
/*                     <br/><br/>*/
/*                     <div id="panel_tabla_notas" class="col-md-12 hidden">*/
/*                         <hr>*/
/*                         <div id="div_espera_ver">*/
/*                         </div>*/
/*                         <table id="tabla_notas" class="table">*/
/*                             <thead id="head_tabla_notas">*/
/*                                 <tr id="head_row_notas">*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="body_tabla_notas">*/
/*                             </tbody>*/
/*                         </table>*/
/*                         <br/>*/
/*                         <h4><span class="glyphicon glyphicon-blackboard"></span>&nbsp;&nbsp;Convenciones: </h4>*/
/*                         <div id="contenedor_convenciones">  */
/*                         </div>*/
/*                     </div><!--/panel-body-->*/
/*                     <br/>*/
/*                     <div class="col-md-12">*/
/*                         <br/>*/
/*                         <div id="div_error_ver">*/
/*                         </div>*/
/*                         <div id="div_info_ver">*/
/*                             <p><strong>NOTA: </strong> En este apartado puedes ver tanto las notas de todos los estudiantes en el periodo actual y en los periodos anteriores, más no modificar notas en periodos anteriores.</p><br/>*/
/*                         </div>*/
/*                         <button type="button" id="boton_buscar" data-loading-text="Buscando" autocomplete="off" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                     </div>*/
/*                 </div><!-- Panel-Primary -->*/
/*             </div><!-- contenedor-registrar -->*/
/* */
/*         </div><!-- /Contenedor-Central -->*/
/*     </div><!-- row primera -->*/
/* </div><!--/container-->*/
/* */
/* */
/* <!-- /Main -->*/
/* <footer id="footer"class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/* <!-- script references -->*/
/* {% block scripts %}*/
/* <script src="{{ asset('public/js/notas_docente.js') }}"></script>*/
/* {% endblock %}*/
/* {% endblock %}*/
