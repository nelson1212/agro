$(document).ready(function () {
    //var base_url = 'http://electoral.tecnodes.net/';
    var base_url = 'http://localhost/electoral/';

    function ocultarDivs() {
        $("#divOtros").hide();
        $("#divEmpresas").hide();
    }

    //Función para cambiar cajas de texto de acuerdo al rol seleccionado en registrar usuarios
    function changeTextBoxes() {
        $("#cboRol").change(function (e) {
            var idRol = $("#cboRol").val();
            var textRol = $("#cboRol option:selected").text();

            if (textRol === "Empresa") {
                $("#divOtros").hide();
                $("#divEmpresas").show();
            } else {
                $("#divEmpresas").hide();
                $("#divOtros").show();
            }
        });
    }
    
    //Función para guardar usuarios
    function ajaxAddUsuario(){
        $("#btnGuaUsu").click(function(){
             $.ajax({
                type: "POST",
                url: base_url + "liders/ajaxGetUbicaciones",
                data: $("#formUser").serialize(),
                dataType: "json",
                cache: false,
                success: function (data) {

                }
            });
            return false;
 
        });
    }

    //Lamados de las funciones
    changeTextBoxes();
    ocultarDivs();
    ajaxAddUsuario();
});