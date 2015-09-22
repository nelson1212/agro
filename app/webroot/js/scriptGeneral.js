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


//    function getElements(elemento, modelo) {
//
//        $("#divElementos #divContenido").remove();
//        $("#divElementos").append("<div id='divContenido'></div>");
//        // $("#divAgricultores, #divCompradores, #divEmpresas, #divAdministradores, #divSubAdministradores").attr('disabled', 'disabled');
//
//        if (typeof elemento !== "undefined" && typeof modelo !== "undefined") {
//            $.ajax({
//                type: "POST",
//                data: {element: elemento},
//                url: base_url + 'admin/users/addusuario',
//                dataType: 'html',
//                success: function (data) {
//
//                    $('#divContenido').html(data);
//                    $('#divContenido').find('input, select').each(function (i, item) {
//                        var tag = $(item).attr("tag");
//                        //Si posee el atributo tag siempre sera diferente de undefined
//                        if ('' + tag !== 'undefined') {
//                            $(item).attr("name", "data[" + modelo + "][" + tag + "]");
//                            // console.log($(item).attr("name"));
//                        }
//                    });
//                    //Add MultiSelect to cboCertificaciones
//                    $("#cboCertificaciones").multiselect({
//                        buttonText: function (options, select) {
//                            if (options.length === 0) {
//                                return 'Selecciona una o varias certificaciones';
//                            }
//                            else if (options.length > 1) {
//                                return 'Has seleccionado mas de una certificación';
//                            }
//                            //return 'Selecciona una o varias certificaciones';
//                        }
//                    });
//                }
//
//            });
//        }
//    }




//Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    function changeTextBoxes(combo, form) {
        $(combo).change(function (e) {

// var idRol = $("#cboRol").val();
            // console.log("envio");
            // var textRol = $("#cboRol option:selected").text();

            $(form).submit();
            return false;

            /*  $("#flashMessage").remove();
             $(".error-message").remove();
             $("#txtUsername").val("");
             $("#txtContrasena").val("");
             $("#txtContrasena1").val("");
             switch (textRol) {
             case "Seleccione una opción":
             getElements();
             break;
             case "Comprador":
             
             getElements("compradores", "User");
             break;
             case "Administrador":
             getElements("administradores", "User");
             //ocultarDivs("#divAdministradores");
             break;
             case "Sub-Administrador":
             getElements("subadministradores", "User");
             break;
             case "Empresa":
             getElements("empresas", "User");
             break;
             case "Agricultor":
             
             getElements("agricultores", "User");
             break;
             }
             */
        });
    }

    function buttonSearch(button, form) {
        $(button).change(function (e) {
            $(form).submit();
            return false;
        });
    }
    function cboCiudadesChanged() {
//console.log("Entro aqui 1");

        $('body').on('change', '#cboCiudad', function () {
//$("#cboCiudad").live("change", function (e) {
// console.log("Entro aqui");
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
            formData.append("data[User][rol_id]", $("#cboRol").val());
            $.ajax({
                type: "POST",
                url: base_url + "users/ajaxUserAdd",
                data: formData,
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

    /* function selectUserForSearch(elemento) {
     $(elemento).click(function () {
     //console.log(textRol);
     var textRol = $("#cboRolesBusqueda option:selected").text();
     if (textRol !== "Seleccione una opción") {
     
     $.ajax({
     type: "POST",
     data: {element: textRol},
     url: base_url + 'users/getTables',
     dataType: 'html',
     success: function (data) {
     
     $('#data_table').html("");
     $('#divBusqueda #divTabla').remove();
     $('#divBusqueda').prepend('<div id="divTabla"></div>');
     $('#divBusqueda #divTabla').html(data);
     //                        $('#divBusqueda #divTabla').find('input, select').each(function (i, item) {
     //                            var tag = $(item).attr("tag");
     //                            //Si posee el atributo tag siempre sera diferente de undefined
     //                            if ('' + tag !== 'undefined') {
     //                                // $(item).attr("name", "data[" + modelo + "][" + tag + "]");
     //                                // console.log($(item).attr("name"));
     //                            }
     //                        });
     
     selectUserForSearch("#btnRealizarBusqueda");
     
     
     //Add MultiSelect to cboCertificaciones
     /* $("#cboCertificaciones").multiselect({
     buttonText: function (options, select) {
     if (options.length === 0) {
     return 'Selecciona una o varias certificaciones';
     }
     else if (options.length > 1) {
     return 'Has seleccionado mas de una certificación';
     }
     //return 'Selecciona una o varias certificaciones';
     }
     });*/
//                    }
//
//                });
//            }
//
//        });
//    } */

    function destruirDivElementos() {
        if (parseInt($("#cboRolList option:selected").val()) === 0) {
            $("#divElementos").remove();
        }
    }

    function redirect() {
        $("#lnkVerUsuarios").click(function () {
            $.post(base_url + "users/destroySelectedRols", '', function (data) {
                //console.log(base_url + "admin/users/index");
//                if (data.res === "si") {
//                   console.log("borro");
//                } else {
//                   console.log("no borro");
//                }
                window.location = base_url + "admin/users/index";

            }, 'json');
        });
    }

    function argegarTemaForo() {
        $("#btnAgregarTema").click(function () {

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


    //selectUserForSearch("#btnMostrarTabla");
    cboCiudadesChanged();
    changeTextBoxes("#cboRol", "#formUserTipo");
    changeTextBoxes("#cboRolList", "#formUserList");
    //getElements();
    ajaxUserAdd();
    buttonSearch("#btnBusAdm", "formBusAdmin");
    redirect();
    destruirDivElementos();
    argegarTemaForo();
    removerTemaForo();


});