<?php

/* @AdonaiUnico/Default/admin.html.twig */
class __TwigTemplate_9b845921f3edb70d821f1fae1b927b90150f1e6d93f1358f12d17c353e9da69a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@AdonaiUnico/Default/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<!-- Header -->
<div id=\"top-nav\" class=\"navbar navbar-inverse navbar-static-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
        <span class=\"icon-toggle\"></span>
      </button>

      <a style=\"color: white;\" class=\"navbar-brand\" href=\"#\">Sistema de Gestión Académica - ADONAI</a>
    </div>

    <div class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
          <a style=\"color: white;\"  class=\"dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" href=\"#\">
            <i class=\"glyphicon glyphicon-user\"></i>  ";
        // line 19
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        }
        // line 20
        echo "            <span class=\"caret\"></span></a>
            <ul id=\"g-account-menu\" class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"#\"><i class=\"glyphicon glyphicon-home\"></i>  Ir al Inicio</a></li>
              <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i>Desconectarse</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div><!-- /container -->
  </div>
  <!-- /Header -->

  <!-- Main -->
  <div class=\"container\">

    <!-- upper section -->
    <div class=\"row\">
      <div class=\"col-sm-3\">
        <!-- left -->
        <h3><i class=\"glyphicon glyphicon-menu-hamburger\"></i>    Menú</h3>
        <hr>

        <ul class=\"nav nav-stacked\">
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-home\"></i>   Inicio</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-list-alt\"></i>   Ver Planeadores</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-th-list\"></i>   Ver Boletines Académicos</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-pencil\"></i>   Ver Observadores</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-tasks\"></i>   Gestionar Asignaciones</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-user\"></i>   Usuarios</a></li>
          <li><a href=\"http://www.bootply.com/85861\" target=\"ext\"><i class=\"glyphicon glyphicon-download\"></i>   Exportar Reportes</a></li>
          <hr>

        </div><!-- /span-3 -->
        <div class=\"col-sm-9\">

          <!-- column 2 --> 
          <h3></i>Bienvenido al Panel de Gestión Coordinador(a): ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coordinador"]) ? $context["coordinador"] : null), "nomCor", array()), "html", null, true);
        echo " </h3>  

          <hr>

          <div class=\"row\">
            <!-- center left--> 
            <div class=\"col-md-7\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-home\"></i>  Información General</h4></div>
                <div class=\"panel-body\">

                  <h4 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Año Lectivo Actual: </h4><medium>";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaInicio", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["al_actual"]) ? $context["al_actual"] : null), "fechaFinal", array()), "d/m/Y"), "html", null, true);
        echo "</medium>

                  <h4 id=\"subtitulo\"><i class=\"glyphicon glyphicon-calendar\"></i>  Periodo Actual: </h4><medium>";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaInPer", array()), "d/m/Y"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "fechaFinPer", array()), "d/m/Y"), "html", null, true);
        echo " -- </medium><medium style=\"font-weight: bold;\">Número: </medium><medium>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periodo_actual"]) ? $context["periodo_actual"] : null), "numero", array()), "html", null, true);
        echo "</medium>


                </div><!--/panel-body-->

                <div class=\"panel-heading\"><h4><i class=\"glyphicon glyphicon-signal\"></i>  Estadisticas: </h4></div>
                <div class=\"panel-body\">
                  <medium><strong>Número de Grupos: </strong>";
        // line 76
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lista_grupos"]) ? $context["lista_grupos"] : null)), "html", null, true);
        echo "</medium><br/>
                  <medium><strong>Total de Estudiantes Matriculados: </strong>";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["total_est"]) ? $context["total_est"] : null), "html", null, true);
        echo "</medium>
                </div><!--/panel-body-->
              </div><!--/panel-->                     

            </div><!--/col-->

            <!--center-right-->
            <div class=\"col-md-5\">
              <img style=\"margin: 0 auto;\" class=\"img-responsive\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/img/logo2.png"), "html", null, true);
        echo "\">

              <hr>
              <p class=\"text-justify\">
                Bienvenido al panel del coordinador, aqui puedes realizar las acciones de consultar los planeadores académicos de los grupos, consultar los observadores de clase y las notas de todos los estudiantes de la institución.</p> 
                <p class=\"text-justify\">Tambien puedes generar los reportes en pdf de planeadores, boletines académicos o registro de incidentes.</p>
                <p class=\"text-justify\">De igual manera, puede crear y administrar los usuarios de cada docente para habilitarles el ingreso a la plataforma.</p>

              </div><!--/col-span-6-->

              <hr>

            </div><!--/row-->
          </div><!--/col-span-9-->

        </div><!--/row-->
        <!-- /upper section -->

        <!-- lower section -->
        <hr>    
        <div class=\"row\">
          <div class=\"col-md-7\">
            <strong><i class=\"glyphicon glyphicon-list-alt\"></i>Lista de Grupos</strong>  
            <hr>
            <table style=\"border-right: 1px solid #ccc;\" class=\"table table-responsive\">
              <thead>
                <tr>
                  <th>ID Grupo</th>
                  <th>Grupo</th>
                  <th>Director de Grupo</th>
                  <th>Año Lectivo</th>
                  <th>Lista Estudiantes</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_grupos"]) ? $context["lista_grupos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
            // line 121
            echo "                <tr id=\"grupo_activo_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "\" class=\"active\">
                  <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "grado", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "nomenclatura", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["grupo"], "docente", array()), "nomDoc", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["grupo"], "aLectivo", array()), "fechaInicio", array()), "d/m/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["grupo"], "aLectivo", array()), "fechaFinal", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                  <td>
                    <button id=\"grupo";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "\" onclick=\"verListaMats(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo ")\" type=\"button\" class=\"btn btn-info glyphicon glyphicon-search\"></button>
                  </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "              </tbody>
            </table>  
            <div class=\"alert alert-info\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              Recuerda <a href=\"#\">Cerrar Sesión</a> cuando termines tu trabajo.
            </div>   
          </div>
          <div class=\"col-md-5  table-responsive\">
            <strong><i class=\"glyphicon glyphicon-list-alt\"></i>Lista de Estudiantes</strong>  
            <hr> 
            <div id=\"listaEst\" class=\"col-md-12\">
              <table id=\"tabla_mats\" class=\"table\">
                <thead>
                  <tr>
                    <th>ID Matricula</th>
                    <th>Nombre Estudiante</th>
                    <th>Grupo</th>
                  </tr>
                </thead>
                <tbody id=\"body_tabla_mats\">
                </tbody>
              </table>
            </div>  
          </div>
        </div> <!-- /Row -->

      </div><!--/container-->
      <!-- /Main -->


      <footer class=\"text-center\">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href=\"http://google.com\"><strong>Creador: Carlos Caicedo</strong></a></footer>

      <!-- script references -->
      ";
        // line 164
        $this->displayBlock('javascripts', $context, $blocks);
        // line 209
        echo "  ";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script>
      function verListaMats(id_grupo){
        \$.ajax({
          url: \"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("buscarListaMats");
        echo "\",
          data: ({'id': id_grupo }),
          method: 'POST',
          dataType: \"json\",
          success: function (data) {
            if (data == null) {
              alert(\"No se ha encontrado Datos\");
            } else {
              \$('#body_tabla_mats').empty();
              \$('#body_tabla_mats').append(rowEntity(data));

              ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_grupos"]) ? $context["lista_grupos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
            // line 182
            echo "              if(\$('#grupo_activo_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "').hasClass(\"info\")){
                \$('#grupo_activo_";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["grupo"], "idGrupo", array()), "html", null, true);
            echo "').removeClass(\"info\");
              }
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "              \$('#grupo_activo_'+id_grupo).addClass(\"info\");
            }
          }
        });

      }

      function rowEntity(data) {
        var matriculasProcesar = new Array();

    //obviamente esto se hace luego de realizar la busqueda en la bd, en este caso \$encontrada representa el usuario encontrado
    for(i = 0; i < data.length; i++){
      fila = \"<tr>\" +
      \"<td>\" + data[i][\"id\"] + \"</td>\" +
      \"<td>\" + data[i][\"nombre\"] + \"</td>\" +
      \"<td>\" + data[i][\"grado\"] +' - '+ data[i][\"grupo\"] + \"</td>\" +
      \"</tr>\";
      matriculasProcesar.push(fila);
    }
    return matriculasProcesar;
  }
  </script>
  ";
    }

    public function getTemplateName()
    {
        return "@AdonaiUnico/Default/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 186,  303 => 183,  298 => 182,  294 => 181,  280 => 170,  273 => 166,  268 => 165,  265 => 164,  261 => 209,  259 => 164,  224 => 131,  212 => 127,  205 => 125,  201 => 124,  195 => 123,  191 => 122,  186 => 121,  182 => 120,  144 => 85,  133 => 77,  129 => 76,  115 => 69,  108 => 67,  94 => 56,  58 => 23,  53 => 20,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <!-- Header -->*/
/* <div id="top-nav" class="navbar navbar-inverse navbar-static-top">*/
/*   <div class="container">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*         <span class="icon-toggle"></span>*/
/*       </button>*/
/* */
/*       <a style="color: white;" class="navbar-brand" href="#">Sistema de Gestión Académica - ADONAI</a>*/
/*     </div>*/
/* */
/*     <div class="navbar-collapse collapse">*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li class="dropdown">*/
/*           <a style="color: white;"  class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">*/
/*             <i class="glyphicon glyphicon-user"></i>  {% if app.user %}{{ app.user.username }}{% endif %}*/
/*             <span class="caret"></span></a>*/
/*             <ul id="g-account-menu" class="dropdown-menu" role="menu">*/
/*               <li><a href="#"><i class="glyphicon glyphicon-home"></i>  Ir al Inicio</a></li>*/
/*               <li><a href="{{ path('logout') }}"><i class="glyphicon glyphicon-lock"></i>Desconectarse</a></li>*/
/*             </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div><!-- /container -->*/
/*   </div>*/
/*   <!-- /Header -->*/
/* */
/*   <!-- Main -->*/
/*   <div class="container">*/
/* */
/*     <!-- upper section -->*/
/*     <div class="row">*/
/*       <div class="col-sm-3">*/
/*         <!-- left -->*/
/*         <h3><i class="glyphicon glyphicon-menu-hamburger"></i>    Menú</h3>*/
/*         <hr>*/
/* */
/*         <ul class="nav nav-stacked">*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-home"></i>   Inicio</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-list-alt"></i>   Ver Planeadores</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-th-list"></i>   Ver Boletines Académicos</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-pencil"></i>   Ver Observadores</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-tasks"></i>   Gestionar Asignaciones</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-user"></i>   Usuarios</a></li>*/
/*           <li><a href="http://www.bootply.com/85861" target="ext"><i class="glyphicon glyphicon-download"></i>   Exportar Reportes</a></li>*/
/*           <hr>*/
/* */
/*         </div><!-- /span-3 -->*/
/*         <div class="col-sm-9">*/
/* */
/*           <!-- column 2 --> */
/*           <h3></i>Bienvenido al Panel de Gestión Coordinador(a): {{ coordinador.nomCor }} </h3>  */
/* */
/*           <hr>*/
/* */
/*           <div class="row">*/
/*             <!-- center left--> */
/*             <div class="col-md-7">*/
/*               <div class="panel panel-default">*/
/*                 <div class="panel-heading"><h4><i class="glyphicon glyphicon-home"></i>  Información General</h4></div>*/
/*                 <div class="panel-body">*/
/* */
/*                   <h4 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Año Lectivo Actual: </h4><medium>{{ al_actual.fechaInicio|date("d/m/Y") }} - {{ al_actual.fechaFinal|date("d/m/Y") }}</medium>*/
/* */
/*                   <h4 id="subtitulo"><i class="glyphicon glyphicon-calendar"></i>  Periodo Actual: </h4><medium>{{ periodo_actual.fechaInPer|date("d/m/Y") }} - {{ periodo_actual.fechaFinPer|date("d/m/Y") }} -- </medium><medium style="font-weight: bold;">Número: </medium><medium>{{ periodo_actual.numero }}</medium>*/
/* */
/* */
/*                 </div><!--/panel-body-->*/
/* */
/*                 <div class="panel-heading"><h4><i class="glyphicon glyphicon-signal"></i>  Estadisticas: </h4></div>*/
/*                 <div class="panel-body">*/
/*                   <medium><strong>Número de Grupos: </strong>{{ lista_grupos|length }}</medium><br/>*/
/*                   <medium><strong>Total de Estudiantes Matriculados: </strong>{{ total_est }}</medium>*/
/*                 </div><!--/panel-body-->*/
/*               </div><!--/panel-->                     */
/* */
/*             </div><!--/col-->*/
/* */
/*             <!--center-right-->*/
/*             <div class="col-md-5">*/
/*               <img style="margin: 0 auto;" class="img-responsive" src="{{ asset('public/img/logo2.png') }}">*/
/* */
/*               <hr>*/
/*               <p class="text-justify">*/
/*                 Bienvenido al panel del coordinador, aqui puedes realizar las acciones de consultar los planeadores académicos de los grupos, consultar los observadores de clase y las notas de todos los estudiantes de la institución.</p> */
/*                 <p class="text-justify">Tambien puedes generar los reportes en pdf de planeadores, boletines académicos o registro de incidentes.</p>*/
/*                 <p class="text-justify">De igual manera, puede crear y administrar los usuarios de cada docente para habilitarles el ingreso a la plataforma.</p>*/
/* */
/*               </div><!--/col-span-6-->*/
/* */
/*               <hr>*/
/* */
/*             </div><!--/row-->*/
/*           </div><!--/col-span-9-->*/
/* */
/*         </div><!--/row-->*/
/*         <!-- /upper section -->*/
/* */
/*         <!-- lower section -->*/
/*         <hr>    */
/*         <div class="row">*/
/*           <div class="col-md-7">*/
/*             <strong><i class="glyphicon glyphicon-list-alt"></i>Lista de Grupos</strong>  */
/*             <hr>*/
/*             <table style="border-right: 1px solid #ccc;" class="table table-responsive">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <th>ID Grupo</th>*/
/*                   <th>Grupo</th>*/
/*                   <th>Director de Grupo</th>*/
/*                   <th>Año Lectivo</th>*/
/*                   <th>Lista Estudiantes</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% for grupo in lista_grupos %}*/
/*                 <tr id="grupo_activo_{{ grupo.idGrupo }}" class="active">*/
/*                   <td>{{ grupo.idGrupo }}</td>*/
/*                   <td>{{ grupo.grado }} - {{ grupo.nomenclatura }}</td>*/
/*                   <td>{{ grupo.docente.nomDoc }}</td>*/
/*                   <td>{{ grupo.aLectivo.fechaInicio|date("d/m/Y") }} - {{ grupo.aLectivo.fechaFinal|date("d/m/Y") }}</td>*/
/*                   <td>*/
/*                     <button id="grupo{{ grupo.idGrupo }}" onclick="verListaMats({{ grupo.idGrupo }})" type="button" class="btn btn-info glyphicon glyphicon-search"></button>*/
/*                   </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*             </table>  */
/*             <div class="alert alert-info">*/
/*               <button type="button" class="close" data-dismiss="alert">×</button>*/
/*               Recuerda <a href="#">Cerrar Sesión</a> cuando termines tu trabajo.*/
/*             </div>   */
/*           </div>*/
/*           <div class="col-md-5  table-responsive">*/
/*             <strong><i class="glyphicon glyphicon-list-alt"></i>Lista de Estudiantes</strong>  */
/*             <hr> */
/*             <div id="listaEst" class="col-md-12">*/
/*               <table id="tabla_mats" class="table">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th>ID Matricula</th>*/
/*                     <th>Nombre Estudiante</th>*/
/*                     <th>Grupo</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody id="body_tabla_mats">*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>  */
/*           </div>*/
/*         </div> <!-- /Row -->*/
/* */
/*       </div><!--/container-->*/
/*       <!-- /Main -->*/
/* */
/* */
/*       <footer class="text-center">Copyright &copy; 2016 | Colegio Bautista Ebenezer - <a href="http://google.com"><strong>Creador: Carlos Caicedo</strong></a></footer>*/
/* */
/*       <!-- script references -->*/
/*       {% block javascripts %}*/
/*       <script src="{{ asset('public/js/jquery.min.js') }}"></script>*/
/*       <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*       <script>*/
/*       function verListaMats(id_grupo){*/
/*         $.ajax({*/
/*           url: "{{ path('buscarListaMats') }}",*/
/*           data: ({'id': id_grupo }),*/
/*           method: 'POST',*/
/*           dataType: "json",*/
/*           success: function (data) {*/
/*             if (data == null) {*/
/*               alert("No se ha encontrado Datos");*/
/*             } else {*/
/*               $('#body_tabla_mats').empty();*/
/*               $('#body_tabla_mats').append(rowEntity(data));*/
/* */
/*               {% for grupo in lista_grupos %}*/
/*               if($('#grupo_activo_{{ grupo.idGrupo }}').hasClass("info")){*/
/*                 $('#grupo_activo_{{ grupo.idGrupo }}').removeClass("info");*/
/*               }*/
/*               {% endfor %}*/
/*               $('#grupo_activo_'+id_grupo).addClass("info");*/
/*             }*/
/*           }*/
/*         });*/
/* */
/*       }*/
/* */
/*       function rowEntity(data) {*/
/*         var matriculasProcesar = new Array();*/
/* */
/*     //obviamente esto se hace luego de realizar la busqueda en la bd, en este caso $encontrada representa el usuario encontrado*/
/*     for(i = 0; i < data.length; i++){*/
/*       fila = "<tr>" +*/
/*       "<td>" + data[i]["id"] + "</td>" +*/
/*       "<td>" + data[i]["nombre"] + "</td>" +*/
/*       "<td>" + data[i]["grado"] +' - '+ data[i]["grupo"] + "</td>" +*/
/*       "</tr>";*/
/*       matriculasProcesar.push(fila);*/
/*     }*/
/*     return matriculasProcesar;*/
/*   }*/
/*   </script>*/
/*   {% endblock %}*/
/*   {% endblock %}*/
/* */
