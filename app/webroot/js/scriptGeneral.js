//$("body").attr("class", "theme-blue");
$(document).ready(function () {
    //var base_url = 'http://electoral.tecnodes.net/';
    var base_url = 'http://localhost/agrotic/';





    $('#cboCertificaciones').multiselect({
        buttonText: function (options, select) {
            return 'Seleccione una o varias certificaciones';
        },
        includeSelectAllOption: true,
        selectAllText: 'Seleccionar todas',
        enableCaseInsensitiveFiltering: true,
        //buttonWidth: '100%',

    });


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


    function ocultarDivs(div) {

        $("#divAgricultores, #divCompradores, #divEmpresas, #divAdministradores, #divSubAdministradores").hide();
        $("#divAgricultores, #divCompradores, #divEmpresas, #divAdministradores, #divSubAdministradores").attr('disabled', 'disabled');
        
        if (typeof div !== "undefined") {
            $(div).show();
            $(div).removeAttr("disabled");
        }

    }



    //Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    function changeTextBoxes() {
        $("#cboRol").change(function (e) {

            // var idRol = $("#cboRol").val();
            var textRol = $("#cboRol option:selected").text();

            $("#flashMessage").remove();
            $(".error-message").remove();
            
            switch(textRol){
                case "Comprador":
                    ocultarDivs("#divCompradores");
                    break;
                case "Administrador":
                    ocultarDivs("#divAdministradores");
                    break;
                case "Sub-Administrador":
                    ocultarDivs("#divSubAdministradores");
                    break;
                case "Empresa":
                    ocultarDivs("#divEmpresas");
                    break;
                case "Agricultor":
                    ocultarDivs("#divAgricultores");
                    break;
            }
            
        });
    }

    function cboCiudadesChanged() {
        console.log("Entro aqui");

        $('#cboCiudad').on("change", function (e) {
            var elemento = $(this).attr("id");
            var _idCiudad = $(this).val();

            var elemento = "cboCorregimientos";


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

                    } else if (data.res === "si") {
                        ocultarDivUsuarios();
                    }

                }
            });





        });

    }
    //Función para guardar usuarios
    function ajaxUserAdd() {

        $("#formUser").submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: base_url + "users/ajaxUserAdd",
                data: new FormData(this),
                //data: new FormData($("#foto")[0]),
                dataType: "json",
                cache: false,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.res === "no") {

                        $("#flashMessage").remove();
                        $("#divPanel").before('<div id="flashMessage" class="message error">' + data.msj + '</div>');

                        $(".error-message").remove();

                        $.each(data.errores_validacion, function (i, val) {
                            // console.log(i)
                            $('input[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                            $('select[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                            $('div[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                        });

                    } else if (data.res === "si") {

                        $("#flashMessage").remove();
                        $(".error-message").remove();
                        $("#divPanel").before('<div id="flashMessage" class="message success">' + data.msj + '</div>');

                    }
                },
                error: {}
            });

            e.preventDefault();
            return false;

        });
    }

    changeTextBoxes();
    ocultarDivs();
    ajaxUserAdd();
    cboCiudadesChanged();
});