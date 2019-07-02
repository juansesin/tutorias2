$(document).ready(function () {



    var $select = $("select").select2({

        placeholder: 'Seleccionar',

        allowClear: true

    });



    /*

     * When you change the value the select via select2, it triggers

     * a 'change' event, but the jquery validation plugin

     * only re-validates on 'blur'

     */

    $select.on('change', function () {

        $(this).trigger('blur');

    });



    $("#form").validate({

        rules: {

            Sede: {required: true},

            Escuela: {required: true},

            Docente: {required: true},

            Lugar: {required: true},

            Asignaturas: {required: true},

            max_estudiante: {required: true},

            hddDias: {required: true}

        },

        errorElement: "em",

        errorPlacement: function (error, element) {

            // Add the `help-block` class to the error element

            error.addClass("help-block");

            error.insertAfter(element);



        },

        highlight: function (element, errorClass, validClass) {

            $(element).parents(".col-sm-6").addClass("has-error").removeClass("has-success");

        },

        unhighlight: function (element, errorClass, validClass) {

            $(element).parents(".col-sm-6").addClass("has-success").removeClass("has-error");

        },

        submitHandler: function (form) {

            return true;

        }

    });

    

    function validarhoras(){

        if (document.getElementById('lunes').checked){
            var num1 = parseInt(document.getElementById('horario_minimo_lunes').value);
            var num2 = parseInt(document.getElementById('horario_maximo_lunes').value);

            if (num1>=num2 ){

                alert("La tutoría del día lunes debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_lunes').value == ""){

                alert("La tutoría del día lunes debe tener la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_lunes').value == ""){

                alert("La tutoría del día lunes debe tener hora final");

                return false;

            }

        }

        if (document.getElementById('martes').checked){
            var num1 = parseInt(document.getElementById('horario_minimo_martes').value);
            var num2 = parseInt(document.getElementById('horario_maximo_martes').value);

            if (num1>=num2 ){

                alert("La tutoría del día martes debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_martes').value == ""){

                alert("La tutoría del día martes debe tener la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_martes').value == ""){

                alert("La tutoría del día martes debe tener hora final");

                return false;

            }

        }

        if (document.getElementById('miercoles').checked){

            var num1 = parseInt(document.getElementById('horario_minimo_miercoles').value);
            var num2 = parseInt(document.getElementById('horario_maximo_miercoles').value);

            if (num1>=num2 ){


                alert("La tutoría del día miércoles debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_miercoles').value == ""){

                alert("La tutoría del día miércoles debe tener la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_miercoles').value == ""){

                alert("La tutoría del día miércoles debe tener hora final");

                return false;

            }

        }

        if (document.getElementById('jueves').checked){

            var num1 = parseInt(document.getElementById('horario_minimo_jueves').value);
            var num2 = parseInt(document.getElementById('horario_maximo_jueves').value);

            if (num1>=num2 ){


                alert("La tutoría del día jueves debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_jueves').value == ""){

                alert("La tutoría del día jueves debe tener la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_jueves').value == ""){

                alert("La tutoría del día jueves debe tener hora final");

                return false;

            }

        }

        if (document.getElementById('viernes').checked){

            var num1 = parseInt(document.getElementById('horario_minimo_viernes').value);
            var num2 = parseInt(document.getElementById('horario_maximo_viernes').value);

            if (num1>=num2 ){

                alert("La tutoría del día viernes debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_viernes').value == ""){

                alert("La tutoría del día viernes debe tener la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_viernes').value == ""){

                alert("La tutoría del día viernes debe tener hora final");

                return false;

            }

        }

        if (document.getElementById('sabado').checked){

            var num1 = parseInt(document.getElementById('horario_minimo_sabado').value);
            var num2 = parseInt(document.getElementById('horario_maximo_sabado').value);

            if (num1>=num2 ){

                alert("La tutoría del día sabado debe tener la hora de final después de la hora de inicio");

                return false;

            }

            if (document.getElementById('horario_minimo_sabado').value == ""){

                alert("La tutoría del día sábado debe tener hora de inicio");

                return false;

            }

            if (document.getElementById('horario_maximo_sabado').value == ""){

                alert("La tutoría del día sábado debe tener hora final ");

                return false;

            }

        }

            return true;

        }



    $("#btnSubmit").click(function () {

        if(validarhoras()){

            if ($("#form").valid() == true) {

            

            //Activa icono guardando

            $('#btnSubmit').attr('disabled', '-1');

            $("#div_error").css("display", "none");

            $("#div_load").css("display", "inline");



            $.ajax({

                type: "POST",

                url: base_url + "tutorias/guardar_tutoria",

                data: $("#form").serialize(),

                dataType: "json",

                contentType: "application/x-www-form-urlencoded;charset=UTF-8",

                cache: false,



                success: function (data) {



                    if (data.result == "error")

                    {

                        alert('Error. Reload the web page.');

                        $("#div_load").css("display", "none");

                        $("#div_error").css("display", "inline");

                        $("#span_msj").html(data.mensaje);

                        $('#btnSubmit').removeAttr('disabled');

                        return false;

                    }



                    if (data.result)//true

                    {

                        $("#div_load").css("display", "none");

                        $('#btnSubmit').removeAttr('disabled');

                        var url = base_url + "tutorias/listado";

                        $(location).attr("href", url);

                    } else

                    {

                        alert('Error. Reload the web page.');

                        $("#div_load").css("display", "none");

                        $("#div_error").css("display", "inline");

                        $('#btnSubmit').removeAttr('disabled');

                    }

                },

                error: function (result) {

                    alert('Error. Reload the web page.');

                    $("#div_load").css("display", "none");

                    $("#div_error").css("display", "inline");

                    $('#btnSubmit').removeAttr('disabled');

                }





            });



        }

    }//if			

    });



});

