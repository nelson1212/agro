<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>USUARIOS REGISTRADOS </b></h3>
    </div>
    <div class="panel-body">
        <div class="container-fluid">
            <!-- TIPO DE USUARIO -->

            <div class="row" style="width:35%;">     
                <label>Seleccione un tipo de usuario</label>
                <div class="input-group">
                    <?php echo $this->Form->input('rol_id', array('options' => $rols, "div" => false, "id" => "cboRolesBusqueda", 'tag' => 'rol_id', "label" => "", "type" => "select", "class" => "form-control")); ?>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" id="btnMostrarTabla" type="button">Mostrar</button>
                    </span>
                </div>
            </div>
            <div class="row" id="divBusqueda">

            </div>
        </div>
        <br>
    </div>
</div>
&nbsp;
