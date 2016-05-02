
_.templateSettings.variable = "element";
var tpl = _.template($("#añadir_tema").html());

var numero_tema = 1;

// --- Evento Agregar Tema -- //
$("#form_plan").on("click", "#add", function (e) {
    e.preventDefault();
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

    $("#fechafin_tema_"+ numero_tema +"").each(function () {
        $(this).rules("add", {
            required: true,
            messages: {
                required: "<label class='control-label' for='inputError'>Selecciona</label>"
            }
        });
    });

    numero_tema += 1;

    var fecha_in =  $("#fecha_inicio_per").data("path");
    var fecha_fin = $("#fecha_final_per").data("path");

    $('.input-daterange').datepicker({
      format: "mm/dd/yyyy",
      startDate: fecha_in,
      endDate: fecha_fin,
      daysOfWeekDisabled: "0,6",
      autoclose: true
  });

    if($("#tabla_plan").hasClass("hidden")){
        $("#tabla_plan").removeClass("hidden");
        $("#temas_vacio").addClass("hidden");
    }

});
// --- Fin Evento Agregar Tema -- //


function eliminarTema(btn_id){
    numero_tema--;
    var id_tema = btn_id.substring(11);
    $("#tema_"+ id_tema +"").remove();
    if(numero_tema == 0){
        $("#tabla_plan").addClass("hidden");
        $("#temas_vacio").removeClass("hidden");
    } else {
        reasignarTemas();
    }
}

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
        $.ajax({
            type: "POST",
            url: $('#form_plan').attr('action'),
            data: $('#form_plan').serialize(),
            success: function (data) {
            }
        });
    }
});


function verificarFechasInicio(){
    $("#body_tabla_plan .fecha_inicio").each(function (index)
    {
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
}




