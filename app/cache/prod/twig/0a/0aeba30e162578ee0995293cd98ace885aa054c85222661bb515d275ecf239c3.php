<?php

/* @AdonaiUnico/Notas/notas_docente.html.twig */
class __TwigTemplate_e25e102d03ba58159980651518e68cf61a6c07c42f367d204e17b19196a60da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docente-base.html.twig", "@AdonaiUnico/Notas/notas_docente.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
            <form id=\"form_notas\" action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("notas_new");
        echo "\" method=\"POST\" novalidate role=\"form\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
                <div id=\"contenedor_gestionar\" class=\"col-md-12 hidden\">
                    <div id=\"panel_asignaciones\" class=\"panel panel-primary\">
                        <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-sort\"></i>  Gestionar Notas de Estudiantes</h4></div>
                        <div class=\"panel-body\">
                            <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h5><medium>";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>
                            </div>                                                  
                            <div class=\"col-xs-4\">
                                <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h5><medium id=\"periodo_fechas\">";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo "</medium><br/><i><medium>Número: </medium></i><medium id=\"periodo_numero\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "numero", array()), "html", null, true);
        echo "</medium>
                            </div>
                            <div class=\"col-xs-4\">
                                <i class=\"glyphicon glyphicon-list-alt\"></i>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asignacion", array()), 'label');
        echo "
                                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "asignacion", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "periodo", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "matricula", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "

                            <div id=\"panel_competencias\" class=\"col-md-12\">
                            </div> <!-- Fin Panel_Competencias -->
                            <br/>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button id=\"enviar_form\" type=\"submit\" class=\"btn btn-success hidden\">
                                <span class=\"glyphicon glyphicon-floppy-saved\"></span>       Guardar
                            </button>  

                        </div><!--/panel-body-->
                    </div><!-- Panel-Primary -->
                </div><!-- contenedor-registrar -->
            </form>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["periodos"]) ? $context["periodos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["periodo"]) {
            // line 128
            echo "                                <option value=\"";
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
        echo "                            </select>

                        </div>
                        <div id=\"div_progreso\" class=\"col-md-4\">
                            <h5 id=\"subtitulo\"><i class=\"glyphicon glyphicon-signal\"></i>  Progreso Notas </h5>

                            <medium>&nbsp;&nbsp;&nbsp;&nbsp;<span class=\"glyphicon glyphicon-menu-right\"></span><strong>&nbsp;&nbsp;Periodo ";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "numero", array()), "html", null, true);
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
        // line 181
        echo "    ";
    }

    // line 178
    public function block_scripts($context, array $blocks = array())
    {
        // line 179
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/notas_docente.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@AdonaiUnico/Notas/notas_docente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 179,  270 => 178,  266 => 181,  264 => 178,  219 => 136,  211 => 130,  200 => 128,  196 => 127,  164 => 98,  159 => 96,  121 => 61,  117 => 60,  106 => 56,  98 => 53,  89 => 47,  85 => 46,  55 => 19,  51 => 18,  46 => 16,  32 => 4,  29 => 3,  11 => 1,);
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
/*             <form id="form_notas" action="{{ path('notas_new') }}" method="POST" novalidate role="form">*/
/*                 {{ form_row(form._token) }}*/
/*                 <div id="contenedor_gestionar" class="col-md-12 hidden">*/
/*                     <div id="panel_asignaciones" class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-sort"></i>  Gestionar Notas de Estudiantes</h4></div>*/
/*                         <div class="panel-body">*/
/*                             <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h5><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/*                             </div>                                                  */
/*                             <div class="col-xs-4">*/
/*                                 <h5 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h5><medium id="periodo_fechas">{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }}</medium><br/><i><medium>Número: </medium></i><medium id="periodo_numero">{{ periodo_actual.numero }}</medium>*/
/*                             </div>*/
/*                             <div class="col-xs-4">*/
/*                                 <i class="glyphicon glyphicon-list-alt"></i>*/
/*                                 {{ form_label(form.asignacion) }}*/
/*                                 {{ form_widget(form.asignacion, {'attr': {'class':'form-control'}})}}*/
/*                             </div>*/
/*                             <br/><br/><br/>*/
/*                             <div class="col-xs-12">*/
/*                                 <hr>*/
/*                                 <h4><i class="glyphicon glyphicon-education"></i>  Escoger Estudiante</h4>*/
/*                                 <hr>*/
/*                                 <div id="panel_escoger_est">*/
/*                                     <div id="div_lista_espera">*/
/*                                     </div>*/
/*                                     <table id="tabla_mats" class="table table-hover">*/
/*                                         <thead id="head_tabla_mats" class="hidden">*/
/*                                             <tr>*/
/*                                                 <th>ID</th>*/
/*                                                 <th>Nombre Estudiante</th>*/
/*                                                 <th>Estado</th>*/
/*                                                 <th>Seleccionar</th>*/
/*                                             </tr>*/
/*                                         </thead>*/
/*                                         <tbody id="body_tabla_mats">*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div><!--/panel-body-->*/
/*                     </div> <!-- panel primary Gestionar -->*/
/*                 </div><!-- row Gestionar -->*/
/* */
/*                 <div id="contenedor_registrar" class="col-sm-12 hidden">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i>  Registrar Notas</h4></div>*/
/*                         <div id="panel_registrar_notas" class="panel-body">*/
/*                             <div id="div_registrar_espera">*/
/*                             </div>*/
/* */
/*                             {{ form_widget(form.periodo, {'attr': {'class':'hidden'}})}}*/
/* */
/*                             {{ form_widget(form.matricula, {'attr': {'class':'hidden'}})}}*/
/* */
/*                             <div id="panel_competencias" class="col-md-12">*/
/*                             </div> <!-- Fin Panel_Competencias -->*/
/*                             <br/>*/
/*                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
/*                             <button id="enviar_form" type="submit" class="btn btn-success hidden">*/
/*                                 <span class="glyphicon glyphicon-floppy-saved"></span>       Guardar*/
/*                             </button>  */
/* */
/*                         </div><!--/panel-body-->*/
/*                     </div><!-- Panel-Primary -->*/
/*                 </div><!-- contenedor-registrar -->*/
/*             </form>*/
/* */
/*             <div id="contenedor_ver_notas" class="col-sm-12">*/
/*                 <div class="panel panel-primary">*/
/*                     <div class="panel-heading"><h4><i class="glyphicon glyphicon-eye-open"></i>  Ver Calificaciones</h4></div>*/
/*                     <div id="panel_ver_notas" class="panel-body">*/
/*                         <div class="col-md-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-list-alt"></i>  Escoger Asignación: </h5>*/
/*                             <select id="combo_asig_ver" class="form-control">*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-info-sign"></i>  Escoger Periodo: </h5>*/
/* */
/*                             <select id="combo_periodo_ver" class="form-control">*/
/*                                 <option value="0">-- Seleccione un Periodo --</option>*/
/*                                 {% for periodo in periodos %}*/
/*                                 <option value="{{ periodo.idPeriodo }}">{{ periodo.numero }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/* */
/*                         </div>*/
/*                         <div id="div_progreso" class="col-md-4">*/
/*                             <h5 id="subtitulo"><i class="glyphicon glyphicon-signal"></i>  Progreso Notas </h5>*/
/* */
/*                             <medium>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-menu-right"></span><strong>&nbsp;&nbsp;Periodo {{ periodo_actual.numero }} (Actual): </strong></medium><medium id="total_periodo"></medium>*/
/*                         </div>*/
/*                         <br/><br/>*/
/*                         <div id="panel_tabla_notas" class="col-md-12 hidden">*/
/*                             <hr>*/
/*                             <div id="div_espera_ver">*/
/*                             </div>*/
/*                             <table id="tabla_notas" class="table">*/
/*                                 <thead id="head_tabla_notas">*/
/*                                     <tr id="head_row_notas">*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody id="body_tabla_notas">*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <br/>*/
/*                             <h4><span class="glyphicon glyphicon-blackboard"></span>&nbsp;&nbsp;Convenciones: </h4>*/
/*                             <div id="contenedor_convenciones">  */
/*                             </div>*/
/*                         </div><!--/panel-body-->*/
/*                         <br/>*/
/*                         <div class="col-md-12">*/
/*                             <br/>*/
/*                             <div id="div_error_ver">*/
/*                             </div>*/
/*                             <div id="div_info_ver">*/
/*                                 <p><strong>NOTA: </strong> En este apartado puedes ver tanto las notas de todos los estudiantes en el periodo actual y en los periodos anteriores, más no modificar notas en periodos anteriores.</p><br/>*/
/*                             </div>*/
/*                             <button type="button" id="boton_buscar" data-loading-text="Buscando" autocomplete="off" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                         </div>*/
/*                     </div><!-- Panel-Primary -->*/
/*                 </div><!-- contenedor-registrar -->*/
/* */
/*             </div><!-- /Contenedor-Central -->*/
/*         </div><!-- row primera -->*/
/*     </div><!--/container-->*/
/* */
/* */
/*     <!-- /Main -->*/
/*     <footer id="footer"class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/*     <!-- script references -->*/
/*     {% block scripts %}*/
/*     <script src="{{ asset('public/js/notas_docente.js') }}"></script>*/
/*     {% endblock %}*/
/*     {% endblock %}*/
