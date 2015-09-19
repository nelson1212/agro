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





//    $('#cboCertificaciones').SumoSelect({ 
//    okCancelInMulti: true ,
//    triggerChangeCombined: true,
//    forceCustomRendering: true
//});

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


    function ocultarDatosAgricolas() {
        $("#tipoAgr").hide();
        $("#tipoAgr").attr('disabled', 'disabled');
    }

    function mostrarDatosAgricolas() {
        $("#tipoAgr").removeAttr("disabled");
        $("#tipoAgr").show();

    }

    function ocultarDivUsuarios() {
        $("#divUsuarios").hide();

    }

    function mostrarDivUsuarios() {
        $("#divUsuarios").show();

    }

    //Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    function changeTextBoxes() {
        $("#cboRol").change(function (e) {

            // var idRol = $("#cboRol").val();
            var textRol = $("#cboRol option:selected").text();

            $("#flashMessage").remove();
            $(".error-message").remove();
            mostrarDivUsuarios();
            if (textRol === "Comprador" || textRol === "Administrador" || textRol === "Sub-Administrador") {
                ocultarDatosAgricolas();

                //  console.log(textRol);
            } else {
                mostrarDatosAgricolas();
            }


            if (textRol === "Comprador") {
                $("#divUbicacion").show();
                $("#divUbicacion").attr('disabled', 'disabled');
            } else {
                $("#divUbicacion").hide();
                $("#divUbicacion").removeAttr("disabled");
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

    $('#reportrange').daterangepicker({
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/1990',
        maxDate: '12/31/2022',
        dateLimit: {days: 60},
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom Range',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    },
    function (start, end) {
        console.log("Callback has been called!");
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );
    //Set the initial state of the picker label
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    //Lamados de las funciones

    changeTextBoxes();
    ocultarDivUsuarios();
    ocultarDatosAgricolas();
    ajaxUserAdd();
    cboCiudadesChanged();
});