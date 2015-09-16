$(document).ready(function () {
    //var base_url = 'http://electoral.tecnodes.net/';
    var base_url = 'http://localhost/agrotic/';

    function inputSolonumeros() {
        $('#txtNumeric').keyup(function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            }
        });
        $('#txtAlphabet').keyup(function () {
            if (this.value.match(/[^a-zA-Z]/g)) {
                this.value = this.value.replace(/[^a-zA-Z]/g, '');
            }
        });
        $('#txtAlphaNumeric').keyup(function () {
            if (this.value.match(/[^a-zA-Z0-9]/g)) {
                this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
            }
        });
    }
    /*function ocultarDivs() {
        $("#divOtros").hide();
        $("#divEmpresas").hide();

        $("#divOtros").attr('disabled', 'disabled');
        $("#divEmpresas").attr('disabled', 'disabled');
    } */

    //Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    /*function changeTextBoxes() {
        $("#cboRol").change(function (e) {
            var idRol = $("#cboRol").val();
            var textRol = $("#cboRol option:selected").text();
            $(".error-message").remove();
            if (textRol === "Empresa") {

                $("#divOtros").hide();
                $("#divEmpresas").show();

                //Habilitar elementos del div empresas
                $('#divEmpresas input').each(function () {
                    $(this).removeAttr("disabled");
                });
                $('#divEmpresas select').each(function () {
                    $(this).removeAttr("disabled");
                });

                //DesHabilitar elementos del div otros
                $('#divOtros input').each(function () {
                    $(this).attr('disabled', 'disabled');
                });
                $('#divOtros select').each(function () {
                    $(this).attr('disabled', 'disabled');
                });



            } else {
                $("#divEmpresas").hide();
                $("#divOtros").show();

                //Habilitar elementos del div otros
                $('#divOtros input').each(function () {
                    $(this).removeAttr("disabled");
                });
                $('#divOtros select').each(function () {
                    $(this).removeAttr("disabled");
                });

                //DesHabilitar elementos del div empresas
                $('#divEmpresas input').each(function () {
                    $(this).attr('disabled', 'disabled');
                });
                $('#divEmpresas select').each(function () {
                    $(this).attr('disabled', 'disabled');
                });

            }
        });
    } */

    function cboCiudadesChanged() {
        console.log("Entro aqui");

        $('#cboCiudad1, #cboCiudad2').on("change", function (e) {
            var elemento = $(this).attr("id");
            var _idCiudad = $(this).val();
            
            if (elemento === "cboCiudad1") {
                elemento = "cboCorregimientos1";
            } else if (elemento === "cboCiudad2") {
                elemento = "cboCorregimientos2";
            }
            
           
            //Removemos las opciones de cboComuna
//            $("#cboCorregimientos option").each(function (index, option) {
//                $(option).remove();
//            });

            $("#" + elemento).append('<option value="0">Seleccione una opción</option>');

            $.ajax({
                type: "POST",
                url: base_url + "corregimientos/ajaxGetCorregimientosPorCiu",
                data: {
                    idCiu: _idCiudad
                },
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (data.res === "si") {


                        $("#" + elemento + " option").each(function (index, option) {
                            
                            $(option).remove();
                        });

                        if (data.res === "si") {
                            $.each(data.corregimientos, function (i, item) {
                               
                                $("#" + elemento).append('<option value="' + i + '">' + item + '</option>');
                            });
                        } else if (data.res === "no") {
                            $.each(data.corregimientos, function (i, item) {
                                $("#" + elemento).append('<option value="' + i + '">' + item + '</option>');
                            });
                        }

                    }
                    //as a debugging message.
                }
            });





        });

    }
    //Función para guardar usuarios
    function ajaxUserAdd() {
        $("#btnGuaUsu").click(function () {
            $.ajax({
                type: "POST",
                url: base_url + "users/ajaxUserAdd",
                data: $("#formUser").serialize(),
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (data.res === "no") {

                        $("#flashMessage").remove();
                        $("#divPanel").before('<div id="flashMessage" class="message error">' + data.msj + '</div>');

                        $(".error-message").remove();

                        $.each(data.errores_validacion, function (i, val) {
                            // console.log(i)
                            $('input[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                            $('select[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                        });

                    } else if (data.res === "si") {

                        $("#flashMessage").remove();
                        $(".error-message").remove();
                        $("#divPanel").before('<div id="flashMessage" class="message success">' + data.msj + '</div>');

                    }
                },
                error: {}
            });
            return false;

        });
    }

    //Lamados de las funciones

    //changeTextBoxes();
    //ocultarDivs();
    ajaxUserAdd();
    cboCiudadesChanged();
});