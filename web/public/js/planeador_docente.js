
_.templateSettings.variable = "element";
var tpl = _.template($("#añadir_tema").html());

var numero_tema = 1;
var editadas = 0;

//Evento cuando cambia de asignacion
$("#planeador_asignacion").change(function () {
    $("#planeador_asignacion").attr('disabled', 'disabled');
    var data = {
        asignacion_id: $(this).val(),
        periodo_id: $("#planeador_periodo").val()
    };
    editadas = 0;
    if ($("#confirmacion")) {
        $("#confirmacion").remove();
    }
    if (data["asignacion_id"] === "") {
        $("#planeador_asignacion").prop("disabled", false);
        resetearFormulario();
    } else {
        $.ajax({
            type: 'post',
            url: Routing.generate('planeador_existente'),
            data: data,
            success: function (data) {
                if(data == false){
                    numero_tema = 1;
                    editadas = 0;
                    espera(1);  
                    $("#plan_actual").val("");      
                    $("#body_tabla_plan").empty().hide().fadeIn(200);
                    $("#tabla_plan").addClass("hidden");
                    $("#enviar_form").addClass("hidden").hide().fadeIn(200);
                    $("#add").removeClass("hidden").hide().fadeIn(200);
                } else {
                    numero_tema = 1;
                    editadas = 1;
                    $("#plan_actual").val(data[0]["id_planeador"]);
                    $("#body_tabla_plan").empty();
                    setearTemasExistentes(data);
                    $("#tabla_plan").removeClass("hidden");
                    $("#add").removeClass("hidden").hide().fadeIn(200);
                    $("#enviar_form").removeClass("hidden").hide().fadeIn(200);
                }
                $("#planeador_asignacion").prop("disabled", false);
            }
        });
    }
});

// Crea un tema

function crearTema(){
    var tplData = {
        i: numero_tema
    };
    $("#body_tabla_plan").append(tpl(tplData));

    $("#nomTema_"+ numero_tema +"").rules("add", {
        minlength: 10,
        required: true,
        messages: {
            required: "<label class='control-label' for='inputError'>Escribe un tema</label>",
            minlength: "<label class='control-label' for='inputError'>Escribe mínimo 10 caracteres</label>"
        }
    });

    $("#fechain_tema_"+ numero_tema +"").rules("add", {
        required: true,
        messages: {
            required: "<label class='control-label' for='inputError'>Selecciona</label>"
        }
    });

    $("#fechafin_tema_"+ numero_tema +"").rules("add", {
        required: true,
        messages: {
            required: "<label class='control-label' for='inputError'>Selecciona</label>"
        }
    });


    var fecha_in =  $("#fecha_inicio_per").data("path");
    var fecha_fin = $("#fecha_final_per").data("path");

    $("#datepicker_"+ numero_tema +"").datepicker({
      format: "mm/dd/yyyy",
      startDate: fecha_in,
      endDate: fecha_fin,
      daysOfWeekDisabled: "0,6",
      autoclose: false
  });
}


// --- Evento Agregar Tema -- //
$("#form_plan").on("click", "#add", function (e) {
    e.preventDefault();
    crearTema();
    numero_tema += 1;
    if($("#tabla_plan").hasClass("hidden")){
        $("#enviar_form").removeClass("hidden").hide().fadeIn(200);
        $("#tabla_plan").removeClass("hidden");
        $("#espera_temas").addClass("hidden");
    }

});
// --- Fin Evento Agregar Tema -- //


function eliminarTema(btn_id){
    numero_tema--;
    var id_tema = btn_id.substring(11);
    $("#tema_"+ id_tema +"").remove();
    if(numero_tema == 1){
        $("#tabla_plan").addClass("hidden");
        $("#espera_temas").removeClass("hidden");
    } else {
        reasignarTemas();
    }
}

// Reasigna los temas de la lista cuando se borra alguno
function reasignarTemas(){
    $("#body_tabla_plan tr").each(function (index)
    {   
        $(this).attr("id", "tema_"+ (index+1)+"");
        $(this).children(':first-child').attr("id", "id_tema_"+ (index+1)+"");
        $(this).children(':first-child').html(index+1);
        $(this).children(':nth-child(2)').children(':nth-child(1)').attr("id", "group_tema_"+ (index+1) +"");
        $(this).children(':nth-child(2)').children(':nth-child(1)').children(':nth-child(1)').attr("id", "nomTema_"+ (index+1) +"");
        $(this).children(':nth-child(2)').children(':nth-child(1)').children(':nth-child(1)').attr("name", "nomTema["+ (index) +"]");
        if($(this).children(':nth-child(2)').children(':nth-child(1)').children(':nth-child(2)')){
            $(this).children(':nth-child(2)').children(':nth-child(1)').children(':nth-child(2)').remove();
            $(this).children(':nth-child(2)').children(':nth-child(1)').removeClass("has-error");
        }
        $(this).children(':nth-child(3)').children(':nth-child(1)').attr("id", "datepicker_"+ (index+1)+"");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').attr("id", "group_fechain_"+ (index+1)+"");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').children(':nth-child(1)').attr("id", "fechain_tema_"+ (index+1)+"");
        if($(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').children(':nth-child(2)')){
            $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').children(':nth-child(2)').remove();
            $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').removeClass("has-error");
        }
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').attr("id", "group_fechafin_"+ (index+1)+"");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').children(':nth-child(1)').attr("id", "fechafin_tema_"+ (index+1)+"");
        if($(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').children(':nth-child(2)')){
            $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').children(':nth-child(2)').remove();
            $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').removeClass("has-error");
        }
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(1)').children(':nth-child(1)').attr("name", "fechaIn["+ (index)+"]");
        $(this).children(':nth-child(3)').children(':nth-child(1)').children(':nth-child(2)').children(':nth-child(1)').attr("name", "fechaFin["+ (index)+"]");
        $(this).children(':nth-child(4)').children(':nth-child(1)').attr("id", "btn_remove_"+ (index+1)+"");

    });
}


// Validacion del formulario y envio por AJAX
$('#form_plan').validate({
    rules: {
        planeador_asignacion: {
            required: true
        }
    },
    highlight: function (element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('has-error');

    },
    submitHandler: function(form){
        if ($("#confirmacion")) {
            $("#confirmacion").remove();
        }
        if($("#body_tabla_plan").children().length == 0){
            espera(2);
            return false;
        }
        $("#add").attr('disabled', 'disabled');
        $("#enviar_form").attr('disabled', 'disabled');
        if(editadas == 0){
            espera(3);
            $.ajax({
                type: "POST",
                url: $('#form_plan').attr('action'),
                data: $('#form_plan').serialize(),
                success: function (data) {
                    notificacionRegistrar(1);
                    $("#add").prop('disabled', false);
                    $("#enviar_form").prop('disabled', false); 
                    editadas = 1;
                }
            });
        } else {
            espera(4);
            $.ajax({
                type: "POST",
                url: Routing.generate('planeadores_edit'),
                data: $('#form_plan').serialize(),
                success: function (data) {
                    notificacionRegistrar(2);
                    $("#add").prop('disabled', false);
                    $("#enviar_form").prop('disabled', false);  
                }
            });
        }
    }
});

//Muestra mensaje de predefinido en la ubicacion indicada
function espera(ubicacion) {
    switch (ubicacion) {
        case 1:
        $("#espera_escoger").addClass("hidden");
        $("#espera_añadir").removeClass("hidden").hide().fadeIn(200);
        break;
        case 2:
        $('#espera_tema_error').empty();
        $('#espera_tema_error').append("<div id='error_plan'>" +
            "<h4>" + 
            "<span class='label label-danger'>" + 
            "Debes añadir temas al planeador para guardarlo." + 
            "</span>" + "</h4></div><br/>");
        $('#error_plan').hide().fadeIn(400);
        $(document).ready(function () {
            setTimeout(function () {
                $("#error_plan").fadeOut(350);
            }, 2500);
        });
        break;
        case 3:
        $('#notificacion_submit').append("<h4 id='tag_espera_1'>" + "<span class='label label-info'>" + "Registrando Planeador.." + "</span>" + "</h4>" + "<br/>");
        $('#tag_espera_1').hide().fadeIn(200);
        $(document).ready(function () {
            setTimeout(function () {
                $("#tag_espera_1").fadeOut(350);
            }, 950);
        });
        break;
        case 4:
        $('#notificacion_submit').append("<h4 id='tag_espera_2'>" + "<span class='label label-info'>" + "Editando Planeador.." + "</span>" + "</h4>" + "<br/>");
        $('#tag_espera_2').hide().fadeIn(200);
        $(document).ready(function () {
            setTimeout(function () {
                $("#tag_espera_2").fadeOut(350);
            }, 950);
        });
        break;
        default:
        alert("Error de Notificación");
        break;
    }
} /* Fin Función Espera */


//Muestra el mensaje de los temas registrados
function notificacionRegistrar(ubicacion) {
    if(ubicacion === 1){
        confirmacion = "<div id='confirmacion' class='alert alert-success'>" +
        "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +
        'Planeador Registrado con Éxito.' +
        "</div>";
        $('#confirmacion').hide().fadeIn(300);
        $('#notificacion_submit').empty();
        $('#notificacion_submit').append(confirmacion);
        $(document).ready(function () {
            setTimeout(function () {
                $("#confirmacion").fadeOut(2000);
            }, 3000);
        });
    }
    if(ubicacion === 2){
        confirmacion = "<div id='confirmacion' class='alert alert-success'>" +
        "<button type='button' class='close' data-dismiss='alert'>" + '×' + "</button>" +
        'Planeador Editado con Éxito.' +
        "</div>";
        $('#confirmacion').hide().fadeIn(300);
        $('#notificacion_submit').empty();
        $('#notificacion_submit').append(confirmacion);
        $(document).ready(function () {
            setTimeout(function () {
                $("#confirmacion").fadeOut(2000);
            }, 3000);
        });
    }
}/* Fin Función notificacionRegistrar */


//Limpia el formulario
function resetearFormulario() {
    numero_tema = 1;
    $("#plan_actual").val("");
    $("#espera_añadir").addClass("hidden");
    $("#espera_escoger").removeClass("hidden");
    $("#add").addClass("hidden");
    $("#enviar_form").addClass("hidden");
    $("#body_tabla_plan").empty();
    $("#tabla_plan").addClass("hidden");
}


// Crea los campos para setear los temas existentes, recibe los temas
function setearTemasExistentes(data){
    for(var i = 0; i < data.length; i++){
        crearTema();
        $("#nomTema_"+ numero_tema +"").val(data[i]["nombre"]);
        $("#fechain_tema_"+ numero_tema +"").datepicker().datepicker('setDate', $.formatDateTime('mm/dd/yy', new Date(data[i]["fecha_inicio"])));
        $("#fechafin_tema_"+ numero_tema +"").datepicker().datepicker('setDate', $.formatDateTime('mm/dd/yy', new Date(data[i]["fecha_final"])));
        numero_tema += 1;
    }
}

/*

function verificarFechasInicio(){
    $("#body_tabla_plan .fecha_inicio").each(function (index)
    {
        alert(index);
        var $picker_inicio = $(this);
        $picker_inicio.datepicker();

        var $picker_final = $("#fechafin_tema_"+ (index+1) +"");
        $picker_final.datepicker();

        if($("#fechain_tema_"+ (($("#fechain_tema_"+ (index+1) +"").attr("id").substring(13)) - 1) +"").length > 0){
            var fechaIn = new Date($("#fechain_tema_"+ (index+1) +"").val());
            var fechaIn_before = new Date($("#fechain_tema_"+ (index) +"").val());
            if(fechaIn <= fechaIn_before || fechaIn <= fechaFin_before){
                $("#fechain_tema_"+ (index+1) +"").val("");
                $("#fechafin_tema_"+ (index+1) +"").val("");
                alert("Escoja una fecha diferente al rango anterior");
            }
        }
    });
}*/






