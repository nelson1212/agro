<div class="panel panel-default" id="divPanel"> <!-- PANEL -->
    <div class="panel-heading">
        <h3 class="panel-title"><b>Selecciona el tipo de usuario a registrar (Los campos marcados con * son obligatorios) </b></h3>
    </div>
    <div class="panel-body">
        <div class="row">


            <!-- DATOS DE PERFIL -->

            <!-- TIPO DE USUARIO -->
            <div class="col-lg-4">
                <div class="form-group">
                    <?php echo $this->Form->create('User', array('id' => "formUserTipo")); ?>
                    
                    <?php echo $this->Form->input('rol_id', array("div" => false, "id" => "cboRol", 'tag' => 'rol_id', "label" => "Tipo de usuario*", "type" => "select", "class" => "form-control")); ?>
                    </form>
                </div>

            </div>  



        </div>
    </div>
</div> 

<?php
if (!empty($elemento)) {
    echo $this->element($elemento, array('flag' => 'value'));
}
?>
             





