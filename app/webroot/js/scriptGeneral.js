//$("body").attr("class", "theme-blue");
$(document).ready(function () {
//var base_url = 'http://electoral.tecnodes.net/';
    var base_url = 'http://localhost/agrotic/';
    //$("#cboRol option:first-child").attr("selected", true);
    $('#cboCertificaciones').multiselect({
        buttonText: function (options, select) {
            return 'Seleccione una o varias certificaciones';
        },
        includeSelectAllOption: true,
        selectAllText: 'Seleccionar todas',
        enableCaseInsensitiveFiltering: true,
        //buttonWidth: '100%',

    });


//Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    function cboSeleccionTipoDeUsuario(combo, form, accion, tipoUser) {
        $(combo).change(function (e) {
            var elemento = "#" + $(this).attr("id");
            var textRol = $(elemento + " option:selected").val();
            if (typeof tipoUser === "undefined") {
                $(form).append('<input type="hidden" name="tipo_usuario" value="' + textRol + '" /> ');
            } else {
                $(form).append('<input type="hidden" name="tipo_usuario" value="' + tipoUser + '" /> ');
            }
            $(form).append('<input type="hidden" name="accion" value="' + accion + '" /> ');
            // console.log(textRol);
            $(form).submit();
            return false;


        });
    }

    function buttonSearch(button, form) {
        $(button).change(function (e) {
            $(form).submit();
            return false;
        });
    }


    function cboComboChanged(comboOrigen, comboDestino, _filtro, _modelo, ruta) {

        $('body').on('change', comboOrigen, function () {

            var elemento = $(this).attr("id");
            var _id = $(this).val();
            var elemento = comboDestino;
            $("#" + elemento).append('<option value="0">Seleccione una opción</option>');
            $.ajax({
                type: "POST",
                url: base_url + ruta,
                data: {
                    id: _id,
                    modelo: _modelo,
                    filtro: _filtro
                },
                dataType: "json",
                cache: false,
                success: function (data) {
                    if (data.res === "si") {


                        $("#" + elemento + " option").each(function (index, option) {

                            $(option).remove();
                        });
                        if (data.res === "si") {
                            $.each(data.datos, function (i, item) {

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
    function ajaxUserAdd(form, boton, controlador, accion) {

        $(form).submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            //formData.append("data[User][rol_id]", $("#cboRol").val());
            $.ajax({
                type: "POST",
                url: base_url + controlador + "/" + accion,
                data: formData,
                //data: new FormData($("#foto")[0]),
                dataType: "json",
                cache: false,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (data.res === "no") {
                        /// console.log("Entro aqui");
                       /* $("#flashMessage").remove();
                        $("#divPanel").before('<div id="flashMessage" class="message error">' + data.msj + '</div>');*/
                        
                         $.alert({
                            title: 'Atención',
                            content: '' + data.msj,
                            confirmButton: 'Aceptar',
                            confirmButtonClass: 'btn-primary',
                            icon: 'fa fa-info',
                            animation: 'zoom',
                            confirm: function () {
                                //window.document.location.reload(true);
                            }
                        });
                        
                        $(".error-message").remove();
                        $.each(data.errores_validacion, function (i, val) {
                            //console.log("Entro aqui");
                            //  console.log(val);
                            if (val !== "undefined") {
                                $('input[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                                $('select[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                                $('div[tag="' + i + '"]').after('<div class="error-message">' + val + '</div>');
                            }
                        });

                        return false;
                    } else if (data.res === "si") {

                        $("#flashMessage").remove();
                        $(".error-message").remove();
                        // $("#divPanel").before('<div id="flashMessage" class="message success">' + data.msj + '</div>');

                        $.alert({
                            title: 'Atención',
                            content: '' + data.msj,
                            confirmButton: 'Aceptar',
                            confirmButtonClass: 'btn-primary',
                            icon: 'fa fa-info',
                            animation: 'zoom',
                            confirm: function () {
                                window.document.location.reload(true);
                            }
                        });
                        return false;
                    }
                },
                error: {}
            });
            e.preventDefault();
            return false;
        });
    }

    function createCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        } else
            var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0)
                return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name, "", -1);
    }



    function destruirDivElementos() {
        if (parseInt($("#cboRolList option:selected").val()) === 0) {
            $("#divElementos").remove();
        }
    }

    function redirect() {
        $("#lnkVerUsuarios").click(function () {
            $.post(base_url + "users/destroySelectedRols", '', function (data) {
                window.location = base_url + "admin/users/index";

            }, 'json');
        });
    }

    function argegarTemaForo() {
        $("#btnAgregarTema").click(function () {

            if ($("#txtTema").val().trim().length === 0) {
                return false;
            }
            //console.log("click aqui");
            //console.log($('select#lstTemas option').length);
            $("#lstTemas option").each(function (index, element) {
                //alert(element.text + ' ' + element.value);
                if (element.text !== "" + $("#txtTema").val()) {
                    $("#lstTemas").append("<option>" + $("#txtTema").val() + "</option>");
                }
            });
            if ($('select#lstTemas option').length === 0) {
                $("#lstTemas").append("<option>" + $("#txtTema").val() + "</option>");
            }
        });
    }

    function removerTemaForo() {
        $("#lstTemas").dblclick(function () {
            $("#lstTemas option:selected").remove();
            //$("#lstTemas").append("<option>"+$("#txtTema").val()+"</option>");
        });
    }

    $("#txtColor").colorpicker();
    $("#txtFechaCosecha").datepicker();
    $("#txtFechaSiembra").datepicker();


    function menuActivo() {
        $(".sidebar-menu").on("click", ".treeview", function () {
            createCookie("activo", $(this).attr("id"));

        });

        if (readCookie("activo") !== null) {
            //console.log("Entro aqui");
            $("#" + readCookie("activo")).addClass("active");
        }
    }

    function seleccionarTemas() {
        $('#formForo').submit(function (e) {
            //e.preventDefault();
            $('#lstTemas option').prop('selected', true);
            $(this).submit();
        });
    }

    function cboUbicacionesPreChange(combo) {
        $(combo).change(function () {
            var elemento = "#" + $(this).attr("id");
            var textUbi = $(elemento + " option:selected").val();
            // console.log(textUbi);
            if ("" + textUbi === "int") {
                $("#reqInte").show();
            } else {
                $("#reqInte").hide();
            }
        });
    }

    function guardarPreRegistro(boton, formulario) {
        $(boton).click(function (e) {
            $(formulario).append('<input type="hidden" name="data[User][rol_id]" value="' + $("#cboRolPre").val() + '" /> ');
            $(formulario).append('<input type="hidden" name="data[accion]" value="guardar" /> ');
            // console.log("Entro aqui " + "form" + formulario);
            $(formulario).submit();
            // console.log(formulario);
            return false;
        });


    }

    function setDivUbicacion() {
        $("#cboSetDivUbiEmp").change(function () {
            var textUbi = $("#cboSetDivUbiEmp option:selected").val();
            console.log("Entro aqui");
            if (textUbi === "int" || textUbi === "nac") {
                $.ajax({
                    type: "POST",
                    data: {ubicacion: textUbi},
                    url: base_url + 'admin/users/ajaxGetDivUbicacion',
                    dataType: 'html',
                    success: function (data) {

                        if (data.res === "no") {
                            $.alert({
                                title: 'Atención',
                                content: '' + data.msj,
                                confirmButton: 'Aceptar',
                                confirmButtonClass: 'btn-primary',
                                icon: 'fa fa-info',
                                animation: 'zoom',
                                confirm: function () {
                                    //alert('Okay action clicked.');
                                }
                            });
                            return false;
                        }
                        //console.log("Entro aqui");
                        $('#divFormUbicacion').html("");
                        // $('#divContenido').append('<div id="divElemento"></div>');
                        $('#divFormUbicacion').html(data);
                        $('#divFormUbicacion').find('input, select, div').each(function (i, item) {

                            if ('' + $(item).attr("tag") !== 'undefined') {
                                var tag = $(item).attr("tag");

                                $(item).attr("name", "data[User][" + tag + "]");

                            }
                        });

                        ajaxUserAdd("#formUserEmp");

                    }


                });

            } else {
                // console.log($("#cboSetDivUbiEmp option:selected").val());
                if (parseInt($("#cboSetDivUbiEmp option:selected").val()) !== 0) {
                    alert("La apción seleccionada es incorrecta");
                } else {
                    $('#divFormUbicacion').html("");
                }
            }
            console.log(textUbi);
        });
    }


    //Ciudades - Corregimientos
    cboComboChanged("#cboCiudad", "cboCorregimientos", "ciudad_id", "Corregimiento", "corregimientos/ajaxGetValoresCombo");

    //Departamentos - Ciudades
    cboComboChanged("#cboDepartamentos", "cboCiudades", "departamento_id", "Ciudad", "corregimientos/ajaxGetValoresCombo");

    //******************************** SELECT TIPO DE USUARIO *****************************
    cboSeleccionTipoDeUsuario("#cboRol", "#formUserTipo", "setFormTipoUsuario");


    //******************************** FORM REGISTRO DE ADMINISTRADORES *****************************
    //Administradores
    ajaxUserAdd("#formAdmin", "#btnGuaAdmin", "administradors", "ajaxAdminAdd");

    //******************************** FORM REGISTRO DE AGRICULTORES *****************************
    //Agricultores
    ajaxUserAdd("#formAgr", "#btnGuaAgr", "agricultors", "ajaxAgrAdd");
    //******************************** FORM REGISTRO DE AGRICULTORES *****************************
    //Empresa nacional
    ajaxUserAdd("#formEmpNac", "#btnGuaEmpNac", "EmpresaNacionals", "ajaxEmpNacAdd");




    //Combo para seleccionar el tipo de usuario en los listados
    cboSeleccionTipoDeUsuario("#cboRolList", "#formUserList");
    //Combo para seleccionar el tipo de usuario
    cboSeleccionTipoDeUsuario("#cboRolPre", "#formUserPre");


    seleccionarTemas();
    buttonSearch("#btnBusAdm", "formBusAdmin");
    redirect();
    destruirDivElementos();
    argegarTemaForo();
    removerTemaForo();
    menuActivo();
    cboUbicacionesPreChange("#cboUbicacionesPre");
    guardarPreRegistro("#btnGuaUsuPreEmp", "#formUserPreEmp");
    guardarPreRegistro("#btnGuaUsuPreAgr", "#formUserPreAgr");
    guardarPreRegistro("#btnGuaUsuPreCom", "#formUserPreCom");

    setDivUbicacion();

    // cboSeleccionOpcionCombos
    //Indicar el tipo de ubicación de la empresa
    //cboSeleccionOpcionCombos("#cboSetDivUbiEmp", "#formSetDivUbiEmp", "setDivUbiEmp","emp");

    $("#foto").filestyle('buttonText', 'Buscar');
    $("#foto").filestyle('placeholder', 'Presiona el boton buscar');

});